/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/views/**/*.{php,html}',
    './public/js/**/*.js',
    './public/js/*.js',
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gedungft1': "url('/I-LABS/public/img/gedungft1.jpg')", // Referencing the image in the public folder
      }
    },
  },
  safelist: [
    'bg-pink-500',
  ],
  plugins: [],
}
