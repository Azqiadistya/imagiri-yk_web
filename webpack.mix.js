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
<<<<<<< HEAD
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
=======
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> 28f2f16b68565b5fce50f3ae2e981e65493b84da