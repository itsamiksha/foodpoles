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
        {'name': 'Order Lists', 'url': '/manager-admin/order-lists'},
        {'name': 'Menu Edit', 'url': '/manager-admin/menu-edit'},
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


app.directive('navigationtab', function () {
    return {
        restrict: "E",
        templateUrl: "common/tpls/navigationtab.tpl.html"
    };
});

app.controller("ManagerAdminCtrl",['$scope', '$location', '$state', function($scope, $location, $state){

    $scope.redirectToNewRestaurant = function(){
        $location.path('/admin/restaurants/new-restaurant')
    }
}]);

app.controller("OrderListsMenuCtrl", ["$scope", "$location", "$state", function($scope, $location, $state){

    $scope.navTabMenu = [
        {
            "name":"Active Order Lists",
            "url":"/manager-admin/order-lists/active-order-lists"
         },
        {
            "name":"Home Delivery",
            "url":""
        },
        {
            "name":"All Orders",
            "url":""
        }
    ];


    var activeSelectedMenu = $location.path();
    if(activeSelectedMenu !== undefined && !(angular.equals(activeSelectedMenu, ''))){
        angular.forEach($scope.navTabMenu, function(value, key){
            if(activeSelectedMenu === value.url){
                $scope.activeSelectedMenu = value.name;
            }

        });
    }

    /**
     * Description
     * @method selectAndRedirectTo
     * @param {} menu
     * @return
     */
    $scope.selectAndRedirectTo = function(menu){
        $scope.activeSelectedMenu = menu.name;
        $location.path(menu.url);
    }

}]);

app.controller("MenuEditCtrl",['$scope', '$location', function($scope, $location){
    var demoMenuJSON = [
        {
            "name": "Starter",
            "url": "",          /**Here url is empty bcoz we have to redirect to only one url every time, which will be hardcoded in the method 'selectAndRedirectTo()'*/
            "id": 12345
        },
        {
            "name": "Soup",
            "url": "",
            "id": 12346
        },
        {
            "name": "Fast Food",
            "url": "",
            "id": 12347
        },
        {
            "name": "Desert",
            "url": "",
            "id": 12348
        },
        {
            "name": "Ice Cream",
            "url": "",
            "id": 12349
        }
    ];
    $scope.navTabMenu = demoMenuJSON;

    //$scope.navTabMenu.push(demoMenuJSON);

    /*var activeSelectedMenu = $location.path();
    if(activeSelectedMenu !== undefined && !(angular.equals(activeSelectedMenu, ''))){
        angular.forEach($scope.navTabMenu, function(value, key){
            if(activeSelectedMenu === value.url){
                $scope.activeSelectedMenu = value.name;
            }

        });
    }*/

    /**
     * Description
     * @method selectAndRedirectTo
     * @param {} menu
     * @return
     */
    $scope.selectAndRedirectTo = function(menu){
        $scope.activeSelectedMenu = menu.name;
        //$location.path(url);
    };

    $scope.addNewCuisineRedirect = function(){

    };


}])

app.controller("ActiveOrderListsCtrl",['$scope', '$location', '$state', function($scope, $location, $state){

    $scope.orderList = [
        {
            "orderNo": "1234",
            "orderType":"0",//in restaurant
            "servingAddress": "10",
            "status": "Processing",
            "orderTimeStamp":1,
            "part": [
                {
                    "order":[
                        {
                            "status": "Served",
                            "dishName": "Fried Rice",
                            "customization":[
                                {
                                    "name":["No Onion"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity":"1"
                                },
                                {
                                    "name": ["No Garlic"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity": "1"
                                }
                            ]
                        },
                        {
                            "status": "Served",
                            "dishName": "Burger",
                            "customization":[
                                {
                                    "name":["Regular"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity":"1"
                                }
                            ]
                        }
                    ],
                    "orderPartTimeStamp": 1414267282826,
                    "isopen": false
                },
                {
                    "order":[
                        {
                            "status": "Processing",
                            "dishName": "Daal Makhani",
                            "customization":[
                                {
                                    "name":["Regular"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity":"1"
                                }
                            ]
                        }
                    ],
                    "orderPartTimeStamp": 1414267298262,
                    "isopen": false
                },
                {
                    "order":[
                        {
                            "status": "Processing",
                            "dishName": "Tea",
                            "customization":[
                                {
                                    "name":["Regular"],
                                    "discount":"-",
                                    "amount": "120",
                                    "quantity":"1"
                                }
                            ]
                        }
                    ],
                    "orderPartTimeStamp": 1414267310303,
                    "isopen": false
                }
            ]
        },
        {
            "orderNo": "4321",
            "orderType":"1",//in restaurant
            "servingAddress": "A-246 Malviya Nagar",
            "status": "Processing",
            "orderTimeStamp":2,
            "part": [
                {
                    "order":[
                        {
                            "status": "Served",
                            "dishName": "Pizza",
                            "customization":[
                                {
                                    "name":["No Onion","No Garlic","No Capsicum"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity":"1"
                                },
                                {
                                    "name": ["No Garlic"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity": "1"
                                }
                            ]

                        },
                        {
                            "status": "Served",
                            "dishName": "Burger",
                            "customization":[
                                {
                                    "name":["Regular"],
                                    "amount": "130",
                                    "discount":"-",
                                    "quantity":"1"
                                }
                            ]
                        }
                    ],
                    "orderPartTimeStamp": 1414267774544,
                    "isopen": false
                },
                {
                    "order":[
                        {
                            "status": "Processing",
                            "dishName": "Daal Makhani",
                            "customization":[
                                {
                                    "name":["Regular"],
                                    "amount": "120",
                                    "discount":"-",
                                    "quantity":"1"
                                }
                            ]

                        }
                    ],
                    "orderPartTimeStamp": 1414267785576,
                    "isopen": false
                }
            ]
        }

    ];
    $scope.sortOrder = '-orderTimeStamp';
    $scope.sortOrderPart = '-orderPartTimeStamp';
    /**
     * Description
     * @method expandAccordian
     * @param Order Number
     * @return
     * This method is used to create order parts accordian dynamically
     * */
    $scope.expandAccordian = function(orderNo){
        angular.forEach($scope.orderList, function(value, key){
            if(angular.equals(orderNo, value.orderNo)){
                $scope.tempOrderPart = value.part;
                /**To close all order Part accordian By default on click of parent accordian*/
                angular.forEach(value.part, function(prt, key){
                    prt.isopen = false;
                })

            }
        });
    };
    /**
     * Description
     * @method expandOrderPartAccordian
     * @param orderPartTimeStamp
     * @return
     * This method is used to create table inside order part accordian
     * by dynamically setting $scope.orderTableData.
     * */
    $scope.expandOrderPartAccordian = function(orderPartTimeStamp){
        angular.forEach($scope.tempOrderPart, function(partValue, partKey){
            if(angular.equals(orderPartTimeStamp, partValue.orderPartTimeStamp)){
                $scope.orderTableData = partValue.order;
                console.info($scope.orderTableData);
            }
        })
    };

    $scope.changeStatus = function(idx, group, e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        console.info(group)
    }

}]);


app.config(function($stateProvider, $urlRouterProvider) {
    //$urlRouterProvider.otherwise("/manager-admin/order-lists");
    $stateProvider
        .state('manager-admin', {
            url: "/manager-admin",
            templateUrl: "manager-admin/view/manager-admin-base.tpl.html"
        })
        .state('manager-admin.order-lists', {
            url: "/order-lists",
            templateUrl: "manager-admin/view/order-lists/order-lists-base.tpl.html"
        })
        .state('manager-admin.order-lists.active-order-lists', {
            url: "/active-order-lists",
            templateUrl: "manager-admin/view/order-lists/active-order-lists.tpl.html",
            controller: "ActiveOrderListsCtrl"
        })
        .state('manager-admin.restaurants', {
            url: "/restaurants",
            templateUrl: "manager-admin/view/menu-edit/menu-edit-base.tpl.html",
            controller: "AdminCtrl"
        })
        .state('manager-admin.menu-edit', {
            url: "/menu-edit",
            templateUrl: "manager-admin/view/menu-edit/menu-edit-base.tpl.html",
            controller: ""
        })

});