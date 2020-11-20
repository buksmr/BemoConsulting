<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Freelancebit|Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- fevicon -->
        <link rel="icon" href="<?= base_url() ?>assets/img/logo_footer.png" type="image/gif" sizes="16x16">

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
					<!--<div class="center">
				      <img src="admin_assets/images/Logo.jpg" class="img-fluid">
				    </div> -->

<div class="space-6"></div>

<div class="position-relative">
<div id="login-box" class="login-box visible widget-box no-border" style="top:88px;">
	<div class="widget-body">
		<div class="widget-main">

			<h4 class="header blue lighter bigger">
				
				Please Enter Your Information
			</h4>

				                
			<div class="space-6">
			</div>

			<form method="post" action="<?php echo base_url(); ?>Admin/admin_login">
				<fieldset>
						<?php
                                if($this->session->flashdata('error'))
                                { ?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                                <?php }
								
								if($this->session->flashdata('success'))
                                { ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php }
                                ?>
				
				   <label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="text" class="form-control" placeholder="Username" name="text_username" />
							<i class="ace-icon fa fa-user"></i> 
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="password" class="form-control" placeholder="Password" name="text_password" />
							 <i class="ace-icon fa fa-lock"></i> 
						</span>
					</label>

					<div class="space"></div>

					<div class="clearfix">
						<label class="inline">
							<input type="checkbox" class="ace" />
							<span class="lbl"> Remember Me</span>
						</label>

						<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
							<i class="ace-icon fa fa-key"></i>
							<span class="bigger-110">Login</span>
						</button>
					</div>

					<div class="space-4"></div>
				</fieldset>
			</form>

			<!-- <div class="social-or-login center">
				<span class="bigger-110">Or Login Using</span>
			</div>

			<div class="space-6"></div>

			<div class="social-login center">
				<a class="btn btn-primary">
					<i class="ace-icon fa fa-facebook"></i>
				</a>

				<a class="btn btn-info">
					<i class="ace-icon fa fa-twitter"></i>
				</a>

				<a class="btn btn-danger">
					<i class="ace-icon fa fa-google-plus"></i>
				</a>
			</div> -->
		</div><!-- /.widget-main -->

		<div class="toolbar clearfix">
			<div>
				<a href="#" data-target="#forgot-box" class="forgot-password-link">
					<i class="ace-icon fa fa-arrow-left"></i>
					I forgot my password
				</a>
			</div>

			<!-- <div>
				<a href="#" data-target="#signup-box" class="user-signup-link">
					I want to register
					<i class="ace-icon fa fa-arrow-right"></i>
				</a>
			</div> -->
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.login-box -->

<div id="forgot-box" class="forgot-box widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header red lighter bigger">
				<i class="ace-icon fa fa-key"></i>
				Reset Password
			</h4>

			<div class="space-6"></div>
			<p>
				Enter your email to receive password resetting instructions
			</p>

			<form method="post" action="<?php echo base_url(); ?>Admin/forget_pass">
				<fieldset>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" placeholder="Email" name="text_forget_email" />
							<i class="ace-icon fa fa-envelope"></i>
						</span>
					</label>
                    
					<div class="clearfix">
						<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
							<i class="ace-icon fa fa-lightbulb-o"></i>
							<span class="bigger-110">Send</span>
						</button>
					</div>
				
				</fieldset>
			</form>
		</div><!-- /.widget-main -->

		<div class="toolbar center">
			<a href="#" data-target="#login-box" class="back-to-login-link">
				Back to login
				<i class="ace-icon fa fa-arrow-right"></i>
			</a>
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.forgot-box -->

<div id="signup-box" class="signup-box widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header green lighter bigger">
				<i class="ace-icon fa fa-users blue"></i>
				New User Registration
			</h4>

			<div class="space-6"></div>
			<p> Enter your details to begin: </p>

			<form>
				<fieldset>
				
				    <label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" placeholder="First Name" />
							<i class="ace-icon fa fa-user"></i>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" placeholder="Last Name" />
							<i class="ace-icon fa fa-user"></i>
						</span>
					</label>
					
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" placeholder="Email" />
							<i class="ace-icon fa fa-envelope"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="text" class="form-control" placeholder="Username" />
							<i class="ace-icon fa fa-user"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="password" class="form-control" placeholder="Password" />
							<i class="ace-icon fa fa-lock"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="password" class="form-control" placeholder="Repeat password" />
							<i class="ace-icon fa fa-retweet"></i>
						</span>
					</label>

					<label class="block">
						<input type="checkbox" class="ace" />
						<span class="lbl">
							I accept the
							<a href="#">User Agreement</a>
						</span>
					</label>

					<div class="space-24"></div>

					<div class="clearfix">
						<button type="reset" class="width-30 pull-left btn btn-sm">
							<i class="ace-icon fa fa-refresh"></i>
							<span class="bigger-110">Reset</span>
						</button>

						<button type="button" class="width-65 pull-right btn btn-sm btn-success">
							<span class="bigger-110">Register</span>

							<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
						</button>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="toolbar center">
			<a href="#" data-target="#login-box" class="back-to-login-link">
				<i class="ace-icon fa fa-arrow-left"></i>
				Back to login
			</a>
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.signup-box -->
</div><!-- /.position-relative -->


</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.main-content -->
</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery-2.1.4.min.js"></script>

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
