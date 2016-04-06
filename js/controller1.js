var app = angular.module('mainApp', []);

app.controller('people', function($scope, $http){

	$http.get('http://localhost:90/newchamps/database.json')
			.success(function(response){

			$scope.persons = response.records;
	console.log(response);
	});
});
