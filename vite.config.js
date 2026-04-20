import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/test.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0', // Membuka akses Vite ke jaringan luar
        port: 5173,
        hmr: {
            // Ganti ini dengan IP Address Debian kamu di VirtualBox (misal: 192.168.x.x)
            host: '192.168.1.14', 
        }
    }
});