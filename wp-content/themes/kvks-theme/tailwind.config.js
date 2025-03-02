/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php"],
  theme: {
    extend: {},
  },
  content: [
      "./node_modules/flowbite/**/*.js"
  ],
  plugins: [
      require('flowbite/plugin')
  ]
}

