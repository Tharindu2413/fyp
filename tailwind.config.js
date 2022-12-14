const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        // "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        // "./storage/framework/views/*.php",
        // "./resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./config/*.php",
    ],

    theme: {
        extend: {
            // fontFamily: {
            //     sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    variants: {
        extend: {
            // opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("daisyui"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/line-clamp"),
    ],
};
