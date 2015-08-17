var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider){
	$routeProvider.
	when('/', {controller:'listController', templateUrl: 'list.php'}).
	when('/edit/:name', {controller:'editController', templateUrl: 'form.php'}).
	when('/new', {controller: 'newController', templateUrl: 'form.php'}).
	otherwise({redirectTo: '/'});
	
}]);

app.run(['$rootScope', function($rootScope){
	$rootScope.fruits = ['banana', 'orange', 'apple'];
	console.log('app.run');
}]);