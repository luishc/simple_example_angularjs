<!doctype html>
<html ng-app="myApp">
	<head>
		<title>Parse Expression Example</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.2/angular.js"></script>
		<script src="app.js"></script>
	</head>

	<body>
		<div ng-controller="MyController">
			<input type="text" ng-model="expr" placeholer="Enter an explression">
			<div>{{parseExpr}}</div>
		</div>
	</body>
</html>