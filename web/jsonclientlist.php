<?php 
	include("dbconfig.php");
	$myarray = array();
	$sql="select * from client order by clientname";
	$res = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_object($res))
	{
		array_push($myarray, $row); // generating multidimentional array
	}
	
	$json = json_encode($myarray); // converting array to json
	echo $json; // sending as response
?>