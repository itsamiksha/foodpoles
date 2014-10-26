/**
 * Created by STG on 21/10/14.
 */

var app = angular.module("FoodPoleApp",['ui.router','ui.bootstrap','ngGrid']);

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
     * @param {} menuName
     * @param {} url
     * @return
     */
    $scope.selectAndRedirectTo = function(name, url){
        $scope.activeSelectedMenu = name;
        $location.path(url);
    }

}]);

/*app.filter('reverse', function() {
    return function(items) {
        return items.slice().reverse();
    };
});*/

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
     * This method is*/
    $scope.expandAccordian = function(orderNo){
        angular.forEach($scope.orderList, function(value, key){
            if(angular.equals(orderNo, value.orderNo)){
                $scope.tempOrderPart = value.part;
                angular.forEach(value.part, function(prt, key){
                    prt.isopen = false;
                })

            }
        });
    }
    $scope.expandOrderPartAccordian = function(orderPartTimeStamp){
        angular.forEach($scope.tempOrderPart, function(partValue, partKey){
            if(angular.equals(orderPartTimeStamp, partValue.orderPartTimeStamp)){
                $scope.myData = partValue.order;
                console.info($scope.myData);
            }
        })
    }
    /*$scope.myData = [
        {srno: "1", dishName: "abc", customization:"Regular", quantity:"1", amount:"450", discount:"-", net:"450"},
        {srno: "2", dishName: "xyz", customization:"Regular", quantity:"2", amount:"450", discount:"-", net:"450"},
        {srno: "2", dishName: "xyz", customization:"Regular", quantity:"2", amount:"450", discount:"-", net:"450"},
        {srno: "2", dishName: "xyz", customization:"Regular", quantity:"2", amount:"450", discount:"-", net:"450"},
        {srno: "3", dishName: "dsa", customization:"Regular", quantity:"5", amount:"450", discount:"-", net:"450"}
    ];
*/
    $scope.gridOptions = {
        data: 'myData',
        columnDefs: [
            //{field: 'srno', displayName: 'Sr No.',width:'8%'},
            {field:'dishName', displayName:'Dish Name',width:'15%'},
            //{field:'customization', displayName:'Customization',width:'15%'},
            {field:'quantity', displayName:'Quantity',width:'15%'},
            {field:'amount', displayName:'Amount',width:'15%'},
            {field:'discount', displayName:'Discount',width:'15%'},
            {field:'net', displayName:'Net',width:'15%'}
        ]
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
            templateUrl: "manager-admin/view/restaurant/all-restaurants.tpl.html",
            controller: "AdminCtrl"
        })
        .state('manager-admin.new-restaurant', {
            url: "/restaurants/new-restaurant",
            templateUrl: "manager-admin/view/restaurant/new-restaurant.tpl.html",
            controller: "AdminCtrl"
        })

});