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
//Plugins

//Font Awesome
mix.copy('node_modules/font-awesome/css/', 'public/plugins/font-awesome/css/')
    .copy('node_modules/font-awesome/fonts/', 'public/plugins/font-awesome/fonts/');

//Bootstrap
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/plugins/bootstrap/css/bootstrap.min.css')
    .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/plugins/bootstrap/js/bootstrap.bundle.min.js')
    .copy('node_modules/popper.js/dist/popper.min.js', 'public/plugins/bootstrap/js/popper.min.js');

//ChartJS
mix.copy('node_modules/chart.js/dist/Chart.bundle.js', 'public/plugins/chart.js/js/Chart.bundle.min.js');

//jQuery
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/plugins/jquery/js/jquery.min.js');

//DataTables
mix.copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/plugins/datatables/js/jquery.dataTables.js')
    .copy('node_modules/datatables.net/css/jquery.dataTables.css', 'public/plugins/datatables/js/jquery.dataTables.css')
    .copy('node_modules/datatables.net/images/', 'public/plugins/datatables/images/');

