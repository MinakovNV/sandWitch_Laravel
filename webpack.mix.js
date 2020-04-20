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

mix.js(['resources/js/app.js',
    'resources/js/aos.js',
    'resources/js/jquery-3.3.1.min.js',
    'resources/js/jquery-ui.js',
    'resources/js/popper.min.js'
], 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    .styles([
    'resources/css/aos.css',
    'resources/css/style.css', 'resources/css/owl.theme.default.min.css',
        'resources/css/owl.carousel.min.css', 'resources/css/mediaelementplayer.css',
        'resources/css/magnific-popup.css',
        'resources/css/jquery-ui.css'
], 'public/css/all.css');
