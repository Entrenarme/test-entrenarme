angular.module('main', [
    'ui.router',
    'mainCtrl',
    'filters'
	], function($interpolateProvider){

		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');
	}
)
.config(function($stateProvider, $urlRouterProvider){

    $urlRouterProvider.otherwise('/search');

	$stateProvider
		.state('search', {
            url: '/search',
            templateUrl: 'view/search',
			controller: 'searchController',
            controllerAs: 'vm'
		})
        .state('question', {
            url: '/question/:id',
            templateUrl: 'view/view',
			controller: 'questionController',
            controllerAs: 'vm'
		});

}).run(function(){

});
