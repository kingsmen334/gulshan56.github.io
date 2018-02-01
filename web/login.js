
var obj = angular.module("userLogin", []);
obj.controller("userAuth", function($scope, $http){
	
	$scope.login = {};
	
	$scope.usercheck = function(){ 
		
		alert($scope.login.email);
		$http({ 
				url: "logincheck.php", 
				method: "POST", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}, 
				data: $.param($scope.login) })
				.success(function(data, status, headers, config) 
				{ 
					alert(data);
					
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
				});	  
				
	}//function end	
}); // controller end