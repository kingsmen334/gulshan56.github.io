<?php
    session_start();
	include("dbconfig.php");
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	$sql="select * from user where email='$email' and password='$pass'";
	$res = mysqli_query($conn, $sql);
	if( mysqli_num_rows($res) >0)
	{
		$row = mysqli_fetch_object($res);
		$_SESSION['ID'] = $row->id;
		$_SESSION['NAME'] = $row->name;
		echo "SUCCESS";
	}else{
		echo "FAIL";
	}
?>