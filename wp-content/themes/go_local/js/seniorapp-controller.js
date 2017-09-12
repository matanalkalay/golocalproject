(function(){

	myApp.controller('myCtrl', ['seniorAppConfig', '$scope', '$http', function(seniorAppConfig, $scope, $http){
		$http({
			method : 'GET',
			url : seniorAppConfig.ajaxUrl
		}).then(function success(response){
			$scope.senior = response.data;
			console.log(response);
		}, function errorCallback(error){
			console.log('there was an error' + error);
		});
	}]);

})();
