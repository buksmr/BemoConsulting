<?php include ("header.php"); ?>


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
							<li class="active">Profile</li>

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Profile							
							</h1>
							<?php if($this->session->flashdata('success'))
                  { ?>
                        <div class="alert alert-info">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                <?php } ?> 
						</div><!-- /.page-header -->
                       <form method="post" action="<?php echo base_url(); ?>Admin/update_profile" enctype='multipart/form-data'>
						<div class="row">	
							<!--<div class="proImg">
								<img src="admin_assets/images/avatars/1.jpg">
							</div>-->	 								
							<div class="col-sm-3">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" value="<?php echo $login_profile_data->username; ?>" placeholder="First Name"  class="form-control" disabled>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" value="<?php echo $login_profile_data->fname; ?>" placeholder="First Name" name="text_firstname" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" value="<?php echo $login_profile_data->lname; ?>" placeholder="Last Name" name="text_lastname" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" value="<?php echo $login_profile_data->email_id; ?>" placeholder="Email" name="text_emailid" class="form-control" required>
								</div>
							</div>
							<div class="col-sm-3">	
								<div class="form-group">
										<label>Upload</label>
										<input type="file" class="form-control" name="userfile" id="id-input-file-2"  />
								</div>		
							</div>	
						
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btnDefault">Save</button>
								</div>
							</div>
						</div>						
					   </form>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	<?php include ("footer.php"); ?>		
