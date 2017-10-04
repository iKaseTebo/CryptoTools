var myApp = angular.module('myApp', ['ngRoute', 'ngCookies']);

myApp.config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('<<');
    $interpolateProvider.endSymbol('>>');
}]);

myApp.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider.when('/', {
        templateUrl: 'templates/crypto/home.html',
        controller: 'indexController'
    })
}]);

//# sourceMappingURL=app.js.map
