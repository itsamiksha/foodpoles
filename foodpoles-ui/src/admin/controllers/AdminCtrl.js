/**
 * Created by STG on 10/10/14.
 */
var app = angular.module("FoodPoleApp",['ui.router','ui.bootstrap']);

app.controller('DropdownCtrl',['$scope', '$location', '$state', function ($scope, $location, $state) {
    $scope.status = {
        isopen: false
    };
    $scope.userMenuStatus = {
        isopen: false
    };
    $scope.toggleDropdown = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.status.isopen = !$scope.status.isopen;
    };



    $scope.menu = [
        {'name': 'Restaurants', 'url': '/admin/restaurants'},
        {'name': 'Set Values', 'url': '/admin/set-value'},
        {'name': 'Services Offered', 'url': '/admin/'},
        {'name': 'Restaurant Statistics', 'url': '/admin/'},
        {'name': 'Billing', 'url': ''}
    ];

    $scope.userMenu = [
        {'name': 'Settings'},
        {'name': 'Log Out'}
    ];

    String.prototype.toSentenceCase = function () {
        return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    };

    $scope.selectAndRedirectTo = function(name, url){
        $location.path(url);
    }

}]);

app.controller("AdminCtrl",['$scope', '$location', '$state', function($scope, $location, $state){

    $scope.redirectToNewRestaurant = function(){
        $location.path('/admin/restaurants/new-restaurant')
    }
}]);

//app.controller((""));
app.config(function($stateProvider, $urlRouterProvider) {
    //$urlRouterProvider.otherwise("/admin");
    $stateProvider
        .state('admin', {
            url: "/admin",
            templateUrl: "admin/view/admin-base.tpl.html"
        })
        .state('admin.set-value', {
            url: "/set-value",
            templateUrl: "admin/view/set-value/set-value-base.tpl.html",
            controller: "AdminCtrl"
        })
        .state('admin.restaurants', {
            url: "/restaurants",
            templateUrl: "admin/view/restaurant/all-restaurants.tpl.html",
            controller: "AdminCtrl"
        })
        .state('admin.new-restaurant', {
            url: "/restaurants/new-restaurant",
            templateUrl: "admin/view/restaurant/new-restaurant.tpl.html",
            controller: "AdminCtrl"
        })
        .state('admin.k', {
            url: "/k",
            template: '<h1>Great</h1>',
            controller: "AdminCtrl"
        })

});