import axios from "axios";
import Alpine from "alpinejs";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Alpine = Alpine;

Alpine.store("quiz", {
  answers: false,

  handleSingleAnswerClick(e) {
    const target = e.currentTarget;
    const question = target.closest(".question");
    console.log(target.getAttribute("data-value"));
    console.log(target.classList.add("selected"));
    console.log(question);
    // target.classList.add("selected");
    // this.on = !this.on;
    // console.log(this.on);
  },

  handleMultipleAnswerClick(e) {
    const target = e.currentTarget;
    console.log(target.getAttribute("data-value"));
  },
});
Alpine.start();

// window.handleClick = function handleClick(e) {
//   console.log(e);
//   console.log(e.target.getAttribute("data-value"));
// };

// window.handleClick = function handleClick(e) {
//   console.log(e.currentTarget);
// };
