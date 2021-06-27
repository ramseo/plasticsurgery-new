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

var publicAdminPath = "public/admin";
var publicRootPath = "public/";


// mix.js('resources/assets/admin/js/app.js', publicAdminPath+'/js')
//     .sass('resources/assets/admin/sass/app.scss', publicAdminPath+'/css');

mix.copyDirectory("resources/assets/admin/css", publicAdminPath+"/css")
    .copyDirectory("resources/assets/admin/js", publicAdminPath+"/js")
    .copyDirectory("resources/assets/admin/plugins", publicAdminPath+"/plugins")
    .copyDirectory("resources/assets/admin/src", publicAdminPath+"/src")
    .copyDirectory("resources/assets/admin/img", publicAdminPath+"/img")
    .copyDirectory("resources/assets/admin/dist", publicAdminPath+"/dist")
   ;

mix.styles([
    'public/admin/plugins/bootstrap/dist/css/bootstrap.min.css',
	/*'public/dist/css/theme.min.css',*/
	'public/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
], publicAdminPath+'/all.css');

mix.scripts([
	'public/admin/src/js/vendor/modernizr-2.8.3.min.js',
    'public/admin/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js',
	'public/admin/plugins/screenfull/dist/screenfull.js',
], publicAdminPath+'/all.js');



mix.copyDirectory("resources/assets/css", publicRootPath+"css")
    .copyDirectory("resources/assets/images", publicRootPath+"images")
    .copyDirectory("resources/assets/js", publicRootPath+"js");
