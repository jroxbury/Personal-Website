// MODULE
var myApp = angular.module('myApp', []);//name of app & dependecies if any.

// CONTROLLERS
myApp.controller('portfolioController', ['$scope', function ($scope) {

	$scope.name = 'Joe';
}]);
