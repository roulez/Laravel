import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window._ = require("lodash");
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();
