import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import { resolve } from "path";

export default defineConfig({
    plugins: [
        symfonyPlugin(),
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
        manifest: true,
        emptyOutDir: true,
        outDir: "./public/build",
        publicDir: "./public/assets",
        rollupOptions: {
            output: {
                manualChunks: undefined,
                sourcemap: true
            },
            input: {
                app: "./assets/app.js",
            },
        },
    },

    resolve: {
        alias: {
          '@app': resolve(__dirname, "/assets"),
        },
      },
});
