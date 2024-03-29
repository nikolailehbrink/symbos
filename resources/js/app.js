import Swiper from "swiper";
import { Pagination, Autoplay } from "swiper/modules";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

//Import profile image
const profileImage = document.querySelector("#profile-image");

const getAvatarUrl = async () => {
  const response = await fetch("https://api.github.com/users/nikolailehbrink");
  const data = await response.json();

  profileImage.src = data.avatar_url;
};

getAvatarUrl();

// Navigation toggle
const menuToggle = document.querySelector("#menu-toggle");
const mainMenu = document.querySelector("#main-menu");
const menuLabel = document.querySelector('label[for="menu-toggle"]');

// Definieren Sie die Event-Listener-Funktion
const handleMenuChange = () => {
  mainMenu.classList.toggle("max-lg:translate-x-[calc(100%_+_1rem)]");

  // Füge den Click-Listener hinzu, wenn das Menü geöffnet ist und entferne ihn, wenn es geschlossen ist
  if (menuToggle.checked) {
    document.body.addEventListener("click", handleBodyClick);
  } else {
    document.body.removeEventListener("click", handleBodyClick);
  }
};

// Definieren Sie die Click-Listener-Funktion
const handleBodyClick = (event) => {
  const isClickInsideMenu = mainMenu.contains(event.target);
  const isClickOnLabel = menuLabel.contains(event.target);

  if (!isClickInsideMenu && !isClickOnLabel) {
    menuToggle.checked = false;
    mainMenu.classList.toggle("max-lg:translate-x-[calc(100%_+_1rem)]");

    // Entferne den Click-Listener, wenn wir außerhalb des Menüs klicken
    document.body.removeEventListener("click", handleBodyClick);
  }
};

// Füge den Change-Listener hinzu
menuToggle.addEventListener("change", handleMenuChange);

gsap.defaults({
  duration: 1,
});

const sections = document.querySelectorAll("section");
let headerIllustration = document.querySelector("#header-illustration");
let bubbles = headerIllustration.querySelectorAll(".bubble");

gsap.from(headerIllustration, {
  scale: 0.8,
  autoAlpha: 0,
  duration: 1.5,
});

gsap.from(bubbles, {
  scale: 0.6,
  y: 100,
  rotate: -25,
  scrollTrigger: {
    trigger: headerIllustration,
    scrub: 1,
  },
  stagger: 0.1,
});

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
    toggleActions: "restart none restart none",
  },
});

const getTopValue = (selector) => {
  return window.getComputedStyle(selector).getPropertyValue("top");
};
document.querySelectorAll("#work-places li").forEach((listElement) => {
  const logo = listElement.querySelector(".sticky");
  gsap.to(logo, {
    outline: "2px solid white",
    duration: 0.1,
    backgroundColor: "#FF8116",
    scrollTrigger: {
      start: "top " + getTopValue(logo),
      end: "bottom " + getTopValue(logo),
      trigger: listElement,
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
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
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
