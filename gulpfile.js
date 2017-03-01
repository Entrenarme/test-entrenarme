var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.less('app.less');

    mix.scripts([
        './node_modules/angular-ui-router/release/angular-ui-router.min.js',
        './resources/assets/js/controllers.js',
        './resources/assets/js/filters.js',
        './resources/assets/js/app.js',
    ],'public/js/main.js');

    mix.version([
        'public/js/main.js',
        'public/css/app.css',
    ]);
});
