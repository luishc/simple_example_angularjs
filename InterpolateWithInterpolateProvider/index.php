<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>JS Bin</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body ng-app="myApp">
		<div class="container" style="margin-top: 15px;">
			<div ng-controller="MyController">
				<div class="row">
					<div class="col-md-3">
						<input ng-model="to" type="email" placeholder="Recipient" />
					</div>
					<div class="col-md-3">
						<textarea ng-model="emailBody"></textarea>
					</div>
				</div>
				<div class="row">
					<pre>__ previewText __</pre>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- Angular -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
		<script src="app.js"></script>
	</body>
</html>