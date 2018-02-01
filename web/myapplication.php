<script>
	var obj = angular.module("myApp", ["ngRoute"]);
	obj.config(function($routeProvider){
		
		$routeProvider
		.when("/" , {
			templateUrl : "dashboard.php"
		})
		
		.when("/profile" , {
			templateUrl : "profile.php"
		})
		
		.when("/profile2" , {
	templateUrl : "profile.php?id=<?php if(isset($_GET['id'])) { echo $_GET['id']; }?>"
		})
		
		.when("/contact" , {
			templateUrl : "allcontact.php"
		});
		
	});
</script>