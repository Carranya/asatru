/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['**/*.{html,php}'],
  theme: {
    extend: {},
  },
  plugins: [require('tw-elements/dist/plugin')],
}
