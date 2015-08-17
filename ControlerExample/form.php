<html ng-app>
	<head>
		<title>Simple Form</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
	</head>
	<body>
		<form name="myForm">
			<span ng-show="myForm.$invalid">
				Preencha o formulario
			</span>
			<br>
			<input type="text" ng-model="name" name="Name" value="Your Name" required/><br>
			<button ng-disabled="myForm.$invalid"/>Save</button>
		</form>
	</body>
</html>