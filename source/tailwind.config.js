/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/*.twig',
    './templates/**/*.twig',
  ],
  media: false,
  theme: {
    extend: {},
    container: {
      center: true,
      padding: '1rem',
      screens: {
          'sm': '640px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1280px',
      },
    },
  },
  plugins: [],
}

