let mix = require('laravel-mix');

mix.postCss("resources/css/tailwind.css", "public/css", [
    require("tailwindcss"),
]);
