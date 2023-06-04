const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/css/*.css",
    "./resources/js/*.js",
    "./safelist.txt",
  ],
  theme: {
    container: {
      center: true,

      padding: {
        DEFAULT: "1rem",
      },
    },
    colors: {
      cerulean: {
        DEFAULT: "#0B8DD8",
        50: "#F8FCFF",
        100: "#DBF1FD",
        200: "#A0D9FA",
        300: "#66C2F7",
        400: "#2CABF4",
        500: "#0B8DD8",
        600: "#0974B1",
        700: "#075A8A",
        800: "#054164",
        900: "#03283D",
      },
      pumpkin: {
        DEFAULT: "#FF8116",
        50: "#FFFDFC",
        100: "#FFEFE2",
        200: "#FFD4AF",
        300: "#FFB87C",
        400: "#FF9D49",
        500: "#FF8116",
        600: "#E26800",
        700: "#AF5000",
        800: "#7C3900",
        900: "#492200",
      },
      "cod-gray": {
        DEFAULT: "#181818",
        50: "#515151",
        100: "#4B4B4B",
        200: "#3E3E3E",
        300: "#323232",
        400: "#252525",
        500: "#181818",
        600: "#131313",
        700: "#0E0E0E",
        800: "#090909",
        900: "#040404",
      },
      white: "#FFFFFF",
      transparent: "transparent",
    },
    extend: {
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme("settings.typography.fontSizes", theme)
      ),
      fontFamily: {
        blinker: ["Blinker", ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        btn: "4px 4px 0",
      },
      grayscale: {
        50: "50%",
      },
    },
    screens: {
      xs: "480px",
      sm: "600px",
      md: "782px",
      lg: tailpress.theme("settings.layout.contentSize", theme),
      xl: tailpress.theme("settings.layout.wideSize", theme),
      "2xl": "1440px",
    },
  },
  plugins: [
    tailpress.tailwind,
    require("tailwind-scrollbar"),
  ],
};
