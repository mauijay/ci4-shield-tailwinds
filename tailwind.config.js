/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./themes/**/*.{html,php,js,ts,jsx,tsx}",
    "./app/Views/**/*.{html,php,js,ts,jsx,tsx}",
    "./app/Views/**/**/*.{html,php,js,ts,jsx,tsx}",
    "./modules/**/Views/**/*.php",
  ],
  safelist: [
    "alert-success",
    "alert-error",
    "alert-info",
    "progress-success",
    "progress-error",
    "progress-info",
    "badge-success",
    "badge-error",
  ],
  theme: {
    fontSize: {
      xs: ["12px", "16px"],
      sm: ["14px", "20px"],
      base: ["16px", "19.5px"],
      lg: ["18px", "21.94px"],
      xl: ["20px", "24.38px"],
      "2xl": ["24px", "29.26px"],
      "3xl": ["28px", "50px"],
      "4xl": ["48px", "58px"],
      "8xl": ["96px", "106px"],
    },
    extend: {
      "font-family": { Poppins: "sans-serif" },
      colors: {
        primary: "#ECEEFF",
        "coral-red": "#FF6452",
        "slate-gray": "#6D6D6D",
        "pale-blue": "#F5F6FF",
        "white-400": "rgba(255, 255, 255, 0.80)",
      },
      boxShadow: {
        "3xl": "0 10px 40px rgba(0, 0, 0, 0.1)",
      },
      backgroundImage: {
        hero: "url('assets/images/collection-background.svg')",
        card: "url('assets/images/thumbnail-background.svg')",
      },
      screens: {
        wide: "1440px",
      },
    },
  },
  daisyui: {
    themes: [
      {
        light: {
          ...require("daisyui/src/theming/themes")["light"],
          primary: "#DD4815",
          "primary-content": "#fff",
          "base-content": "#000000de",
          "base-100": "rgb(249, 250, 251)",
        },
        dark: {
          ...require("daisyui/src/theming/themes")["dark"],
          primary: "#CD4417",
          "primary-content": "#fff",
          "base-content": "rgb(175, 176, 183)",
          "base-100": "#242424",
        },
      },
    ],
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
