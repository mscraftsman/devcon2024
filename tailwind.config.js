import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                pixel: ['Pixel Emulator', 'monospace']
            },
            keyframes:{
                'makecloudscoolagain':{
                    '0%, 100%': {transform: 'translateY(10px)'},
                    '50%':{transform:'translateY(0)'}
                },
                'flip-horizontal': {
                    '0%': { transform: 'rotateY(0deg)' },
                    '50%': { transform: 'rotateY(180deg)' },
                    '100%': { transform: 'rotateY(360deg)' },
                  },
                'float-vertical': {
                    '0%, 100%': {transform: 'translateX(10px)'},
                    '50%':{transform:'translateX(0)'}
                },
            },
            animation:{
                'makecloudscoolagain':'makecloudscoolagain 1.5s ease-in-out infinite',
                'flip-horizontal': 'flip-horizontal 1.5s ease-in-out infinite',
                'float-vertical': 'float-vertical 1.5s ease-in-out infinite',
            },
        },
    },
    plugins: [forms],
};
