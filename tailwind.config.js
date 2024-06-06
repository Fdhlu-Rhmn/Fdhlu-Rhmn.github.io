/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto-serif': ['"Roboto Serif"', 'serif'],  
      },
      colors: {
        'custom-green': {
          DEFAULT: '#34A853', // Default shade
          'light': '#E3F2E1', // Lighter shade
          'dark': '#5FAA6F', // Darker shade
        },
      },
    },
  },
  plugins: [],
}

