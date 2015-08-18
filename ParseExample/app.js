var app = angular.module('myApp', []);

app.controller('MyController', 
               ['$scope', '$parse', function($scope, $parse){

	$scope.person = {
		name: "Luis Henrique"
	};

	$scope.$watch('expr', function(newVal, oldVal, scope){
		if(newVal !== oldVal){
			var parseFun = $parse(newVal);
			scope.parseExpr = parseFun(scope);
		}
	});
}]);

//type person.name on input text