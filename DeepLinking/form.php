<h2>{{title}}</h2>
<form name="myForm">
	<input type="text" ng-model="fruit" name="fruit" required>
	<button ng-click="save()" ng-disable="myForm.$invalid">Save</button>
</form>
<a href="#/">Cancel</a>