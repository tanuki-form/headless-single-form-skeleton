let apiUrl = "/form/";

const get = async key => {
  const res = await fetch(`${apiUrl}?get=${key}`);
  return await res.json();
}

const post = async body => {
  const res = await fetch(apiUrl, {
    method: "POST",
    body
  });

  return await res.json();
}

export const API = {
  setApiUrl: (url) => {
    apiUrl = url;
  },

  validate: async (body) => {
    body.append("action", "validate");
    return await post(body);
  },

  send: async (body) => {
    body.append("action", "send");
    return await post(body);
  },

  getCsrfToken: async () => {
    return (await get("csrf-token")).token;
  },

  getRecaptchaSiteKey: async () => {
    return (await get("recaptcha")).siteKey;
  },

  getTurnstileSiteKey: async () => {
    return (await get("turnstile")).siteKey;
  }
};
