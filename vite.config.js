import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/Admin/main.css",
                "resources/css/Driver/main.css",
                "resources/css/User/main.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
