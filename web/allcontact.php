<?php 
   session_start();
   include("dbconfig.php");
   $sql="select * from user 
   where status NOT IN('deleted', 'selected', 'sortlisted','onboarded') order by id desc";
   $res = mysqli_query($conn, $sql);
?>
<div class="row" ng-controller="responseList">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading"> Contact List </div>
			<div class="panel-body"> 
			    <div class="row">
				<?php 
					while($row = mysqli_fetch_object($res))
					{
						echo "<div class='col-sm-4'>
								<div class='panel panel-primary'>
									<div class='panel-heading'> $row->name 		</div>
									<div class='panel-body'> 	$row->message 	</div>
									<div class='panel-footer'>  
									$row->mobile  	
							<a href='#profile?id=$row->id'>View</a>
							&nbsp; &nbsp; &nbsp; 	
							
<button class='btn btn-sm btn-warning' ng-click='sortlist($row->id)'>Sortlist</button>
							
									</div>
							    </div>
							 </div>";
					}
				?>
				</div>
			</div>
		   <div class="panel-footer"> View All Contacts </div>
		</div>
	</div>
</div>
		