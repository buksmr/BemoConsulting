<?php include ("header3.php"); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'></script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/select2-view-uploading.css' 
rel='stylesheet' type='text/css'>



<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
   </div>
</section>
 

<section class="project_form">
   <div class="container-fluid ">
      <div class="container">
         <div class="row row h-100 justify-content-center align-items-center">

            <div class="col-8  form-pro-lbl-section">
                       

                              <h3 class="text-center packages"> View Gig </h3>
                              <?php
                                    //echo "<pre>";// 
                                    //print_r($view_data);
                              ?>
                                    
                              
               <div class="form-group">
                  <label for="" class="pro_title">GIG TITLE</label>
                  <input type="text" class="form-control" id="text_proj_title" name="text_proj_title" placeholder="Title of the gig" value="<?php echo $view_data['basic_data']->title; ?>" readonly>
                 
               </div>
               <div class="form-group">
                  <label for="" class="pro_title" >MARKETPLACE </label>
                  <select class="form-control" id="" name="select_category" readonly>
                     <option value="">Choose a Marketplace</option>
                      <?php foreach ($category_list as  $value) { ?>
                     <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->category)?"selected":"" ?>><?php echo $value['category_name']; ?></option>
                   <?php } ?>
                  </select>
                  
               </div>
			   
			   
				   <div class="form-group">
					<label  class="pro_title"  for=""> Category</label>
					<select class="form-control"  name="select_sub_category" id="select_sub_category" readonly>
					  <option value="">Select Category</option>
						 <?php 
						 $sub_category_list=$this->Front_model->get_sub_category_list($view_data['basic_data']->category);
						  foreach ($sub_category_list as  $value) { ?>
							<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->subcat_id)?"selected":"" ?>><?php echo $value['sub_cat_name']; ?></option>
						 <?php } ?>
					 </select>
				</div> 

				<?php 
				 $ids=explode(',',$view_data['basic_data']->specification_id);
				?>
				 
				<div class="form-group" id="selectspecification">
					<label  class="pro_title"  for="">Select Specification</label>
					<select class="form-control"  name="select_specification" multiple id="select_specification" readonly >
					  <option value="">Select Specification</option>
						 <?php 
						 $specification_list=$this->Front_model->get_specification($view_data['basic_data']->subcat_id);
						  foreach ($specification_list as  $value) { ?>
							<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>> <?php echo $value['specification_name']; ?></option>
						 <?php } ?>
					 </select>
				</div> 

					<div class="form-group" id="selectpresentation">
						<label  class="pro_title"  for="">Select Presentation</label>
						<select class="form-control"  name="select_presentation" id="select_presentation" readonly >
						  <option value="">Select Presentation</option>
							  <?php 
							   $presentation_list=$this->Front_model->get_presentation($view_data['basic_data']->subcat_id);
								
							  foreach ($presentation_list as  $prelist) { ?>
									<option value="<?php echo $prelist['id']; ?>" <?php if(($prelist['id'])==($view_data['basic_data']->presentation_id)){echo 'selected="selected"';}?>><?php echo $prelist['presentation_name']; ?></option>
								<?php } ?>
						 </select>
					</div> 

					<div class="form-group" id="selectstyle">
						<label  class="pro_title"  for="">Select Style</label>
						<select class="form-control"  name="select_style" id="select_style" readonly>
						<option value="">Select Style</option>
						<?php 
						$style_list=$this->Front_model->get_style($view_data['basic_data']->subcat_id);
						foreach ($style_list as  $slist) { ?>
							<option value="<?php echo $slist->id; ?>" <?php if(($slist->id)==($view_data['basic_data']->style_id)){echo 'selected="selected"';}?>><?php echo $slist->style_name; ?></option>
						<?php } ?>
						</select>
						
					</div> 
					
					<div class="form-group" id="selectgender">
			<label  class="pro_title"  for="">Select Gender</label>
			<select class="form-control"  name="select_gender" id="select_gender" readonly>
			<option value="">Select</option>
			<?php 
			$gender=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_gender');
			foreach ($gender as  $genderdata) { ?>
				<option value="<?php echo $genderdata['id']; ?>" <?php if(($genderdata['id'])==($view_data['basic_data']->gender_id)){echo 'selected="selected"';}?>><?php echo $genderdata['gender_name']; ?></option>
			<?php } ?>
			</select>
		</div> 
		
		<div class="form-group" id="selectpitch">
			<label  class="pro_title"  for="">Select Pitch</label>
			<select class="form-control"  name="select_pitch" id="select_pitch" readonly >
			<option value="">Select</option>
			<?php 
			$pitch_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_pitch');
			foreach ($pitch_list as  $plist) { ?>
				<option value="<?php echo $plist['id']; ?>" <?php if(($plist['id'])==($view_data['basic_data']->pitch_id)){echo 'selected="selected"';}?>><?php echo $plist['pitch_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectgenre">
			<label  class="pro_title"  for="">Select Genre</label>
			<select class="form-control"  name="select_genre" id="select_genre" readonly>
			<option value="">Select</option>
			<?php 
			$style_list11=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_genre');
			foreach ($style_list11 as  $slist11) { ?>
				<option value="<?php echo $slist11['id']; ?>" <?php if(($slist11['id'])==($view_data['basic_data']->genre_id)){echo 'selected="selected"';}?>><?php echo $slist11['genre_name']; ?></option>
			<?php } ?>
			</select>
			
		</div> 
		
		<div class="form-group" id="selectinstrument">
			<label  class="pro_title"  for="">Select Instrument</label>
			<select class="form-control"  name="select_instrument" id="select_instrument" readonly>
			<option value="">Select</option>
			<?php 
			$style_list12=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_instrument');
			foreach ($style_list12 as  $slist12) { ?>
				<option value="<?php echo $slist12['id']; ?>" <?php if(($slist12['id'])==($view_data['basic_data']->instrument_id)){echo 'selected="selected"';}?>><?php echo $slist12['instrument_name']; ?></option>
			<?php } ?>
			</select>
			
		</div>
		
		
		<div class="form-group" id="selectsoundeffectfor">
			<label  class="pro_title"  for="">Select Sound Effect For</label>
			<select class="form-control"  name="select_sound_effect_for" id="select_sound_effect_for" readonly>
			<option value="">Select</option>
			<?php 
			$soundlist=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_sound_effect_for');
			foreach ($soundlist as  $soundlist1) { ?>
				<option value="<?php echo $soundlist1['id']; ?>" <?php if(($soundlist1['id'])==($view_data['basic_data']->sound_effect_for_id)){echo 'selected="selected"';}?>><?php echo $soundlist1['sound_effect_for_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectplatform">
			<label  class="pro_title"  for="">Select Platform</label>
			<select class="form-control"  name="select_platform" id="select_platform" readonly>
			<option value="">Select</option>
			<?php 
			$platform_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_platform');
			foreach ($platform_list as  $platformslist) { ?>
				<option value="<?php echo $platformslist['id']; ?>" <?php if(($platformslist['id'])==($view_data['basic_data']->platform_id)){echo 'selected="selected"';}?>><?php echo $platformslist['platform_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectcodelanguage">
			<label  class="pro_title"  for="">Select Code Language</label>
			<select class="form-control"  name="select_code_language" id="select_code_language" readonly>
			<option value="">Select</option>
			<?php 
			$code_language_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_code_language');
			foreach ($code_language_list as  $code_languagelist) { ?>
				<option value="<?php echo $code_languagelist['id']; ?>" <?php if(($code_languagelist['id'])==($view_data['basic_data']->code_language_id)){echo 'selected="selected"';}?>><?php echo $code_languagelist->code_language_name; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectoperatingsystem">
			<label  class="pro_title"  for="">Select Operating System</label>
			<select class="form-control"  name="select_operating_system" id="select_operating_system" readonly>
			<option value="">Select</option>
			<?php 
			$operating_system_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_operating_system');
			foreach ($operating_system_list as  $oslist) { ?>
				<option value="<?php echo $oslist['id']; ?>" <?php if(($oslist['id'])==($view_data['basic_data']->operating_system_id)){echo 'selected="selected"';}?>><?php echo $oslist['operating_system_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttool">
			<label  class="pro_title"  for="">Select Tool</label>
			<select class="form-control"  name="select_tool" id="select_tool">
			<option value="">Select</option>
			<?php 
			$tool_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_tool');
			foreach ($tool_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->tool_id)){echo 'selected="selected"';}?>><?php echo $slist['tool_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectserviceinclude">
			<label  class="pro_title"  for="">Select Service Include</label>
			<select class="form-control"  name="select_service_include" id="select_service_include" readonly>
			<option value="">Select</option>
			<?php 
			$service_include_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_service_include');
			foreach ($service_include_list as  $service_includeslist) { ?>
				<option value="<?php echo $service_includeslist['id']; ?>" <?php if(($service_includeslist['id'])==($view_data['basic_data']->service_include_id)){echo 'selected="selected"';}?>><?php echo $service_includeslist['service_include_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttypeofvideo">
			<label  class="pro_title"  for="">Select Type Of Video</label>
			<select class="form-control"  name="select_type_of_video" id="select_type_of_video" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_type_of_video');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->type_of_video_id)){echo 'selected="selected"';}?>><?php echo $slist['type_of_video_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectagerange">
			<label  class="pro_title"  for="">Select Age Range</label>
			<select class="form-control"  name="select_age_range" id="select_age_range" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_age_range');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->age_range_id)){echo 'selected="selected"';}?>><?php echo $slist['age_range_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttext">
			<label  class="pro_title"  for="">Select Text</label>
			<select class="form-control"  name="select_text" id="select_text" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_text');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->text_id)){echo 'selected="selected"';}?>><?php echo $slist['text_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttopic">
			<label  class="pro_title"  for="">Select Topic</label>
			<select class="form-control"  name="select_topic" id="select_topic" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_topic');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->topic_id)){echo 'selected="selected"';}?>><?php echo $slist['topic_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttone">
			<label  class="pro_title"  for="">Select Tone</label>
			<select class="form-control"  name="select_tone" id="select_tone" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_tone');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->tone_id)){echo 'selected="selected"';}?>><?php echo $slist['tone_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectarticletype">
			<label  class="pro_title"  for="">Select Article Type</label>
			<select class="form-control"  name="select_article_type" id="select_article_type" readonly>
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($view_data['basic_data']->subcat_id,'tbl_article_type');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($view_data['basic_data']->article_type_id)){echo 'selected="selected"';}?>><?php echo $slist['article_type_name']; ?></option>
			<?php } ?>
			</select>
		</div>

					
					
					
					<div class="form-group">
                      <label class="pro_title">Language</label>
                      <select class="form-control" id="language" name="language" readonly>
                        <option value="">Select</option>
						
						<?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>" <?php if($view_data['basic_data']->language == $lng->id){echo 'selected="selected"';} ?>><?php echo $lng->language; ?></option>
						<?php } ?>
						
                      </select>
					  
					  <div class="form_error">
                    <?php echo form_error('language'); ?>
                  </div>
                    </div> 
					
					
					<div class="form-group">
						<label  class="pro_title"  for="">Select Location</label>
						<select class="form-control"  name="select_location" id="select_location" readonly >
						<option value="">Select</option>
                        <?php  foreach ($country_list as  $con) { ?>
							<option value="<?php echo $con->id; ?>" <?php if(($con->id)==($view_data['basic_data']->location)){echo 'selected="selected"';}?>><?php echo $con->name; ?></option>
						<?php } ?>
						</select>
						
					</div> 

			   
			   
			   
			   
			   <?php //print_r($view_data['media_data']);?>
               <label for="" class="pro_title">BRAND IMAGES AND ddVIDEOS</label>

               <div class="updatedBrandImg">
                  <div class="showImg">
                    
                       <?php foreach ($view_data['media_data'] as  $value) { ?>
                         <ul id="dynamicid<?php echo $value['id']; ?>">
						 <?php if($value['media_type'] =='image'){?>
							<li>                            
								<img src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
							</li>
						<?php }else{ ?>	
								<li>
								<!-- <iframe height="100%" width="100%" src="<-?php echo base_url(); ?>/uploads/<-?php echo $value['media']; ?>" controls  ></iframe> -->
								<video width="100%" height="100%" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>

								</li>
						<?php } ?>						
                         </ul>
                        <?php } ?>

                   
                     <div class="clearfix"></div>
                  </div>
             
               </div>

                <div class="margin-filesspace"></div>
              
                <div class="form-group">
					<label for="formGroupExampleInput" class="formGroupExampleInput">DESCRIBE YOUR GIG</label>
					<textarea class="form-control" rows="5" id="comment" name="text_description" readonly=""><?php echo $view_data['basic_data']->description; ?></textarea>
					<script>
						CKEDITOR.replace( 'text_description', {
							fullPage: true,
							allowedContent: true,
							extraPlugins: 'wysiwygarea',
							width: '665px'
						});
					</script>  
  
                 </div>  
                 
                  
                	
                  
               
        

         </div><!-- close div 8 -->
         </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="packages_amt">
   <div class="container-fluid">
      <div class="container">
     
       
           <h3 class="packages" style="text-align:center;">Free Packages</h3>
            <hr>



         
         <div class="row">

             <!--md 6 -->
            <div class="col-md-12 setPAckMain">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of free package -->

                  <?php foreach ($view_data['package_data_free'] as $value) { ?>
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
                              <span class="float-right first12-icon-section">
							  <a href="#" data-toggle="tooltip" data-placement="top" title="Package Free Information !">
                              <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre">
							  </a>
                              </span>
                              <input class="form-control font-mark-form" id="add_line" name="add_line" value="<?php echo $value['add_line']; ?>">
                                 
                           </th>
						   
						   
                           <td>
                              <!-- <input type="text" class="form-control" placeholder="Add price here" name="text_pack2_price"> -->
                              <input type="text" class="form-control" placeholder="Add title here"  name="text_free_pack_title" value="<?php echo $value['title']; ?>" readonly >
                           </td>
                        </tr>
						
						
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_free_pack_description" readonly ><?php echo $value['description']; ?></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_free_pack_revision" value="<?php echo $value['revision']; ?>" readonly ></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                              <select name="select_free_pack_delivtime" class="form-control" readonly>
                               <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
                                  <?php } ?>
                              </select>
                           </td>
                        </tr>
                     </tbody>
                  </table>

                  <?php } //package foreach ?>
                  <!-- end of free package -->
               </div>
               <!-- table responsive -->
            </div>
            <!--md 6 -->
           
            <!-- col-md-6 -->
         </div><br>
         <!-- addPackMain -->
         <?php
        // print_r($view_data['package_data_other']);
         ?>
         <div class="setPAckMain" >
            <h3 class="packages" style="text-align:center;">Other Packages</h3>
            <hr>
            <div class="row">
 <?php foreach ($view_data['package_data_other'] as $value) { 

       if($value['package_type'] == 1){ ?>

       
            <div class="col-md-6" id="setPAckMain">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of package 1 -->
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
                              <span class="float-right first12-icon-section">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span>
                               <input class="form-control font-mark-form" id="add_line" name="add_line" value="<?php echo $value['add_line']; ?>">
                           </th>
                           <td>
                              <input type="text" class="form-control" placeholder="Add price here" name="text_pack1_price" value="<?php echo $value['price']; ?>" readonly>
                              <input type="text" class="form-control" placeholder="Add title here"  name="text_pack1_title" value="<?php echo $value['title']; ?>" readonly>
                           </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack1_description" readonly><?php echo $value['description']; ?></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_pack1_revision" value="<?php echo $value['revision']; ?>" readonly></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                              <select name="select_pack1_delivtime" class="form-control" readonly>
                                 <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
                                  <?php } ?>
                              </select>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- end of package 1 -->           
               </div>
               <!-- table responsive -->
            </div>
       <?php }elseif ($value['package_type'] == 2) { ?>
            <div class="col-md-6">
                  <div class="table-responsive-sm table-product-info">
           
                     <table class="table table-bordered tbd-product-info">
                        <tbody>
                           <tr>
                              <th style="width:30%">
                                 <span class="float-right first12-icon-section">
								 <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item">
                                 <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre">
								 </a>
                                 </span>
                                  <input class="form-control font-mark-form" id="add_line" name="add_line" value="<?php echo $value['add_line']; ?>">
                              </th>
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack2_price" value="<?php echo $value['price']; ?>" readonly>
                                 <input type="text" class="form-control" placeholder="Add title here"  name="text_pack2_title" value="<?php echo $value['title']; ?>" readonly>
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack2_description" readonly><?php echo $value['description']; ?></textarea>
                              </td>
                           </tr>
                           <tr>
                              <th>Revision</th>
                              <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_pack2_revision" value="<?php echo $value['revision']; ?>" readonly></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack2_delivtime" class="form-control" readonly>
                                    <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
                                  <?php } ?>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- table responsive -->
            </div>

      <?php }elseif ($value['package_type'] == 3) { ?>
               <!--md 6 -->
            <div class="col-md-6">
                  <div class="table-responsive-sm table-product-info">
                     <table class="table table-bordered tbd-product-info">
                        <tbody>
                           <tr>
                              <th style="width:30%">
                                 <span class="float-right first12-icon-section">
                                 <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                                 </span>
                                  <input class="form-control font-mark-form" id="add_line" name="add_line" value="<?php echo $value['add_line']; ?>">
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack3_price" value="<?php echo $value['price']; ?>" readonly> 
                                 <input type="text" class="form-control" placeholder="Add title here"  name="text_pack3_title" value="<?php echo $value['title']; ?>" readonly>
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack3_description" readonly><?php echo $value['description']; ?></textarea>
                              </td>
                           </tr>
                           <tr>
                              <th>Revisions</th>
                              <td><input type="text" class="form-control" placeholder="Add revisions here"  name="text_pack3_revision" value="<?php echo $value['revision']; ?>" readonly></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack3_delivtime" class="form-control" readonly>
                                     <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : '' ?>><?php echo $value2['time']; ?></option>
                                  <?php } ?>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- table responsive -->
            </div>
             <!--md 6 -->
             <?php } ?>

   <?php } //foreach ?>

            </div>
         </div>




         <!-- addPackMain -->
        
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid -->




</section>

<!-- close package section -->
<?php include ("footer.php"); ?>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#select_specification").select2();
	var editsubcatid = '<?php echo $view_data['basic_data']->subcat_id;?>';
	
	var presentation_array = ['14', '37'];		
	var style_array = ['35'];	
	var gender_array = ['42','46','69'];	
	var pitch_array = ['42'];	
	var sound_genre_array = ['43'];	
	var genre_array = ['44'];			
	var instrument_array = ['46'];	
	var soundeffect_array = ['47'];	
	var platform_array = ['50','52'];	
	var code_language_array = ['50','52'];	
	var os_array = ['72'];	
	var tool_array = ['57'];	
	var service_array = ['7','8','64','68','4','5','6'];	
	var typeofvideo_array = ['66'];	
	var agerange_array = ['69'];	
	var text_array = ['1','2'];	
	var topic_array = ['6'];	
	var tone_array = ['6'];	
	var article_array = ['6'];
	
	if (jQuery.inArray(editsubcatid, presentation_array)!='-1') {
        $("#selectpresentation").show();   		
    }else{
		$("#selectpresentation").hide();
	}

	if (jQuery.inArray(editsubcatid, style_array)!='-1') {
        $("#selectstyle").show();   		
    }else{
		$("#selectstyle").hide();
	}
	
	if (jQuery.inArray(editsubcatid, pitch_array)!='-1') {
        $("#selectpitch").show();   		
    }else{
		$("#selectpitch").hide();
	}
	
	
	if (jQuery.inArray(editsubcatid, gender_array)!='-1') {
        $("#selectgender").show();   		
    }else{
		$("#selectgender").hide();
	}
	
	if (jQuery.inArray(editsubcatid, genre_array)!='-1') {
        $("#selectgenre").show();   		
    }else{
		$("#selectgenre").hide();
	}
	
	if (jQuery.inArray(editsubcatid, sound_genre_array)!='-1') {
        $("#selectsoundgenre").show();   		
    }else{
		$("#selectsoundgenre").hide();
	}
	
	if (jQuery.inArray(editsubcatid, instrument_array)!='-1') {
        $("#selectinstrument").show();   		
    }else{
		$("#selectinstrument").hide();
	}
	
	if (jQuery.inArray(editsubcatid, soundeffect_array)!='-1') {
        $("#selectsoundeffectfor").show();   		
    }else{
		$("#selectsoundeffectfor").hide();
	}
	
	if (jQuery.inArray(editsubcatid, platform_array)!='-1') {
        $("#selectplatform").show();   		
    }else{
		$("#selectplatform").hide();
	}
	
	if (jQuery.inArray(editsubcatid, code_language_array)!='-1') {
        $("#selectcodelanguage").show();   		
    }else{
		$("#selectcodelanguage").hide();
	}
	
	if (jQuery.inArray(editsubcatid, os_array)!='-1') {
        $("#selectoperatingsystem").show();   		
    }else{
		$("#selectoperatingsystem").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tool_array)!='-1') {
        $("#selecttool").show();   		
    }else{
		$("#selecttool").hide();
	}
	
	if (jQuery.inArray(editsubcatid, service_array)!='-1') {
        $("#selectserviceinclude").show();   		
    }else{
		$("#selectserviceinclude").hide();
	}
	
	if (jQuery.inArray(editsubcatid, typeofvideo_array)!='-1') {
        $("#selecttypeofvideo").show();   		
    }else{
		$("#selecttypeofvideo").hide();
	}
	
	if (jQuery.inArray(editsubcatid, agerange_array)!='-1') {
        $("#selectagerange").show();   		
    }else{
		$("#selectagerange").hide();
	}
	
	if (jQuery.inArray(editsubcatid, text_array)!='-1') {
        $("#selecttext").show();   		
    }else{
		$("#selecttext").hide();
	}
	if (jQuery.inArray(editsubcatid, topic_array)!='-1') {
        $("#selecttopic").show();   		
    }else{
		$("#selecttopic").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tone_array)!='-1') {
        $("#selecttone").show();   		
    }else{
		$("#selecttone").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tone_array)!='-1') {
        $("#selectarticletype").show();   		
    }else{
		$("#selectarticletype").hide();
	}
	
	
   var specid = '<?php echo $view_data['basic_data']->specification_id;?>';
   if(specid !=0){
		$("#selectspecification").show();
   }else{
		$("#selectspecification").hide();
   }
   
   
   
});

</script>

