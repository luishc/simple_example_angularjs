angular.module('emailParse', [])
	.config(['$interpolateProvider',
        function($interpolateProvider){
        	$interpolateProvider.startSymbol('__');
        	$interpolateProvider.endSymbol('__');
        }])
	.factory('EmailParser', ['$interpolate',
	    function($interpolate){
	    	return{
	    		parse: function(text, context){
	    			var template = $interpolate(text);
	    			return template(context);
	    		}
	    	}
	    }]);


var app = angular.module('myApp', ['emailParse']);
app.controller('MyController',
    ['$scope', 'EmailParser',
    function($scope, EmailParser){
    	$scope.to = "teste@teste.com";
		$scope.emailBody = "Hello __ to __, \nThank you for contact us";

    	$scope.$watch('emailBody', function(body){
    		if(body){
    			$scope.previewText = EmailParser.parse(body, {to: $scope.to});
    		}
    	});
    }]);