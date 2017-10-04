var elixir = require('laravel-elixir');
var bowerDir = './bower_components/';

elixir(function (mix) {
    mix.sass('app.scss');

    mix.scripts([
        'app.js'
    ], 'public/js/app.js');

    mix.scripts([
        'controllers/*.js'
    ], 'public/js/controllers.js');

    mix.scripts([
        'angular/angular.js',
        'angular-route/angular-route.js',
        'angular-cookies/angular-cookies.js'
    ], 'public/js/angular.js', bowerDir);

});