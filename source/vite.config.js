import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import VueDevTools from 'vite-plugin-vue-devtools'
import { resolve } from "path";
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        symfonyPlugin(),
        VueDevTools(),
        vue()
    ],
    server: {
        clientPort: 3000,
        host: true,
        port: 3000,
        https: false,

        hmr: {
            clientPort: 3000,
            host: 'symfony-immo-front.dev.localhost',
            port: 3000,
        },
    },
    base: "/app/",
    emitManifest: true,
    build: {
        minify: true,
        manifest: true,
        emptyOutDir: true,
        publicDir: "./public",
        rollupOptions: {
            output: {
                manualChunks: undefined,
                sourcemap: true,
            },
            input: {
                front: "./assets/front/app.js",
                back: "./assets/back/main.ts",
            },
        },
    },

    resolve: {
        alias: {
          '@front': resolve(__dirname, "./assets/front"),
          '@back': resolve(__dirname, "./assets/back"),
        },
      },
});
