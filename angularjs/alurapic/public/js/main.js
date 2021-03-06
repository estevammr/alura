angular.module('alurapic', ['minhasDiretivas', 'ngAnimate', 'ngRoute', 'ngResource', 'meusServicos'])
  .config(function($routeProvider, $locationProvider) {
  
    // habilitando
    $locationProvider.html5Mode(true);

    $routeProvider.when('/fotos', {
      templateUrl: 'partials/principal.html',
      controller: 'FotosController'
    });

    $routeProvider.when('/fotos/new', {
      templateUrl: 'partials/foto.html',
      controller: 'FotoController'
    });

    $routeProvider.when('/fotos/edit/:fotoId', {
      templateUrl: 'partials/foto.html',
      controller: 'FotoController'
    });

    $routeProvider.otherwise({redirectTo: '/fotos'});

  });