<?php

    include("dbconfig.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['password'];
	$sql="insert into user(name,email,mobile,password) values('$name','$email','$mobile','$pass')";
	$res = mysqli_query($conn, $sql);
	if($res==true)
	{
        echo "SUCCESS";
	}else{
		echo "FAIL";
	}


?>