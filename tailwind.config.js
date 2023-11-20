/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        primary:'#ADEBEB',
        secondary:'#1E7B7B',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}

