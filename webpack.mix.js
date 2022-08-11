const mix = require('laravel-mix');

mix.sass('resources/css/scss/main.scss', 'public/css');

mix.js('resources/js/app.js', 'public/js').vue();
