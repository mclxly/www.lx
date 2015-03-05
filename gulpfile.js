var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 | http://laravel.com/docs/5.0/elixir
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less')
      .styles([
        'app.css'
        ], 'public/assets/site/css/app.min.css', 'public/css');

    mix.copy('3rd/flat-ui/dist/css/flat-ui.css', 'resources/vendor/flat-ui.css');
      
    // vendor css/js
    mix.styles([
        "awesomplete.css",
        "flat-ui.css"
    ], 'public/assets/css/vendor.min.css', 'resources/vendor');

    mix.scripts([
        "awesomplete.min.js"
    ], 'public/assets/js/vendor.min.js', 'resources/vendor');

    mix.version(['public/assets/js/vendor.min.js'
      , 'public/assets/css/vendor.min.css'
      , 'public/assets/site/css/app.min.css']);
});
