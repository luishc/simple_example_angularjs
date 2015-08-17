<h2>Fruits({{fruits.length}})</h2>
<ull>
	<li ng-repeat="fruit in fruits"><a href="#/edit/{{fruit}}">{{fruit}}</a></li>
</ull>
<a href="#/new">New</a>