var angularRoutes = angular.module('angularRoutes', [
'ngRoute', 'angularRoutesControllers'
]);

angularRoutes.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'partials/hello-world.html',
        controller: 'HelloCtrl'
      }).
      when('/:again', {
        templateUrl: 'partials/hello-world-2.html',
        controller: 'HelloAgainCtrl'
      }).
      when('/404', {
        templateUrl: 'partials/404.html'
      }).
      otherwise({
        redirectTo: '/404'
      });
  }]);