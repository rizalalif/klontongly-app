/**  */
const colors = require('tailwindcss/colors')

module.exports = {
  // darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    screen: {
      sm: "576px",
      md: "768px",
      lg: "992px",
      xl: "1200px",
    },
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        roboto: ["Roboto", "sans-serif"],
        'body': [
          'Inter',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'system-ui',
          'Segoe UI',
          'Roboto',
          'Helvetica Neue',
          'Arial',
          'Noto Sans',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji'
        ],
        'sans': [
          'Inter',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'system-ui',
          'Segoe UI',
          'Roboto',
          'Helvetica Neue',
          'Arial',
          'Noto Sans',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji'
        ]
      },
      colors: {
        primary: "#fd3d57",
        success: "#0E9F6E",
        white: "#eaeaea",
        gray: colors.gray,
        blue: colors.sky,
        red: colors.rose,
        pink: colors.fuchsia,
        prima: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a", "950": "#172554" }

      },
    },
  },
  plugins: [
    // require('daisyui'),
    require('flowbite/plugin'),
    require("@tailwindcss/forms"),
    // require('@tailwindcss/pagination'),
  ],
}
// export default {
//   darkMode: true,
//   content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue",
//     "./node_modules/flowbite/**/*.js"
//   ],

//   theme: {
//     screen: {
//       sm: "576px",
//       md: "768px",
//       lg: "992px",
//       xl: "1200px",
//     },
//     container: {
//       center: true,
//       padding: "1rem",
//     },
//     extend: {
//       fontFamily: {
//         poppins: ["Poppins", "sans-serif"],
//         roboto: ["Roboto", "sans-serif"],
//         'body': [
//           'Inter',
//           'ui-sans-serif',
//           'system-ui',
//           '-apple-system',
//           'system-ui',
//           'Segoe UI',
//           'Roboto',
//           'Helvetica Neue',
//           'Arial',
//           'Noto Sans',
//           'sans-serif',
//           'Apple Color Emoji',
//           'Segoe UI Emoji',
//           'Segoe UI Symbol',
//           'Noto Color Emoji'
//         ],
//         'sans': [
//           'Inter',
//           'ui-sans-serif',
//           'system-ui',
//           '-apple-system',
//           'system-ui',
//           'Segoe UI',
//           'Roboto',
//           'Helvetica Neue',
//           'Arial',
//           'Noto Sans',
//           'sans-serif',
//           'Apple Color Emoji',
//           'Segoe UI Emoji',
//           'Segoe UI Symbol',
//           'Noto Color Emoji'
//         ]
//       },
//       colors: {
//         primary: "#fd3d57",
//         success: "#0E9F6E",
//         white: "#eaeaea",
//         gray: colors.gray,
//         blue: colors.sky,
//         red: colors.rose,
//         pink: colors.fuchsia,
//         tel: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a", "950": "#172554" }

//       },
//     },
//   },
//   plugins: [
//     // require('daisyui'),
//     require('flowbite/plugin'),
//     require("@tailwindcss/forms"),
//   ],
// };

