/**
 * Created by STG on 21/10/14.
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
        {'name': 'Order Lists', 'url': '/manager-admin/'},
        {'name': 'Edit Menu', 'url': '/manager-admin/'},
        {'name': 'Misc. Settings', 'url': '/manager-admin/'}
    ];

    $scope.userMenu = [
        {'name': 'Settings'},
        {'name': 'Log Out'}
    ];

    $scope.selectAndRedirectTo = function(name, url){
        $location.path(url);
    }

}]);

app.controller("ManagerAdminCtrl",['$scope', '$location', '$state', function($scope, $location, $state){

    $scope.redirectToNewRestaurant = function(){
        $location.path('/admin/restaurants/new-restaurant')
    }
}]);

//app.controller((""));
app.config(function($stateProvider, $urlRouterProvider) {
    //$urlRouterProvider.otherwise("/manager-admin");
    $stateProvider
        .state('manager-admin', {
            url: "/manager-admin",
            templateUrl: "manager-admin/view/manager-admin-base.tpl.html"
        })
        .state('manager-admin.set-value', {
            url: "/set-value",
            templateUrl: "manager-admin/view/set-value/set-value-base.tpl.html",
            controller: "AdminCtrl"
        })
        .state('manager-admin.restaurants', {
            url: "/restaurants",
            templateUrl: "manager-admin/view/restaurant/all-restaurants.tpl.html",
            controller: "AdminCtrl"
        })
        .state('manager-admin.new-restaurant', {
            url: "/restaurants/new-restaurant",
            templateUrl: "manager-admin/view/restaurant/new-restaurant.tpl.html",
            controller: "AdminCtrl"
        })

});