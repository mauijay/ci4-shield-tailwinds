import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';
import path from 'path';

// https://vitejs.dev/config/
export default defineConfig(() => {
  return {
    plugins: [tailwindcss()],
    root: './',
    publicDir: './src/static', // Point to your static assets directory
    build: {
      emptyOutDir: true,
      manifest: true,
      rollupOptions: {
        input: {
          // Tailwind CSS
          'css/app': './src/assets/css/app.css',
          'css/admin': './src/assets/css/admin.css',
          // JavaScript
          'js/app': './src/assets/js/app.js',
          'js/admin': './src/assets/js/admin.js',
        },
      },
      outDir: './public/assets',
      assetsDir: '.',
      copyPublicDir: true, // Changed to true to copy static files
    },
    server: {
      port: 5173,
      strictPort: true,
      host: 'localhost',
    },
  };
});
