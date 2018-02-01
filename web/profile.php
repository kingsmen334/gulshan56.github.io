<?php 
   session_start(); 
   
   if(isset($_GET['id']))
   {
	$userid = $_GET['id'];// catching from url  
   }else{
	$userid = $_SESSION['ID'];// catching from session
   }
   
   include("dbconfig.php");
   $sql="select * from user where id='$userid'";
   $res = mysqli_query($conn, $sql);
   $row = mysqli_fetch_object($res);
?>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading"> Profile Of <?php echo $row->name; ?></div>
			<div class="panel-body"> 
				
		<div class="row form-group">
			<div class="col-sm-3"><label> Full Name </label></div>
			<div class="col-sm-9"><label><?php echo $row->name;?></label></div>
		</div>
		
		<div class="row form-group">
			<div class="col-sm-3"><label> Mobile No </label></div>
			<div class="col-sm-9"><label><?php echo $row->mobile;?></label></div>
		</div>
		
		<div class="row form-group">
			<div class="col-sm-3"><label> e-Mail </label></div>
			<div class="col-sm-9"><label><?php echo $row->email;?></label></div>
		</div>
		
		<div class="row form-group">
			<div class="col-sm-3"><label> Password </label></div>
			<div class="col-sm-9"><label><?php echo md5($row->password);?></label></div>
		</div>
		
		<div class="row form-group">
			<div class="col-sm-3"><label> Message </label></div>
			<div class="col-sm-9"><label><?php echo $row->message;?></label></div>
		</div>
				
			</div>
			<div class="panel-footer"> Profile View </div>
		</div>
	</div>
	<div class="col-sm-2"></div>
</div>