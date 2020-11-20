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
							<li class="active">Edit Sub Category</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Edit Category						
							</h1>
						</div><!-- /.page-header -->

                    <form action="<?php echo base_url(); ?>Admin/update_subcat_opening" method="post" enctype="multipart/form-data">
						<input type="hidden" name="text_sub_cat_id" value="<?php echo $sub_cat_id; ?>">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Marketplace</label>
									<input type="text" id="" placeholder="" value="<?php echo $sub_cat->category_name; ?>" name="text_main_cat" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Category</label>
									<input type="text" id="" placeholder="Harry"  class="form-control" name="text_sub_cat_name" value="<?php echo $sub_cat->sub_cat_name_opening; ?>">
								</div>
							</div>
							
						 <input type="hidden" id=""   class="form-control" name="sub_cat_image_old" value="<?php echo $sub_cat->sub_cat_image_opening; ?>"> 
							
							 <div class="col-sm-3">
								<div class="form-group">
									<label>Category Image</label>
									<input type="file" id="userfile" name="userfile" >
								</div>
							</div> 
							
							<div class="col-sm-3">
								<div class="form-group">
								<?php if($sub_cat->sub_cat_image_opening !=''){ ?>
									<label>Old Image</label>
									<img height="100px" width="150px" src="<?php echo base_url();?>uploads/sub_category/<?php echo $sub_cat->sub_cat_image_opening; ?>">
								<?php } ?>
								</div>
							</div> 
							
                        
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
				    </form>

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			<?php include ("footer.php"); ?>
