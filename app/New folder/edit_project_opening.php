<?php include ("header4.php"); ?>

<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'>
	
</script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/select2-customize-project-opening.css' rel='stylesheet' type='text/css'>

<div class="clearfix"></div>

<section class="project_opening_uploading_section">
  <div class="container-fluid">
  	

  </div>	

</section>

<section class="project_form">
	<div class="container-fluid ">
		<div class="container">
  <?php //print_r($edit_data['basic_data']);?>
			<div class="row row h-100 justify-content-center align-items-center">

			<form class="col-8 form-pro-lbl-section" method="post" action="<?php echo base_url(); ?>edit_upload_project_opening/<?php echo base64_encode($edit_data['basic_data']->id); ?>" enctype="multipart/form-data">

					          <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>
				<?php //print_r($edit_data);?>
                <h3 class="text-center packages">Edit Project</h3>
                
                  
			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Enter the title for your project </label>
			        <input type="text" class="form-control" id="" name="text_proj_title" placeholder="Title of the project" value="<?php echo $edit_data['basic_data']->title; ?>">
			          <div class="form_error">
	                    <?php echo form_error('text_proj_title'); ?>
	                  </div>
			      </div>


			      <div class="form-group">
			        <label for="formGroupExampleInput2" class="formGroupExampleInput1" >What Marketplace Does Your Project Belong In? </label>
			        <select class="form-control" id="sel1_category" name="select_category">
						    <option value="">Choose a Marketplace</option>
						      <?php foreach ($category_list as  $value) { ?>
			                     <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->category)?"selected":"" ?>><?php echo $value['category_name']; ?></option>
			                   <?php } ?>
                    </select>
                     <div class="form_error">
	                    <?php echo form_error('select_category'); ?>
	                 </div>
			      </div>
				  
				  
				  <!--pallavi code start -->
					
					<div class="form-group">
						<label  class="formGroupExampleInput1"  for=""> Category</label>
						<select class="form-control"  name="select_sub_category" id="select_sub_category">
						  <option value="">Select Category </option>
							 <?php 
							 $sub_category_list=$this->Front_model->get_sub_category_list_opening($edit_data['basic_data']->category);
							  foreach ($sub_category_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->sub_cat_id)?"selected":"" ?>><?php echo $value['sub_cat_name_opening']; ?></option>
							 <?php } ?>
						 </select>
					</div> 
					
					<?php 
					 $ids=explode(',',$edit_data['basic_data']->skill_id);
					 ?>

					<!--<div class="form-group" id="selectskill">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Skills </label>
						<select class="form-control"  name="select_skill[]" multiple id="select_skill">
							
							 <?php 
							 
							 $skill_list=$this->Front_model->get_skills($edit_data['basic_data']->category);
							  foreach ($skill_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>><?php echo $value['cat_skill_name']; ?></option>
							 <?php } ?>
						</select>
					</div>-->

                   <div id="selectskill">
                     <div class="form-group">
                       <label class="formGroupExampleInput1" for="formGroupExampleInput2">Profession<span class="star-icons-validations">*</span> </label>
                       <br>
                        <select class="form-control"  name="select_skill[]" multiple 
                         id="select_skill" required>
                          <?php 
							 
							 $skill_list=$this->Front_model->get_skills($edit_data['basic_data']->category);
							  foreach ($skill_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>><?php echo $value['cat_skill_name']; ?></option>
							 <?php } ?>	



                                          
                        </select>

                     </div> <!-- select skills forms group --> 	
                     </div>
					 
					 
					 
					 <div id="selecttool">
                     <div class="form-group">
                       <label class="formGroupExampleInput1" for="formGroupExampleInput2">Tools<span class="star-icons-validations">*</span> </label>
                       <br><span>A tool, is the piece of software, site, app, or other, that the freelancer will use when freelancing on this project</span><br>
                        <select class="form-control"  name="select_tool[]" multiple 
                         id="select_tool" required>
                          <?php 
							  $toolids=explode(',',$edit_data['basic_data']->tool_id);
							  $tool_list=$this->Front_model->get_tools_opening();
							  foreach ($tool_list as  $tool) { ?>
								<option value="<?php echo $tool['id']; ?>" <?php if(in_array($tool['id'], $toolids)){echo "selected";} ?>><?php echo $tool['tool_name']; ?></option>
							 <?php } ?>	



                                          
                        </select>

                     </div> <!-- select skills forms group --> 	
                     </div>
					
					<?php if($edit_data['basic_data']->category ==1){ ?>
					
					<div class="form-group" id="selectdocumenttype">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Document Type </label>
						<select class="form-control"  name="select_document_type" id="select_document_type">				
						<option value="">Select</option>
							 <?php 
							 $document_type_list=$this->Front_model->get_document_type_opening($edit_data['basic_data']->category);
							  foreach ($document_type_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->document_type_id)?"selected":"" ?>><?php echo $value['documant_type_name_opening']; ?></option>
							 <?php } ?>
						</select>
					</div>
					
					<div class="form-group" id="selectserviceinclue">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Service Include </label>
						<select class="form-control"  name="select_service_inclue" id="select_service_inclue">
							<option value="">Select</option>
							 <?php 
							 $document_type_list=$this->Front_model->get_service_include_opening($edit_data['basic_data']->category);
							  foreach ($document_type_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $edit_data['basic_data']->service_include_id)?"selected":"" ?>><?php echo $value['servive_include_name_opening']; ?></option>
							 <?php } ?>
						</select>
					</div>
					
					<?php } ?>
				  <!-- pallavi code end -->
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  

			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Budget </label>

			         <input type="text" class="form-control" id="" name="text_proj_budget" placeholder="Enter Budget" value="<?php echo $edit_data['basic_data']->budget; ?>">
			          <div class="form_error">
	                    <?php echo form_error('text_proj_budget'); ?>
	                  </div>
			      </div>

                  <div class="form-group" id="divDOB">
			        <label for="" class="formGroupExampleInput1">Expiration Date For Project </label>
			        <p>If an expiration date is not chosen, your project will not expire.</p>
			        
                                                                               
	                <div  class="input-group date datepickernews" >
					    <input class="datepicker2" data-date-format="mm/dd/yyyy" name="text_expiration_date" placeholder="Expiration Date" value="<?php echo $edit_data['basic_data']->expiration_date_proj_opening; ?>" />
					    <span class="input-group-addon input-group-addon-cal-upload-openings">
					    <i class="fa fa-calendar" aria-hidden="true"></i></span>
					    <div class="form_error">
	                    <?php echo form_error('text_expiration_date'); ?>
	                  </div>
                    </div>



			      </div>
				  
				  <div class="form-group">
                      <label class="formGroupExampleInput1">Language</label>
                      <select class="form-control" id="select_language" name="select_language">
                        <option value="">Select</option>
						
						<?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>" <?php if($edit_data['basic_data']->language_id == $lng->id){echo 'selected="selected"';} ?>><?php echo $lng->language; ?></option>
						<?php } ?>
						
                      </select> 
                    </div> 
					
					
				<div class="row">
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">Country</label>					 
							<select class="form-control" id="country" name="country" onChange="get_state(this.value);" >
								<option value="">Select</option>
								<?php  foreach ($country_list as  $con) { ?>
									<option value="<?php echo $con->id; ?>" <?php if( $con->id == $edit_data['basic_data']->country ){echo 'selected="selected"';}?>><?php echo $con->name; ?></option>
								<?php } ?>											
							</select>                      
						</div>
						
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">State</label>					
							<select class="form-control" id="state" name="state" onChange="get_city(this.value);" >
								<option value="">Select</option>
								<?php
								$state_list = $this->Front_model->get_state($edit_data['basic_data']->country);
								foreach ($state_list as  $state) { ?>
									<option value="<?php echo $state['id']; ?>" <?php if( $state['id'] == $edit_data['basic_data']->state){echo 'selected="selected"';}?>><?php echo $state['name']; ?></option>
								<?php } ?>	
								
							</select>
							 
						</div>
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">City</label>
							
							<select class="form-control" id="city" name="city" >
							
							<option value="">Select</option>
								<?php
								$city_list = $this->Front_model->get_city($edit_data['basic_data']->state);
								foreach ($city_list as  $city) { ?>
									<option value="<?php echo $city['id']; ?>" <?php if( $city['id'] == $edit_data['basic_data']->city){echo 'selected="selected"';}?>><?php echo $city['name']; ?></option>
								<?php } ?>
							</select>
						 
						</div>																		
					</div><!-- row -->
					
					
					
					<div class="form-group">
                      <label class="formGroupExampleInput1">Delivery Time<span class="star-icons-validations">*</span></label>
                       <select name="select_delivery_time" class="form-control">
                                <option value="">Select Time</option>
								<option value="1"<?php if($edit_data['basic_data']->select_delivery_time == 1){echo 'selected="selected"';} ?>>Up to 12 hours</option>
								<option value="2"<?php if($edit_data['basic_data']->select_delivery_time == 2){echo 'selected="selected"';} ?>>Up to 24 hours</option>
								<option value="3" <?php if($edit_data['basic_data']->select_delivery_time == 3){echo 'selected="selected"';} ?>>Up to 3 days</option>
								<option value="4" <?php if($edit_data['basic_data']->select_delivery_time == 4){echo 'selected="selected"';} ?>>Up to 7 days</option>
								<option value="5" <?php if($edit_data['basic_data']->select_delivery_time == 5){echo 'selected="selected"';} ?>>Up to 2 weeks</option>
								<option value="6" <?php if($edit_data['basic_data']->select_delivery_time == 6){echo 'selected="selected"';} ?>>Up to 4 weeks</option>
								<option value="7" <?php if($edit_data['basic_data']->select_delivery_time == 7){echo 'selected="selected"';} ?>>Longer than a week</option>
								<option value="8" <?php if($edit_data['basic_data']->select_delivery_time == 8){echo 'selected="selected"';} ?>>4 weeks and above</option>
								<option value="9" <?php if($edit_data['basic_data']->select_delivery_time == 9){echo 'selected="selected"';} ?>>Unspecified</option>
								   
								 
                              </select>
                    </div> 

			     <div class="form-group">
					  <label for="comment" class="formGroupExampleInput1">Describe Your Project </label>
					  <textarea class="form-control describe_textareas" rows="5" id="text_describ_proj_opening" name="text_describ_proj_opening" minlength="240" maxlength="6200"><?php echo $edit_data['basic_data']->describe_proj; ?></textarea>
					  <script>
							CKEDITOR.replace( 'text_describ_proj_opening', {
								fullPage: true,
								allowedContent: true,
								extraPlugins: 'wysiwygarea',
								width: '665px'
							});
						</script> 
					   
					   <div class="form_error">
	                    <?php echo form_error('text_describ_proj_opening'); ?>
	                  </div>
                  </div>

          

         


                  
				    <p><span class="attach-images">Attach Images/Video</span><span class="images-sub">(Images should be at least 380px by 380px)</span><span class="star-icons-validations">*</span>	  </p> 
				   <p>Note: It is only gif, jpg, png, jpeg, wmv, mp4, avi, and mov files that are supported.</p>	  
				 

                  <div class="form-group upload-files-project">

				  	<!-- <button type="button" class="btn btn-primary btn-upload-files-cls">Upload files</button>-->
                        <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
				        <input type="file" name="userfile[]" multiple="multiple" id="userfile" onchange="previewFile()"/>  
 
                        <div class="file_upload_name">

                        <!--<div class="or">OR</div>
                             <div class="drag">Drag and Drop</div>-->
                             <div id="showimgnew" class="showImg"></div>

                        </div>
                     </div>
					 
					
					<!-- delete images -->
					
					<?php //print_r($edit_data['media_data']);?>
					  <div class="updatedBrandImg">
                  <div class="showImg">
                    
                       <?php foreach ($edit_data['media_data'] as  $value) { 
						 if($value['media_type'] == 'image'){
					   ?>
                         <ul id="dynamicid<?php echo $value['id']; ?>">
                        <li>
                          
                           <img src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
                           <div class="deleteImg">
                              <i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
                           </div>
                        </li> 
                         </ul>
						<?php }else if($value['media_type'] == 'video'){ ?>
							   <ul id="dynamicid<?php echo $value['id']; ?>">
								<li>
								     <!-- <iframe width="100%" height="90px" src="<-?php echo base_url(); ?>/uploads/<-?php echo $value['media']; ?>" autoplay=0></iframe> -->
								     <video width="100%" height="90px" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>
										<div class="deleteImg">
										<i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
										</div>
									 </li> 
								 </ul>
							  <?php }  } ?>

                   
                     <div class="clearfix"></div>
                  </div>
             
               </div>

					 
					 <div class="margin-filesspace"></div>
					<p style="font-weight:bold;">ATTACH FILES</p>
					<p>Note:It is only pdf, xlsx, xls, doc, and docx files that are supported.</p>
                    <div class="form-group upload-files-project">

          
                        <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                       <input type="file" name="userfile[]" multiple="multiple" id="userfile_new" accept=".xlsx,.xls,.doc, .docx,.pdf" onchange="previewFile_new()"/>  
 
                        <div class="file_upload_name">

                         <!-- <div class="or">OR</div>
                             <div class="drag">Drag and Drop</div>-->
							 
                             <div id="showfiles" class="showfiles"></div>

                        </div>
                     </div>
					 
					 <!-- delete files -->
					 <div class="updatedBrandImg">
						<div class="showImg">
						
						   <?php  
						  //print_r($edit_data['media_data']); die;
						   foreach ($edit_data['media_data'] as  $value) { 
						   //pallavi  
						   
						    if($value['media_type'] == 'application' || $value['media_type'] == ''){
								$media= $value['media'];
								
								//print_r($edit_data['media_data']); die;
								if(!empty($media)){
									$res= explode('.',$media);
									$ext =$res[1];
									$filename =$res[0];
									if($ext == 'pdf'){
										$image='pdf.png';
									}else if(($ext == 'doc') || ($ext == 'docx')){
										$image='word.png';
									}else if(($ext == 'xls') || ($ext == 'xlsx')){
										$image='excel.png';
									}else{
										$image='pdf.png';
									}
								}else{
									$filename ="";
									$image='pdf.png';
								}
								
						   
						   ?>
						   
						  
						   
						   
							<ul id="dynamicid<?php echo $value['id']; ?>">
							<li>
							   <img src="<?php echo base_url(); ?>assets/img/<?php echo $image; ?>">
							   <div class="deleteImg">
								  <i class="fa fa-trash" onclick="delete_image(<?php echo $value['id']; ?>,'<?php echo $value['media']; ?>')"></i>
							   </div>
							</li> 
							 </ul>
						   <?php } } ?>

					   
							<div class="clearfix"></div>
						</div>
				 
					</div> 

					 
					 <div class="margin-filesspace"></div>
					 
					
					 
					  <div class="margin-filesspace"></div>
					


                     <div class="form-group form-upload-project" style="text-align: center;">
                  		<button type="submit" class="btn btn-primary btn-upload-project">UPDATE PROJECT</button>
                   </div>
                  
                  


	            </form> 


	         
                

            </div>


		</div>

	</div>

</section>




<?php include ("footer.php"); ?>

<script type="text/javascript">
function delete_image(image_id,image_name)
{
  var status = confirm("Are you sure you want to delete ?");  
  if(status==true)
  {
   
    $.ajax({
      type:"POST",
      url:"<?php echo base_url(); ?>Front/delete_proj_upload_opening_image",
      data:{image_name:image_name,image_id:image_id},
      success(html){
       alert('Deleted');
      }
    });
  }
 $('#dynamicid'+image_id).html('');

  
 }
</script>


 <script type="text/javascript">
  function previewFile() {
$('#showimgnew').html('');
// Multiple images preview in browser
var total_file=document.getElementById("userfile").files.length;
var imgPre="";
for(var i=0;i<total_file;i++)
{
imgPre+='<ul class="attachimages" id="imgList'+i+'"><li ><img  src="'+URL.createObjectURL(event.target.files[i])+'"></li></ul>';
}
$('#showimgnew').append(imgPre);
}
</script>

<script type="text/javascript">
  function previewFile_new() {
$('#showfiles').html('');
// Multiple images preview in browser
var total_file=document.getElementById("userfile_new").files.length;
var imgPre="";
for(var i=0;i<total_file;i++)
{
	
imgPre+='<ul class="attachfiles" id="imgListfiles'+i+'"><li ><img  src="<?php echo base_url();?>assets/img/otherfile.png"></li></ul>';
}
$('#showfiles').append(imgPre);
}
</script>


<script type="text/javascript">
$(document).ready(function(){
	
   //$("#selectdocumenttype").hide();
  // $("#selectserviceinclue").hide();
   //$("#selectsubcategory").hide();
   //$("#selectskill").hide();
   
    $('#sel1_category').on("change",function () {
        var main_categoryId = $(this).find('option:selected').val();
		
		$("#selectdocumenttype").hide();
		$("#selectserviceinclue").hide();
		$("#selectsubcategory").hide();
		$("#selectskill").hide();
		
		$("#select_document_type").html('');
		$("#select_service_inclue").html('');
		$("#select_sub_category").html('');
		$("#select_skill").html('');
		
		
		
        $.ajax({
            url: "<?php echo base_url(); ?>Front/get_subcategory_opening",
            type: "POST",
            data: {main_categoryId:main_categoryId},
            success: function (response) {
                // console.log(response);
					$("#select_sub_category").html(response);
					$("#selectsubcategory").show();
            },
        });
		
		
		$.ajax({
            url: "<?php echo base_url(); ?>Front/get_skill_opening",
            type: "POST",
            data: {main_categoryId:main_categoryId},
            success: function (response) {
                // console.log(response);
					$("#select_skill").html(response);
					$("#selectskill").show();
            },
        });
		
		
		if (main_categoryId == 1) {
            $("#select_document_type").html('');
            $("#select_service_inclue").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_document_type_opening",
				type: "POST",
				data: {main_categoryId:main_categoryId},
				success: function (response) {
					if(response != 0){
						$("#select_document_type").html(response);
						$("#selectdocumenttype").show();
					}
				},
			});


			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_service_include_opening",
				type: "POST",
				data: {main_categoryId:main_categoryId},
				success: function (response) {
					if(response != 0){
						$("#select_service_inclue").html(response);
						$("#selectserviceinclue").show();
					}
				},
			});			
        } 
		
    });


     $('#select_country').on("change",function () {
		var country = $(this).find('option:selected').val();
        //alert(sub_categoryId);
		
		
		$("#select_specification").html('');
		$("#select_presentation").html('');
		
		
		$("#selectspecification").hide();
		$("#selectpresentation").hide();
		
		
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
		
		
		var presentation_array = ['1'];
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
		
    });  



});

</script>

<script>	
function get_state(val) {
         $('#state').html('');
		 $.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Front/get_state',
			data:{'country_id':val},
			success: function(data)
			{                		
				var objJson = JSON.parse(data); 
				 $('#state').append("<option value='' >select</option>"); 
				$.each(objJson.states, function(val,text) { 
				
				   $('#state').append("<option value='"+text.id+"' >"+text.name+"</option>");
						  
				}); 
			}
		});
}	

function get_city(val) {
         $('#city').html('');
		 //alert(val);
		 $.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Front/get_city',
			data:{'state_id':val},
			success: function(data)
			{       //alert(data);         		
				var objJson = JSON.parse(data); 
				 $('#city').append("<option value='' >select</option>"); 
				$.each(objJson.cities, function(val,text) { 
				
				   $('#city').append("<option value='"+text.id+"' >"+text.name+"</option>");
						  
				}); 
			}
		});
}	
</script>
<script>
   $(document).ready(function(){
    
    $("#select_skill").select2();
    $("#select_tool").select2();

      });
</script>  