<body>
	<div class="text-center">
		<div class="mb-20"><?php echo $this->session->flashdata('msg');?></div>
	
		<div class="text-dark mx-auto" style="width: 200px;"><h2>Profile here</h2></div>
		<div class="text-info mx-auto" style="width: 200px;"><?php echo $this->session->userdata('f_name');?></div>
		<div class="text-info mx-auto" style="width: 200px;"><?php echo $this->session->userdata('l_name');?></div>
		<div class="text-info mx-auto" style="width: 200px;"><?php echo $this->session->userdata('email');?></div>
		<!-- <?php echo $this->session->userdata('password');?><br> -->
		<a class="dropdown-item mb-20" href="<?php echo site_url('Login/logout');?>"><i class="icon-Power"></i> <button>logout</button></a>
	</div>
</body>