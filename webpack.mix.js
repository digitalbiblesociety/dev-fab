const mix = require('laravel-mix');

mix.copy('../bet/data/', 'public/assets/data');

mix.sass('resources/sass/fab.scss', 'css/app.css').options({ processCssUrls: false });

mix.js('../shin/assets/js/global.js', 'js')
   .js('resources/js/components/dataTables.js', 'js').sourceMaps()
