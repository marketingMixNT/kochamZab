import "./bootstrap";
import "flowbite";

// const footerYearSpan = document.querySelector('#footerYear')
// const currentYear = new Date().getFullYear()

// footerYearSpan.innerHTML = currentYear

// import GLightbox from "glightbox";
// import "glightbox/dist/css/glightbox.min.css";
// const lightbox = GLightbox({ loop: true });

const hamburgerBtn = document.querySelector("#hamburger");
const menu = document.querySelector("#menu");

const menuHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("translate-x-[100%]");
};
hamburgerBtn.addEventListener("click", menuHandler);








document.addEventListener('DOMContentLoaded', function() {
    var themeToggleBtns = document.querySelectorAll('.theme-toggle');

    themeToggleBtns.forEach(function(themeToggleBtn) {
        var themeToggleDarkIcon = themeToggleBtn.querySelector('.theme-toggle-dark-icon');
        var themeToggleLightIcon = themeToggleBtn.querySelector('.theme-toggle-light-icon');

        // Check local storage for the theme
        if (localStorage.getItem('color-theme') === 'dark' || 
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            // Set to dark theme
            themeToggleLightIcon.classList.remove('hidden');
            document.documentElement.classList.add('dark');
        } else {
            // Set to light theme
            themeToggleDarkIcon.classList.remove('hidden');
            document.documentElement.classList.remove('dark');
        }

        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // If set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            // If NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    });
});
