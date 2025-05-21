import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/Tiopan/navbar.css",
                "resources/css/Tiopan/listado_index.css",
                "resources/css/Tiopan/usuarios.css",
                "resources/css/Tiopan/nosotros.css",
                "resources/css/Tiopan/editar_usuario.css",
                "resources/css/Tiopan/index_productos.css",

                // otros archivos CSS/JS si los necesitas
            ],
            refresh: true,
        }),
    ],
});
