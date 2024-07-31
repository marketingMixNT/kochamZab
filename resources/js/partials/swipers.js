import Swiper from "swiper";
import { Autoplay, EffectFade } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".home-slides-swiper", {
    loop: true,
    effect: "fade",
    grabCursor: true,
    loop: true,

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay, EffectFade],
});


new Swiper(".attraction-gallery-swiper", {
    loop: true,
    slidesPerView: 1,
    // centeredSlides: true,
    spaceBetween: 50,
    breakpoints: {
        650: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
        1500: {
            slidesPerView: 4,
        },
    },

    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },
   
   
    modules: [Autoplay, ]
});