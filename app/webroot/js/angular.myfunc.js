$(document).ready(function(){
    $('.sort_article_list').sortable();
});

var CreateCtrl = function($scope,$http) {
	
	//nanpiAPIから指定キーワードで検索
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

}



/*

angular.module('project', ['ngRoute', 'firebase'])

.value('fbURL', 'https://angularjs-projects.firebaseio.com/')

.factory('Projects', function($firebase, fbURL) {
  return $firebase(new Firebase(fbURL)).$asArray();
})

.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      controller:'ListCtrl',
      templateUrl:'list.html'
    })
    .when('/edit/:projectId', {
      controller:'EditCtrl',
      templateUrl:'detail.html'
    })
    .when('/new', {
      controller:'CreateCtrl',
      templateUrl:'detail.html'
    })
    .otherwise({
      redirectTo:'/'
    });
})

.controller('ListCtrl', function($scope, Projects) {
  $scope.projects = Projects;
})

.controller('CreateCtrl', function($scope, $location, $timeout, Projects) {
  $scope.save = function() {
      Projects.$add($scope.project).then(function(data) {
          $location.path('/');
      });
  };
})

.controller('EditCtrl',
  function($scope, $location, $routeParams, Projects) {
    var projectId = $routeParams.projectId,
        projectIndex;

    $scope.projects = Projects;
    projectIndex = $scope.projects.$indexFor(projectId);
    $scope.project = $scope.projects[projectIndex];

    $scope.destroy = function() {
        $scope.projects.$remove($scope.project).then(function(data) {
            $location.path('/');
        });
    };

    $scope.save = function() {
        $scope.projects.$save($scope.project).then(function(data) {
           $location.path('/');
        });
    };
});

*/
