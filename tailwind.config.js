/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: ["Merriweather", "serif"],
            },
        },
        ripple: (theme) => ({
            colors: theme("colors"),
        }),
    },
    plugins: [require("tailwindcss-ripple")(), require("tailwind-scrollbar")],
};
