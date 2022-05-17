let colors = require("tailwindcss/colors");

module.exports = {
  content: ["./*.html", "./*.php", "./**/*.html", "./**/*.php", "./App/assets/js/*.js"],
  theme: {
    colors: {
      primary: "#793FEF",
      textClr: "#263238",
      subTextClr: "#607D8B",
      specTextClr: "rgba(6, 17, 60, 0.8)",
      lightGrey: "#EEF1F5",
      subTextClrLight: "#DDDDDD",
      white: colors.white,
      gray: colors.gray
    },
    extend: {},
  },
  plugins: [],
};
