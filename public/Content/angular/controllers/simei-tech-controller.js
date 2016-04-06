(function() {
  'use strict';

  /***********Private Methods and Vars*******************/
  var baseUrl = "http://localhost:8000/" //Probably change

  var onTasksComplete = function( response, $scope) {

    //$scope.tasks = response.data;
    console.log(response);
  };

  var techApp = angular.module('simei-tech', []);



  techApp.controller('TasksController',  function($scope, $http) {

        $scope.greeting = 'Hola!';


        //Get Users task
        $scope.getUserTasks = function(status){
            onTasksComplete($scope);

            $http.get( baseUrl + "taskorder/" + status)
            .then(onTasksComplete);
        }




  });
}());
