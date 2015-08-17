<html ng-app="app">
	<head>
		<title>Controller</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script src="js/controller/simpleController.js"></script>
	</head>
	<body ng-controller="simpleController">
		Hello <input type="text" ng-model="user.name">
		<hr />
		<h1>Hello {{user.name}}</h1>
	</body>
</html>