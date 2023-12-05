// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  devServer: {
    // host: '127.0.0.1', // default: localhost
    port: 8001
  },
  vite: {
    server: {
      watch: {
        usePolling: true,
        interval: 1000,
      }
    }
  }
})
