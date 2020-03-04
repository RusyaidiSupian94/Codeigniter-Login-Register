<body>
	<div><h2>Register user</h2></div>

	<form role="form" action="<?php echo site_url();?>Register/signupf" method="POST" class="mb-30">
        <?php echo $this->session->flashdata('msg');?>
        <div role="form">
			<div class="row">
		    	<div class="col-sm-12">
		        	<div class="form-group">
		                <label for="fname">Full Name <span class="text-danger"></span></label>
		                <input id="f_name" name="f_name" type="text" class="form-control" placeholder="Sarah binti Kasim" required="">
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
		        	<div class="form-group">
		                <label for="lname">Last Name <span class="text-danger"></span></label>
		                <input id="l_name" name="l_name" type="text" class="form-control" placeholder="Sarah" required="">
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
		        	<div class="form-group">
		                <label for="email">Email <span class="text-danger"></span></label>
		                <input id="email" name="email" type="email" class="form-control" placeholder="sarah@gmail.com" required="">
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
		        	<div class="form-group">
		                <label for="password">Password <span class="text-danger"></span></label>
		                <input id="password" name="password" type="password" class="form-control" placeholder="cth:1234Abcd" required="">
		            </div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
		        	<div class="form-group">
		                <label for="passconf">Confirm Password <span class="text-danger"></span></label>
		                <input id="passconf" name="passconf" type="password" class="form-control" placeholder="cth:1234Abcd" required="">
		            </div>
		        </div>
		    </div>
		    <div class="pt-3 text-center">
		        <button type="submit" class="btn btn-gradient-success btn-block btn-lg"><!-- btn-icon  -->
		            Submit
		            <!-- <i class="fa fa-cog"></i> Submit -->
		        </button>
			</div>
		 </div>
	</form>
	<div class="pt-3 text-center">
		
		<a href="<?php echo base_url(); ?>Menu">
			<button type="submit" class="btn btn-gradient-success btn-block btn-lg"><!-- btn-icon  -->
		    	Back
		    <!-- <i class="fa fa-cog"></i> Submit -->
			</button>
		</a>
	</div>
</body>