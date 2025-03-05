import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],

  server: {
    host: '0.0.0.0', // Bind the server to your local network IP
    port: 5173,           // Port number for Vite
    strictPort: true,     // Ensure the port does not change if 5173 is taken
    hmr: {
        host: '192.168.0.99', // Ensure HMR host matches the server IP
    }
}
});
