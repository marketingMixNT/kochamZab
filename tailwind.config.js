/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/**/*.blade.php", "./node_modules/flowbite/**/*.js"],
    theme: {
        extend: {
            screens: {
                xxs: "390px",
                xs: "450px",
                max: "2200px",
            },
            fontFamily: {
                heading: ["Raleway", " sans-serif"],
                text: ["Open Sans", "sans-serif"],
            },
            colors: {
                primary: {
                    200: "#0286de",
                    400: "#036eb6",
                    600: "#025c99",
                },
                secondary: {
                    200: "#f77a72",
                    400: "#f56960",
                    600: "#fc5b51",
                },
                fontDark: "#333333",
                fontBlue: "#101f46",
                fontLight: "#ffffff",
                fontOrange:"#f56960",

                bgLight: {

                    200: "#ffffff",
                    400: "#fafafa",
                },
                bgDark: {
                    200: "#222222",
                    300: "#383838",
                    400: "#111111",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin"),require('@tailwindcss/typography'),],
};
