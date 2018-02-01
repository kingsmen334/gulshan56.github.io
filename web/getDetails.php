<?PHP
	include("dbconfig.php");
	$id = $_GET['id'];
	$sql="select * from user where id='$id'";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_object($res);
?>
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-bordered table-hover">
			<caption class="text-center">Details of <?php echo $row->name;?> </caption>
			<tr class="success">
				<th>Full Name</th>
				<td><?php echo $row->name;?></td>
				<th>Mobile No</th>
				<td><?php echo $row->mobile;?></td>
			</tr>
			<tr class="info">
				<th>e-Mail</th>
				<td><?php echo $row->email;?></td>
				<th>Message</th>
				<td><?php echo $row->message;?></td>
			</tr>
			</table>
		</div>
	</div>