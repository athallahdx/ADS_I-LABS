/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.html",
    "./app/views/**/*.php"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gedungft-1': "url(public/img/gedungft1.jpg)",
      }
    },
  },
  plugins: [],
}