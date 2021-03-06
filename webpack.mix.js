const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.sass("resources/sass/styles.scss", "public/css")
    .options({
        processCssUrls: false,
    })
    .copy("resources/css", "public/css")
    .copy("resources/font", "public/font")
    .copy("resources/img", "public/img")
    .copy("resources/js", "public/js")
    if (mix.inProduction()) {
        mix.version();
    }
