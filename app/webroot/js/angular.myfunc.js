$(document).ready(function(){
    $('.sort_article_list').sortable();
});

var CreateCtrl = function($scope,$http) {
	
	//nanpiAPIから指定キーワードで検索
	$('#ArticleSearch').keypress(function (e) {
		if (e.which == 13) {
			var parameter = {
				'key' : '4cb94f0895324',
				'format' : 'json',
				'query' : $scope.SearchText,
				'is_image' : 1,
	    	};
		    	
			$http({
				method : 'GET',
			    url : 'http://api.nanapi.jp/v1/recipeSearchDetails/',
				params: parameter,
			}).success(function(data, status, headers, config) {
				$scope.status = data['response']['status'];
				$scope.recipes = data['response']['recipes'];
			}).error(function(data, status, headers, config) {
				console.log('error!');
			});
		}
	} );
	
	/*$scope.GetRecipe = function(){
		$http({
			method : 'GET',
		    url : 'http://api.nanapi.jp/v1/recipeSearchDetails/?key=4cb94f0895324&format=json&query=test',
			headers: {
	    	},
		}).success(function(data, status, headers, config) {
			$scope.recipes = data['response']['recipes'];
		}).error(function(data, status, headers, config) {
			console.log('error!');
		});
	};*/
	
}

