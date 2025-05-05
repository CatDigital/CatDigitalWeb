import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/css/Tiopan/navbar.css", // nueva línea
            ],
            refresh: true,
        }),

        tailwindcss(),
    ],
});
