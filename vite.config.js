import { defineConfig } from "vite";
import { VitePWA } from "vite-plugin-pwa";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default defineConfig(() => {
  return {
    plugins: [
      vue(),
      VitePWA({
        manifest: true,
        outDir: "./public",
      }),
    ],
    build: {
      // generate manifest.json in outDir
      manifest: true,
      rollupOptions: {
        // overwrite default .html entry
        input: [
          "./themes/default/css/app.scss",
          "./themes/default/js/app.js",
          "./themes/admin/css/admin.scss",
          "./themes/admin/js/admin.js",
        ],
      },
      outDir: "./public/assets",
      assetsDir: ".",
      copyPublicDir: false,
    },
  };
});
