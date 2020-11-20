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

			<div class="row row h-100 justify-content-center align-items-center">

				<form class="col-8 form-pro-lbl-section" method="post" action="<?php echo base_url(); ?>submit_upload_project_opening" enctype="multipart/form-data">

					          <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>

                     <h4><strong>A project, allows for you as a client, to post a single or multiple freelancer openings for any type of task.</strong></h4><hr>

			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Enter the title for your project<span class="star-icons-validations">*</span></label>
			        <input type="text" class="form-control" id="" name="text_proj_title" placeholder="Title of the project" value="<?php echo set_value('text_proj_title'); ?>" required >
			          <div class="form_error">
	                    <?php echo form_error('text_proj_title'); ?>
	                  </div>
			      </div>


			      <div class="form-group">

			        <label for="formGroupExampleInput2" class="formGroupExampleInput1" >What Marketplace Does Your Project Belong In?<span class="star-icons-validations">*</span> </label>

			        <select class="form-control" id="select_category" name="select_category" required>
						    <option value="">Choose a Marketplace</option>
						      <?php foreach ($category_list as  $value) { ?>
                     <option value="<?php echo $value['id']; ?>" ><?php echo $value['category_name']; ?></option>
                   <?php } ?>
                    </select>
                     <div class="form_error">
	                    <?php echo form_error('select_category'); ?>
	                 </div>
			      </div>
				  
				  <div class="form-group" id="selectsubcategory">

			        <label for="formGroupExampleInput2" class="formGroupExampleInput1" > Category<span class="star-icons-validations">*</span> </label>

			        <select class="form-control"  name="select_sub_category" id="select_sub_category" required>
						</select>
                     
			      </div>
				  

					 <!-- <div class="form-group" id="selectskill">
							<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Skills<span class="star-icons-validations">*</span> </label>
						<select class="form-control"  name="select_skill[]" multiple id="select_skill">
						</select>
					</div>-->
					
					
					<div id="selectskill">
						<div class="form-group">
							<label class="formGroupExampleInput1" for="formGroupExampleInput2">Profession<span class="star-icons-validations">*</span> </label>
							<br>
							<select class="form-control"  name="select_skill[]" multiple id="select_skill" required>
							</select>

						</div> <!-- select skills forms group --> 	
					</div>
					 
					<div id="selectstool">
						<div class="form-group">
							<label class="formGroupExampleInput1" for="formGroupExampleInput2">Tools<span class="star-icons-validations">*</span> </label>
							<br>
							<span class="tools-subtxts">A tool, is the piece of software, site, app, or other, that the freelancer will use when freelancing on this project</span><br>
							<select class="form-control"  name="select_tool[]" multiple id="select_tool" required>     <?php 
									 $tool_list=$this->Front_model->get_tools_opening();
									  foreach ($tool_list as  $tool) { ?>
										<option value="<?php echo $tool['id']; ?>" ><?php echo $tool['tool_name']; ?></option>
								  <?php } ?>
                                          
							</select>

						</div> <!-- select skills forms group --> 	
                    </div>
					
					<div class="form-group" id="selectdocumenttype">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Document Type<span class="star-icons-validations">*</span> </label>
						<select class="form-control"  name="select_document_type" id="select_document_type">
						</select>
					</div>
					
					<div class="form-group" id="selectserviceinclue">
						<label class="formGroupExampleInput1" for="formGroupExampleInput2" >Service Include<span class="star-icons-validations">*</span> </label>
						<select class="form-control"  name="select_service_inclue" id="select_service_inclue">
						</select>
					</div>
				  
				  
				  

			      <div class="form-group">
			        <label for="" class="formGroupExampleInput1">Budget<span class="star-icons-validations">*</span> </label>

			         <input type="text" class="form-control" id="" name="text_proj_budget" placeholder="Enter budget" value="<?php echo set_value('text_proj_budget'); ?>" required >
			          <div class="form_error">
	                    <?php echo form_error('text_proj_budget'); ?>
	                  </div>
			      </div>

                  <div class="form-group" id="divDOB">
			        <label for="" class="formGroupExampleInput1">Expiration Date </label>
			        <p class="tools-subtxts">If an expiration date is not chosen, your project will not expire.</p>
			        
                                                                               
	                <div  class="input-group date datepickernews" >
					    <input class="datepicker2" data-date-format="mm/dd/yyyy" name="text_expiration_date" placeholder="Expiration date" value="<?php echo set_value('text_expiration_date'); ?>" />
					    <span class="input-group-addon input-group-addon-cal-upload-openings">
					    <i class="fa fa-calendar" aria-hidden="true"></i></span>
					    <div class="form_error">
	                    <?php echo form_error('text_expiration_date'); ?>
	                  </div>
                    </div>
					
					



			      </div>
				  <div class="form-group">
                      <label class="formGroupExampleInput1">Language<span class="star-icons-validations">*</span></label>
                       <select class="form-control" id="select_language" name="select_language" required>
                        <option value="">Select</option>
						
						<?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>"><?php echo $lng->language; ?></option>
						<?php } ?>
                        
                      </select>
                    </div> 
				<div class="row">
                  <div class="col-md-4 mb-3">
                     <label class="formGroupExampleInput1">Country</label>
					 
                        <select class="form-control" id="country" name="country" onChange="get_state(this.value);" >
							<option value="">Select</option>
							<?php  foreach ($country_list as  $con) { ?>
								<option value="<?php echo $con->id; ?>"><?php echo $con->name; ?></option>
							<?php } ?>
											
						</select>                      
                  </div>
                  <div class="col-md-4 mb-3">
                     <label class="formGroupExampleInput1">State</label>					
                     <select class="form-control" id="state" name="state" onChange="get_city(this.value);" >
						<option value="">Select</option>									 
					</select>
                     
                  </div>
                  <div class="col-md-4 mb-3">
                     <label class="formGroupExampleInput1">City</label>
						
                    <select class="form-control" id="city" name="city"  >
					<option value="">Select</option>
					</select>
                     
                  </div>
               </div>
               <!-- row -->
				 
					<div class="form-group">
                      <label class="formGroupExampleInput1">Delivery Time<span class="star-icons-validations">*</span></label>
                       <select name="select_delivery_time" class="form-control">
								<option value="">Select Time</option>
								<option value="1">Up to 12 hours</option>
								<option value="2">Up to 24 hours</option>
								<option value="3">Up to 3 days</option>
								<option value="4">Up to 7 days</option>
								<option value="5">Up to 2 weeks</option>
								<option value="6">Up to 4 weeks</option>
								<option value="7">Longer than a week</option>
								<option value="8">4 weeks and above</option>
								<option value="9">Unspecified</option>
                              </select>
                    </div>  
					
					
					

			     <div class="form-group">

					  <label for="comment" class="formGroupExampleInput1">Describe Your Project<span class="star-icons-validations">*</span></label>
					  <textarea class="form-control describe_textareas" rows="5" id="text_describ_proj_opening" name="text_describ_proj_opening"required  minlength="240" maxlength="6200"></textarea>
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


                  
				  <p><b><span class="attach-images">Attach Images/Video</span>
				  </b><span class="star-icons-validations">*</span></p>
				  <p><span class="images-sub">(Images should be at least 380px by 380px)</span>	  </p> 
				   <p class="atachoneimage">Attach at least one image or video.</p>
				   <p>Note: It is only gif, jpg, png, jpeg, wmv, mp4, avi, and mov files that are supported.</p>

                  <div class="form-group upload-files-project">

				  
                        <button class="btn btn-primary btn-upload-files-cls">Upload images/video</button>
				               <input type="file" name="userfile[]" accept='image/*,video/*' multiple="multiple" required id="userfile" onchange="previewFile()"/>  
 
                        <div class="file_upload_name">

                        	<!--<div class="or">OR</div>
                             <div class="drag">Drag and Drop</div>-->
                             <div id="showimg" class="showImg"></div>

                        </div>
                     </div>

                 

                  <!-- <div class="row">
                      <div class="col-md-4 mb-3">
                       <label class="formGroupExampleInput1">Country</label>
                        <select class="form-control"  name="select_country" id="select_country">
						<option value="">Select</option>
                        <?php  foreach ($country_list as  $con) { ?>
							<option value="<?php echo $con->id; ?>"><?php echo $con->name; ?></option>
						<?php } ?>
						</select>
                      
                      </div>

                      <div class="col-md-4 mb-3">
                       <label class="formGroupExampleInput1">State</label>
                       <select class="form-control" id="state" name="state">
                       <option value="">Select</option>
                                 
                       </select>
                       
                      </div>

                    <div class="col-md-4 mb-3">
                     <label class="formGroupExampleInput1">City</label>
                    <select class="form-control" id="city" name="city">
                    <option value="">select</option>
                              
                      </select>
                     
                    </div>
                  </div> row -->
				  
				  

                  <p><b>Attach Files</b></p> 
                  <p>Note:It is only pdf, xlsx, xls, doc, and docx files that are supported.</p>
                    <div class="form-group upload-files-project">

          
                       <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                       <input type="file" name="userfile[]" multiple="multiple" id="userfile_new" accept=".xlsx,.xls,.doc, .docx,.pdf" onchange="previewFile_new()"/>  
 
                        <div class="file_upload_name">

                          <!--<div class="or">OR</div>
                             <div class="drag">Drag and Drop</div>-->
                             <div id="showfiles" class="showfiles"></div>

                        </div>
                     </div>


                     <div class="form-group form-upload-project" style="text-align: center;">
                  		<button type="submit" class="btn btn-primary btn-upload-project">UPLOAD PROJECT</button>
                   </div>
                  
                  


	            </form> 


	         
                

            </div>


		</div>

	</div>

</section>




<?php include ("footer.php"); ?>

<!--<script src="<?php echo base_url();?>/assets/js/jquery.multiselect.js"></script>-->

<script>
	/* $('#select_skill').multiselect({
		columns: 1,
		placeholder: 'Select Languages',
		search: true
	}); */

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

<script>
    $(function () {
    $("#btnAddskillmore").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextskillContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
    });
function GetDynamicTextBox(value) {
    return '<td><input name = "DynamicTextBoxskill" type="text" value = "' + value + '" class="form-control" /></td>' +  '<td><button type="button" class="btn btn-danger remove"><i class="fa fa-close"></i></button></td>'
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	
   $("#selectdocumenttype").hide();
   $("#selectserviceinclue").hide();
   $("#selectsubcategory").hide();
   $("#selectskill").hide();
   
    $('#select_category').on("change",function () {
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
					$("#select_skill").attr("required", "true");
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
						$("#select_document_type").attr("required", "true");
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
						$("#select_service_inclue").attr("required", "true");
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
					$("#select_specification").attr("required", "true");
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
						$("#select_presentation").attr("required", "true");
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
