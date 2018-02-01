<?php 
	session_start();
	unset( $_SESSION['ID'] ); // removing id
	unset( $_SESSION['NAME'] ); //removing name
	$_SESSION['MSG']="<p class='alert alert-success text-center'> Logout Successfully ! !</p>";
	header("Location:index.php");
?>