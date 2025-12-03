import { API } from "./api.js";
import { Demo } from "./demo.js";
import { setupRecaptcha, getRecaptchaToken, setupTurnstile } from "./utils.js";

// setupRecaptcha();
// setupTurnstile();

const form = document.querySelector(".inquiry-form");

const getFormData = function(){
  const formData = new FormData();

  form.querySelectorAll("input, textarea, select").forEach(input => {
    if (!input.name) return;

    if (input.type === "checkbox" || input.type === "radio") {
      if (input.checked) {
        formData.append(input.name, input.value);
      }
    } else {
      formData.append(input.name, input.value);
    }
  });

  return formData;
}

form.querySelector(".validate-button").addEventListener("click", async (e) => {
  e.target.disabled = true;

  Demo.clearResults();
  const res = await API.validate(getFormData());
  Demo.viewResults(res);

  e.target.removeAttribute("disabled");
});

form.querySelector(".send-button").addEventListener("click", async (e) => {
  e.target.disabled = true;

  Demo.clearResults();

  const formData = getFormData();

  // Google reCAPTCHA
  // formData.append("recaptcha-token", await getRecaptchaToken());

  const res = await API.send(formData);
  Demo.viewResults(res);

  e.target.removeAttribute("disabled");
});
