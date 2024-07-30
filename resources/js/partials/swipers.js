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
