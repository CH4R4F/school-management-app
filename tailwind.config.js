let colors = require("tailwindcss/colors");

module.exports = {
  content: ["./*.html", "./*.php", "./**/*.html", "./**/*.php"],
  theme: {
    colors: {
      primary: "#793FEF",
      textClr: "#263238",
      subTextClr: "#607D8B",
      specTextClr: "rgba(6, 17, 60, 0.8)",
      lightGrey: "#EEF1F5",
      subTextClrLight: "#DDDDDD",
      white: colors.white,
    },
    extend: {},
  },
  plugins: [],
};
