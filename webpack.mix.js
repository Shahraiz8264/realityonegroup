const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
.vue()
.postCss('resources/css/app.css', 'public/css')
.sourceMaps();

//mix.js('recources/js/scripts/common.js', 'public/js/scripts/common.js');
mix.copyDirectory('resources/js/custom', 'public/js/custom');
// mix.styles('resources/css/main.css', 'public/css/main.css');