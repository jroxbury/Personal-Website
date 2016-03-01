// MODULE
var myApp = angular.module('myApp', ['ngRoute']);//name of app & dependecies if any.

// CONTROLLERS
myApp.controller('portfolioController', ['$scope', function ($scope) {

  $('.portImages').slick({
    autoplay:true,
    accessibility:false,
    autoplaySpeed:2500,
    arrows:false
  });


}]);


myApp.config(function ($routeProvider) {
	$routeProvider

	.when('/', {
		templateUrl:"pages/main.html",
		controller:"portfolioController"
	})

	.when('/portfolio1', {
		templateUrl:'pages/portfolio1.html',
		controller:'portfolioController'
	})

	.when('/portfolio2', {
		templateUrl:'pages/portfolio2.html',
		controller:'portfolioController'
	})

	.when('/portfolio3', {
		templateUrl:'pages/portfolio3.html',
		controller:'portfolioController'
	})


});




$('.closeModal').click(function() {
    $('#myModal').modal('hide').fadeOut();
});

$(function () {
  $('[data-toggle="popover"]').popover({
        placement : 'right',
        trigger : 'hover'
    })
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip({
        placement : 'right',
        trigger : 'hover'
    })
});

  $('.qoutes').slick({
  	autoplay:true,
  	accessibility:false,
  	autoplaySpeed:3000,
  	arrows:false
  });


  $(function(){
      $(".element").typed({
        strings: ["Hello, World.", "I'm Joe Roxbury!"],
        typeSpeed: 50
      });
  });



