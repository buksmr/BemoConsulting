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
								<a href="<?php echo base_url(); ?>Admin/project_admin_mgt">Project Management</a>
							</li>

							<li href="#" >View Project Opening</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Project 					
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Project Title</label>
									<input type="text" id="" placeholder="Freelancebit" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Category of the project</label>
									<input type="text" id="" placeholder="Subproject" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Packages</label>
									<input type="text" id="" placeholder="Annualy" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Price</label>
									<input type="password" id="" placeholder="10000" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Delivery Time</label>
									<input type="password" id="" placeholder="Technology" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Describe </label>
									<input type="password" id="" placeholder="loremtext" disabled="" class="form-control">
								</div>
							</div>


							<div class="col-sm-3">
								<div class="form-group">
									<label>Add Free Package</label>
									<input type="password" id="" placeholder="XXXX" disabled="" class="form-control">
								</div>
							</div>


							<div class="col-sm-3">
								<div class="form-group">
									<label>Uploaded branding images and videos</label>
									<input type="password" id="" placeholder="XXXXX" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Price & Title</label>
									<input type="password" id="" placeholder="1256" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Revisions</label>
									<input type="password" id="" placeholder="XXXX" disabled="" class="form-control">
								</div>
							</div>

                        


							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
				

					

						

						

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	<?php include ("footer.php"); ?>		
