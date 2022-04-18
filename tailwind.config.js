const tailwindcss = require("tailwindcss");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                poppings: ["Poppings", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                azul: "#5F90BA",
                azul600: "#879BAB",
                amarillo: "#F1C552",
                amarilloMedio: "#F7E1AB",
                noNegro: "#4A5251",
                rojo: "#F66957",
            },
            spacing: {
                1: "8px",
                2: "12px",
                3: "16px",
                4: "24px",
                5: "32px",
                6: "48px",
            },
            fontSize: {
                xs: "16px",
                sm: "18px",
                base: "20px",
                lg: "24px",
                xl: "30px",
                xxl: "36px",
            },
            margin: {
                "10px": "10px",
                "20px": "20px",
                "30px": "30px",
                "40px": "40px",
                "60px": "60px",
                "80px": "80px",
            },
            padding: {
                "10px": "10px",
                "20px": "20px",
                "30px": "30px",
                "40px": "40px",
                "60px": "60px",
                "100px": "100px",
            },
            width: {
                82: "25.2rem",
                160:  "36.2rem"
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('tw-elements/dist/plugin'),
    ],
};
