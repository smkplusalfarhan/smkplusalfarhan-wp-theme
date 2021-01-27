const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix.postCss('resources/css/theme.css', 'style.css')
   .options({
        processCssUrls: true,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    }).purgeCss({
        enabled: false,
        extend: {
           content: [path.join(__dirname, '*.php')],
           whitelistPatterns: [/hljs/],
       },
   });