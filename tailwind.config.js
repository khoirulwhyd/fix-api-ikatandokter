/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      'primary': {
        '50': '#edfaff',
        '100': '#d6f2ff',
        '200': '#b5eaff',
        '300': '#83dfff',
        '400': '#48cbff',
        '500': '#1eadff',
        '600': '#068fff',
        '700': '#007bff',
        '800': '#085ec5',
        '900': '#0d519b',
        '950': '#0e315d',
      },
      'gray': {
        '50': '#f5f6f6',
        '100': '#e5e7e8',
        '200': '#cdd1d4',
        '300': '#aab0b6',
        '400': '#808990',
        '500': '#6c757d',
        '600': '#565c64',
        '700': '#4a4f54',
        '800': '#414449',
        '900': '#3a3c3f',
        '950': '#242628',
      },
      'background': {
        '50': '#DEE2E6',
      },
      'gradasi': {
        '50': '#1A8187',
      }

    }
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}