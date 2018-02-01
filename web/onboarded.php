<?php 
   session_start();
   include("dbconfig.php");
   $sql="select * from user where status='onboarded' order by id desc";
   $res = mysqli_query($conn, $sql);
?>
<div class="row" ng-controller="responseList">

	<div class="col-sm-12">
		<div class="row well">
			<div class="col-sm-1"></div>
			<div class="col-sm-3"> <label> Select Client </label> </div>
			<div class="col-sm-4">
				<select ng-model="client" ng-change="getonboaded(client)" class="form-control">
					<option value="">Choose Client Name </option>
					<option ng-repeat="x in clientlist" value="{{x.id}}"> {{ x.clientname }}</option>
				</select>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<br>
	<div class="col-sm-12">
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
		</div> <!--panel end-->
		<div ng-bind-html="viewmore"></div>
		
	</div>
</div>
		