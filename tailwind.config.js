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
                amarillo: '#eadaa2',
                noNegro: '#4A5251',
                rojo: '#F66957',
            },
            spacing: {
                '1': '8px',
                '2': '12px',
                '3': '16px',
                '4': '24px',
                '5': '32px',
                '6': '48px',
              },
        },
        plugins: [
            require('@tailwindcss/typography'),
        ]
    },
};
