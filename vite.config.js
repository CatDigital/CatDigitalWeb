import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/css/app.css", 
                "resources/css/Tiopan/navbar.css", // nueva línea
                "resources/js/login.js",
                "resources/css/Tiopan/usuarios.css",
                
            ],
            refresh: true,
        }),

        tailwindcss(),
    ],
});
