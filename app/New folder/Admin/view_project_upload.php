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
								<a href="<?php echo base_url(); ?>Admin/project_admin_mgt">Project Management</a>
							</li>

							<li href="#" >View Project Upload</li>
						</ul><!-- /.breadcrumb -->
					</div>
<?php //print_r($proj_upload_details);?>
					<div class="page-content">
						<div class="page-header">
							<h1>
								View Project 
									
									<a href="<?php echo base_url(); ?>Admin/project_admin_mgt"><div class="pull-right">
									
                                  <button class="btn btnDefault" type="submit">Back
                                  </button>

								</div>	</a>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Project Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['basic_data']->title; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Category of the project</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['basic_data']->category_name; ?>">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Sub Category of the project</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['basic_data']->subcatname; ?>">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
								<label  class="pro_title"  for="">Select Location</label>
								<select class="form-control"  name="select_location" id="select_location" readonly >
								<option value="">Select</option>
								<?php  foreach ($country_list as  $con) { ?>
									<option value="<?php echo $con['id']; ?>" <?php if(($con['id'])==($proj_upload_details['basic_data']->location)){echo 'selected="selected"';}?>><?php echo $con['name']; ?></option>
								<?php } ?>
								</select>
								
								</div> 
							</div> 
					
					        <div class="col-sm-3">
								<div class="form-group">
								  <label class="pro_title">Language</label>
								  <select class="form-control" id="language" name="language" readonly>
									<option value="">Select</option>
									<option value="1" <?php if($proj_upload_details['basic_data']->language == 1){echo 'selected="selected"';} ?> >English</option>
									<option value="2" <?php if($proj_upload_details['basic_data']->language == 2){echo 'selected="selected"';} ?> >Hindi</option>
									<option value="3" <?php if($proj_upload_details['basic_data']->language == 3){echo 'selected="selected"';} ?>>French</option>
								  </select>
								</div> 
							</div> 
							
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Create Date</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['basic_data']->created_date; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
								<textarea disabled="" class="form-control"><?php echo $proj_upload_details['basic_data']->description; ?></textarea>
								</div>
							</div>
						
						</div>
			
						<div class="clearfix"></div>
						<div class="page-header"><h1>Free Package</h1></div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_free'][0]['title']; ?>">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Revision</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_free'][0]['revision']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Delivery Time</label>
									<!--<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_free'][0]['delivery_time']; ?>">-->
									
										<select name="select_free_pack_delivtime" class="form-control" disabled>
										<option value="" ></option>
											<?php foreach ($delivery_time as  $value2) { ?>
											
												<option value="<?php echo $value2['id']; ?>" <?php echo $proj_upload_details['package_data_free'][0]['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
										  <?php } ?>
									  </select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<textarea disabled="" class="form-control"><?php echo $proj_upload_details['package_data_free'][0]['description']; ?></textarea>
									
								</div>
							</div>
						
					   </div>

					   <div class="clearfix"></div>
					   <div class="page-header"><h1>Other Package</h1></div>

					    <div class="row">
					    	<h5>Package 1 - <?php echo $proj_upload_details['package_data_other'][0]['price']; ?> €</h5>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][0]['title']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Revision</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][0]['revision']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Delivery Time</label>
									<!--<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][0]['delivery_time']; ?>">--->
									
									<select name="select_free_pack_delivtime" class="form-control" disabled>
									<option value="" ></option>
											<?php foreach ($delivery_time as  $value2) { ?>
												<option value="<?php echo $value2['id']; ?>" <?php echo $proj_upload_details['package_data_other'][0]['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
										  <?php } ?>
									  </select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<textarea disabled="" class="form-control"><?php echo $proj_upload_details['package_data_other'][0]['description']; ?></textarea>
									
								</div>
							</div>
						</div>
		                <div class="row">
					    	<h5>Package 2 - <?php echo $proj_upload_details['package_data_other'][1]['price']; ?> €</h5>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][1]['title']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Revision</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][1]['revision']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Delivery Time</label>
									<!--<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][1]['delivery_time']; ?>">-->
									
									<select name="select_free_pack_delivtime" class="form-control" disabled>
									<option value="" ></option>
											<?php foreach ($delivery_time as  $value2) { ?>
												<option value="<?php echo $value2['id']; ?>" <?php echo $proj_upload_details['package_data_other'][1]['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
										  <?php } ?>
									  </select>
									  
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<textarea disabled="" class="form-control"><?php echo $proj_upload_details['package_data_other'][1]['description']; ?></textarea>
									
								</div>
							</div>
						</div>
						<div class="row">
					    	<h5>Package 3 - <?php echo $proj_upload_details['package_data_other'][2]['price']; ?> €</h5>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Title</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][2]['title']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Revision</label>
									<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][2]['revision']; ?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Delivery Time</label>
									<!--<input type="text" id="" placeholder="" disabled="" class="form-control" value="<?php echo $proj_upload_details['package_data_other'][2]['delivery_time']; ?>">-->
									
									<select name="select_free_pack_delivtime" class="form-control" disabled>
									<option value="" ></option>
											<?php foreach ($delivery_time as  $value2) { ?>
												<option value="<?php echo $value2['id']; ?>" <?php echo $proj_upload_details['package_data_other'][2]['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
										  <?php } ?>
									  </select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Description</label>
									<textarea disabled="" class="form-control"><?php echo $proj_upload_details['package_data_other'][2]['description']; ?></textarea>
									
								</div>
							</div>
						</div>
					   <div class="clearfix"></div>
					   <div class="page-header"><h1>Images</h1></div>
					   <div class="row">
								<div class="form-group">
									<?php foreach ($proj_upload_details['media_data'] as  $value) { ?>
					                        <div class="col-sm-2">
					                          
					                           <img style="width: 100%;" src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
					                        </div>
					                        <?php } ?>
									
								</div>
							
					   </div>
		
 
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	<?php include ("footer.php"); ?>		
