<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
	<body>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 well">
						<h3 class="text-center"> Register</h3>
						<div class="form-group">
							<label> Name</label>
					<input type="text" ng-model="user.name" class="form-control">
						</div>
						
						<div class="form-group">
							<label> Email</label>
				<input type="text" ng-model="user.email" class="form-control">
						</div>
						<div class="form-group">
							<label> Password</label>
			   <input type="password" ng-model="user.password" class="form-control">
						</div>
						<div class="form-group text-center">
			<button class="btn btn-success" ng-click="saveuser()"> Register </button>
							<hr>
							<a href="index.php">Login</a>
						</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>