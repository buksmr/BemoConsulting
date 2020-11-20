<?php include ("header.php"); ?>
<style>
	.errmsg{color:red;}
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
               <li class="active">Create Administrator Account</li>
            </ul>
            <!-- /.breadcrumb -->
         </div>
         <div class="page-content">
            <div class="page-header">
               <h1>
                  Create Administrator Account								
               </h1>
            </div>
            <!-- /.page-header -->
			 <?php if($this->session->flashdata('message'))
            { ?>
         <div class="alert alert-success">
            <?php echo $this->session->flashdata('message'); ?>
         </div>
         <?php } ?>

            <form action="<?php echo base_url();?>Admin/add_subadmin_data" method="post" id="addsubadminform">			
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" id="username" name="username" value="" placeholder="Username" class="form-control">
					 <span class="errmsg username"> </span>
                  </div>
               </div>
			   
			   <div class="col-sm-4">
                  <div class="form-group">
                     <label>First name</label>
                     <input type="text" id="fname" name="fname" value="" placeholder="First name" class="form-control">
					 <span class="errmsg fname"> </span>
                  </div>
               </div>
			   
			   <div class="col-sm-4">
                  <div class="form-group">
                     <label>Last name</label>
                     <input type="text" id="lname" name="lname" value="" placeholder="Last name" class="form-control">
					 <span class="errmsg lname"> </span>
                  </div>
               </div>
			 </div> <!-- rows -->  
			 
			 <div class="row">
			   
               <div class="col-sm-4">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" id="email_id" name="email_id" value="" placeholder="Email" class="form-control">
					 <span class="errmsg email_id"> </span>
                  </div>
               </div>
			   
			   <div class="col-sm-4">
                  <div class="form-group">
                     <label>Discord tag</label>
                     <input type="text" id="contact_no" name="contact_no" value="" placeholder="Discord tag"  class="form-control">
					 <span class="errmsg contact_no"> </span>
                  </div>
               </div>
               
               <div class="col-sm-4">
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" id="password" name="password" value="" placeholder="Password" class="form-control">
					 <span class="errmsg password"> </span>
                  </div>
               </div>
			   
			   </div> <!-- rows -->
			   <div class="row">
				   <div class="col-sm-4">
					  <div class="form-group">
						 <label>Confirm password</label>
						 <input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm password" class="form-control">
						  <span class="errmsg confirm_password"> </span>
					  </div>
				   </div>
               
            </div>
			
            <div class="page-header">
               <h1>
                  Administrator permissions							
               </h1>
            </div>
            <!-- /.page-header -->
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="dashboard" value="1">
							<span class="lbl">Dashboard
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<!--<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="subadmin" value="1">
							<span class="lbl">Sub admin
							</span>
						</label>
					</div>
				</div>  -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="user" value="1">
							<span class="lbl">User Management 
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="project" value="1">
							<span class="lbl">Project Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="content" value="1">
							<span class="lbl">Content Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="category" value="1">
							<span class="lbl">Marketplace Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="review" value="1">
							<span class="lbl">Review Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="payment" value="1">
							<span class="lbl">Payment Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="slider" value="1">
							<span class="lbl">Slider Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="report" value="1">
							<span class="lbl">Report Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
					<div class="checkbox">
						<label>
							<input  class="ace ace-checkbox-2" type="checkbox" name="donation" value="1">
							<span class="lbl">Donation Management
							</span>
						</label>
					</div>
				</div><!-- COL2 -->
				
				
				
            </div>
			<br>
			<div class="row">
			<div class="col-sm-12">
                  <div class="form-group">
                     <button type ="submit" class="btn btnDefault">Submit</button>
                  </div>
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
                     Administrator List			
                  </div>
				  <br>
				  <?php //print_r($adminlist);?>
                  <div>
                     <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Username</th>
                              <th>Full Name</th>
                              <th>Email</th>
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
						
						<?php if(count($adminlist) > 0){
							foreach($adminlist as $list){ ?>
                           <tr>
                              <td><?php echo $list['username'];?></td>
                              <td><?php echo $list['fname'] .' '. $list['lname'];?></td>
                              <td><?php echo $list['email_id'];?></td>
                              <td>
                                 <a href="<?php echo base_url(); ?>Admin/view_addsubadmin/<?php echo $list['id'];?>">
                                 <span title="View"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
								 
                                 <a href="<?php echo base_url(); ?>Admin/edit_addsubadmin/<?php echo $list['id'];?>">
                                 <span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
								 
								 <a href="<?php echo base_url();?>Admin/admin_delete/<?php echo $list['id'];?>" onclick="return confirm('Are you sure, You want to delete this administator.');">
                                 <span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span></a>
                              </td>
                           </tr>
						   
						<?php } } ?>
                           
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
				
					
			if ($.trim($("#username").val()) == "") {
				$(".username").html("Please enter user name");
				flag[i] = false;
				i++;									
			}else{
				$(".username").html("");
				flag[i] = true;
				i++;
			}
			
			
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
			
			
			var Emailid = $('#email_id').val();
			var regex = /^([a-z0-9_.+-])+\@(([a-z0-9-])+\.)+([a-z0-9]{2,4})+$/;
			if ($.trim($("#email_id").val()) == "") {
				$(".email_id").html("Please enter email Id ");
				flag[i] = false;
				i++;
			}if (!regex.test(Emailid)){
			   $(".email_id").html("Please enter valid email Id");
				flag[i] = false;
				i++;
			}else{ // alert("email");
				 $(".email_id").html("");
				flag[i] = true;
				i++;
			}
			
			var password= $("#password").val();
			var confirm_password= $("#confirm_password").val();
			
			if(password ==''){
			 
				$(".password").html("Please enter password");
				flag[i] = false;
				i++;
			}else if(password.length < 5)
			{
				$(".password").html("Please enter minimum 5 digit password");
				flag[i] = false;
				i++;
			}else {
				$(".password").html("");
				flag[i] = true;
				i++;
			} 
				
					
			if(confirm_password ==''){ 
				$(".confirm_password").html("Please enter confirm password");
				flag[i] = false;
				i++;
			}else if(confirm_password != password){ 
				$(".confirm_password").html("Password does not match the confirm password");
				flag[i] = false;
				i++;
				
			}else{
				$(".confirm_password").html("");
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