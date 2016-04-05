(function() {
  'use strict';

  /***********Private Methods and Vars*******************/
  var baseUrl = "http://localhost:8000/" ;//Probably change



  var techApp = angular.module('simei-tech', []);



  techApp.controller('TasksController',  ['$scope', '$http', function($scope, $http) {

        // var onTasksComplete = function(response) {
        //   $scope.tasks = response.data;
        //   console.log(response.data);
        // };

        $scope.greeting = 'Hola!';

        //Get Users task
        $scope.getUserTasks = function(status){

            $http.get( baseUrl + "taskorder/" + status)
            //then(onTasksComplete);
            .then(function(response){
              $scope.tasks = response.data;
              console.log(response.data);
            });
        };




  }]);
}());
