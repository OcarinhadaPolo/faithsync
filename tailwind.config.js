/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-black' : '#000000',
        'custom-gold' : '#DAA520'
      }
    },
  },
  plugins: [],
}