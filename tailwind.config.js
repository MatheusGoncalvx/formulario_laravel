import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbitePlugin from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js', // Adicione isto para incluir Flowbite
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                amber: {
                    950: '#4b2e00', // Adicione a cor personalizada aqui, se necessário
                },
                brown: {
                    300: '#d2b48c', // Marrom claro
                    500: '#8b4513', // Marrom médio
                },
            },
        },
    },

    plugins: [forms, flowbitePlugin], // Inclua o plugin do Flowbite aqui
};
