try {
  window.Chart = require("chart.js");
  window.Dropzone = require("dropzone");
} catch (e) {
  console.log(e);
}

Dropzone.autoDiscover = false;

window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
