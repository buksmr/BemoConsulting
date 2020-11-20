<?php include ("header.php"); ?>
<!--============ HEader End Here============-->


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!--============ Sidebar Satrt Here============-->
			<?php include ("sidebar.php"); ?>
<!--============ Sidebar END Here============-->


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url(); ?>Admin/index">Home</a>
							</li>														
							<li class="active">Super Administrator </li>

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Super Administrator 						
							</h1>
						</div><!-- /.page-header -->

						<div class="row">	
							<!-- <div class="proImg">
								<img src="admin_assets/images/avatars/1.jpg">
							</div>	-->								
							<div class="col-sm-3">
								<div class="form-group">
									<label>Name</label>
									<input type="text" id="" placeholder="Jhon" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="" placeholder="Smith" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="" placeholder="jhon@emial.com" class="form-control">
								</div>
							</div>
							
						
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
				

						<div class="page-header">
							<h1>
								Change Password							
							</h1>
						</div><!-- /.page-header -->

						<div class="row">	
												
							<div class="col-sm-3">
								<div class="form-group">
									<label>Old Password</label>
									<input type="password" id="" placeholder="Enter Old Password" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>New Password</label>
									<input type="password" id="" placeholder="Enter New Password" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" id="" placeholder="Confirm Password" class="form-control">
								</div>
							</div>
						
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Update Password</button>
								</div>
							</div>
						</div>
				

						<div class="clearfix"></div>
						

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>
