<html ng-app="app">
	<head>
		<title>Loop</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script src="js/controller/loopController.js"></script>
	</head>
	<body ng-controller="loopController">
		<ul>
			<li ng-repeat="fruit in fruits">{{fruit}}</li>
		</ul>
	</body>
</html>