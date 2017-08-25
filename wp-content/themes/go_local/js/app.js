(function(){

	var myApp = angular.module('myApp', ['ui.bootstrap', 'ngAnimate']);
	myApp.controller('myCtrl', ['$scope', '$http', function($scope, $http){
		$http({
			method : 'GET',
			url : 'http://localhost:8080/golocalproject/wp-json/wp/v2/project'
		}).then(function success(response){
			$scope.project = response.data;
			console.log(response);
		}, function errorCallback(error){
			console.log('there was an error' + error);
		});
	}]);

})();