(function() {
  'use strict';

  /***********Private Methods and Vars*******************/
  var baseUrl = "http://localhost:8000/" ;//Probably change



  var techApp = angular.module('simei-tech', []);



  techApp.controller('TasksController',  ['$scope', '$http', function($scope, $http) {

        var result;
        //Get Users task - On Load
        $http.get( baseUrl + "taskorder/" + status)
        .then(function(response){
            $scope.tasks = response.data;
              console.log(response.data);
        });

        //Get Users task - On Demand
        $scope.getUserTasks = function(status){
              $http.get( baseUrl + "taskorder/" + status)
              .then(function(response){
                  $scope.tasks = response.data;
                    console.log(response.data);
              });
            };







  }]);
}());
