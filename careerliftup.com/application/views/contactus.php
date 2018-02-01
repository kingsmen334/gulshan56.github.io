		
	<div class="container">	
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			    <h3 class="text-center"> Contact Us </h3>
				<center id="mymsg"></center>
				<div class="form-group">
				    <label> Your Full Name </label>
					<input type="text" class="form-control" id="fname">
				</div>
				<div class="form-group">
				    <label> Your Mobile No </label>
					<input type="text" class="form-control" id="mobile">
				</div>
				<div class="form-group">
				    <label> Your e-Mail Id </label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				    <label> Your Message </label>
					<textarea class="form-control" id="message"></textarea>
				</div>
				<div class="form-group">
				    <div class="col-sm-12 text-center">
					    <button type="button" class="btn btn-success" id="btn1">Send Now</button>
						<button type="button" class="btn btn-danger" id="btn2">Clear</button>
					</div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
    <script>
        $(function(){
			$("#btn1").click(function(){
				var name=$("#fname").val().trim();
				var mobile=$("#mobile").val().trim();
				var email=$("#email").val().trim();
				var msg=$("#message").val().trim();
				var sts=true;
				if(name=="")
				{
					sts=false;
					$("#fname").css({"border":"1px solid red"});
				}else{
					$("#fname").css({"border":""});
				}
				
				if(mobile=="")
				{
					sts=false;
					$("#mobile").css({"border":"1px solid red"});
				}else{
					$("#mobile").css({"border":""});
				}
				
				if(email=="")
				{
					sts=false;
					$("#email").css({"border":"1px solid red"});
				}else{
					$("#email").css({"border":""});
				}
				if(msg=="")
				{
					sts=false;
					$("#message").css({"border":"1px solid red"});
				}else{
					$("#message").css({"border":""});
				}
				
				if(sts==true)
				{
					var mydata={"n":name,"m":mobile,"e":email,"msg":msg};
					$.ajax({
						    url:"<?php echo BASEURL;?>home/savecontact",
							type:"POST",
							data:mydata,
							success:function(response)
							{
								$("#mymsg").html(response);
								//$("#mymsg").fadeOut(8000);
								$("#fname").val("");
							    $("#mobile").val("");
								$("#email").val("");
								$("#message").val("");								
							}
					});
				}
			});
			$("#btn2").click(function(){
				$("#fname").val("");
				$("#mobile").val("");
				$("#email").val("");
				$("#message").val("");								
			});
			
		});
    </script>	