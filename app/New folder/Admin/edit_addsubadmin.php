<?php include ("header.php"); ?>
<!--============ HEader End Here============-->


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!--============ Sidebar Satrt Here============-->
			 <?php include ("sidebar.php"); ?>
<!--============ Sidebar END Here============-->

<?php 
//print_r($admindata1);
	$permission=$this->db->query("SELECT * FROM tbl_admin_permission where admin_id ='".$admindata1->id."'")->row();
	//print_r($permission);
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url(); ?>Admin/index">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>Admin/view_addsubadmin">Add Administrator Account</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>Admin/edit_addsubadmin">Edit Administrator Account</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Edit Administrator Account								
							</h1>
						</div><!-- /.page-header -->
					<form action="<?php echo base_url();?>Admin/update_subadmin" method="post" id="editsubadminform">
						<div class="row">
						    <input id="id" name="id" value="<?php echo $admindata1->id;?>" type="hidden" />
							<input id="permission_id" name="permission_id" value="<?php echo $permission->permission_id;?>" type="hidden" />
						
						
							<div class="col-sm-3">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" id="username" name="username" placeholder="John" value="<?php echo $admindata1->username;?>" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" id="fname" name="fname" value="<?php echo $admindata1->fname;?>" class="form-control"><span class="errmsg fname"></span>
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="lname" name="lname" value="<?php echo $admindata1->lname;?>" class="form-control"><span class="errmsg lname"></span>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="email_id" name="email_id" value="<?php echo $admindata1->email_id;?>" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
							  <div class="form-group">
								 <label>Discord tag</label>
								 <input type="text" id="contact_no" name="contact_no"  placeholder="Discord tag"  class="form-control" value="<?php echo $admindata1->contact_no;?>" >
								 <span class="errmsg contact_no"> </span>
							  </div>
						   </div>
							
							

							<div class="col-sm-12">
								
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
										<input  class="ace ace-checkbox-2" type="checkbox" name="dashboard" value="1" <?php if($permission->dashboard == 1){ echo "checked";}?>>
										<span class="lbl">Dashboard
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<!--<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="subadmin" value="1" <?php if($permission->subadmin == 1){ echo "checked";}?>>
										<span class="lbl">Sub admin
										</span>
									</label>
								</div>
							</div> COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="user" value="1" <?php if($permission->user == 1){ echo "checked";}?>>
										<span class="lbl">User Management 
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="project" value="1" <?php if($permission->project == 1){ echo "checked";}?>>
										<span class="lbl">Project Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="content" value="1" <?php if($permission->content == 1){ echo "checked";}?>>
										<span class="lbl">Content Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="category" value="1" <?php if($permission->category == 1){ echo "checked";}?>>
										<span class="lbl">Category Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="review" value="1" <?php if($permission->review == 1){ echo "checked";}?>>
										<span class="lbl">Review Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="payment" value="1" <?php if($permission->payment == 1){ echo "checked";}?>>
										<span class="lbl">Payment Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="slider" value="1" <?php if($permission->slider == 1){ echo "checked";}?>>
										<span class="lbl">Slider Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="report" value="1" <?php if($permission->report == 1){ echo "checked";}?>>
										<span class="lbl">Report Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->
							
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
								<div class="checkbox">
									<label>
										<input  class="ace ace-checkbox-2" type="checkbox" name="donation" value="1" <?php if($permission->donation == 1){ echo "checked";}?>>
										<span class="lbl">Donation Management
										</span>
									</label>
								</div>
							</div><!-- COL2 -->

							
							<div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </div> 							
						</div><!-- ROW -->

						</form>

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



	<?php include ("footer.php"); ?>

<script>
        $("#editsubadminform").submit(function(e) { 			
		var flag = Array();
		var i = 0;
				
					
			
			
			
			if ($.trim($("#fname").val()) == "") {
				$(".fname").html("Please enter first name");
				flag[i] = false;
				i++;									
			}else{
				$(".fname").html("");
				flag[i] = true;
				i++;
			}
			
			if ($.trim($("#lname").val()) == "") {
				$(".lname").html("Please enter last name");
				flag[i] = false;
				i++;									
			}else{
				$(".lname").html("");
				flag[i] = true;
				i++;
			}
			
			
			/* var contact_no = $('#contact_no').val();
			if (isNaN($("#contact_no").val())) {
				$(".contact_no").html("Please enter valid contact no");
				flag[i] = false;
				i++;
			}else if ($.trim($("#contact_no").val()) != "") {
				if (contact_no.length != 10) {
					$(".contact_no").html("Please enter 10 digit contact no");
					flag[i] = false;
					i++;
				}
			}else{
				$(".contact_no").html("");
				flag[i] = true;
				i++;
			} */
			
			
				var n = 0;
				for(var j=0;j<flag.length;j++){
					if(flag[j] == false){
						n++;
					}else{

					}
				}
				
				if(n>0){
					return false;
				}else{
				
					return true;
				}
    });	

	</script>	
