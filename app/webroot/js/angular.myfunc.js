/*
 * キュレーション記事投稿ページ
 */
var CreateCtrl = function($scope, $http) {
	
	//nanpiAPIから指定キーワードで検索
	$('#ArticleSearch').keypress(function (e) {
		if (e.which == 13) {
			getRecipe($scope.SearchText,1);
		}
	} );
	
	//検索クエリとページ数を指定してnanapiAPIを叩き、viewを更新
	function getRecipe(query,page) {
		var parameter = {
			'key' : '4cb94f0895324',
			'format' : 'json',
			'query' : query,
			'is_image' : 1,
			'page' : page,
    	};
    	
		$http({
				method : 'GET',
			    url : 'http://api.nanapi.jp/v1/recipeSearchDetails/',
				params: parameter,
			}).success(function(data, status, headers, config) {
				$scope.Status = data['response']['status'];
				$scope.Recipes = data['response']['recipes'];
			}).error(function(data, status, headers, config) {
				console.log('error!');
		});
	}
	
	//記事を追加
	$scope.SelectedRecipes = {};
	$scope.addRecipe = function(id, title, img_url) {
		$scope.SelectedRecipes[id] = {
			'id' : id,
			'title' : title,
			'img_url' : img_url,
		};
	}
	
	//記事並び替えプラグイン
    $('.sort_article_list').sortable();
	
}

