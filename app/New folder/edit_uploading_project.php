<?php include ("header3.php"); ?>
<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'></script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/select2-view-uploading.css' 
rel='stylesheet' type='text/css'>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>




<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
   </div>
</section>


  <form  method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>edit_submit_upload_proj/<?php echo base64_encode($edit_data['basic_data']->id); ?>">

<section class="project_form">
   <div class="container-fluid ">
      <div class="container">
         <div class="row row h-100 justify-content-center align-items-center">

            <div class="col-8  form-pro-lbl-section">
			
			<?php //print_r($presentation_list);?>
                        <?php

                                if($this->session->flashdata('success'))

                                { ?>
                                <div class="container">
                                <div class="col-md-12 col-md-offset-3 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>
                              </div>
                                <?php }

                                ?>

                              <h3 class="text-center packages"> Update Gig </h3>
                              <?php
                                    //echo "<pre>";
                                    //print_r($edit_data);
                              ?>
                                    
                              
               <div class="form-group">
                  <label for="" class="pro_title">ENTER THE TITLE FOR YOUR GIG<span class="star-icons-validations">*</span></label>
                  <input type="text" class="form-control" id="text_proj_title" required name="text_proj_title" placeholder="Title of the gig" value="<?php echo $edit_data['basic_data']->title; ?>">
                   <div class="form_error">
                    <?php echo form_error('text_proj_title'); ?>
                  </div>
               </div>


               <div class="form-group">
                  <label for="" class="pro_title" >WHAT MARKETPLACE DOES YOUR GIG BELONG IN?<span class="star-icons-validations">*</span> </label>
                  <select class="form-control" id="select_category" name="select_category" required>
                     <option value="">Choose a Marketplace</option>
                       <?php foreach ($category_list as  $value) {
                     ?>
                     <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->category)?"selected":"" ?>><?php echo $value['category_name']; ?></option>
                   <?php } ?>
                  </select>
                   <div class="form_error">
                    <?php echo form_error('select_category'); ?>
                  </div>
               </div>


<div class="form-group">
    <label  class="pro_title"  for="">Category<span class="star-icons-validations">*</span></label>
    <select class="form-control"  name="select_sub_category" id="select_sub_category" required>
      <option value="">Select Category</option>
         <?php 
         $sub_category_list=$this->Front_model->get_sub_category_list($edit_data['basic_data']->category);
          foreach ($sub_category_list as  $value) { ?>
            <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->subcat_id)?"selected":"" ?>><?php echo $value['sub_cat_name']; ?></option>
         <?php } ?>
     </select>
</div> 

        <?php 
		 $ids=explode(',',$edit_data['basic_data']->specification_id);
		 ?>
		<div class="form-group" id="selectspecification">
			<label  class="pro_title"  for="">Select Specification<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_specification[]" multiple id="select_specification">
			  <option value="">Select </option>
				 <?php 
				 $specification_list=$this->Front_model->get_specification($edit_data['basic_data']->subcat_id);
				 
				  foreach ($specification_list as  $value) { ?>
					<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>><?php echo $value['specification_name']; ?></option>
					
					
				 <?php } ?>
			 </select>
		</div> 

		<div class="form-group" id="selectpresentation">
			<label  class="pro_title"  for="">Select Presentation<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_presentation" id="select_presentation">
			<option value="">Select</option>
			<?php 
			$presentation_list=$this->Front_model->get_presentation($edit_data['basic_data']->subcat_id);
			foreach ($presentation_list as  $prelist) { ?>
				<option value="<?php echo $prelist['id']; ?>" <?php if(($prelist['id'])==($edit_data['basic_data']->presentation_id)){echo 'selected="selected"';}?>><?php echo $prelist['presentation_name']; ?></option>
			<?php } ?>
			</select>
			
		</div> 
					
		<div class="form-group" id="selectstyle" >
			<label  class="pro_title"  for="">Select Style<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_style" id="select_style">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_style($edit_data['basic_data']->subcat_id);
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->style_id)){echo 'selected="selected"';}?>><?php echo $slist['style_name']; ?></option>
			<?php } ?>
			</select>
			
		</div> 
					
			<!-- START OF SELECTED OPTIONS -->
				
					
		<div class="form-group" id="selectgender">
			<label  class="pro_title"  for="">Select Gender<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_gender" id="select_gender">
			<option value="">Select</option>
			<?php 
			$gender=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_gender');
			foreach ($gender as  $genderdata) { ?>
				<option value="<?php echo $genderdata['id']; ?>" <?php if(($genderdata['id'])==($edit_data['basic_data']->gender_id)){echo 'selected="selected"';}?>><?php echo $genderdata['gender_name']; ?></option>
			<?php } ?>
			</select>
		</div> 
		
		<div class="form-group" id="selectpitch">
			<label  class="pro_title"  for="">Select Pitch<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_pitch" id="select_pitch">
			<option value="">Select</option>
			<?php 
			$pitch_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_pitch');
			foreach ($pitch_list as  $plist) { ?>
				<option value="<?php echo $plist['id']; ?>" <?php if(($plist['id'])==($edit_data['basic_data']->pitch_id)){echo 'selected="selected"';}?>><?php echo $plist['pitch_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectgenre">
			<label  class="pro_title"  for="">Select Genre<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_genre" id="select_genre">
			<option value="">Select</option>
			<?php 
			$style_list11=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_genre');
			foreach ($style_list11 as  $slist11) { ?>
				<option value="<?php echo $slist11['id']; ?>" <?php if(($slist11['id'])==($edit_data['basic_data']->genre_id)){echo 'selected="selected"';}?>><?php echo $slist11['genre_name']; ?></option>
			<?php } ?>
			</select>
			
		</div> 
		
		<div class="form-group" id="selectinstrument">
			<label  class="pro_title"  for="">Select Instrument<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_instrument" id="select_instrument">
			<option value="">Select</option>
			<?php 
			$style_list12=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_instrument');
			foreach ($style_list12 as  $slist12) { ?>
				<option value="<?php echo $slist12['id']; ?>" <?php if(($slist12['id'])==($edit_data['basic_data']->instrument_id)){echo 'selected="selected"';}?>><?php echo $slist12['instrument_name']; ?></option>
			<?php } ?>
			</select>
			
		</div>
		
		
		
		
		
		<div class="form-group" id="selectsoundeffectfor">
			<label  class="pro_title"  for="">Select Sound Effect For<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_sound_effect_for" id="select_sound_effect_for">
			<option value="">Select</option>
			<?php 
			$soundlist=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_sound_effect_for');
			foreach ($soundlist as  $soundlist1) { ?>
				<option value="<?php echo $soundlist1['id']; ?>" <?php if(($soundlist1['id'])==($edit_data['basic_data']->sound_effect_for_id)){echo 'selected="selected"';}?>><?php echo $soundlist1['sound_effect_for_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectplatform">
			<label  class="pro_title"  for="">Select Platform<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_platform" id="select_platform">
			<option value="">Select</option>
			<?php 
			$platform_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_platform');
			foreach ($platform_list as  $platformslist) { ?>
				<option value="<?php echo $platformslist['id']; ?>" <?php if(($platformslist['id'])==($edit_data['basic_data']->platform_id)){echo 'selected="selected"';}?>><?php echo $platformslist['platform_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectcodelanguage">
			<label  class="pro_title"  for="">Select Code Language<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_code_language" id="select_code_language">
			<option value="">Select</option>
			<?php 
			$code_language_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_code_language');
			foreach ($code_language_list as  $code_languagelist) { ?>
				<option value="<?php echo $code_languagelist['id']; ?>" <?php if(($code_languagelist['id'])==($edit_data['basic_data']->code_language_id)){echo 'selected="selected"';}?>><?php echo $code_languagelist->code_language_name; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectoperatingsystem">
			<label  class="pro_title"  for="">Select Operating System<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_operating_system" id="select_operating_system">
			<option value="">Select</option>
			<?php 
			$operating_system_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_operating_system');
			foreach ($operating_system_list as  $oslist) { ?>
				<option value="<?php echo $oslist['id']; ?>" <?php if(($oslist['id'])==($edit_data['basic_data']->operating_system_id)){echo 'selected="selected"';}?>><?php echo $oslist['operating_system_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttool">
			<label  class="pro_title"  for="">Select Tool<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_tool" id="select_tool">
			<option value="">Select</option>
			<?php 
			$tool_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_tool');
			foreach ($tool_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->tool_id)){echo 'selected="selected"';}?>><?php echo $slist['tool_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectserviceinclude">
			<label  class="pro_title"  for="">Select Service Include<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_service_include" id="select_service_include">
			<option value="">Select</option>
			<?php 
			$service_include_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_service_include');
			foreach ($service_include_list as  $service_includeslist) { ?>
				<option value="<?php echo $service_includeslist['id']; ?>" <?php if(($service_includeslist['id'])==($edit_data['basic_data']->service_include_id)){echo 'selected="selected"';}?>><?php echo $service_includeslist['service_include_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttypeofvideo">
			<label  class="pro_title"  for="">Select Type Of Video<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_type_of_video" id="select_type_of_video">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_type_of_video');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->type_of_video_id)){echo 'selected="selected"';}?>><?php echo $slist['type_of_video_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectagerange">
			<label  class="pro_title"  for="">Select Age Range<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_age_range" id="select_age_range">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_age_range');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->age_range_id)){echo 'selected="selected"';}?>><?php echo $slist['age_range_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttext">
			<label  class="pro_title"  for="">Select Text<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_text" id="select_text">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_text');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->text_id)){echo 'selected="selected"';}?>><?php echo $slist['text_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttopic">
			<label  class="pro_title"  for="">Select Topic<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_topic" id="select_topic">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_topic');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->topic_id)){echo 'selected="selected"';}?>><?php echo $slist['topic_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selecttone">
			<label  class="pro_title"  for="">Select Tone<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_tone" id="select_tone">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_tone');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->tone_id)){echo 'selected="selected"';}?>><?php echo $slist['tone_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<div class="form-group" id="selectarticletype">
			<label  class="pro_title"  for="">Select Article Type<span class="star-icons-validations">*</span></label>
			<select class="form-control"  name="select_article_type" id="select_article_type">
			<option value="">Select</option>
			<?php 
			$style_list=$this->Front_model->get_dynamic_list($edit_data['basic_data']->subcat_id,'tbl_article_type');
			foreach ($style_list as  $slist) { ?>
				<option value="<?php echo $slist['id']; ?>" <?php if(($slist['id'])==($edit_data['basic_data']->article_type_id)){echo 'selected="selected"';}?>><?php echo $slist['article_type_name']; ?></option>
			<?php } ?>
			</select>
		</div>
		
		<!-- END OF SELECTED OPTIONS -->
					
					
					
					
					
					<div class="form-group">
					
                      <label class="pro_title">Language<span class="star-icons-validations">*</span></label>
                      <select class="form-control" id="language" name="language" required>
                        <option value="">Select</option>
						
						<?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>" <?php if($edit_data['basic_data']->language == $lng->id){echo 'selected="selected"';} ?>><?php echo $lng->language; ?></option>
						<?php } ?>
                       
                      </select>
					  
					  <div class="form_error">
                    <?php echo form_error('language'); ?>
                  </div>
                    </div> 
					
					<div class="form-group">
						<label  class="pro_title"  for="">Select Location</label>
						<select class="form-control"  name="select_location" id="select_location" >
						<option value="">Select</option>
                        <?php  foreach ($country_list as  $con) { ?>
							<option value="<?php echo $con->id; ?>" <?php if(($con->id)==($edit_data['basic_data']->location)){echo 'selected="selected"';}?>><?php echo $con->name; ?></option>
						<?php } ?>
						</select>
						
					</div> 
					




               <label for="" class="pro_title">EDIT BRAND IMAGES AND VIDEOS</label>

               <div class="updatedBrandImg">
                  <div class="showImg">
                    
                       <?php foreach ($edit_data['media_data'] as  $value) { ?>
                         <ul id="dynamicid<?php echo $value['id']; ?>">
						 
						 <?php if($value['media_type'] =='image'){?>
							<li>                            
								<img src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
								<div class="deleteImg">
								  <i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
							   </div>
							</li>
						<?php }else{ ?>	
								<li>
								<!-- <iframe height="100%" width="100%" src="<-?php echo base_url(); ?>/uploads/<-?php echo $value['media']; ?>" autoplay=0></iframe> -->
								<video width="100%" height="100%" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>

								<div class="deleteImg">
								  <i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
							   </div>
								</li>
						<?php } ?>
						 <!--<li>
							  
							   <img src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
							   <div class="deleteImg">
								  <i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
							   </div>
							</li> -->
                         </ul>
                        <?php } ?>

                   
                     <div class="clearfix"></div>
                  </div>
             
               </div>

               <p class="img_txt_comment">Images should be at least 380px by 380px</p>
               <div class="form-group upload-files-project">
                  <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                  <!-- <input type="file" name="myfile" />     -->
                  <input type="file" name="userfile[]" accept='image/*,video/*' multiple="multiple" id="userfile" onchange="previewFile()"> 
                  <!--	<button type="button" class="btn btn-primary btn-upload-files-cls">Upload files</button> -->
                  <div class="file_upload_name">
                   
                     <div id="showimg" class="showImg">


                     </div>

                  </div>
               </div>
               <div class="form-group">
                  <label for="formGroupExampleInput" class="formGroupExampleInput">DESCRIBE YOUR GIG</label>
                  <textarea style="border:1px solid #000;" class="form-control" rows="5" id="text_description" name="text_description" minlength="30" maxlength="3600"><?php echo $edit_data['basic_data']->description; ?></textarea>
				  <script>
					CKEDITOR.replace( 'text_description', {
						fullPage: true,
						allowedContent: true,
						extraPlugins: 'wysiwygarea',
						width: '665px'
					});
				</script>
                  <div class="form_error">
                    <?php echo form_error('text_description'); ?>
                  </div>
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
         <h3 class="packages" style="text-align:center;">PACKAGES</h3>
         <p class="pro_packages" style="text-align:center;font-size:17px;padding-bottom: 0.8125rem;">Choose amount of packages your gig will offer and specify what your package include</p>
           <h3 class="packages" style="text-align:center;">Free Packages</h3>
            <hr>



         
         <div class="row">

             <!--md 6 -->
            <div class="col-md-12 setPAckMain">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of free package -->

                  <?php foreach ($edit_data['package_data_free'] as $value) { ?>
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
                              <span class="float-right first12-icon-section">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Package Free Information !"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span>
							  
                              <input type="text" class="form-control" placeholder="Add Line" name="add_line_packfree" value="<?php echo $value['add_line']; ?>" maxlength="280" required="">
                           </th>
                           <td>
                              <!-- <input type="text" class="form-control" placeholder="Add price here" name="text_pack2_price"> -->
                              <input type="text" class="form-control" placeholder="Add title here"  name="text_free_pack_title" value="<?php echo $value['title']; ?>" maxlength="280" required="">
                           </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_free_pack_description" maxlength="280" required="" ><?php echo $value['description']; ?></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_free_pack_revision" value="<?php echo $value['revision']; ?>" maxlength="280" required=""></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                              <select name="select_free_pack_delivtime" class="form-control" required="">
                                 <option value="">Select Days</option>
                                  <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : ''; ?>><?php echo $value2['time']; ?></option>
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
         //print_r($edit_data['package_data_other']);
         ?>
         <div class="setPAckMain" >
            <h3 class="packages" style="text-align:center;">Other Packages</h3>
            <hr>
            <div class="row">
 <?php foreach ($edit_data['package_data_other'] as $value) { 

       if($value['package_type'] == 1){ ?>

       
            <div class="col-md-6" id="setPAckMain">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of package 1 -->
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
                              <span class="float-right first12-icon-section">
                              <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specifically define the quantity of a service or item."><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span>
                               <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack1" value="<?php echo $value['add_line']; ?>">
                           </th>
                           <td>
                              <input type="text" class="form-control" placeholder="Add price here" name="text_pack1_price" value="<?php echo $value['price']; ?>" onkeypress="CheckNumeric(event);" maxlength="280">
                              <input type="text" class="form-control" placeholder="Add title here"  name="text_pack1_title" value="<?php echo $value['title']; ?>" maxlength="280">
                           </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack1_description" maxlength="280"><?php echo $value['description']; ?></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_pack1_revision" value="<?php echo $value['revision']; ?>" maxlength="280"></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                              <select name="select_pack1_delivtime" class="form-control">
                                 <option value="">Select Days</option>
                                  <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : ''; ?>><?php echo $value2['time']; ?></option>
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
                                 <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specifically define the quantity of a service or item.">
                                 	<img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                                 </span>
                                 <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack2" value="<?php echo $value['add_line']; ?>" maxlength="280">
                              </th>
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack2_price" value="<?php echo $value['price']; ?>" onkeypress="CheckNumeric(event);" maxlength="280">
                                 <input type="text" class="form-control" placeholder="Add title here"  name="text_pack2_title" value="<?php echo $value['title']; ?>" maxlength="280">
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack2_description" maxlength="280"><?php echo $value['description']; ?></textarea>
                              </td>
                           </tr>
                           <tr>
                              <th>Revision</th>
                              <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_pack2_revision" value="<?php echo $value['revision']; ?>" maxlength="280"></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack2_delivtime" class="form-control">
                                 <option value="">Select Days</option>
                                  <?php foreach ($delivery_time as  $value2) { ?>
                                  <option value="<?php echo $value2['id']; ?>" <?php echo $value['delivery_time'] ==  $value2['id'] ? 'selected' : ''; ?>><?php echo $value2['time']; ?></option>
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
                                 <a href="#" data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specifically define the quantity of a service or item.">
                                 	<img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                                 </span>
                                 <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack3" value="<?php echo $value['add_line']; ?>" maxlength="280">
                              </th>
							  
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack3_price" value="<?php echo $value['price']; ?>" onkeypress="CheckNumeric(event);" maxlength="280">
                                 <input type="text" class="form-control" placeholder="Add title here"  name="text_pack3_title" value="<?php echo $value['title']; ?>" maxlength="280">
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack3_description" maxlength="280"><?php echo $value['description']; ?></textarea>
                              </td>
                           </tr>
                           <tr>
                              <th>Revisions</th>
                              <td><input type="text" class="form-control" placeholder="Add revisions here"  name="text_pack3_revision" value="<?php echo $value['revision']; ?>" maxlength="280"></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack3_delivtime" class="form-control">
                                 <option value="">Select Days</option>
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
         <div class="btn-upload-pt">
            <button type="submit" class="btn btn-primary btn-lg btn-start-upload-project">UPDATE GIG</button>
         </div>
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid -->




</section>
</form>
<!-- close package section -->
<?php include ("footer.php"); ?>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>




<script type="text/javascript">
   function previewFile() {
$('#showimg').html('');
// Multiple images preview in browser
var total_file=document.getElementById("userfile").files.length;
var imgPre="";
for(var i=0;i<total_file;i++)
{
imgPre+='<ul id="imgList'+i+'"><li ><img  src="'+URL.createObjectURL(event.target.files[i])+'"></li></ul>';
}
$('#showimg').append(imgPre);
}
// <span onclick="remove_image('+i+','+"'"+event.target.files[i].name+"'"+')" class="deleteImg"><i class="fa fa-trash"></i></span>
function remove_image(id,name)
{
 console.log('aaaaaaaaaaa'+name);
var total_file=document.getElementById("userfile").files;
console.log(total_file);
alert('aa'+total_file.length);
// var file = $(this).data("file");
console.log('array '+total_file.FileList);

   for (var i = 0; i < total_file.length; i++) {
    if (total_file[i].name === name) {
console.log('file name1'+total_file[i].name);
console.log('file name2'+name);

      total_file.splice(i, 1);
      // break;
    }
  }
alert('bb'+total_file.length);


 $('#imgList'+id).html('');
}
</script>

<script type="text/javascript">
function delete_image(image_id,image_name)
{
  var status = confirm("Are you sure you want to delete ?");  
  if(status==true)
  {
   
    $.ajax({
      type:"POST",
      url:"<?php echo base_url(); ?>Front/delete_proj_upload_image",
      data:{image_name:image_name,image_id:image_id},
      success(html){
       alert('Deleted');
      }
    });
  }
 $('#dynamicid'+image_id).html('');

  
 }
</script>
<!-- <script type="text/javascript">
   $("#dynamicpck").hide();

   $("#btnshowdynamicpack").click(function(){
  $("#staticfreepack").hide();
  $("#dynamicpck").show();
});

    $("#btnshofreepack").click(function(){
  $("#dynamicpck").hide();
  $("#staticfreepack").show();
});
</script> -->

<script type="text/javascript">
$(document).ready(function(){
	
	$("#select_specification").select2();
	 
	var editsubcatid = '<?php echo $edit_data['basic_data']->subcat_id;?>';
	
	var presentation_array = ['14', '37'];		
	var style_array = ['35'];	
	var gender_array = ['42','46','69'];	
	var pitch_array = ['42'];	
	var sound_genre_array = ['43'];	
	var genre_array = ['44','45'];			
	var instrument_array = ['46'];	
	var soundeffect_array = ['47'];	
	var platform_array = ['50','52'];	
	var code_language_array = ['51','54'];	
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
	
	
	
	
	
   /* $("#selectstyle").hide();
   $("#selectpitch").hide();
   $("#selectgender").hide();
   $("#selectgenre").hide();
   $("#selectsoundgenre").hide();
   $("#selectinstrument").hide();
   $("#selectsoundeffectfor").hide();
   $("#selectplatform").hide();
   $("#selectcodelanguage").hide();
   $("#selectoperatingsystem").hide();
   $("#selecttool").hide();
   $("#selectserviceinclude").hide();
   $("#selecttypeofvideo").hide();
   $("#selectagerange").hide();
   $("#selecttext").hide();
   $("#selecttopic").hide();
   $("#selecttone").hide();
   $("#selectarticletype").hide(); */
   
   var specid = '<?php echo $edit_data['basic_data']->specification_id;?>';
   if(specid !=0){
		$("#selectspecification").show();
   }else{
		$("#selectspecification").hide();
   }
   
   
   

    $('#select_category').on("change",function () {
        var main_categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "<?php echo base_url(); ?>Front/get_subcategory",
            type: "POST",
            data: {main_categoryId:main_categoryId},
            success: function (response) {
                
				$("#select_sub_category").html(response);
				$("#select_specification").html('');
				$("#select_presentation").html('');
				$("#select_style").html('');
				$("#select_pitch").html('');
				$("#select_gender").html('');
				$("#select_genre").html('');
				$("#select_sound_genre").html('');
				$("#select_instrument").html('');
				$("#select_sound_effect_for").html('');
				$("#select_platform").hide();
				$("#select_code_language").html('');
				$("#select_operating_system").html('');
				$("#select_tool").html('');
				$("#select_service_include").html('');
				$("#select_type_of_video").html('');
				$("#select_age_range").html('');
				$("#select_text").html('');
				$("#select_topic").html('');
				$("#select_tone").html('');
				$("#select_article_type").html('');
				
				$("#selectspecification").hide();
				$("#selectpresentation").hide();
				$("#selectstyle").hide();
				$("#selectpitch").hide();
				$("#selectgender").hide();
				$("#selectgenre").hide();
				$("#selectsoundgenre").hide();
				$("#selectinstrument").hide();
				$("#selectsoundeffectfor").hide();
				$("#selectplatform").hide();
				$("#selectcodelanguage").hide();
				$("#selectoperatingsystem").hide();
				$("#selecttool").hide();
				$("#selectserviceinclude").hide();
				$("#selecttypeofvideo").hide();
				$("#selectagerange").hide();
				$("#selecttext").hide();
				$("#selecttopic").hide();
				$("#selecttone").hide();
				$("#selectarticletype").hide();
            },
        });
    });


     $('#select_sub_category').on("change",function () {
        var sub_categoryId = $(this).find('option:selected').val();
        // alert(sub_categoryId);
		
				$("#select_specification").html('');
				$("#select_presentation").html('');
				$("#select_style").html('');
				$("#select_pitch").html('');
				$("#select_gender").html('');
				$("#select_genre").html('');
				$("#select_sound_genre").html('');
				$("#select_instrument").html('');
				$("#select_sound_effect_for").html('');
				$("#select_platform").hide();
				$("#select_code_language").html('');
				$("#select_operating_system").html('');
				$("#select_tool").html('');
				$("#select_service_include").html('');
				$("#select_type_of_video").html('');
				$("#select_age_range").html('');
				$("#select_text").html('');
				$("#select_topic").html('');
				$("#select_tone").html('');
				$("#select_article_type").html('');
				
				$("#selectspecification").hide();
				$("#selectpresentation").hide();
				$("#selectstyle").hide();
				$("#selectpitch").hide();
				$("#selectgender").hide();
				$("#selectgenre").hide();
				$("#selectsoundgenre").hide();
				$("#selectinstrument").hide();
				$("#selectsoundeffectfor").hide();
				$("#selectplatform").hide();
				$("#selectcodelanguage").hide();
				$("#selectoperatingsystem").hide();
				$("#selecttool").hide();
				$("#selectserviceinclude").hide();
				$("#selecttypeofvideo").hide();
				$("#selectagerange").hide();
				$("#selecttext").hide();
				$("#selecttopic").hide();
				$("#selecttone").hide();
				$("#selectarticletype").hide();
		
		
		
        $.ajax({
            url: "<?php echo base_url(); ?>Front/get_specification",
            type: "POST",
            data: {sub_categoryId:sub_categoryId},
            success: function (response) {
				if(response != 0){
					console.log(response);
					$("#select_specification").html(response);
					$("#selectspecification").show();
				}
            },
        });
		
		var presentation_array = ['14', '37'];
		if (jQuery.inArray(sub_categoryId, presentation_array)!='-1') {
            $("#select_presentation").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_presentation",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					if(response != 0){
						$("#select_presentation").html(response);
						$("#selectpresentation").show();
					}
				},
			});			
        } 
		
		
		var style_array = ['35'];
		if (jQuery.inArray(sub_categoryId, style_array)!='-1') {
			 $("#select_style").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_style",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_style").html(response);
					$("#selectstyle").show();
				},
			});
		}
		
		
		var gender_array = ['42','46','69'];
		if (jQuery.inArray(sub_categoryId, gender_array)!='-1') {
			 $("#select_gender").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_gender",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_gender").html(response);
					$("#selectgender").show();
				},
			});
		}
		
		var pitch_array = ['42'];
		if (jQuery.inArray(sub_categoryId, pitch_array)!='-1') {
			 $("#select_pitch").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_pitch",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_pitch").html(response);
					$("#selectpitch").show();
				},
			});
		}
		
		var sound_genre_array = ['43'];
		if (jQuery.inArray(sub_categoryId, sound_genre_array)!='-1') {
			 $("#select_sound_genre").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_sound_genre",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_sound_genre").html(response);
					$("#selectsoundgenre").show();
				},
			});
		}
		
		var genre_array = ['44','45'];
		if (jQuery.inArray(sub_categoryId, genre_array)!='-1') {
			 $("#select_genre").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_genre",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_genre").html(response);
					$("#selectgenre").show();
				},
			});
		}
		
		var instrument_array = ['46'];
		if (jQuery.inArray(sub_categoryId, instrument_array)!='-1') {
			 $("#select_instrument").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_instrument",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_instrument").html(response);
					$("#selectinstrument").show();
				},
			});
		}
		
		var soundeffect_array = ['47'];
		if (jQuery.inArray(sub_categoryId, soundeffect_array)!='-1') {
			 $("#select_sound_effect_for").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_sound_effect_for",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_sound_effect_for").html(response);
					$("#selectsoundeffectfor").show();
				},
			});
		}
		
		var platform_array = ['50','52'];
		if (jQuery.inArray(sub_categoryId, platform_array)!='-1') {
			 $("#select_platform").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_platform",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_platform").html(response);
					$("#selectplatform").show();
				},
			});
		}
		
		
		var code_language_array = ['51','54'];
		if (jQuery.inArray(sub_categoryId, code_language_array)!='-1') {
			 $("#select_code_language").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_code_language",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_code_language").html(response);
					$("#selectcodelanguage").show();
				},
			});
		}
		
		
		var os_array = ['72'];
		if (jQuery.inArray(sub_categoryId, os_array)!='-1') { 
		 $("#select_operating_system").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_opearating_system",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_operating_system").html(response);
					$("#selectoperatingsystem").show();
				},
			});
		}
		
		var tool_array = ['57'];
		if (jQuery.inArray(sub_categoryId, tool_array)!='-1') {
			$("#select_tool").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_tool",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_tool").html(response);
					$("#selecttool").show();
				},
			});
		}
		
		var service_array = ['7','8','64','68','4','5','6'];
		if (jQuery.inArray(sub_categoryId, service_array)!='-1') {
			$("#select_service_include").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_service_include",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_service_include").html(response);
					$("#selectserviceinclude").show();
				},
			});
		}
		
		var typeofvideo_array = ['66'];
		if (jQuery.inArray(sub_categoryId, typeofvideo_array)!='-1') {
			$("#select_type_of_video").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_type_of_video",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_type_of_video").html(response);
					$("#selecttypeofvideo").show();
				},
			});
		}
		
		
		var agerange_array = ['69'];
		if (jQuery.inArray(sub_categoryId, agerange_array)!='-1') {
			$("#select_age_range").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_age_range",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_age_range").html(response);
					$("#selectagerange").show();
				},
			});
		}
		
		var text_array = ['1','2'];
		if (jQuery.inArray(sub_categoryId, text_array)!='-1') {
			$("#select_text").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_text",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_text").html(response);
					$("#selecttext").show();
				},
			});
		}
		
		var topic_array = ['6'];
		if (jQuery.inArray(sub_categoryId, topic_array)!='-1') {
			$("#select_topic").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_topic",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_topic").html(response);
					$("#selecttopic").show();
				},
			});
		}
		
		var tone_array = ['6'];
		if (jQuery.inArray(sub_categoryId, topic_array)!='-1') {
			$("#select_tone").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_tone",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_tone").html(response);
					$("#selecttone").show();
				},
			});
		}
		
		var article_array = ['6'];
		if (jQuery.inArray(sub_categoryId, article_array)!='-1') {
			$("#select_article_type").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_article_type",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_article_type").html(response);
					$("#selectarticletype").show();
				},
			});
		}
    });  



});

</script>
<script type="text/javascript">
    function CheckNumeric(e) {
        if (window.event) // IE
        {
            if ((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 8 && e.keyCode != 44) {
                event.returnValue = false;
                return false;
            }
        }
        else { // Fire Fox
            if ((e.which < 48 || e.which > 57) & e.which != 8 && e.which != 44) {
                e.preventDefault();
                return false;
            }
        }
    }     
</script>