<?php include ("header.php"); ?>
<!--============ HEader End Here============-->
<?php 
//print_r($admindataview);
	$permission=$this->db->query("SELECT * FROM tbl_admin_permission where admin_id ='".$admindataview->id."'")->row();
	//print_r($permission);
?>

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
								<a href="<?php echo base_url(); ?>Admin/add_subadmin">Add Administrator Account</a>
							</li>
							<li>
							<a href="<?php echo base_url(); ?>Admin/edit_addsubadmin" >Edit Administrator Account</a></li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Administrator Account								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Username</label>
									<input type="text" id="username" name="username" placeholder="John" value="<?php echo $admindataview->username;?>" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>First name</label>
									<input type="text" id="fname" disabled="" name="fname" value="<?php echo $admindataview->fname;?>" class="form-control"><span class="errmsg fname"></span>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last name
									</label>
									<input type="text" id="lname"  disabled="" name="lname" value="<?php echo $admindataview->lname;?>" class="form-control"><span class="errmsg lname"></span>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Discord tag</label>
									<input type="text" id="contact_no"  disabled="" name="contact_no" value="<?php echo $admindataview->contact_no;?>" class="form-control"><span class="errmsg lname"></span>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="email_id" name="email_id" value="<?php echo $admindataview->email_id;?>" disabled="" class="form-control">
								</div>
							</div>
						</div>
				

					<div class="page-header">
							<h1>
								Administrator permissions							
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="dashboard" value="1" <?php if($permission->dashboard == 1){ echo "checked";}?>>
										<span class="lbl">Dashboard
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<!--<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="subadmin" value="1" <?php if($permission->subadmin == 1){ echo "checked";}?>>
										<span class="lbl">Sub admin
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="user" value="1" <?php if($permission->user == 1){ echo "checked";}?>>
										<span class="lbl">User Management 
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="project" value="1" <?php if($permission->project == 1){ echo "checked";}?>>
										<span class="lbl">Project Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="content" value="1" <?php if($permission->content == 1){ echo "checked";}?>>
										<span class="lbl">Content Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="category" value="1" <?php if($permission->category == 1){ echo "checked";}?>>
										<span class="lbl">Category Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="review" value="1" <?php if($permission->review == 1){ echo "checked";}?>>
										<span class="lbl">Review Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="payment" value="1" <?php if($permission->payment == 1){ echo "checked";}?>>
										<span class="lbl">Payment Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->	
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" disabled="" type="checkbox" name="slider" value="1" <?php if($permission->slider == 1){ echo "checked";}?>>
										<span class="lbl">Slider Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->	
							
							
							<div class="col-sm-12">
                                <div class="form-group">
                                   <a href="<?php echo base_url();?>Admin/add_subadmin"> <button class="btn btn-sm btn-primary">Back</button></a>
                                </div>
                            </div> 							
						</div><!-- ROW -->
						
						</div><!-- ROW -->

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>
