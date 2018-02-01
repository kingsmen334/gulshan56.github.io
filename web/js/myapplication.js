
	var obj = angular.module("myApp", ["ngRoute", "ngSanitize"]);
	obj.config(function($routeProvider){
		
		$routeProvider
		.when("/" , {
			templateUrl : "dashboard.php"
		})
		
		.when("/profile" , {
			templateUrl : "profile.php"
		})
		
		.when("/sortresponse" , {
			templateUrl : "sortlisted.php"
		})
		
		.when("/selectedresponse" , {
			templateUrl : "selected.php"
		})
		
		.when("/deleted" , {
			templateUrl : "deleted.php"
		})
		
		
		.when("/onboarded" , {
			templateUrl : "onboarded.php"
		})
		
		.when("/contact" , {
			templateUrl : "allcontact.php"
		});
		
	});
	
	obj.controller("myxml",function($scope,$http){
			$http.get("xmltojson.php").then(function(response){
			$scope.xmluser = response.data.user;
				
			});
	});
	
	obj.controller("responseList", function($scope, $http){
		
		//loading client list
			$http.get("jsonclientlist.php").then(function(response){
				$scope.clientlist = response.data;
			});
		//loading client list end here
		    
		
		$scope.sortlist = function(responseid)
		{
			$http({ 
				url: "savesortlist.php?id="+responseid, 
				method: "GET", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config) 
				{ 
					alert(data);
					location.reload();
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
			});	 
		}
		
		$scope.removeFromlist = function(responseid)
		{
			$http({ 
				url: "removefromlist.php?id="+responseid, 
				method: "GET", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config) 
				{ 
					alert(data);
					location.reload();
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
			});	 
		}
		
		
		$scope.viewDetails = function(responseid)
		{
			$http({ 
				url: "getDetails.php?id="+responseid, 
				method: "GET", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config) 
				{ 
					//alert(data);
					$scope.viewmore = data;
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
			});	 
		}
		
		$scope.selectthis = function(responseid)
		{
			$http({ 
				url: "updatestatus.php?id="+responseid, 
				method: "GET", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config) 
				{ 
					alert(data);
					location.reload();
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
			});	 
		}
		
		
		$scope.onBoard = function(responseid)
		{
			$http({ 
				url: "updateonboard.php?id="+responseid, 
				method: "GET", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config) 
				{ 
					alert(data);
					location.reload();
				})
				.error(function(data, status, headers, config) { 
					alert(data); 
			});	 
		}
		
		
		
		
	});
	
	
	
	
	
	