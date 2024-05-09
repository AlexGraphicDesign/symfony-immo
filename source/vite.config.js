import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import { resolve } from "path";

/* if you're using React */
// import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        /* react(), // if you're using React */
        symfonyPlugin({
            viteDevServerHostname: 'symfony-immo.dev.localhost',
            // originOverride: 'http://symfony-immo.dev.localhost'
        }),
    ],
    server: {
        host: true,
        port: 8080,
    },
    base: "/app/assets/",
    emitManifest: true,
    build: {
        rollupOptions: {
            output: {
                manualChunks: undefined
            },
            input: {
                app: resolve(__dirname, "/app.js"),
            },
        },
        manifest: true,
        outDir: '../app/public/assets/',
    },
});
