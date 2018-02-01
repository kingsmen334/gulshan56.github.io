<html>
	<head>
	<link rel="stylesheet" href="<?php echo BASEURL ; ?>assets/css/bootstrap.css">
		<link href="<?php echo BASEURL;?>assets/css/jquery-ui.css" rel="stylesheet">
		<style>
			.ui-dialog{
				position:absolute;           
				top:161px !important;   
			}
			body{
			 padding-top:50px;
			}

			.alertbox{
 color:#000;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height:80px;
    background: #fff;
}
  th{
	background:#9A9C2E!important;
	color:#fff!important;
}
 tr:nth-child(odd){
	background:#CC9B00!important;
}
		</style>
	</head>
	<body>
	
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-sm-1"></div>
				
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder="Enter Your Keyword">
				</div>
				
				<div class="col-sm-4">
				 <input type="text" class="form-control" placeholder="Enter City Name" id="city">
				</div>
				
				<div class="col-sm-2">
					<button class="btn btn-warning"> 
					<i class="glyphicon glyphicon-search"></i>
					Search </button>
				</div>
				
				<div class="col-sm-1"></div>
			</div><!--row end-->
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-2">
					

					<?php echo $this->session->flashdata("msg");  ?>
				</div>
				<div class="col-sm-5"></div>


			</div><!--row end-->
			<div class="row">
				<div class="col-sm-4">
<h3 class="text-center">Our Services</h3>
<div id="myservices">
	<h4>Services One</h4>
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat laboris nisi ut aliquip ex ea commodo consequat.</div>
	
	<h4>Services Two</h4>
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat laboris nisi ut aliquip ex ea commodo consequat.</div>
	
	<h4>Services Three</h4>
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
				
				</div><!--4end-->
				<div class="col-sm-8">
					<h3 class="text-left">Search Results </h3>
					<div class="row">
						<div class="col-sm-3">
						<img src="<?php echo BASEURL;?>assets/1.jpg" class="img-responsive img-rounded">
						</div>
						<div class="col-sm-9">
							<p> 
							 sd fsdf sdf sd fsdf sd gfsdgf sdhf gsdh gfsdf
							 sd fsdf sdf sdfs df sdfsdf sdf sdf sdf s
							 sd fsdf sdf sdf sdf sdf sdf sdf sdf sdf sd fsd
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-3">
						<img src="<?php echo BASEURL;?>assets/2.jpg" class="img-responsive img-rounded">
						</div>
						<div class="col-sm-9">
							<p> 
							 sd fsdf sdf sd fsdf sd gfsdgf sdhf gsdh gfsdf
							 sd fsdf sdf sdfs df sdfsdf sdf sdf sdf s
							 sd fsdf sdf sdf sdf sdf sdf sdf sdf sdf sd fsd
							</p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-3">
						<img src="<?php echo BASEURL;?>assets/1.jpg" class="img-responsive img-rounded">
						</div>
						<div class="col-sm-9">
							<p> 
							 sd fsdf sdf sd fsdf sd gfsdgf sdhf gsdh gfsdf
							 sd fsdf sdf sdfs df sdfsdf sdf sdf sdf s
							 sd fsdf sdf sdf sdf sdf sdf sdf sdf sdf sd fsd
							</p>
						</div>
					</div>
					
					<center>
						<ul class="pager">
							<li> <a href=""> Previous </a></li>
							<li> <a href=""> Next </a></li>
						</ul>
					</center>
				</div><!--8end-->
			</div><!--row end-->
			<br>
			
			<div class="row">
			<div class="col-sm-4 well">
		<form class="form-horizontal" action="<?php echo BASEURL;?>index.php/home/saveblog" method="POST">
<div class="form-group">
<input type="text" name="title" class="form-control" placeholder="Add title">	
</div><!--close-->
<div class="form-group">
<input type="file" class="form-control" name="image" placeholder="Add image" value="Add image">	
</div><!--close-->
<div class="form-group">
<textarea class="form-control" name="desc" placeholder="Add Description"></textarea>	
</div><!--close-->
<div class="form-group">
<div class="text-center"><button class="btn btn-primary" type="submit">Post</button></div>	
</div><!--close-->
</form>
						<a href="#" id="mylogin" title="If you are registered user, Please Click Here To Open Login Window">Login</a>
					</div>
					
					<!--dialog start-->
			<div id="dialog" title="User Login">
				<div class="form-group">
					<label> e-Mail </label>
					<input type="text" class="form-control input-sm">
				</div>
				
				<div class="form-group">
					<label> Password </label>
					<input type="password" class="form-control input-sm">
				</div>
				
				<div class="form-group text-center">
					<button class="btn btn-primary"> Login </button>
				</div>
			</div>
					<!--dialog end-->
					
					
				</div><!--4end-->
				<div class="col-sm-8">
<div id="mytabs">
	<ul>
		<li><a href="#tabs-1">First</a></li>
		<li><a href="#tabs-2">Second</a></li>
		<li><a href="#tabs-3">Third</a></li>
	</ul>
	<div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum. Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
</div>
				</div>
				
				
				
			</div><!--row end-->
			
		</div><!--container fluid end-->
		
		<script src="<?php echo BASEURL;?>assets/js/jquery.js"></script>
		<script src="<?php echo BASEURL;?>assets/js/jquery-ui.js""></script>
		<script>
			
			$(function(){
				var citylist = [
					"Bangalore",
					"Mumbai",
					"Pune",
					"Delhi",
					"Chennail",
					"Hydrabad",
					"Mangalore",
					"Patna"];
				$( "#city" ).autocomplete({
					source: citylist
				}); 
				
				
				$("#myservices").accordion(); // accordion creation
				
				$("#mytabs").tabs(); // generation of tabs
				
				$("#dob").datepicker(); // to import calendar
				
				
$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400
});

// Link to open the dialog
$( "#mylogin" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});
				

	$("#mylogin").tooltip();
				
				
				
			}); 
			// this line is end of jquery, write everything before this line

setTimeout(function(){
$(".alert").fadeOut(600);
},2000);

setTimeout(function () {
	$(".alertbox").fadeOut(500)
},1000);
			
		</script>
	</body>
</html>