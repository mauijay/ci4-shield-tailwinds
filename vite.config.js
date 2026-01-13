import { defineConfig } from 'vite';

// https://vitejs.dev/config/
export default defineConfig(() => {
  return {
    // No Tailwind plugin needed - PostCSS handles it
    plugins: [],

    css: {
      postcss: './postcss.config.js', // PostCSS handles Tailwind v4
    },

    root: './',
    publicDir: './src/static',

    build: {
      emptyOutDir: true,
      manifest: 'manifest.json',
      rollupOptions: {
        input: {
          // CSS files
          'css/app': './src/assets/css/app.css',
          'css/admin': './src/assets/css/admin.css',
          // JavaScript files
          'js/app': './src/assets/js/app.js',
          'js/admin': './src/assets/js/admin.js',
        },
      },
      outDir: './public/assets',
      assetsDir: '.',
      copyPublicDir: true,
    },

    server: {
      port: 5173,
      strictPort: true,
      host: 'localhost',
    },
  };
});
