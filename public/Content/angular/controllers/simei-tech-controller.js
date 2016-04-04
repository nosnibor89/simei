(function() {
  'use strict';
  var techApp = angular.module('simei-tech', []);

  var getUserTasks = function($scope, $http){

      //Private Method
      var onTasksComplete = function(response) {
        $scope.tasks = response.data;
      };

  $http.get("")
    .then(onTasksComplete);
  };

  techApp.controller('TasksController', ['$scope', '$http', function($scope, $http) {



        $scope.greeting = 'Hola!';
  }]);
}());
