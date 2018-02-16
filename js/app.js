var app = angular.module('imageApp', []);
app.controller('addImagesCtrl', function($rootScope, $scope, $http) {
	$scope.imageUrlBase = "/images/gallery/";
	$scope.imageExtension = ".jpg";
	$scope.categories = $rootScope.categories;
	console.log($scope.categories);

	$scope.CreateCategory = function() {
		if ($scope.newCatName.length > 3 && $scope.newCatName.length < 100) {
			$http({
		        method: 'GET',
		        url: 'http://test.site/api/new-category',
		        params: {
					id: 2,
					token: '2hPErGftyF2pfCv9U7y9BFhF0iVi0Zeuqp7z3ODiwGeaXRsH1XaF2TR1fV1g',
					name: $scope.newCatName
		        }
			}).then(function(response) {
				console.log("Success", response);
				// $scope.imageData = response.data
		    }, function(response) {
		        console.log("Failure", response);
		    });
		} else {
			console.log("Invalid category name entered");
		}
		$scope.GetCategories();
	}

	$scope.GetImageData = function() {
		$http({
	        method: 'GET',
	        url: '/api/image-data',
	        params: {
				id: 2,
				token: '2hPErGftyF2pfCv9U7y9BFhF0iVi0Zeuqp7z3ODiwGeaXRsH1XaF2TR1fV1g'
	        }
		}).then(function(response) {
			console.log("Success", response);
			// $scope.imageData = response.data
	    }, function(response) {
	        console.log("Failure", response);
	    });
	};

	$scope.GetCategories = function() {
		$http({
	        method: 'GET',
	        url: '/api/get-categories',
	        params: {
				id: 2,
				token: '2hPErGftyF2pfCv9U7y9BFhF0iVi0Zeuqp7z3ODiwGeaXRsH1XaF2TR1fV1g'
	        }
		}).then(function(response) {
			console.log("Success", response);
			// $scope.imageData = response.data
	    }, function(response) {
	        console.log("Failure", response);
	    });
	};
	// $http({
 //        method: 'GET',
 //        url: '/api/view-images',
 //        params: {
	// 		id: 2,
	// 		token: '2hPErGftyF2pfCv9U7y9BFhF0iVi0Zeuqp7z3ODiwGeaXRsH1XaF2TR1fV1g'
 //        }
	// }).then(function(response) {
	// 	console.log("Success", response);
 //    }, function(response) {
 //        console.log("Failure", response);
 //    });
});