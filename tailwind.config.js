const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height: {
                'img': '500px',
                'main': '800px',
                'icon': '350px'
            },
            width: {
                'img': '1000px',
                'bar-code': '350px'
            },
            maxWidth: {
                '1/2': '75%',
            },
            borderRadius: {
                'layout': '40px',
                'full': '9999px',
            },
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '5': '5px',
            '6': '6px',
            '8': '8px',
        },
        fontFamily: {
            logo: ['Orbitron', 'sans-serif'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
