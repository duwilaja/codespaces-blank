import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // If you are using standard blade without separate folders, keep this as default
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        cors: true,
        headers: {
            'Access-Control-Allow-Origin':'*'
        },
        hmr: {
            host: process.env.CODESPACE_NAME ? `${process.env.CODESPACE_NAME}-5173.app.github.dev` : 'localhost',
            protocol: 'wss',
        },
    },
});