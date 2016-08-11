(function() {

	var app = angular.module("exemplo", []);
	app.controller("ExemploCtrl", ['$http',function($http) {
	    var that = this;
	    this.title = "Exemplo";
	    
	    this.pega = function(){
	        
	         $http.get("/servidor/").success(function(data){
	            that.title = data.api;   
	         });
	       
	    };
	    
	}]);
	
})();