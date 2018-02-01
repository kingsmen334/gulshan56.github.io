<html>
	<head>
	<link rel="stylesheet" href="<?php echo BASEURL ; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo BASEURL ; ?>assets/css/carousel.css">
	
		<link rel="stylesheet" href="<?php echo BASEURL ; ?>assets/fa/css/font-awesome.css">
		<link href="<?php echo BASEURL;?>assets/css/jquery-ui.css" rel="stylesheet">
		<script src="<?php echo BASEURL;?>assets/js/jquery.js"></script>
	    <script src="<?php echo BASEURL;?>assets/js/bootstrap.js"></script>
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
.mybox{
	margin:1%;
	background:lightgrey;
	height:200px;
	width:98%;
	border-radius:10px;
	padding-top:30px;
}
.mybox .fa{
	color:#72b42d !important;
}

.mybox .fa:hover{
	color:white !important;
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
          <a class="navbar-brand" href="<?php echo BASEURL;?>">CAREER LIFT UP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASEURL;?>">Home</a></li>
            <li><a href="<?php echo BASEURL;?>about.html">About Us</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Outsourcing</a></li>
                <li><a href="#">Recruitment</a></li>
                <li><a href="#">Consulting</a></li>
               
                <li><a href="#">Staffing</a></li>
                <li><a href="#">Payroll Process</a></li>
				<li><a href="#">Compliance</a></li>
				<li><a href="#">HR Services</a></li>
              </ul>
            </li>
			<li><a href="<?php echo BASEURL;?>contact.html">Contact Us</a></li>
         
            <li><a href="#" class="mylogin">Login</a></li>
            <li><a href="<?php echo BASEURL;?>register.html">Upload Resume</a></li>
            <li><a href="<?php echo BASEURL;?>home/jobs">Jobs</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>