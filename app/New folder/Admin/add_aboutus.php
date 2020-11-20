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
   .add-desc-abtus {
    min-height: 70px;
    max-height: 150px;
    overflow: auto;
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
                  Add Team							
               </h1>
            </div>
            <!-- /.page-header -->
            <?php if($this->session->flashdata('message'))
               { ?>
            <div class="alert alert-success">
               <?php echo $this->session->flashdata('message'); ?>
            </div>
            <?php } ?>
            <form action="<?php echo base_url();?>Admin/add_about_data" method="post" id="addsubadminform11" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label>Team Type<span style="color:red">*</span></label>
                        <select name="teamtype" class="form-control" required>
                           <option value="">Select</option>
                           <option value="1">Freelancebit Team</option>
                           <option value="2">Contributors</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label>Title<span style="color:red">*</span></label>
                        <input type="text" id="title" name="title" value="" placeholder="Title" class="form-control" required>
                     </div>
                  </div>
                  
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label>Image<span style="color:red">*</span></label>
                        <input type="file" id="userfile" name="userfile" required>
                     </div>
                  </div>
				  
				  <div class="clearfix"></div>
				  <div class="col-sm-12">
								<label>Description<span style="color:red">*</span></label>
										  <textarea id="description" name="description" style="width:600px;" required>
												
											</textarea>
											<script>
												CKEDITOR.replace( 'description', {
													fullPage: true,
													allowedContent: true,
													extraPlugins: 'wysiwygarea',
													width: '950px'
												});
											</script> 
							</div>

               </div>


               <div class="margin-back-spaces"></div>
			 
                 <div class="col-sm-12">
                     <div class="form-group">
                        <button type ="submit" class="btn btnDefault">Submit</button>
                     </div>

                  </div>
              
            
            </form>
            <hr>
            <!-- ROW -->
            <div class="clearfix"></div>
            <div class="row">
               <div class="col-xs-12">
                  <div class="clearfix">
                     <div class="pull-right tableTools-container"></div>
                  </div>
                  <div class="table-header">
                     Team List			
                  </div>
                  <br>
                  <?php //print_r($adminlist);?>
                  <div>
                     <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Sr no</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Order</th>             
                              <th>Change Order </th>  
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <!--<tfoot>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact</th>
                              <th>Actions</th>
                           </tr>
                           </tfoot>-->
                        <tbody>
                           <?php if(count($list) > 0){
                              $i=1;
                              foreach($list as $data){ 
                              	$teamid = $data['id'];
                              	$team= array();
                              	$team=$this->Admin_model->get_team_list($teamid);
                              
                              ?>
                           <tr>
                              <td><?php echo $i;?></td>
                              <td><img src="<?php echo base_url();?>/uploads/aboutmain/<?php echo $data['image'];?>" height="50px" width="50px" ></td>
                              <td><?php echo $data['title'];?></td>
                              <td><div class="add-desc-abtus"><?php echo $data['description'];?></div>
                              </td>
                              <td><?php echo $data['order_by'];?></td>
                               <td>
                                 <button data-toggle="modal" data-target="#myModalorder<?php echo $data['id'];?>" class="btn btn-success btn-xs">Change Order</button>
                              </td>
                             
                              <td>
                                
								<a href="<?php echo base_url(); ?>Admin/about_view_addsubadmin/<?php echo $data['id'];?>">
                                 <span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
								 
								  <!--<span title="View"><button data-toggle="modal" data-target="#myModal<?php echo $data['id'];?>" class="btn btn-success btn-xs">Team Members</button></span>-->
								 
                                 <a href="<?php echo base_url(); ?>Admin/about_edit_addsubadmin/<?php echo $data['id'];?>">
                                 <span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
								 
                                 <a href="<?php echo base_url();?>Admin/about_admin_delete/<?php echo $data['id'];?>" onclick="return confirm('Are you sure, You want to delete this Team.');">
                                 <span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span></a>
                              </td>
                              <!-- Modal -->
                              <div id="myModalorder<?php echo $data['id'];?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                   <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Order</h4>
                                   </div>
                                   <div class="modal-body">
                                       <form action="<?php echo base_url();?>Admin/edit_order_data" method="post" id="addteam" enctype="multipart/form-data">         
                                          <div class="row">
                                             <div class="col-sm-4">
                                               <div class="form-group">
                                                 <label>Title</label>
                                                 <input type="text" id="title" name="title" value="<?php echo $data['title'];  ?>" class="form-control" readonly >                              
                                               </div>
                                             </div>
                                             <div class="col-sm-4">
                                               <div class="form-group">
                                                 <label>Order</label>
                                                 <input type="text" id="order_by" name="order_by" value="<?php echo $data['order_by'];  ?>" class="form-control" required >                              
                                               </div>
                                             </div>
                                              <input type="hidden" id="id" name="id" value="<?php echo $data['id'];?>" >  
                                             
                                             <div class="col-sm-4">
                                               <div class="form-group">
                                               <label>  </label>
                                                 <button type ="submit" class="btn btnDefault btn-changesubmits">Submit
                                                 </button>
                                               </div>
                                             </div> 
                                          </div> <!-- rows -->                                 
                                       </form>
                                       
                                   <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   </div>
                                 </div> <!-- first main body -->

                                </div> <!-- content -->
                              </div> <!-- dialog -->
                           </div>
                           </tr>
                           <!-- Modal -->
                           <div id="myModal<?php echo $data['id'];?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
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
                                                   <label>Full Name</label>
                                                   <input type="text" id="name" name="name" value="" placeholder="Full name" class="form-control" required >										 
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label>Designation</label>
                                                   <input type="text" id="designation" name="designation" value="" placeholder="Designation" class="form-control" required >										 
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label>Title</label>
                                                   <input type="text" id="title" name="title" value="" placeholder="Title" class="form-control" required >										 
                                                </div>
                                             </div>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <label>Description</label>
                                                   <textarea type="text" id="team_description" name="team_description" value="" placeholder="Description" class="form-control"required="required" ></textarea>
                                                </div>
                                             </div>
                                             <input type="hidden" id="aboutus_id" name="aboutus_id" value="<?php echo $data['id'];?>" >	
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                   <label>Image</label>
                                                   <input type="file" id="userfile" name="userfile" required>
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
                                       <?php //print_r($team);?>
									   
									   /////////////////////
                                       <div class="row ">
                                          <?php if(count($team) > 0){
                                             foreach($team as $teamdata){ ?>
                                          <div class="col-sm-4">
                                             <div class="meet_us_image">
                                                <div class="meet-buttons">
                                                   <button data-toggle="modal" data-target="#myModalteamedit<?php echo $teamdata['teamid'];?>" class="btn-edit-txts"><i class="fa fa-edit"></i></button>
                                                   <a href="<?php echo base_url();?>Admin/delete_team/<?php echo $teamdata['teamid'];?>"> <button class="btn-delete-txts"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
                                                                  <label>Full Name</label>
                                                                  <input type="text" id="name" name="name" value="<?php echo $teamdata['name'];?>" placeholder="Full name" class="form-control" required >										 
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                               <div class="form-group">
                                                                  <label>Designation</label>
                                                                  <input type="text" id="designation" name="designation" value="<?php echo $teamdata['designation'];?>" placeholder="Designation" class="form-control" required >										 
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                               <div class="form-group">
                                                                  <label>Title</label>
                                                                  <input type="text" id="title" name="title" value="<?php echo $teamdata['desctitle'];?>" placeholder="Title" class="form-control" required >										 
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                               <div class="form-group">
                                                                  <label>Description</label>
                                                                  <textarea type="text" id="team_description" name="team_description" value="" placeholder="Description" class="form-control"required="required" ><?php echo $teamdata['team_description'];?></textarea>
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                               <div class="form-group">
                                                                  <label>Old Image</label>
                                                                  <img src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata['teamimage']?>" style="width: 80px;">
                                                               </div>
                                                            </div>
                                                            <input type="hidden" id="id" name="id" value="<?php echo $teamdata['teamid'];?>" >
                                                            <input type="hidden" id="file_name" name="file_name" value="<?php echo $teamdata['teamimage'];?>" >	
                                                            <div class="col-sm-4">
                                                               <div class="form-group">
                                                                  <label>Image</label>
                                                                  <input type="file" id="userfile" name="userfile" >
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
                                       <!-- row -->    
                                       <!-- <div class="modal-footer">
                                          <button type="button" class="btn btn-default btn-default-modal-close" data-dismiss="modal">Close
                                          </button>
                                           </div>-->
                                    </div>
                                    <!-- first main body -->
                                 </div>
                                 <!-- content -->
                              </div>
                              <!-- dialog -->
                           </div>
                           <!-- first main modal -->
                           <?php $i++; } } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.page-content -->
      </div>
   </div>
   <!-- /.main-content -->
   <div class="footer">
      <div class="footer-inner">
         <div class="footer-content">
            <span class="bigger-120">
            <span class="blue bolder">Copyrights &copy; 2020</span>
            Freelancebit All rights reserved.
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