let mix = require('laravel-mix');

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

//Font Awesome Mix
mix.copy('node_modules/font-awesome/css/', 'public/css/font-awesome/css/')
    .copy('node_modules/font-awesome/fonts/', 'public/css/font-awesome/fonts/');

//Bootstrap Mix
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js')
    .copy('node_modules/popper.js/dist/popper.min.js', 'public/js/popper.min.js');

//ChartJS Mix
mix.copy('node_modules/chart.js/dist/Chart.bundle.js', 'public/js/Chart.bundle.min.js');

//jQuery Mix
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');