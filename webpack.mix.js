const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.postCss('resources/assets/fonts/icons/icomoon/icomoon.css', 'public/css/icons')
    .postCss('resources/css/main/login.css', 'public/css/main')
    .postCss('resources/css/main/home.css', 'public/css/main')
    .postCss('resources/css/termos_uso.css', 'public/css')
    .postCss('resources/css/aluno/login_aluno.css', 'public/css/aluno')
    .postCss('resources/css/aluno/candidaturas.css', 'public/css/aluno')
    .postCss('resources/css/aluno/vagas_aluno.css', 'public/css/aluno')
    .postCss('resources/css/aluno/configuracoes_aluno.css', 'public/css/aluno')
    .postCss('resources/css/empresa/login_empresa.css', 'public/css/empresa')
    .postCss('resources/css/empresa/lista_vagas.css', 'public/css/empresa');

mix.copy('resources/assets/images', 'public/images');

mix.disableNotifications();

