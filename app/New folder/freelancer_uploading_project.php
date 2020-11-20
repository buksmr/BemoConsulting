<?php include ("header3.php"); ?>
<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'></script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/select2.customize.css' rel='stylesheet' type='text/css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> 
<?php //print_r($country_list);?>

<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
   </div>
</section>
  <form action="<?php echo base_url(); ?>submit_upload_project" method="post" enctype="multipart/form-data">
<section class="project_form">
   <div class="container-fluid ">
      <div class="container">
         <div class="row row h-100 justify-content-center align-items-center">
            <div class="col-8  form-pro-lbl-section-uploading-project">
                        <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>
				 <h4><strong>A gig, allows for you as a freelancer, to sell a service and or offer it free-of-charge.</strong></h4><hr>				
               <div class="form-group">
                  <label for="" class="pro_title">Enter The Title For Your Gig<span class="star-icons-validations">*</span></label>
                  <input type="text" class="form-control" id="text_proj_title" name="text_proj_title" placeholder="Title of the gig" value="<?php echo set_value('text_proj_title'); ?>" required>
                   <div class="form_error">
                    <?php echo form_error('text_proj_title'); ?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="" class="pro_title" >What Marketplace Does Your Gig Belong In?<span class="star-icons-validations">*</span> </label>
                  <select class="form-control" id="select_category" name="select_category" required>
                     <option value="">Choose a Marketplace</option>
                    <?php foreach ($category_list as  $value) { ?>
                     <option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                   <?php } ?>
                  </select>
                   <div class="form_error">
                    <?php echo form_error('select_category'); ?>
                  </div>
               </div>

					<div class="form-group" id="category_id">
						<label  class="pro_title"  for=""> Category<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_sub_category" id="select_sub_category" required="">
						</select>
					</div> 

					<div class="form-group" id="selectspecification">
						<label  class="pro_title"  for="">Select Specification<span class="star-icons-validations">*</span></label>
						<br>
						<select class="form-control"  name="select_specification[]" multiple id="select_specification" >
						</select>
					</div> 
					
					
					<!-- END OF SELECTED OPTIONS  -->
					
					
					<div class="form-group" id="selectpresentation">
						<label  class="pro_title"  for="">Select Presentation<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_presentation" id="select_presentation">
						</select>
					</div> 
					
					<div class="form-group" id="selectstyle">
						<label  class="pro_title"  for="">Select Style<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_style" id="select_style">
						</select>
					</div> 
					
					<div class="form-group" id="selectgender">
						<label  class="pro_title"  for="">Select Gender<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_gender" id="select_gender">
						</select>
					</div> 
					
					<div class="form-group" id="selectpitch">
						<label  class="pro_title"  for="">Select Pitch<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_pitch" id="select_pitch">
						</select>
					</div>
					
					<div class="form-group" id="selectgenre">
						<label  class="pro_title"  for="">Select Genre<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_genre" id="select_genre">
						</select>
					</div>
					
					<div class="form-group" id="selectinstrument">
						<label  class="pro_title"  for="">Select Instrument<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_instrument" id="select_instrument">
						</select>
					</div>
					
					<div class="form-group" id="selectsoundgenre">
						<label  class="pro_title"  for="">Select Sound Genre <span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_sound_genre" id="select_sound_genre">
						</select>
					</div>
					
					<div class="form-group" id="selectsoundeffectfor">
						<label  class="pro_title"  for="">Select Sound Effect For <span class="star-icons-validations">*</span></label>
						<select class="form-control" name="select_sound_effect_for" id="select_sound_effect_for">
						</select>
					</div>
					
					<div class="form-group" id="selectplatform">
						<label  class="pro_title"  for="">Select Platform<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_platform" id="select_platform">
						</select>
					</div>
					
					<div class="form-group" id="selectcodelanguage">
						<label  class="pro_title"  for="">Select Code Language<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_code_language" id="select_code_language">
						</select>
					</div>
					
					<div class="form-group" id="selectoperatingsystem">
						<label  class="pro_title"  for="">Select Operating Sustem<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_operating_system" id="select_operating_system">
						</select>
					</div>
					
					<div class="form-group" id="selecttool">
						<label  class="pro_title"  for="">Select tool<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_tool" id="select_tool">
						</select>
					</div>
					
					<div class="form-group" id="selectserviceinclude">
						<label  class="pro_title"  for="">Select Service Include<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_service_include" id="select_service_include">
						</select>
					</div>
					
					<div class="form-group" id="selecttypeofvideo">
						<label  class="pro_title"  for="">Select Type Of Video<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_type_of_video" id="select_type_of_video">
						</select>
					</div>
					
					<div class="form-group" id="selectagerange">
						<label  class="pro_title"  for="">Select Age Range<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_age_range" id="select_age_range">
						</select>
					</div>
					
					<div class="form-group" id="selecttext">
						<label  class="pro_title"  for="">Select Text<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_text" id="select_text">
						</select>
					</div>
					
					<div class="form-group" id="selecttopic">
						<label  class="pro_title"  for="">Select Topic<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_topic" id="select_topic">
						</select>
					</div>
					
					<div class="form-group" id="selecttone">
						<label  class="pro_title"  for="">Select Tone<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_tone" id="select_tone">
						</select>
					</div>
					
					<div class="form-group" id="selectarticletype">
						<label  class="pro_title"  for="">Select Article Type<span class="star-icons-validations">*</span></label>
						<select class="form-control"  name="select_article_type" id="select_article_type">
						</select>
					</div>
					
					<!-- END OF SELECTED OPTIONS -->
					
					
					
					
					

					<div class="form-group">
                      <label class="pro_title">Language<span class="star-icons-validations">*</span></label>
                      <select class="form-control" id="language" name="language" required>
                        <option value="">Select</option>
                        <?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>"><?php echo $lng->language; ?></option>
						<?php } ?>
                      </select>
					  
					  <div class="form_error">
                    <?php echo form_error('language'); ?>
                  </div>
                    </div> 

					<div class="form-group">
						<label  class="pro_title"  for="">Select Location</label>
						<select class="form-control"  name="select_location" id="select_location" required>
						<option value="">Select</option>
                        <?php  foreach ($country_list as  $con) { ?>
							<option value="<?php echo $con->id; ?>"><?php echo $con->name; ?></option>
						<?php } ?>
						</select>
					</div> 					

               <label for="" class="pro_title">Uploading Brand Images And Videos<span class="star-icons-validations">*</span></label>
               <p class="img_txt_comment">Images should be at least min-width="900px" and max-height="400px"</p>
               <div class="form-group upload-files-project">
                  <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                  <!-- <input type="file" name="myfile" />     -->
                  <input type="file" name="userfile[]" accept='image/*,video/*' multiple="multiple" id="userfile" onchange="previewFile()" required> 
                  <!--	<button type="button" class="btn btn-primary btn-upload-files-cls">Upload files</button> -->
                  <div class="file_upload_name">
                    <!-- <div class="or">OR</div>
                     <div class="drag">Drag and Drop</div>-->

                     <div id="showimg" class="showImg">


                     </div>

                  </div>
                  <!--  <label for="comment"></label> 
                     <div class="file_upload_name">
                                     <input type="file" id="myFile" name="filename2">
                     
                                    </div> -->
               </div>
               <div class="form-group">
                  <label for="formGroupExampleInput" class="formGroupExampleInput">Describe Your Gig<span class="star-icons-validations">*</span></label>
                  <textarea class="form-control" rows="5" id="text_description" name="text_description" required   minlength="30" maxlength="3600"><?php echo set_value('text_description'); ?></textarea>
				  <!-- script>
					CKEDITOR.replace( 'text_description', {
						fullPage: true,
						allowedContent: true,
						extraPlugins: 'wysiwygarea',
						width: '665px'
					});
				</script> -->
				
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
         <p class="pro_packages">Choose amount of packages your gig will offer and specify what your package include</p>

         <div class="row">
           <div class="col-md-6">
           	  <h5 class="free-packages">Free Package</h5>

           </div> <!--md6 -->	

         </div>



         <div class="row">
		 
		 <div class="col-md-6" id="freePAckMain">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of free package -->
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
                              <span class="float-right first12-icon-section">
                               <a data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span>
                                <input type="text" class="form-control" placeholder="Add Line" name="add_line_packfree" value="" maxlength="280" required="">
                           </th>
                           <td>
                            <input type="text" class="form-control" placeholder="Add title here"  name="text_free_pack_title" value="<?php echo set_value('text_free_pack_title'); ?>" maxlength="280" required="">
                           </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_free_pack_description" maxlength="280" style="height: 78px;" required=""><?php echo set_value('text_free_pack_description'); ?></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_free_pack_revision" value="<?php echo set_value('text_free_pack_revision'); ?>" maxlength="280" required=""></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                             <select name="select_free_pack_delivtime" class="form-control" required="">
                                 <option value="">Select Time</option>
                                  <?php foreach ($delivery_time as  $value) { ?>
                                   <option value="<?php echo $value['id']; ?>"><?php echo $value['time']; ?></option>
                                   <?php } ?>
                              </select>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- end of free package -->
               </div>
               <!-- table responsive -->
            </div>
            <!--md 6 -->
			
			
			 <div class="col-md-6">
               <div class="first-add-button">
                  <span class="first-icon-section">                            
                   <a  data-toggle="tooltip" data-placement="top" title="Adding an extra package, will allow for you to offer a more expensive or cheaper service or item.You can add a maximum of three packages per gig."> <img src="<?php echo base_url(); ?>assets/img/about1.png" class="img-fluid" alt="Cinque Terre"> </a>
                  </span>
                  <div class="col text-center">
                     <button type="button" class="btn btn-outline-secondary add-secodary-pakages" id="addPackBtn">ADD PACKAGE</button>
                  </div>
               </div>

               <!--<div class="second-add-button">
                  <span class="first-icon-section">
                   <a href="#" data-toggle="tooltip" data-placement="top" title="Adding a free package, will allow for you to offer an example of the service or item free-of-charge."><img src="<?php echo base_url(); ?>assets/img/about1.png" class="img-fluid" alt="Cinque Terre"></a>
                  </span>
                  <div class="col text-center">
                     <button type="button" class="btn btn-outline-secondary add-secodary-free-packages" id="addPackFreeBtn">ADD FREE PACKAGE</button>
                  </div>
               </div>-->


            </div>
            <!-- col-md-6 -->
			
			
            
            
           
         </div>

         <div class="addPackMain" id="addPackMain">
            <div class="row">
				<div class="col-md-6 paidpack" id="paidpack1">
               <div class="table-responsive-sm table-product-info">
                  <!-- start of package 1 -->
                  <table class="table table-bordered tbd-product-info">
                     <tbody>
                        <tr>
                           <th style="width:30%">
						   
                              <span class="float-right first12-icon-section">
                              <a  data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"> <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span> 
                              <!--<select class="form-control font-mark-form" id="add_line_pack1" name="sellist1">
                                 <option>Add Line</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                              </select>-->
							  <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack1" value="" maxlength="280">
                           </th>
                           <td>
                              <input type="text" class="form-control" placeholder="Add price in Euro here" name="text_pack1_price" onkeypress="CheckNumeric(event);" maxlength="280">
                              <input type="text" class="form-control" placeholder="Add title here"  name="text_pack1_title" maxlength="280">
                           </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>
                              <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack1_description" maxlength="280" style="height: 78px;"></textarea>
                           </td>
                        </tr>
                        <tr>
                           <th>Revision</th>
                           <td>
                           <input type="text" class="form-control" placeholder="Add revision here" name="text_pack1_revision" maxlength="280"></td>
                        </tr>
                        <tr>
                           <th>Delivery Time</th>
                           <td>
                              <select name="select_pack1_delivtime" class="form-control">
                                 <option value="">Select Time</option>
                                  <?php foreach ($delivery_time as  $value) { ?>
                                   <option value="<?php echo $value['id']; ?>"><?php echo $value['time']; ?></option>
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
            <!--md 6 -->
               <div class="col-md-6 paidpack" id="paidpack2">
                  <div class="table-responsive-sm table-product-info">
                     <table class="table table-bordered tbd-product-info">
                        <tbody>
                           <tr>
                              <th style="width:30%">
                                 <span class="float-right first12-icon-section">
                                  <a  data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                                 </span>
                                  <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack2" value="" maxlength="280">
                              </th>
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack2_price" onkeypress="CheckNumeric(event);" maxlength="280">
                                 <input type="text" class="form-control" placeholder="Add title here" name="text_pack2_title" maxlength="280">
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack2_description" maxlength="280" style="height: 78px;"></textarea>
                              </td>
                           </tr>
                           <tr>
                              <th>Revision</th>
                              <td><input type="text" class="form-control" placeholder="Add revision here"  name="text_pack2_revision" maxlength="280"></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack2_delivtime" class="form-control">
                                    <option value="">Select Time</option>
                                    <?php foreach ($delivery_time as  $value) { ?>
                                   <option value="<?php echo $value['id']; ?>"><?php echo $value['time']; ?></option>
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
               <div class="col-md-6 paidpack" id="paidpack3">
                  <div class="table-responsive-sm table-product-info">
                     <table class="table table-bordered tbd-product-info">
                        <tbody>
                           <tr>
                              <th style="width:30%">
                                 <span class="float-right first12-icon-section">
                                 <a  data-toggle="tooltip" data-placement="top" title="Adding extra lines, will allow for you to specially define the quantity of a service or item"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                                 </span>
                                   <input type="text" class="form-control" placeholder="Add Line" name="add_line_pack3" maxlength="280">
                              </th>
                              <td>
                                 <input type="text" class="form-control" placeholder="Add price here" name="text_pack3_price" onkeypress="CheckNumeric(event);" maxlength="280">
                                 <input type="text" class="form-control" placeholder="Add title here"  name="text_pack3_title" maxlength="280">
                              </td>
                           </tr>
                           <tr>
                              <th>Description</th>
                              <td>
                                 <textarea type="text" class="form-control" placeholder="Add description here"  name="text_pack3_description" maxlength="280" style="height: 78px;"></textarea>
                              </td>
                           </tr>
                           <tr>
                             <th>Revision</th>
                             <td><input type="text" class="form-control" placeholder="Add revisions here"  name="text_pack3_revision" maxlength="280"></td>
                           </tr>
                           <tr>
                              <th>Delivery Time</th>
                              <td>
                                 <select name="select_pack3_delivtime" class="form-control">
                                    <option value="">Select Time</option>
                                     <?php foreach ($delivery_time as  $value) { ?>
                                   <option value="<?php echo $value['id']; ?>"><?php echo $value['time']; ?></option>
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
            </div>
         </div>
         <!-- addPackMain -->
         <div class="btn-upload-pt">
            <button type="submit" class="btn btn-primary btn-lg btn-start-upload-project">Upload Gig</button>
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
   $("#dynamicpck").hide();

   $("#btnshowdynamicpack").click(function(){
  $("#staticfreepack").hide();
  $("#dynamicpck").show();
});

    $("#btnshofreepack").click(function(){
  $("#dynamicpck").hide();
  $("#staticfreepack").show();
});
</script>

<script type="text/javascript">

//$("#addPackMain").show();
  //$("#freePAckMain").show();
   //$("#setPAckMain").show();
   
   
   $('.paidpack').hide();

var count = 0;
$('#addPackBtn').on('click',function(){
    $('.paidpack:eq('+count+')').show();
    count++;
});


   
  /* $("#addPackBtn").click(function(){
  $("#addPackMain").show();
  $("#freePAckMain").hide();
   $("#setPAckMain").show();
  
});

    $("#addPackFreeBtn").click(function(){
  $("#addPackMain").hide();
   $("#setPAckMain").hide();
   $("#freePAckMain").show(); 

}); */
  
</script>


<script type="text/javascript">
$(document).ready(function(){
	$("#category_id").hide();
	 $("#select_specification").select2();
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
   
    $('#select_category').on("change",function () {
    	$("#category_id").hide();
        var main_categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "<?php echo base_url(); ?>Front/get_subcategory",
            type: "POST",
            data: {main_categoryId:main_categoryId},
            success: function (response) {
                // console.log(response);
					$("#category_id").show();
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
        //alert(sub_categoryId);
		
		
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
					$("#select_specification").attr("required", "true");
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
						$("#select_presentation").attr("required", "true");
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
					$("#select_style").attr("required", "true");
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
					$("#select_gender").attr("required", "true");
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
					$("#select_pitch").attr("required", "true");
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
					$("#select_sound_genre").attr("required", "true");
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
					$("#select_genre").attr("required", "true");
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
					$("#select_instrument").attr("required", "true");
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
					$("#select_sound_effect_for").attr("required", "true");
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
					$("#select_platform").attr("required", "true");
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
					$("#select_code_language").attr("required", "true");
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
					$("#select_operating_system").attr("required", "true");
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
					$("#select_tool").attr("required", "true");
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
					$("#select_service_include").attr("required", "true");
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
					$("#select_type_of_video").attr("required", "true");
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
					$("#select_age_range").attr("required", "true");
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
					$("#select_text").attr("required", "true");
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
					$("#select_topic").attr("required", "true");
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
					$("#select_tone").attr("required", "true");
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
					$("#select_article_type").attr("required", "true");
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

<script>
        CKEDITOR.replace( 'text_description' );
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['text_description'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Please enter a message' );
                e.preventDefault();
            }
        });
    </script>


    <script type="text/javascript">
    	//userfile //showimg
var _URL = window.URL || window.webkitURL;

$("#userfile").change(function(e) {
    var file, img;


    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function() {
            //alert(this.width + " " + this.height);

            if (this.width >= 900 & this.height <= 400 ) {

            	//alert( "valid file: " + file.type);
            	document.getElementById("showimg").style.display = "block";
            	return true;

            }

            document.getElementById("userfile").value = '';
            document.getElementById("showimg").style.display = "none";
            alert( "Images should be at least min-width=900px and max-height=400px");
            return false;

        };
        // img.onerror = function() {min-width="900px" and max-height="400px"
        //     alert( "not a valid file: " + file.type);
        // };
        img.src = _URL.createObjectURL(file);


    }

});
    </script>
