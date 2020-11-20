<?php include ("header4.php"); ?>


<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'>
	
</script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/select2-view-project-opening.css' rel='stylesheet' type='text/css'>
<div class="clearfix"></div>

<section class="project_opening_uploading_section">
  <div class="container-fluid">
  	

  </div>	

</section>

<section class="project_form">
	<div class="container-fluid ">
		<div class="container">

			<div class="row row h-100 justify-content-center align-items-center">

				<form class="col-8 form-pro-lbl-section" method="post"  >

                <h3 class="text-center packages">View Project</h3>
                
                  
			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Project Title</label>
			        <input type="text" class="form-control" id="" name="text_proj_title" placeholder="Title of the project" value="<?php echo $view_data['basic_data']->title; ?>" readonly >
			       
			      </div>


			      <div class="form-group">
			        <label for="formGroupExampleInput2" class="formGroupExampleInput1" >Marketplace </label>
			        <select class="form-control" id="sel1_category" name="select_category" readonly>
						    <option value="">Choose a marketplace</option>
						      <?php foreach ($category_list as  $value) { ?>
                     <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->category)?"selected":"" ?>><?php echo $value['category_name']; ?></option>
                   <?php } ?>
              </select>
                   
			      </div>
				  
				   <!--pallavi code start -->
					
					<div class="form-group">
						<label  class="formGroupExampleInput1"  for=""> Category</label>
						<select class="form-control"  name="select_sub_category" id="select_sub_category" readonly>
						  <option value="">Select Category</option>
							 <?php 
							 $sub_category_list=$this->Front_model->get_sub_category_list_opening($view_data['basic_data']->category);
							  foreach ($sub_category_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->sub_cat_id)?"selected":"" ?>><?php echo $value['sub_cat_name_opening']; ?></option>
							 <?php } ?>
						 </select>
					</div> 
					
					<?php 
					 $ids=explode(',',$view_data['basic_data']->skill_id);
					 ?>

					<!--<div class="form-group" id="selectskill">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Skills </label>
						<select class="form-control"  name="select_skill[]" multiple id="select_skill" readonly>
							
							 <?php 
							 $skill_list=$this->Front_model->get_skills($view_data['basic_data']->category);
							  foreach ($skill_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>><?php echo $value['cat_skill_name']; ?></option>
							 <?php } ?>
						</select>
					</div>-->

					<div id="selectskill">
                     <div class="form-group">
                       <label class="formGroupExampleInput1" for="formGroupExampleInput2">Skills<span class="star-icons-validations">*</span> </label>
                       <br>
                        <select class="form-control"  name="select_skill[]" multiple 
                         id="select_skill" readonly>
                          <?php 
							 $skill_list=$this->Front_model->get_skills($view_data['basic_data']->category);
							  foreach ($skill_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php if(in_array($value['id'], $ids)){echo "selected";} ?>><?php echo $value['cat_skill_name']; ?></option>
							 <?php } ?>	



                                          
                        </select>

                     </div> <!-- select skills forms group --> 	
                     </div>
					 
					 
					 
					 <div id="selecttool">
                     <div class="form-group">
                       <label class="formGroupExampleInput1" for="formGroupExampleInput2">Tools<span class="star-icons-validations">*</span> </label>
                       <br>
                        <select class="form-control"  name="select_tool[]" multiple 
                         id="select_tool" readonly>
                          <?php 
							  $toolids=explode(',',$view_data['basic_data']->tool_id);
							  $tool_list=$this->Front_model->get_tools_opening();
							  foreach ($tool_list as  $tool) { ?>
								<option value="<?php echo $tool['id']; ?>" <?php if(in_array($tool['id'], $toolids)){echo "selected";} ?>><?php echo $tool['tool_name']; ?></option>
							 <?php } ?>	



                                          
                        </select>

                     </div> <!-- select skills forms group --> 	
                     </div>
					 

					<?php if($view_data['basic_data']->category ==1){ ?>
					
					<div class="form-group" id="selectdocumenttype">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Document Type </label>
						<select class="form-control"  name="select_document_type" id="select_document_type" readonly>				
						<option value="">Select</option>
							 <?php 
							 $document_type_list=$this->Front_model->get_document_type_opening($view_data['basic_data']->category);
							  foreach ($document_type_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->document_type_id)?"selected":"" ?>><?php echo $value['documant_type_name_opening']; ?></option>
							 <?php } ?>
						</select>
					</div>
					
					<div class="form-group" id="selectserviceinclue">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Service Include </label>
						<select class="form-control"  name="select_service_inclue" id="select_service_inclue" readonly>
							<option value="">Select</option>
							 <?php 
							 $document_type_list=$this->Front_model->get_service_include_opening($view_data['basic_data']->category);
							  foreach ($document_type_list as  $value) { ?>
								<option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == $view_data['basic_data']->service_include_id)?"selected":"" ?>><?php echo $value['servive_include_name_opening']; ?></option>
							 <?php } ?>
						</select>
					</div>
					
					<?php } ?>
				  <!-- pallavi code end -->
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  

			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Budget </label>

			         <input type="text" class="form-control" id="" name="text_proj_budget" placeholder="$ Enter Budget" value="<?php echo $view_data['basic_data']->budget; ?>" readonly>
			         
			      </div>

                  <div class="form-group" id="divDOB">
			        
			        <div class="form-group">
						<label for="" class="formGroupExampleInput1">Expiration Date For Project </label>

						<input type="text" class="form-control" id="" name="text_expiration_date" placeholder="Expiration Date" value="<?php echo $view_data['basic_data']->expiration_date_proj_opening; ?>" readonly>
			         
					</div>
					
			      </div>
				  <div class="form-group">
                      <label class="formGroupExampleInput1">Language</label>
                      <select class="form-control" id="select_language" name="select_language" readonly>
                        <option value="">Select</option>
						
						<?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>" <?php if($view_data['basic_data']->language_id == $lng->id){echo 'selected="selected"';} ?>><?php echo $lng->language; ?></option>
						<?php } ?>
						
                       
                      </select> 
                    </div> 
					
					
				<div class="row">
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">Country</label>					 
							<select class="form-control" id="country" name="country" onChange="get_state(this.value);" readonly>
								<option value="">Select</option>
								<?php  foreach ($country_list as  $con) { ?>
									<option value="<?php echo $con->id; ?>" <?php if( $con->id == $view_data['basic_data']->country ){echo 'selected="selected"';}?>><?php echo $con->name; ?></option>
								<?php } ?>											
							</select>                      
						</div>
						
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">State</label>					
							<select class="form-control" id="state" name="state" onChange="get_city(this.value);" readonly>
								<option value="">Select</option>
								<?php
								$state_list = $this->Front_model->get_state($view_data['basic_data']->country);
								foreach ($state_list as  $state) { ?>
									<option value="<?php echo $state['id']; ?>" <?php if( $state['id'] == $view_data['basic_data']->state){echo 'selected="selected"';}?>><?php echo $state['name']; ?></option>
								<?php } ?>	
								
							</select>
							 
						</div>
						<div class="col-md-4 mb-3">
							<label class="formGroupExampleInput1">City</label>
							
							<select class="form-control" id="city" name="city" readonly >
							
							<option value="">Select</option>
								<?php
								$city_list = $this->Front_model->get_city($view_data['basic_data']->state);
								foreach ($city_list as  $city) { ?>
									<option value="<?php echo $city['id']; ?>" <?php if( $city['id'] == $view_data['basic_data']->city){echo 'selected="selected"';}?>><?php echo $city['name']; ?></option>
								<?php } ?>
							</select>
						 
						</div>																		
					</div><!-- row -->
					
					<div class="form-group">
                      <label class="formGroupExampleInput1">Delivery Time<span class="star-icons-validations">*</span></label>
                       <select name="select_delivery_time" class="form-control" readonly>
                                <option value="">Select Time</option>
                                 
								<option value="1"<?php if($view_data['basic_data']->select_delivery_time == 1){echo 'selected="selected"';} ?>>Up to 12 hours</option>
								<option value="2"<?php if($view_data['basic_data']->select_delivery_time == 2){echo 'selected="selected"';} ?>>Up to 24 hours</option>
								<option value="3" <?php if($view_data['basic_data']->select_delivery_time == 3){echo 'selected="selected"';} ?>>Up to 3 days</option>
								<option value="4" <?php if($view_data['basic_data']->select_delivery_time == 4){echo 'selected="selected"';} ?>>Up to 7 days</option>
								<option value="5" <?php if($view_data['basic_data']->select_delivery_time == 5){echo 'selected="selected"';} ?>>Up to 2 weeks</option>
								<option value="6" <?php if($view_data['basic_data']->select_delivery_time == 6){echo 'selected="selected"';} ?>>Up to 4 weeks</option>
								<option value="7" <?php if($view_data['basic_data']->select_delivery_time == 7){echo 'selected="selected"';} ?>>Longer than a week</option>
								<option value="8" <?php if($view_data['basic_data']->select_delivery_time == 8){echo 'selected="selected"';} ?>>4 weeks and above</option>
								<option value="9" <?php if($view_data['basic_data']->select_delivery_time == 9){echo 'selected="selected"';} ?>>Unspecified</option>
								   
								   
								   
                              </select>
                    </div> 
					

			     <div class="form-group">
					  <label for="comment" class="formGroupExampleInput1">Describe Your Project </label>
					  <textarea class="form-control describe_textareas" rows="5" id="text_describ_proj_opening" name="text_describ_proj_opening" readonly="" ><?php echo $view_data['basic_data']->describe_proj; ?></textarea>
					   <script>
						CKEDITOR.replace( 'text_describ_proj_opening', {
							fullPage: true,
							allowedContent: true,
							extraPlugins: 'wysiwygarea',
							width: '665px'
						});
					</script>
					  
                  </div>
				  
				  
				<?php $imgcnt= 1; $filcnt=1; foreach ($view_data['media_data'] as  $value) { 
					   if($value['media_type'] == 'image'){ $imgcnt++; } 
					   
					   }
                       
					   if(($value['media_type'] == 'application') || ($value['media_type'] == '')){ $filcnt++;}

					 
					   ?>
          <?php if($imgcnt !=1){ ?>
				   <label for="comment" class="formGroupExampleInput1">Project Images</label>
				  <div class="updatedBrandImg">
					
						  <div class="showImg">
							
							   <?php foreach ($view_data['media_data'] as  $value) { 
							   if($value['media_type'] == 'image'){ ?>
								 <ul id="dynamicid<?php echo $value['id']; ?>">
								<li>
								  
								   <img src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>">
								 
								</li> 
								 </ul>
							   <?php }else if($value['media_type'] == 'video'){ ?>
							   <ul id="dynamicid<?php echo $value['id']; ?>">
								<li>
								     <!-- <iframe width="100%" height="90px" src="<-?php echo base_url(); ?>/uploads/<-?php echo $value['media']; ?>" autoplay=0></iframe> -->
								     <video width="100%" height="90px" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>
									 </li> 
								 </ul>
							  <?php }  } ?>

						   
							 <div class="clearfix"></div>
						  </div> <!-- show images -->
					 
					   </div> <!-- updatedbrandimages -->
		  <?php } ?>

              <div class="margin-filesspace"></div>
			
               <label for="comment" class="formGroupExampleInput1"> Project Files</label> 

           
				<div class="updatedBrandImg">          	
					<div class="showImg">                  
                        <!--<ul id="dynamicid">
							<li>
							   <img src="<?php echo base_url(); ?>assets/img/Pdf-File-512.png">                         
							</li> 
                        </ul>
						<div class="clearfix"></div>-->
						 <?php  
						  //print_r($edit_data['media_data']); die;
						   foreach ($view_data['media_data'] as  $value1) { 
						   //pallavi  
						   
						    if($value1['media_type'] == 'application' || $value1['media_type'] == ''){
								$media= $value1['media'];
								
								//print_r($view_data['media_data']); die;
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
								echo $value1['media_type'];
						   
						   ?>
						   
						  
						   
						   
							<ul id="dynamicid">
							<li>
							   <img src="<?php echo base_url(); ?>assets/img/<?php echo $image; ?>">
							  
							</li> 
							 </ul>
						   <?php } } ?>
						<div class="clearfix"></div>
						
						
					</div> <!-- show images -->
             
               </div> <!-- updatedbrandimages -->
			

              <div class="margin-filesspace"></div>



				
					<?php //echo $view_data['basic_data']->language_id;?>
					
      
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
</script>

<script>
   $(document).ready(function(){
    
    $("#select_skill").select2();
    $("#select_tool").select2();

      });
</script>  