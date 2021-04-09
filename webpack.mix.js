const mix = require('laravel-mix');

//mix.copy('../bet/data/', 'public/assets/data');

mix.sass('resources/sass/fab.scss', 'css/app.css').options({ processCssUrls: false });
mix.scripts([
    'resources/js/components/map/jquery-jvectormap.js',
    'resources/js/components/map/jquery-mousewheel.js',
    'resources/js/components/map/jvectormap.js',
    'resources/js/components/map/abstract-element.js',
    'resources/js/components/map/abstract-canvas-element.js',
    'resources/js/components/map/abstract-shape-element.js',
    'resources/js/components/map/svg-element.js',
    'resources/js/components/map/svg-group-element.js',
    'resources/js/components/map/svg-canvas-element.js',
    'resources/js/components/map/svg-shape-element.js',
    'resources/js/components/map/svg-path-element.js',
    'resources/js/components/map/svg-circle-element.js',
    'resources/js/components/map/svg-image-element.js',
    'resources/js/components/map/svg-text-element.js',
    'resources/js/components/map/map-object.js',
    'resources/js/components/map/region.js',
    'resources/js/components/map/marker.js',
    'resources/js/components/map/vector-canvas.js',
    'resources/js/components/map/simple-scale.js',
    'resources/js/components/map/ordinal-scale.js',
    'resources/js/components/map/numeric-scale.js',
    'resources/js/components/map/color-scale.js',
    'resources/js/components/map/legend.js',
    'resources/js/components/map/data-series.js',
    'resources/js/components/map/proj.js',
    'resources/js/components/map/map.js',
    'resources/js/components/map/jquery-jvectormap-world-mill-en.js'], 'public/js/map.js');

mix.js('resources/js/app.js', 'public/js/app.js')
   .js('vendor/digitalbiblesociety/shin/src/resources/js/components/dataTables.js', 'js').sourceMaps()

mix.browserSync({proxy: 'findbible.test'})
