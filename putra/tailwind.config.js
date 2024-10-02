/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./node_modules/tw-elements/dist/js/**/*.js"],
  plugins: [
    require('tw-elements/dist/plugin')
  ],
  theme: {
    container: {
      padding: '3rem',
      center: true
    },
    extend: {
      colors: {
        'wood': '#A94B00',
        'content': '#815D13'
      },
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}