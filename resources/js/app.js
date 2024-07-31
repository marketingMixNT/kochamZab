import "./bootstrap";
import "flowbite";

import "./partials/nav";
import "./partials/darkTheme";
import './partials/swipers'
import './partials/footerYear'









const loader = document.querySelector('#preloader')



window.addEventListener('load', () => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});



