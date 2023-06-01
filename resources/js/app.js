// core version + navigation, pagination modules:
import Swiper, { Pagination, Autoplay } from "swiper";

// Navigation toggle
window.addEventListener("DOMContentLoaded", function () {
  const projectSlider = new Swiper(".projects", {
    modules: [Pagination],

    pagination: {
      el: ".custom-swiper-pagination",
      clickable: true,
    },
    slidesPerView: 1,
    spaceBetween: 16,
    breakpoints: {
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

  /**
   * Initializes a Swiper instance for the logo slider.
   * @type {Swiper}
   */
  const logo_slider = new Swiper(".references", {
    modules: [Pagination, Autoplay],
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      960: {
        slidesPerView: 4,
      },
      782: {
        slidesPerView: 3,
        spaceBetween: 36,
      },
      600: {
        slidesPerView: 2,
        spaceBetween: 18,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 18,
      },
    },
  });
});
