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
								<a href="<?php echo base_url(); ?>Admin/categoary_mgt">Category</a>
							</li>
							<li class="active" >View Category</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Category							
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Marketplace</label>
									<input type="text" id=""  disabled="" value="<?php echo $sub_cat->category_name; ?>" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Category</label>
									<input type="text" id="" placeholder="Harry" disabled="" class="form-control" value="<?php echo $sub_cat->sub_cat_name; ?>">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
								<?php if($sub_cat->sub_cat_image !=''){ ?>
									
									<img height="100px" width="150px" src="<?php echo base_url();?>uploads/sub_category/<?php echo $sub_cat->sub_cat_image; ?>">
								<?php } ?>
								</div>
							</div>
							
                        
							<div class="col-sm-12">
								<div class="form-group">
									<a href="<?php echo base_url();?>Admin/categoary_mgt" ><button class="btn btnDefault">Back</button></a>
								</div>
							</div>
						</div>
				
						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>