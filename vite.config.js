import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/style.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Livewire/**", "app/Filament/**"],
        }),
    ],
});
