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
							<li>
								<a href="<?php echo base_url(); ?>Admin/manageuser">Manage User</a>
							</li>
							<li href="<?php echo base_url(); ?>Admin/view_manageruser" >View User</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View User	

							<div class="user-rights">
							<a href="<?php echo base_url(); ?>Admin/manageuser">
								<button type="submit" class="btn btnDefault">Back</button></a>
							</div>								
							</h1>
                            
                            
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->first_name; ?>" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->last_name; ?>" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email Id</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control"  value="<?php echo $user_data->email_id; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Username</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->username; ?>" disabled="" class="form-control">
								</div>
							</div>
							
                       
						</div>
				

				        <!--<div class="row">
				        	<div class="col-sm-3">
								<div class="form-group">
									<label>Display Name</label>
									<input type="password" id="" placeholder="" value="<?php echo $user_data->display_name; ?>" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Country</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->country_name; ?>" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>State</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control"  value="<?php echo $user_data->state_name; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->city_name; ?>" disabled="" class="form-control">
								</div>
							</div>
							
                       
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<input type="password" id="" placeholder="" value="<?php echo $user_data->description; ?>" disabled="" class="form-control">
								</div>
							</div>
						</div>-->

					

						

						

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	<?php include ("footer.php"); ?>		
