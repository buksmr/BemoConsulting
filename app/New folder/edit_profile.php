<?php include ("header4.php"); ?>


<section class="category-nav">
<div class="container-fluid"> 
  <div class="container">
  <nav class="navbar navbar-expand-sm">
  
  <ul class="navbar-nav category-Nav">
    <li class="nav-item">
      <a class="nav-link active"  href="#">Writing & Translation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Graphic & Design</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Business</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Digital Marketing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Video & Animation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Programming & Tech</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Music & Audio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Fun & Lifestyle</a>
    </li>
  </ul>
</nav>
</div>
</div><!-- container -->
</section><!-- category-nav -->


<div class="clearfix"></div>

<section class="project_opening_uploading_section">
  <div class="container-fluid">
    

  </div>  

</section>

<section class="project_form">
  <div class="container-fluid ">
    <div class="container">

      <div class="row row h-100 justify-content-center align-items-center">


              

        <form class="col-8 form-pro-lbl-section">

             <p style="font-weight:bold;">PROFILE BANNER</p>   
             <div class="form-group upload-files-project">
            
            
                        <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                        <input type="file" name="myfile" />  
                            
                        <div class="file_upload_name"></div>
                         

                       Drag and Drop  
                          

                        
            </div>


            <p style="font-weight:bold;">PROFILE PICTURE</p>   
             <div class="form-group upload-files-project">
            
            
                        <button class="btn btn-primary btn-upload-files-cls">Upload files</button>
                        <input type="file" name="myfile" />  
 
                        <div class="file_upload_name"></div>
                         
                        Drag and Drop  
                          

                        
            </div>



           
              <div class="row">
              	 <div class="col-md-6">
              	 	<div class="form-group">
					  <label for="usr" class="set_name">DISPLAY NAME</label>
					  <input type="text" class="form-control" id="usr_pic">
                    </div>

              	 </div>
                 <div class="col-md-6">
                 	 <div class="form-group">
					  <label for="usr" class="set_name">USERNAME</label>
					  <input type="text" class="form-control" id="usr_pic">
                    </div>

                 </div>

              </div> 
           
            <div class="form-group">
					  <label for="usr" class="set_name">CONTACT MAIL ADDRESS</label>
					  <input type="text" class="form-control" id="usr_pic">
            </div>


            <div class="form-group" id="divDOB">
              <label for="formGroupExampleInput2" class="formGroupExampleInput1">Joined</label>
             
              
                                                                               
                  <div  class="input-group date datepicker" style="width:100%;">
			      <input class="datepicker2" data-date-format="mm/dd/yyyy" placeholder="Posted Date" />
			      <span class="input-group-addon input-group-addon-cal-upload">
			        <i class="fa fa-calendar" aria-hidden="true"></i></span>
                </div>



            </div>


            <label class="social_fb_media">SOCIAL MEDIA</label>
            <div class="row">
            	<div class="col-md-4">

                   <div class="row">
            		<div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/facebook.png" style="width:37px;"></div>


            		<div class="col-md-10 label_connect_txt">Facebook</div>
                   </div> <!-- row -->  

            	</div>

            	<div class="col-md-4">
            		
                  <div class="row">
            		<div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/gplus.png" style="width:37px;"></div>


            		<div class="col-md-10 label_connect_txt">Google Plus</div>


                   </div> <!-- row -->  



            	</div>


              <div class="col-md-4">

                   <div class="row">
                <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/linkedin.png" style="width:37px;opacity: 0.1;"></div>


              <div class="col-md-10 label_connect_txt">Linked in</div>
                   </div> <!-- row -->  

              </div> <!-- md-4 -->


            </div><!-- row first complete fb -->


            <div class="row second fb">
            	
            	<div class="col-md-4">
            		
                  <div class="row">
            		<div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/mail.png" style="width:37px;opacity: 0.1;"></div>


            	<div class="col-md-10 label_connect_txt">Email</div>
                   </div> <!-- row -->  



            	</div>

              <div class="col-md-4">

                   <div class="row">
                <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/skype.png" style="width:37px;opacity: 0.1;"></div>


                <div class="col-md-10 label_connect_txt">skype</div>
                   </div> <!-- row -->  

              </div>

               <div class="col-md-4">

                   <div class="row">
                <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/whatsupps.png" style="width:37px;opacity: 0.1;"></div>


                <div class="col-md-10 label_connect_txt">Whatsupps</div>
                   </div> <!-- row -->  

              </div>


            </div><!-- row first complete fb -->

            <!-- <div class="row third fb">
            	
            </div> -->




          


          <div class="row C_S_City">
	          
	             <div class="form-group col-sm-4">
					 	<label class="count_main">COUNTRY:</label>
					  <select class="form-control" id="sel1">
					    <option>India</option>
					    <option>USA</option>
					    <option>UK</option>
					    <option>LONDON</option>
					  </select>
	            </div>

            
             <div class="form-group col-sm-4">
				  <label class="count_main">STATE</label>
				  <select class="form-control" id="sel1">
				    <option>Maharashtra</option>
				    <option>Maharashtra</option>
				    <option>Maharashtra</option>
				    <option>Maharashtra</option>
				  </select>
            </div>


           
             <div class="form-group col-sm-4">
				   <label class="count_main">CITY</label>
				  <select class="form-control" id="sel1">
				    <option>PUNE</option>
				     <option>PUNE</option>
				    <option>PUNE</option>
				     <option>PUNE</option>
				  </select>
            </div>

          </div>  



          <div class="form-group">
            <label for="comment" class="formGroupExampleInput1">Description 
            </label>
            <textarea class="form-control describe_textarea" rows="5" id="comment"></textarea>
               </div>  
                    


                     <div class="form-group form-upload-project" style="text-align: center;">
                      <button type="button" class="btn btn-primary btn-upload-project">UPDATE PROFILE</button>
                   </div>
                  
                  


              </form> 


           
                

            </div>


    </div>

  </div>

</section>



<?php include ("footer.php"); ?>

<!-- <script type="text/javascript">
  
  function readUrl(input) {
  
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}
</script> -->