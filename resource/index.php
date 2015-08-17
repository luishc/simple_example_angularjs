<html ng-app="app">
	<head>
		<title>Lista de compras</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-resource.js"></script>
		<script src="app.js"></script>
	</head>

	<body ng-controller="phoneController">
		<input type="text" ng-model="idPhone" value="1"/>
		<button ng-click="getPhoneById()">GetPhone By Id</button>
		<hr/>
		<button ng-click="getPhones()">GetPhones</button>
		<hr/>
		<button ng-click="savePhone()">Save Phone</button>
		<hr/>
		<button ng-click="deletePhone()">Delete Phone</button>
	</body>
</html>