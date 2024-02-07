const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/sass/app.scss', 'public/css', [
       //
   ]);
