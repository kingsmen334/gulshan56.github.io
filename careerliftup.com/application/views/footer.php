<div id="dialog" title="User Login">
				<div class="form-group">
					<label> e-Mail </label>
					<input type="text" class="form-control input-sm">
				</div>
				
				<div class="form-group">
					<label> Password </label>
					<input type="password" class="form-control input-sm">
				</div>
				
				<div class="form-group text-center">
					<button class="btn btn-warning"> Login </button>
				</div>
			</div>
		<?php
		    $this->db = $this->load->database('default', TRUE);
			$res=$this->db->get("city");
			$allcity=$res->result();
			
			$mycity="";
            foreach($allcity as $a)
			{
			    $mycity=$mycity.'"'.$a->cityname.'",';
			}
			
		?>
		
		<script src="<?php echo BASEURL;?>assets/js/jquery-ui.js""></script>
		<script>
			
			$(function(){
				var citylist = [<?php echo $mycity;?>];
				
				$( "#city" ).autocomplete({
					source: citylist
				}); 
				
				
				$("#myservices").accordion(); // accordion creation
				
				$("#mytabs").tabs(); // generation of tabs
				
				$("#dob").datepicker(); // to import calendar
				
				
$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400
});

// Link to open the dialog
$( ".mylogin" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});
				

	$("#mylogin").tooltip();
				
				
				
			}); 
			// this line is end of jquery, write everything before this line

setTimeout(function(){
$(".alert").fadeOut(600);
},2000);

setTimeout(function () {
	$(".alertbox").fadeOut(500)
},1000);
			
		</script>
	</body>
</html>