<?PHP
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql="update user set status='deleted' where id='$id'";
	mysqli_query($conn, $sql);
	echo "Removed Successfully !";
?>