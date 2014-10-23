angular.module('directives.collapsetab', []).directive('collapsetab', function () {
    return {
        restrict: "E",
        templateUrl: "/foodpoles-ui/src/common/tpls/collapsetab.tpl.html"
    };
});


/*
(function(define){
	"use strict";
	
	define([], function() {
		
		var moduleName = 'directives.collapsetab';
		angular.module(moduleName, [])
			.directive('collapsetab', function () {
			    return {
			        restrict: "E",
			        templateUrl: "common/tpls/collapsetab.tpl.html"
			    };
			});
		
		return moduleName;
	});
	
}(define));
*/
