const tailwindcss = require('tailwindcss');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppings: ['Poppings', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                azul: '#5f90b9',
                amarillo: '#F1C552',
                noNegro: '#4A5251',
                rojo: '#F66957',
            },
            fontSize: {
                'sm': '18px',
                'base': '20px',
                'lg': '24px',
                
            }
        
        },
        plugins: [
            require('@tailwindcss/typography'),
        ]
    },
};

