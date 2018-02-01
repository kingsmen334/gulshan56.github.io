<?php 
   session_start();
   include("dbconfig.php");
   $sql="select * from user where status='selected' order by id desc";
   $res = mysqli_query($conn, $sql);
?>
<div class="row" ng-controller="responseList">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading"> Selected Response </div>
			<div class="panel-body"> 
			    <div class="row">
				<?php 
					while($row = mysqli_fetch_object($res))
					{
						echo "<div class='col-sm-6'>
								<div class='panel panel-primary'>
									<div class='panel-heading'> $row->name 		</div>
									<div class='panel-body'> 	$row->message 	</div>
									<div class='panel-footer text-center'>  
									
<button class='btn btn-sm btn-info' ng-click='viewDetails($row->id)'>
	<i class='fa fa-eye fa-lg'></i> View
</button>
	
	&nbsp;&nbsp; 

<button class='btn btn-sm btn-success' ng-click='onBoard($row->id)'>
	<i class='fa fa-plus fa-lg'></i> Onbord
</button>

 	&nbsp;&nbsp;
							
<button class='btn btn-sm btn-danger' ng-click='removeFromlist($row->id)'> 
	<i class='fa fa-trash fa-lg'></i> Reject
</button>
							
									</div>
							    </div>
							 </div>";
					}
				?>
				</div>
			</div>
		   <div class="panel-footer"> View All Contacts </div>
		</div> <!--panel end-->
		
		<div ng-bind-html="viewmore"></div>
		
	</div>
</div>
		