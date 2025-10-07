/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#2faf94', 
        secondary: '#238b6d',  
      },
    },
    fontFamily: {
      'title': ['Arial Rounded MT Bold'],
      'body': ['Arial Rounded MT'],
      'poppins': ['Poppins','sans-serif'],
    }
  },
  plugins: [],
}