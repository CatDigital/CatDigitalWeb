import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/CatDigital/indexCat.css", // ✅ Agregado
                "resources/js/CatDigital/indexCat.js", // ✅ Agregado
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
