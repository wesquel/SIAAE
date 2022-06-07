const mix = require('laravel-mix');
const {postCss} = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.postCss('resources/css/login_aluno.css', 'public/css')
    .postCss('resources/css/termos_uso.css', 'public/css')
    .postCss('resources/css/home_aluno.css', 'public/css')
    .postCss('resources/fonts/icons/icomoon/icomoon.css', 'public/css/icons');

mix.copy('resources/assets/images', 'public/images');
