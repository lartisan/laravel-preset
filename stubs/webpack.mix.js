const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/main.css",
    "public/css",
    [require("tailwindcss")]
);
