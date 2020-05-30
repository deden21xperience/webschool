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
//    .sass('resources/sass/app.scss', 'public/css');


// mix.js('resources/js/app.js', 'public/js')
//   .extract(['vue'])

// mix.js('resources/js/costum.js', 'public/js');
// mix.sass('resources/sass/app.scss', 'public/vendors/materialize-costum')
// mix.js('resources/js/materialize.js', 'public/vendors/materialize-costum')