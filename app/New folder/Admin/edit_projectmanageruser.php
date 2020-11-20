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

							<li href="#" >Edit project </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Edit project 						
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
									<label>Location</label>
									<input type="text" id="" placeholder="pune" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Budget</label>
									<input type="text" id="" placeholder="5000" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Attached Files</label>
									<input type="password" id="" placeholder="XXXXX" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Required skill</label>
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
									<label>Date Posted</label>
									<input type="password" id="" placeholder="10-1-2019" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Expiration Date</label>
									<input type="password" id="" placeholder="10-1-2019" disabled="" class="form-control">
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
