import { API } from "./api.js";

let reCaptchaSiteKey = null;

export const setupRecaptcha = async () => {
  reCaptchaSiteKey = await API.getRecaptchaSiteKey();

  const script = document.createElement("script");
  script.src = `https://www.google.com/recaptcha/enterprise.js?render=${reCaptchaSiteKey}`;
  document.body.append(script);
};

export const getRecaptchaToken = async () => {
  await new Promise(grecaptcha.enterprise.ready);
  return await grecaptcha.enterprise.execute(reCaptchaSiteKey, {action: "contact_form"});
};

export const setupTurnstile = async () => {
  const siteKey = await API.getTurnstileSiteKey();

  const div = document.querySelector(".cf-turnstile");
  div.setAttribute("data-sitekey", siteKey);

  const script = document.createElement("script");
  script.src = "https://challenges.cloudflare.com/turnstile/v0/api.js";
  document.body.append(script);
};
