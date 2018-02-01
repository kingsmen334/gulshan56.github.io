<?PHP
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql="update user set status='selected' where id='$id'";
	mysqli_query($conn, $sql);
	echo "Selected Successfully !";
?>