					<?php
						session_start();
						if(isset($_SESSION['MSG']))
						{
							echo $_SESSION['MSG'];
							unset($_SESSION['MSG']); 
						}
					?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<style> i{color:#fff;}</style>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/angular.js"></script>
<script src="js/login.js"></script>
</head>
<body  ng-app="userLogin">
<div class="log-w3">
<div class="w3layouts-main" ng-controller="userAuth">
	<h2>Login Now</h2>
		
			<input type="email" ng-model="login.email" class="ggg" name="email" placeholder="E-MAIL">
			<i>{{emailerror}}</i>
			<input type="password" ng-model="login.password" class="ggg" name="password" placeholder="PASSWORD"><br>
			<i>{{passworderror}}</i>
			    
				  <div class="clearfix" ></div>
				<button  type="button" ng-click="usercheck()">Login</button>
				<a href="registration.php">Register Here</a>
	
</div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
