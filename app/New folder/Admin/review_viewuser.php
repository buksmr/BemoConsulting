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
								<a href="<?php echo base_url(); ?>Admin/reviews_mgt">Review Management</a>
							</li>
							<li href="<?php echo base_url(); ?>Admin/review_viewuser" >View Review Management	</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Review Management						
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Rating</label>
									<input type="text" id="" placeholder="Rating" class="form-control" disabled="">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Comments</label>
									<input type="text" id="" placeholder="Comments" class="form-control" disabled="">
								</div>
							</div>
							

							

							

                        


							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Submit</button>
								</div>
							</div>
						</div>
				

					

						

						

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>