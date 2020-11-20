<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Freelancebit</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- fevicon -->
        <link rel="icon" href="<?= base_url() ?>assets/img/logo_footer.png" type="image/gif" sizes="16x16">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/fonts.googleapis.com.css" />

	
		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/custom.css"/>

		
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/ace-rtl.min.css" />

		<!--<link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/datatables/dataTables.bootstrap.css" />  -->

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
         <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
		<script src="<?php echo base_url(); ?>admin_assets/js/ace-extra.min.js"></script>
	<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
		
	</head>


	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url();?>Admin/dashboard" class="navbar-brand">
						<small>
							<img src="<?php echo base_url(); ?>admin_assets/images/avatars/ps_logo.png" class="logo">
						</small>
					</a>
					<?php $result=$this->Admin_model->get_login_profile(); ?>

				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav nav-customizes">				
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<?php if((isset($result->profile_pic)) && ($result->profile_pic !='')){ ?>
								
								<img class="nav-user-photo" 
								src="<?php echo base_url(); ?>uploads/<?php echo $result->profile_pic; ?>" 
								alt="Jason's Photo" />
								
								<?php 	} 
								
								else{ ?>

									<img class="nav-user-photo" 
									src="<?php echo base_url(); ?>admin_assets/images/avatar4.png" alt="Jason's Photo" />

									<?php } ?>
								<span class="user-info">
									<small>Welcome,</small>

									<?php echo $result->fname; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="<?php echo base_url(); ?>Admin/profile">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>Admin/change_pwd">
										<i class="ace-icon fa fa-key"></i>
										Change Password
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url(); ?>Admin/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

