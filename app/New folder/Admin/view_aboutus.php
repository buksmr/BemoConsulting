<?php include ("header.php"); ?>
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
<style>
	.errmsg{color:red;}
	.meet-buttons {
    position: absolute;
    right: 15px;
    top: 1px;
   
}
.meet-buttons {
    position: absolute;
    right: 15px;
    top: 1px;
    
}
button.btn-delete-txts {
    color: red;
}
button.btn-edit-txts{
	  color: #428BCA;
}


</style>
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
               <li class="active">Freelancebit Team</li>
            </ul>
            <!-- /.breadcrumb -->
         </div>
         <div class="page-content">
            <div class="page-header">
               <h1>
                  View Team							
               </h1>
            </div>
            <!-- /.page-header -->
			 <?php if($this->session->flashdata('message'))
            { ?>
         <div class="alert alert-success">
            <?php echo $this->session->flashdata('message'); ?>
         </div>
         <?php } ?>
		
            <div class="row">
			
               <div class="col-sm-4">
                  <div class="form-group">
                     <label>Team Type</label>
						<select name="teamtype" class="form-control"  readonly>
							  <option value="">Select</option>
							  <option value="1" <?php if($list->teamtype == 1){echo 'selected="selected"';}?>>Freelancebit Team</option>
							  <option value="2" <?php if($list->teamtype == 2){echo 'selected="selected"';}?>>Contributors</option>
						</select>
                  </div>
               </div>
			   
			   
			   
			   <div class="col-sm-4">
                  <div class="form-group">
                     <label>Title</label>
                     <input type="text" id="title" name="title" value="<?php echo $list->title;?>" placeholder="Title" class="form-control" readonly>
					 
                  </div>
               </div>
			   
			   
			   <div class="col-sm-4">
                  <div class="form-group">
                     <label>Image</label>
                     <img src="<?php echo base_url();?>uploads/aboutmain/<?php echo $list->image;?>" width="100px" height="100px" >
					 
                  </div>
               </div>
			   
			   <input type="hidden" id="id" name="id" value="<?php echo $list->id;?>" >	
			   <input type="hidden" id="file_name" name="file_name" value="<?php echo $list->image;?>" >	
			   </div>
			  
			    <div class="clearfix"></div>
				<div class="row">
			   <div class="col-sm-12">
								<label>Description<span style="color:red">*</span></label>
										  <textarea id="description" name="description" style="width:600px;" readonly>
												<?php 
												if($list->description){
													echo $list->description;													
												}
												?>
											</textarea>
											<script>
												CKEDITOR.replace( 'description', {
													fullPage: true,
													allowedContent: true,
													extraPlugins: 'wysiwygarea',
													width: '900px'
												});
											</script> 
							</div>

                 <div class="margin-back-spaces"></div>
			   <div class="col-sm-4">
                  <div class="form-group">
                     <a href="<?php echo base_url();?>Admin/aboutus_mgmt"><button type ="button" class="btn btnDefault">Back</button></a>
                  </div>
               </div>
               </div>
			
			 <hr>
			
            <!-- ROW -->
            <div class="clearfix"></div>
			
            <?php //print_r($team);?>
			
		<div class="page-header">
               <h1>
                  View Team	Members	
				  <div class="pull-right">
                  <button data-toggle="modal" data-target="#addmodel" type="button" class="btn btnDefault">Add Team Member</button>	
                  </div>				  
               </h1>
			   <div class="clearfix"></div>
            </div>	
			<div class="row">
			
			
	  <?php if(count($team) > 0){
		 foreach($team as $teamdata){ ?>
	  <div class="col-sm-2">
		 <div class="meet_us_image">
			<div class="meet-buttons">
			   <button data-toggle="modal" data-target="#myModalteam<?php echo $teamdata['teamid'];?>" class="btn-edit-txts"><i class="fa fa-eye" aria-hidden="true"></i></button>
			   
			   <button data-toggle="modal" data-target="#myModalteamedit<?php echo $teamdata['teamid'];?>" class="btn-edit-txts"><i class="fa fa-edit"></i></button>
			   
			   <a href="<?php echo base_url();?>Admin/delete_team/<?php echo $teamdata['teamid'];?>/<?php echo $id;?>"> <button class="btn-delete-txts"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
			</div>
			<img data-toggle="modal" data-target="#myModalteam<?php echo $teamdata['teamid'];?>" src="<?php echo base_url();?>uploads/aboutteam/<?php echo $teamdata['teamimage'];?>" style="width:100%;">
			<h6 class="sandy_txt"><?php echo $teamdata['name'];?></h6>
		 </div>
		 <!-- meet us page -->
	  </div>
	  <!-- sm-3 -->
	  <!-- team details model start -->
	  <div class="modal" id="myModalteam<?php echo $teamdata['teamid'];?>">
		 <div class="modal-dialog modal-sub-dialog-us-team-member">
			<div class="modal-content modal_sub_content">
			   <div class="modal-header">
				  <h4 class="modal-title abt_modal_txt"><?php echo $teamdata['name'];?></h4>
				  <h5 class=" abt_modal_designation_txt"><?php echo $teamdata['designation'];?></h5>
			   </div>
			   <div class="modal-body modal-body-about-information">
				  <div class="row">
					 <div class="col-md-4">
						<div class="Leonard_img">
						   <img 
							  src="<?php echo base_url(); ?>assets/img/person.jpg" style="width: 143px;">
						</div>
					 </div>
					 <div class="col-md-8">
						<h4><?php echo $teamdata['desctitle'];?></h4>
						<p class="lorem_life_txt"><?php echo $teamdata['team_description'];?></p>
					 </div>
				  </div>
				  <!-- row -->
			   </div>
			   <!-- modal body -->
			</div>
			<!-- Modal footer  -->
			<div class="modal-footer modal-about-footer">
			   <button type="button" class="btn btn-danger btn-modal-close" data-dismiss="modal">Close</button>
			</div>
		 </div>
	  </div>
	  <!-- team details model end -->
	  <!-- team edit model start -->
	  <div class="modal bd-example-modal-lg" id="myModalteamedit<?php echo $teamdata['teamid'];?>">
		 <div class="modal-dialog modal-sub-dialog-us-team-member">
			<div class="modal-content modal_sub_content">
			   <div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title abt_modal_txt">Edit Team Member</h4>
			   </div>
			   <div class="modal-body modal-body-about-information">
				  <form action="<?php echo base_url();?>Admin/edit_team_data" method="post" id="addteam" enctype="multipart/form-data">
					 <div class="row">
						<div class="col-sm-4">
						   <div class="form-group">
							  <label><b>Full Name</b></label>
							  <input type="text" id="name" name="name" value="<?php echo $teamdata['name'];?>" placeholder="Full name" class="form-control" required >										 
						   </div>
						</div>
						<div class="col-sm-4">
						   <div class="form-group">
							  <label><b>Designation</b></label>
							  <input type="text" id="designation" name="designation" value="<?php echo $teamdata['designation'];?>" placeholder="Designation" class="form-control" required >										 
						   </div>
						</div>
						
						<input type="hidden" id="idmain" name="idmain" value="<?php echo $id;?>">
						<div class="col-sm-4">
						   <div class="form-group">
							  <label><b>Title</b></label>
							  <input type="text" id="title" name="title" value="<?php echo $teamdata['desctitle'];?>" placeholder="Title" class="form-control" required >										 
						   </div>
						</div>
						
						<div class="col-sm-4">
						   <div class="form-group">
							  <label><b>Old Image</b></label>
							  <img src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata['teamimage']?>" style="width: 80px;">
						   </div>
						</div>
						<input type="hidden" id="id" name="id" value="<?php echo $teamdata['teamid'];?>" >
						<input type="hidden" id="file_name" name="file_name" value="<?php echo $teamdata['teamimage'];?>" >	
						<div class="col-sm-4">
						   <div class="form-group">
							  <label><b>Image</label>
							  <input type="file" id="userfile" name="userfile" >
						   </div>
						</div>
						
						<div class="col-sm-12">
						   <div class="form-group">
							  <?php $idteamid= $teamdata['teamid'];?>
							  <label>Description<span style="color:red">*</span></label>
										  <textarea id="team_description<?php echo $idteamid;?>" name="team_description" style="width:500px;" readonly>
												<?php 
												if($teamdata['team_description']){
													echo $teamdata['team_description'];													
																										
												}
												?>
											</textarea>
											<script>
												CKEDITOR.replace( 'team_description<?php echo $idteamid;?>', {
													fullPage: true,
													allowedContent: true,
													extraPlugins: 'wysiwygarea',
													width: '800px'
												});
											</script> 
						   </div>
						</div>
						
						<div class="col-sm-12">
						   <div class="form-group">
							  <label>  </label>
							  <button type ="submit" class="btn btnDefault">Submit</button>
						   </div>
						</div>
					 </div>
					 <!-- rows --> 										  
				  </form>
			   </div>
			   <!-- modal body -->
			</div>
			<!-- Modal footer 
			   <div class="modal-footer modal-about-footer">
			   <button type="button" class="btn btn-danger btn-modal-close" data-dismiss="modal">Close</button>
			   </div> -->
		 </div>
	  </div>
	  <?php }  } ?>
   </div>
         </div>
         <!-- /.page-content -->
      </div>
   </div>
   
	<div id="addmodel" class="modal fade" role="dialog">
                              <div class="modal-dialog model_add_member">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Add Team</h4>
                                    </div>
                                    <div class="modal-body">
                                       <form action="<?php echo base_url();?>Admin/add_team_data" method="post" id="addteam" enctype="multipart/form-data">
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label><b>Full Name</b></label>
                                                   <input type="text" id="name" name="name" value="" placeholder="Full name" class="form-control" required >										 
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label><b>Designation</b></label>
                                                   <input type="text" id="designation" name="designation" value="" placeholder="Designation" class="form-control" required >										 
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label><b>Title</b></label>
                                                   <input type="text" id="title" name="title" value="" placeholder="Title" class="form-control" required >										 
                                                </div>
                                             </div>
											 
                                            
											 
                                             <input type="hidden" id="aboutus_id" name="aboutus_id" value="<?php echo $id;?>" >	
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <label><b>Image</b></label>
                                                   <input type="file" id="userfile" name="userfile" required>
                                                </div>
                                             </div>
											  <div class="col-sm-12">
                                                <div class="form-group">
												   <label><b>Description</b><span style="color:red">*</span></label>
													  <textarea id="add_team_description" name="add_team_description" style="width:500px;" readonly>
															
														</textarea>
														<script>
															CKEDITOR.replace( 'add_team_description', {
																fullPage: true,
																allowedContent: true,
																extraPlugins: 'wysiwygarea',
																width: '800px'
															});
														</script> 
                                                </div>
                                             </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label>  </label>
                                                   <button type ="submit" class="btn btnDefault">Submit</button>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- rows --> 										  
                                       </form>
                                       <hr>
                                      
                                    </div>
                                    <!-- first main body -->
                                 </div>
                                 <!-- content -->
                              </div>
                              <!-- dialog -->
                           </div>
   
   <!-- /.main-content -->
   <div class="footer">
      <div class="footer-inner">
         <div class="footer-content">
            <span class="bigger-120">
            <span class="blue bolder">Freelancebit</span>
            &copy; 2019-2020
            </span>
            &nbsp; &nbsp;
            <span class="action-buttons">
            <a href="#">
            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
            </a>
            <a href="#">
            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
            </a>
            <a href="#">
            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
            </a>
            </span>
         </div>
      </div>
   </div>
   <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
   <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
   </a>
</div>
<!-- /.main-container -->
<!-- basic scripts -->
<!-- <![endif]-->
<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
   if('ontouchstart' in document.documentElement) document.write("<script src='admin_assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
   
</script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.sparkline.index.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.resize.min.js"></script>
<!-- ace scripts -->
<script src="<?php echo base_url(); ?>admin_assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/ace.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {   
   $('#datatable').dataTable();  
   $("[data-toggle=tooltip]").tooltip();   
   
   });
   
   
   
</script>

 <script>
        $("#addsubadminform").submit(function(e) { 			
		var flag = Array();
		var i = 0;
				
					
			if ($.trim($("#title").val()) == "") {
				$(".title").html("Please enter title");
				flag[i] = false;
				i++;									
			}else{
				$(".title").html("");
				flag[i] = true;
				i++;
			}
			
			
			if ($.trim($("#description").val()) == "") {
				$(".description").html("Please enter description");
				flag[i] = false;
				i++;									
			}else{
				$(".description").html("");
				flag[i] = true;
				i++;
			}
			
			if ($.trim($("#userfile").val()) == "") {
				$(".userfile").html("Please select team file");
				flag[i] = false;
				i++;									
			}else{
				$(".userfile").html("");
				flag[i] = true;
				i++;
			}
			
			
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
		<script>
		$("#email_id").keyup(function(){
			
			var email_id = $(this).val();
			//alert(data);
			$.ajax({
                url: '<?php echo base_url();?>Admin/data_is_exist',
                type: "post",
                data: {table:'tbl_admin',colname:'email_id',dataval:email_id},
                success: function(msg) {
                    //alert(msg);
					if(msg == "1"){						
						$(".email_id").html("");
						$(".email_id").html("Email id already exist!");
						$("#email_id").focus();
						  $('#submit').prop('disabled', true);
						
					}else{
						$(".email_id").html(" ");
						$('#submit').prop('disabled', false);
					}
                }
            });
			
		});
		
		$("#username").keyup(function(){
			
			var username = $(this).val();
			//alert(data);
			$.ajax({
                url: '<?php echo base_url();?>Admin/data_is_exist',
                type: "post",
                data: {table:'tbl_admin',colname:'username',dataval:username},
                success: function(msg) {
                    //alert(msg);
					if(msg == "1"){						
						$(".username").html("");
						$(".username").html("User name already exist!");
						$("#username").focus();
						  $('#submit').prop('disabled', true);
						
					}else{
						$(".username").html("");
						$('#submit').prop('disabled', false);
					}
                }
            });
			
		});
		</script>
</body>
</html>