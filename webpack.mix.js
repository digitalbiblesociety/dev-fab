const mix = require('laravel-mix');

mix.copy('../bet/data/', 'public/assets/data');

mix.sass('../bet/source/sites/fab/_assets/sass/fab.scss', 'css/app.css')
   .sass('../bet/source/_assets/sass/print.scss', 'css')
   .options({ processCssUrls: false });

mix.js('../bet/source/_assets/js/global.js', 'js')
   .js('../bet/source/sites/fab/_assets/js/fab.js', 'js')
   .js('../bet/source/_assets/js/components/dataTables.js', 'js').sourceMaps()
