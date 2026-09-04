import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css','resources/css/admin.css','resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // または 'localhost'
        port: 5173,
        hmr: {
            host: 'localhost',
        },
    },
});