import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    fontFamily: {
            'serif': ['Playfair Display', 'serif'],
            'sans': ['Inter', 'sans-serif']
        }
});
