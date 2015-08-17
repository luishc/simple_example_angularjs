<html ng-app="app">
	<head>
		<title>Hello Counter</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script src="js/controller/countController.js"></script>
	</head>
	<body ng-controller="countController">
		<a href="#" ng-click="addOne()">Add 1</a>
		<hr />
		<h1>Counter value: {{counter}}</h1>
	</body>
</html>