<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Freelancebit</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/ace.min.css" />

		
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/ace-rtl.min.css" />

		
	</head>

	<body class="login-layout" style="background-color:#D3D3D3;">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<!-- <div class="center">
								<img src="admin_assets/images/Logo.jpg" class="img-fluid">
							</div> -->

							<div class="space-6"></div>

	<div class="position-relative">
		<div id="login-box" class="login-box visible widget-box no-border" style="top:76px;">
			<div class="widget-body">
				<div class="widget-main">
					<h6 class="header blue lighter bigger">
						Use the form below to change your password. Your password cannot be the same as your username.
						
					</h6>

					<div class="space-6"></div>
					<?php if($this->session->flashdata('error'))
                  { ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                <?php } ?>
                <?php if($this->session->flashdata('success'))
                  { ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                <?php } ?>

					<form method="post" action="<?php echo base_url(); ?>Admin/change_password">
						<fieldset>
						    
							 <input type="password" class="input-lg form-control" name="text_current_pass" placeholder="Current Password" autocomplete="off" required> 
						     <div class="space-6"></div>
						   
						    <input type="password" class="input-lg form-control" name="text_new_pass" placeholder="New Password" autocomplete="off" required> 
						  
						  
						    <div class="space-6"></div>
						  
							<input type="password" class="input-lg form-control" name="text_confirm_pass"  placeholder="Confirm Password" autocomplete="off" required>
							
							 <div class="space-6"></div>
							 
							<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" 
							data-loading-text="Changing Password..." value="Change Password">
							
						</fieldset>
					</form>

					
				</div><!-- /.widget-main -->

			</div><!-- /.widget-body -->
		</div><!-- /.login-box -->

	

	
	</div><!-- /.position-relative -->

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?><?php echo base_url(); ?>admin_assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			
		</script>
	</body>
</html>
