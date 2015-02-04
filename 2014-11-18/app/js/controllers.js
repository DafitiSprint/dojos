var angularRoutesControllers = angular.module('angularRoutesControllers', []);

// angularRoutesControllers.controller('HelloCtrl', ['$scope', '$http',
//   function ($scope, $http) {
//     $http.get('phones/phones.json').success(function(data) {
//       $scope.phones = data;
//     });

//     $scope.orderProp = 'age';
//   }]);

angularRoutesControllers.controller('HelloAgainCtrl', ['$scope', '$routeParams',
  function($scope, $routeParams) {
    $scope.again = $routeParams.again;
  }]);