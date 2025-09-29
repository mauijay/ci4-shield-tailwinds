import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';
import { VitePWA } from 'vite-plugin-pwa';

// https://vitejs.dev/config/
export default defineConfig(() => {
  return {
    plugins: [
      tailwindcss(),
      VitePWA({
        registerType: 'autoUpdate',
        workbox: {
          globPatterns: ['**/*.{js,css,html,ico,png,svg}'],
        },
        manifest: {
          name: 'CI4 Shield Tailwind',
          short_name: 'CI4App',
          description: 'CodeIgniter4 starter with Shield Auth & Tailwind',
          theme_color: '#5e81ac',
          icons: [
            {
              src: 'pwa-192x192.png',
              sizes: '192x192',
              type: 'image/png',
            },
            {
              src: 'pwa-512x512.png',
              sizes: '512x512',
              type: 'image/png',
            },
          ],
        },
        outDir: './public',
      }),
    ],
    build: {
      manifest: true,
      rollupOptions: {
        input: {
          // Tailwind CSS
          'css/app': './src/assets/css/app.css',
          'css/admin': './src/assets/css/admin.css',
          // JavaScript
          'js/app': './src/assets/js/app.js',
          'js/admin': './src/assets/js/admin.js',
          'js/sw': './src/assets/js/sw.js',
          'js/maps': './src/assets/js/maps.js',
        },
      },
      outDir: './public/assets',
      assetsDir: '.',
      copyPublicDir: false,
    },
  };
});
