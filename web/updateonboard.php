<?PHP
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql="update user set status='onboarded' where id='$id'";
	mysqli_query($conn, $sql);
	echo "Onboarded Successfully !";
?>