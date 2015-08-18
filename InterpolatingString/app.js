var app = angular.module('myApp', []);

app.controller('MyController', function($scope, $interpolate){
	$scope.to = "teste@teste.com";
	$scope.emailBody = "Hello {{ to }}, \nThank you for contact us";

	$scope.$watch('emailBody', function(body){
		if(body){
			var template = $interpolate(body);
			$scope.previewText = template({to: $scope.to});
		}
	});

});