import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/css/Tiopan/navbar.css",
                // otros archivos CSS/JS si los necesitas
            ],
            refresh: true,
        }),
    ],
});
