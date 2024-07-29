import './bootstrap';

const footerYearSpan = document.querySelector('#footerYear')
const currentYear = new Date().getFullYear()

footerYearSpan.innerHTML = currentYear


import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";
const lightbox = GLightbox({ loop: true });
