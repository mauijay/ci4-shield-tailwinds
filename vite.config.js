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
          'css/app': './src/assets/input.css',
          'css/admin': './themes/admin/css/admin.css',
          'css/default': './themes/default/css/app.css',
          // JavaScript
          'js/main': './src/assets/main.js',
          'js/admin': './themes/admin/js/admin.js',
        },
      },
      outDir: './public/assets',
      assetsDir: '.',
      copyPublicDir: false,
    },
  };
});
