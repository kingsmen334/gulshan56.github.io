<?PHP
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql="update user set status='sortlisted' where id='$id'";
	mysqli_query($conn, $sql);
	echo "Sortlisted Successfully !";
?>