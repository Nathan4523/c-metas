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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/vendor/fontawesome-free/js')
    .copyDirectory('node_modules/jquery-mask-plugin/dist/jquery.mask.min.js', 'public/vendor/jquery-mask-plugin')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/vendor/jquery/jquery.min.js');
