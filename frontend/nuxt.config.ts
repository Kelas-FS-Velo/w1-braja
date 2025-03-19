// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',
  devtools: { enabled: true },
  plugins: [
    '~/plugins/fontawesome.js'
  ],
  modules: [
    '@nuxt/ui',
  ],
  css: [
    '@fortawesome/fontawesome-svg-core/styles.css'
  ]
})
