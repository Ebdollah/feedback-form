/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  purge: [
    './index.php',  // Add other PHP files if needed
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}