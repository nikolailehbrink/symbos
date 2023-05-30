// core version + navigation, pagination modules:
import Swiper, { Pagination } from "swiper";

// Navigation toggle
window.addEventListener("DOMContentLoaded", function () {
  const projectSlider = new Swiper(".projects", {
    modules: [Pagination],
    loop: true,

    pagination: {
      el: ".custom-swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      slidesPerView: 1,
      spaceBetween: 16,
      600: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      // when window width is >= 480px
      780: {
        slidesPerView: 3,
        spaceBetween: 32,
      },
      // when window width is >= 640px
      960: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
    },
  });
  const logoSlider = new Swiper(".references", {
    modules: [Navigation, Pagination],

    pagination: {
      el: ".swiper-pagination",
    },
  });
  // let main_navigation = document.querySelector("#primary-menu");
  // document
  //   .querySelector("#primary-menu-toggle")
  //   .addEventListener("click", function (e) {
  //     e.preventDefault();
  //     main_navigation.classList.toggle("hidden");
  //   });
});
