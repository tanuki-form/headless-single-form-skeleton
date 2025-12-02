import hljs from 'https://cdn.jsdelivr.net/npm/highlight.js@11.11.1/+esm';

(() => {
  const link = document.createElement("link");
  link.rel = "stylesheet";
  link.href = "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css";
  document.head.append(link);
})();

export const Demo = {
  clearResults: () => {
    document.querySelector(".results pre code").textContent = "";
  },

  viewResults: (data) => {
    const code = document.querySelector(".results pre code");
    code.textContent = JSON.stringify(data, null, 2);
    delete code.dataset.highlighted;
    hljs.highlightElement(code);
  }
};
