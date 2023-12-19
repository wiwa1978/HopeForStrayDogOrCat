import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {

        extend: {
            fontFamily: {
                //sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['Georgia', 'sans-serif'],
                //sans: ['Satisfy', 'cursive']
            },
            gridTemplateRows: {
                '[auto,auto,1fr]': 'auto auto 1fr',
            },

        },
    },

    plugins: [
        forms,
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin')
    ]

};
//test
