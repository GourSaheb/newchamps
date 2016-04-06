<?php ?>

	<div ng-controller="people"  style="float: left; margin:20px; display: none;" id="searchxyz">
			<ul>
						<!-- <h2>Your Result</h2> -->
			<li ng-repeat="person in persons | filter:searchBox" style="list-style: none;">
				<a href="{{person.link}}">{{ person.Name + ' ' + person.Age +' '+ person.Application }}</a>
			</li>
		</ul>
	</div>