    
<div class="container">	
	<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">

	<form  action="<?php echo BASEURL;?>home/saveuser" method="POST">
					<h3 class="text-center"> Register </h3>
					<div class="form-group">
						
				<input type="text" class="form-control input-sm" placeholder="Full Name" name='fname'>
					</div>
					
					<div class="form-group">
				<input type="text" class="form-control input-sm"  placeholder="e-Mail Id" name="email">
				<div style="color:#FFF;"><em><?php echo $this->session->flashdata("emailerror");  ?></em></div>
					</div>
					
					<div class="form-group">
				<input type="password" class="form-control input-sm"  placeholder="Password" name='password'>
					</div>
					
					<div class="form-group">
			<input type="text" class="form-control input-sm" id="dob"  placeholder="Date Of Birth" name='dob'>
					</div>
					
					<div class="form-group text-center">
						<button class="btn btn-success" type="submit"> Register </button>
						<button class="btn btn-danger" type="reset"> clear </button>
						<br><br>
			</form>
						<a href="#" class="mylogin" title="If you are registered user, Please Click Here To Open Login Window">Login</a>
					</div>
			</div>
            <div class="col-sm-3">
        </div>
    </div>		