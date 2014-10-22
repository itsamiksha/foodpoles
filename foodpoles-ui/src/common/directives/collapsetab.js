angular.module('directives.collapsetab', []).directive('collapsetab', function () {
    return {
        restrict: "E",
        templateUrl: "src/common/tpls/collapsetab.tpl.html"
    };
});


/*(function(define){
	"use strict";
	
	define([], function() {
		
		var moduleName = 'directives.collapsetab';
		angular.module(moduleName, [])
			.directive('collapsetab', function () {
			    return {
			        restrict: "E",
			        templateUrl: "app/common/collapsetab.tpl.html"
			    };
			});
		
		return moduleName;
	});
	
}(define));
*/