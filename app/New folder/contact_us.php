<?php include ("header3.php"); ?>
<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
   </div>
</section>


<section class="project_form">
   <div class="container-fluid">
   	 <div class="container">
		<div class="row row h-100 justify-content-center align-items-center">
	   	 	<div class="col-8  form-pro-lbl-section-uploading-project">
	   	 		<h2 class="donate_through">WE ARE HAPPY TO ANSWER YOUR QUESTIONS </h2>	
	   	 		<p>If you need support with anything related to the website or if you have feedback, please, designate the <b>customer support</b> department.</p>
		   	 	<p>If you have a business proposition or would like to become a client under the translation project management service, please, designate the <b>business</b> department .</p>
		   	 	<p>Do you have a question regarding our application document, our open positions, and or hiring in general? Please, designate the <b>hiring</b> department.</p>
		   	 	<p>For anything related to the press, please, designate the <b>press</b> department.</p>
		   	 	<p>If you have any inquiry that does not fit the description for our departments, please, designate the <b>Customer Care</b> department.</p>
		   	 	<hr/>
		   	 	<br/>

		   	 	<h2 class="donate_through">CONNECT WITH US </h2>
		   	 	<form action="<?php echo base_url() ?>Front/contact_us" method="post">

		   	 		<?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                    ?>
		   	 		<div class="row">
		   	 			<div class="col-sm-6">
		   	 				<div class="form-group">
			                  <label for="" class="pro_title">Name <span class="star-icons-validations">*</span></label>
			                  <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" >
			                   <div class="form_error">
			                    <?php echo form_error('name'); ?>
			                  </div>
			               </div>
		   	 			</div>
		   	 			<div class="col-sm-6">
		   	 				<div class="form-group">
			                  <label for="" class="pro_title">Email <span class="star-icons-validations">*</span></label>
			                  <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" >
			                   <div class="form_error">
			                    <?php echo form_error('email'); ?>
			                  </div>
			               </div>
		   	 			</div>
		   	 			<div class="col-sm-6">
		   	 				<div class="form-group">
			                  <label for="" class="pro_title">Telephone</label>
			                  <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control">
			                   <div class="form_error">
			                    <?php echo form_error('phone'); ?>
			                  </div>
			               </div>
		   	 			</div>
		   	 			<div class="col-sm-6">
		   	 				<div class="form-group">
			                  <label for="" class="pro_title">Find Relative Department</label>
			                  <select name="department" class="form-control">
			                  	<option value="">Select Department</option>

			                  	<?php foreach ($department_list as $value) { ?>
			                 	
			                  	<option value="<?php echo $value['id']; ?>" <?php echo

			                  		$value['id'] == set_value('department') ? 'selected="selected"' : '';

			                  	 ?>><?php echo $value['depart_name']; ?></option>
			                  	<?php } ?>
			                  	
			                  </select>
			                   <div class="form_error">
			                    <?php echo form_error('department'); ?>
			                  </div>
			               </div>
		   	 			</div>
		   	 			<div class="col-sm-12">
		   	 				<div class="form-group">
			                  <label for="" class="pro_title">Type your message here</label>
			                  <textarea name="message" class="form-control" rows="5"><?php echo set_value('message'); ?></textarea>
			                   <div class="form_error">
			                    <?php echo form_error('message'); ?>
			                  </div>
			               </div>
		   	 			</div>
		   	 		</div>
	   	 		  <div class="btn-upload-pt">
			            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-start-upload-project">Submit</button>
			         </div>
	           </form>
	   	 	</div>
	   	 </div>
		   
   	 </div>
   </div>
</section>



	   <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-business-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-title-business">Business</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
		
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
      <!--   <div class="contact_img">
      	<img id="myImg" src="<?php echo base_url(); ?>assets/img/img_snow.jpg" alt="Snow" style="width:100%;height: 200px;">
        </div>
 -->
        <h4 class="business_head">Business@freelancebit.com</h4>
		<h5 class="business_average">Average Reponse Time: 2 days</h5>
		
		<!--<p class="lorem_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
		
		<p class="lorem_txt">Considering a partnership? Or have any business ideas, please, send us an email at business@freelancebit.com.</p>
		

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <!-- modal first part -->



   <!-- The Modal -->
<div class="modal" id="myModal_press">
  <div class="modal-dialog modal-business-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-title-business">Press</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
		
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
      <!--   <div class="contact_img">
      	<img id="myImg" src="<?php echo base_url(); ?>assets/img/img_snow.jpg" alt="Snow" style="width:100%;height: 200px;">
        </div>
 -->
        <h4 class="business_head">Press@freelancebit.com</h4>
		<h5 class="business_average">Average Reponse Time: 2 days</h5>
		
		<!--<p class="lorem_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
		
		<p class="lorem_txt">Need our comments for an article that you are writing. Do you have any press inquiries? Then please, contact us at press@freelancebit.com.</p>
		

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <!-- modal first part -->






<!-- second modal popup -->

<div class="modal" id="myModal_support">
  <div class="modal-dialog modal-business-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-support-title">Support</h4>
       <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
		
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      	<!-- <div class="contact_img">
        	<img id="myImg" src="<?php echo base_url(); ?>assets/img/img_snow.jpg" alt="Snow" style="width:100%;height: 200px;">
        </div> -->
		<p class="text-center">
		Need assistance with an order, have a question, or are you wondering about the website, then please, send us an email at support@freelancebit.com.
		</p>

        <div class="container col-sm-12">
		    <div class="row first_part_support_images">
			
			<!--   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag1.png">
			  </div> 

               <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag2.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag3.png">
			  </div>  -->

			  <!--  <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag4.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag5.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag6.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag7.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag8.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag9.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag1.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag1.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag1.png">
			  </div> 
 -->

			  
			</div><!--row1 -->


            <div class="row second_part_support_images">
			  <!--  <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag10.png">
			  </div>  -->
			  
			  

               <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag11.png">
			  </div> <!-- sm-1-->

			  <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/spanish.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/usa.png">
			  </div> 

			   <!--  <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag14.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag15.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag16.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag17.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag18.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag19.png">
			  </div>

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag17.png">
			  </div> 

			   <div class="col-sm-1 indian-image">
			  	<img 
			  	data-toggle="modal" data-target="#myModal_support_images"
			  	src="<?php echo base_url(); ?>assets/img/flag1.png">
			  </div>  -->
			  
			</div><!--row2 -->


           


		  
		 </div> <!-- 12 -->


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <!-- modal second part -->


<div class="modal" id="myModal">
  <div class="modal-dialog modal-business-dialog">
    <div class="modal-content modal_sub_content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-support-info-txt">Support</h4>
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button> -->
		
      </div>

      <!-- Modal body -->
      <div class="modal-body modal-flag-body">

          <div class="contact_img_flag">
        	<img  src="<?php echo base_url(); ?>assets/img/flag1.png" alt="Snow" style="width:10%">
           </div>
         

        <div class="main_home_part">
	        <h4 class="main_home_part_business">support@freelancebit.com</h4>
			<h5 class="main_home_part_business_res_time">Average Response Time:7days</h5>
			
			<!--<p class="main_home_part_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived. </p>

			<p class="main_home_part_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived. </p>-->

			
			

		</div> 

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> <!-- modal third part -->



<?php include ("footer.php"); ?>