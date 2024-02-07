// tailwind.config.js
module.exports = {
  content: [
    "./public/**/*.php",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        'theme-blue': '#23395d',
        'theme-pink': '#ff49db',
      },
      container: {
        center: true,
        padding: '2rem',
      },
      fontSize: {
        'xl': '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.25rem',
        '5xl': '3rem',
        '6xl': '4rem',
      },
    },
  },
  plugins: [],
}
