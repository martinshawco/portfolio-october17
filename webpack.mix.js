const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .js('resources/assets/js/pages/index.js', 'public/js/pages')
   .sass('resources/assets/sass/pages/index.scss', 'public/css/pages')
   .js('resources/assets/js/pages/detail.js', 'public/js/pages')
   .sass('resources/assets/sass/pages/detail.scss', 'public/css/pages');
