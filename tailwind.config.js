/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#83A2FF",
        grey: "#1c1917",
        about: "#F0FCFA",
      },
      fontFamily: {
        raleway: ["Raleway"],
        caveat: ["Caveat"],
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
