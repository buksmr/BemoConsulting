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

								<a href="<?php echo base_url(); ?>Admin/manageuser">
								Manage user</a>

							</li>

							

							<li href="<?php echo base_url(); ?>Admin/edit_manageruser" >Edit User Details</li>

						</ul><!-- /.breadcrumb -->

					</div>



					<div class="page-content">

						<div class="page-header">

							<h1>

								Edit User Details							
                              
                             <div class="user-rights">
							<a href="<?php echo base_url(); ?>Admin/manageuser">
								<button type="submit" class="btn btnDefault">Back</button></a>
							</div> 
							</h1>

						</div><!-- /.page-header -->

  <form method="post" action="<?php echo base_url(); ?>Admin/update_user">

    <input type="hidden" name="text_user_id" value="<?php echo $user_id; ?>">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" id=""  value="<?php echo $user_data->first_name; ?>"  name="text_first_name" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id=""  value="<?php echo $user_data->last_name; ?>"  name="text_last_name" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email ID</label>
									<input type="text" id="" placeholder=""  class="form-control"  value="<?php echo $user_data->email_id; ?>" readonly>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Username</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->username; ?>"  class="form-control" readonly>
								</div>
							</div>
							
                       
						</div>
				

				        <div class="row">

				        	<div class="col-sm-3">
								<div class="form-group">
									<label>Display Name</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->display_name; ?>" name="text_display_name"  class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Country</label>
									<select class="form-control" id="country" name="select_country">
										<option value="">Select Country</option>
										<?php foreach ($country as  $value) { 
                                          if($user_data->country_id == $value['id']){ ?>
                                            <option value="<?php echo  $value['id']; ?>" selected><?php echo  $value['name']; ?></option>
                                          <?php }else{ ?>
                                            <option value="<?php echo  $value['id']; ?>"><?php echo  $value['name']; ?></option>
                                         <?php }
										?>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>State</label>
									<select name="state" id="state" class="form-control">
										<?php if($user_data->state_name){ ?>
                                         <option value="<?php echo $user_data->state_id; ?>"><?php echo $user_data->state_name; ?></option>
										<?php }else{ ?>
                                          <option value="">Select State</option>
										<?php } ?>
				                    </select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>City</label>
									 <select name="city" id="city" class="form-control">
									 	<?php if($user_data->city_name){ ?>
                                         <option value="<?php echo $user_data->city_id; ?>"><?php echo $user_data->city_name; ?></option>
										<?php }else{ ?>
                                         <option value="">Select City</option>
										<?php } ?>
			                              
			                         </select>
								</div>
							</div>
							
                       
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<input type="text" id="" placeholder="" value="<?php echo $user_data->description; ?>" name="text_description" class="form-control">
								</div>
							</div>
							
						</div>
						



						<div class="clearfix"></div>

		
                        <input type="submit" class="btn btn-primary" name="">

</form>


					</div><!-- /.page-content -->

				</div>

			</div><!-- /.main-content -->
 
<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Front/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#city').html('<option value="">Select City</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Front/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});
</script>

	<?php include ("footer.php"); ?>		

