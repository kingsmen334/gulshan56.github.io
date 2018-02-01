var obj=angular.module("userSignup",[]);
obj.controller("xyz", function($scope, $http){
	$scope.signup={};
	$scope.sign=function(){
		
		var status2=true;
		if(($scope.signup.name==undefined) ||($scope.signup.name=""))
		{
			$scope.nameerror="Invalid Name !";
			status2=false;
		}else{
			$scope.nameerror="";
		}
		
		if(($scope.signup.email==undefined) || ($scope.signup.email=="") )
		{
			$scope.emailerror="Invalid Email !";
			status1 = false;  //change
		}else{
			$scope.emailerror="";
		}
		
		if(($scope.signup.mobile==undefined) || ($scope.signup.mobile=="") )
		{
			$scope.mobileerror="Invalid Mobile !";
			status1 = false;  //change
		}else{
			$scope.emailerror="";
		}
		
		if(($scope.signup.password==undefined) || ($scope.signup.password=="") )
		{
			$scope.passworderror="Invalid Password !";
			status1 = false;  //change
		}else{
			$scope.passworderror="";
		}
	
		if(status2==true)
	    {
	//php call start
		$http({ 
				url: "savesignup.php", 
				method: "POST", 
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}, 
				data:$.param($scope.signup) })
				.success(function(data, status, headers, config) 
				{ 
					$scope.message=data;
					if(data=="SUCCESS")
					{
						window.location.href="index.php";
					}
					
				}).error(function(data, status, headers, config) { 
				$scope.message=data;
			})
		}	
	}		
})			