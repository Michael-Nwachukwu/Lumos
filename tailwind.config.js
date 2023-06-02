/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        'xs': '375px',
      },
      colors: {
        primary: {
          50: '#fae6e6',
          100: '#fdc5b9',
          200: '#fb9e8d',
          300: '#f97760',
          400: '#f8563f',
          500: '#f63121',
          600: '#ec2a1e',
          700: '#de2319',
          800: '#d01a14',
          900: '#b6050b',
        },
        secondary: {
          50: '#dcf8fe',
          100: '#a6edfb',
          200: '#60e2f9',
          300: '#00d5f4',
          400: '#00cbee',
          500: '#00c1e9',
          600: '#00b1d5',
          700: '#009cb9',
          800: '#0088a0',
          900: '#006571',
        },
      },
    }
  },
  plugins: [],
}

