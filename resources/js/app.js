// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from "swiper";

// Navigation toggle
window.addEventListener("load", function () {
  const projectSlider = new Swiper(".projects", {
    modules: [Navigation, Pagination],

    pagination: {
      el: ".swiper-pagination",
    },
  });
  const logoSlider = new Swiper(".references", {
    modules: [Navigation, Pagination],

    pagination: {
      el: ".swiper-pagination",
    },
  });
  let main_navigation = document.querySelector("#primary-menu");
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
});
