/** @type {import('postcss').Config} */
module.exports = {
  content: [
    './src/**/*.{js,jsx,ts,tsx}'
  ],
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};