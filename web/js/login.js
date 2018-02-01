var obj = angular.module("userLogin", []);
obj.controller("userAuth", function($scope, $http){
	
	$scope.login = {};
	
	$scope.usercheck = function(){
		var status1 = true; //change
		
		if(($scope.login.email==undefined) || ($scope.login.email=="") )
		{
			$scope.emailerror="Incorrect e-mail Try again !";
			status1 = false;  //change
		}else{
			$scope.emailerror="";
		}
		
		if(($scope.login.password==undefined) || ($scope.login.password=="") )
		{
			$scope.passworderror="Incorrect password Try again !";
			status1 = false;  //change
		}else{
			$scope.passworderror="";
		}
		
	//	alert(status1);  //change
		
		if(status1==true)  //change
		{
		//php call start
		$http({ 
				url: "logincheck.php", 
				method: "POST", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}, 
				data:$.param($scope.login) })
				.success(function(data, status, headers, config) 
				{ 
					$scope.message=data;
					if(data=="SUCCESS")
					{
						window.location.href="home.php";
					}
					
				}).error(function(data, status, headers, config) { 
				$scope.message=data;
			})
		//php call end
		} // if end			
				
	}//function end	
}); // controller end

