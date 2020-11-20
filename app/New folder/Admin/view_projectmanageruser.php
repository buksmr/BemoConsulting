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
								<a href="<?php echo base_url(); ?>Admin/project_admin_mgt_opening">Opening Project Management</a>
							</li>

							<li href="#" >View Opening Project </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Opening Project 
								<a href="<?php echo base_url(); ?>Admin/project_admin_mgt_opening"><div class="pull-right">
									
                                  <button class="btn btnDefault" type="submit">Back
                                  </button>

								</div>	</a>
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Project Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_opening_details['basic_data']->title; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Category</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_opening_details['basic_data']->category_name; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Budget</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_opening_details['basic_data']->budget; ?>">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Expiration Date for project opening</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_opening_details['basic_data']->expiration_date_proj_opening; ?>">
								</div>
							</div>

							

							


							<div class="col-sm-3">
								<div class="form-group">
									<label>Date Posted</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_opening_details['basic_data']->created_date; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Describe Project</label>
								
									<textarea class="form-control" disabled=""><?php echo $proj_opening_details['basic_data']->describe_proj; ?></textarea>
								</div>
							</div>

						

                        
						</div>

						<div class="row">
								<div class="form-group">
									 <?php foreach ($proj_opening_details['media_data'] as  $value) { ?>
					                        <div class="col-sm-2">
					                          
					                           <img style="width: 100%;" src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
					                        </div>
					                        <?php } ?>
						   </div>
						</div>
				

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	<?php include ("footer.php"); ?>		
