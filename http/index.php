<html ng-app="app">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.js"></script>
		<script src="controller/controllers.js"></script>
	</head>

	<body>
		<div ng-controller="appController">
			<button ng-click="getData()">Get Data</button>
			<h2 ng-show="fruits.length>0">Fruits</h2>
			<ul>
				<li ng-repeat="fruit in fruits">
					{{fruit.id}} - {{fruit.name}} ({{fruit.color}})
				</li>
			</ul>
		</div>
	</body>
</html>