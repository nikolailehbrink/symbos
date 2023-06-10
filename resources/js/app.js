// core version + navigation, pagination modules:
import Swiper, { Pagination, Autoplay } from "swiper";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// Navigation toggle
window.addEventListener("DOMContentLoaded", function () {
  gsap.defaults({
    duration: 1,
  });

  // create
  let mm = gsap.matchMedia();

  // add a media query. When it matches, the associated function will run
  mm.add("(min-width: 960px)", () => {
    // this setup code only runs when viewport is at least 800px wide
    function animateFrom(elem, direction) {
      direction = direction || 1;
      var x = direction * (Math.random() * 2 - 1) * 200;
      gsap.from(elem, {
        x: x,
        autoAlpha: 0,
        ease: "expo",
        overwrite: "auto",
        immediateRender: true,
        scrollTrigger: {
          trigger: elem,
          start: "top 80%",
          end: "top 20%",
          scrub: 3,
          //   markers: true,
          toggleActions: "play none none reverse",
        },
      });
    }
    document.querySelectorAll("section[id]").forEach(function (elem) {
      animateFrom(elem);
    });
  });

  gsap.from("#gradient-blur", {
    rotate: 270,
    scrollTrigger: {
      start: "top top",
      scrub: 2,
      trigger: "section",
      //   markers: true,
    },
  });

  gsap.from("#header img", {
    scale: 1.1,
    scrollTrigger: {
      start: "top top",
      end: "+=50%",
      scrub: true,
      trigger: "#header",
      //   markers: true,
    },
  });
  gsap.from(".service-box", {
    autoAlpha: 0,
    stagger: 0.5,
    y: 100,
    scrollTrigger: {
      start: "top bottom",
      end: "bottom 75%",
      scrub: 2,
      trigger: "#services .container .grid",
      //   markers: true,
      toggleActions: "restart none none none",
    },
  });
  gsap.from("#projects .swiper-slide", {
    autoAlpha: 0,
    stagger: 0.5,
    x: 100,
    scrollTrigger: {
      end: "center 65%",
      trigger: "#projects .swiper-wrapper",
      scrub: 2,
      //   markers: true,
      toggleActions: "restart none restart none",
    },
  });
  gsap.from(".grid-of-expertise svg", {
    fill: "#FFFFFF",
    fillOpacity: 0.3,
    backgroundImage: "none",
    stagger: 0.5,
    duration: 0.5,
    scrollTrigger: {
      scrub: true,
      trigger: "#grids-of-expertise",
      end: "bottom 15%",
      start: "top 85%",
      //   markers: true,
      toggleActions: "restart none restart none",
    },
  });

  const getTopValue = (selector) => {
    return window.getComputedStyle(selector).getPropertyValue("top");
  };
  document.querySelectorAll("#work-places li").forEach((listElement) => {
    const logo = listElement.querySelector(".sticky");
    console.log(listElement);
    gsap.to(logo, {
      outline: "2px solid white",
      duration: 0.1,
      backgroundColor: "#FF8116",
      scrollTrigger: {
        start: "top " + getTopValue(logo),
        end: "bottom " + getTopValue(logo),
        trigger: listElement,
        // markers: true,
        toggleActions: "play reverse restart reverse",
      },
    });
  });

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
      960: {
        slidesPerView: 3,
        spaceBetween: 32,
      },
      // when window width is >= 640px
      1280: {
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
