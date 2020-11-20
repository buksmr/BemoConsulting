<?php include ("header3.php"); ?>



<div class="clearfix"></div>

<section class="project_opening_uploading_section">
  <div class="container-fluid">
  	

  </div>	

</section>

<section class="project_form">
	<div class="container-fluid ">
		<div class="container">

			<div class="row form-pro-lbl-section_part">
                          <?php

                                if($this->session->flashdata('error_login'))

                                { ?>

                                <div class="col-sm-12 alert alert-danger">

                                    <?php echo $this->session->flashdata('error_login'); ?>

                                </div>

                                <?php }

                                ?>
                                <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>

                                <?php

                                if($this->session->flashdata('error'))

                                { ?>

                                <div class="col-sm-12 alert alert-danger">

                                    <?php echo $this->session->flashdata('error'); ?>

                                </div>

                                <?php }

                                ?>
              
                <div class="col-md-6">
                
                                
                   <div class="loginMaindiv">	
                             
                	<h3 class="login_haed_section">LOGIN</h3>


<form  method="post" action="<?php echo base_url(); ?>user_login">  
 <input type="hidden" name="redirect_link" id="redirect_link" value="<?php echo $link; ?>">              	
                   <div class="form-group">


                          <label class="email">Username:</label>

                          <input type="text" class="form-control user_form"  name="text_login_username" value="<?php echo set_value('text_login_username'); ?>">
                           <div class="form_error">
                           <?php echo form_error('text_login_username'); ?>
                        </div>

                   </div>


                    <div class="form-group">

                          <label class="pwd">Password:</label>

                          <input type="password" class="form-control user_pwd"  name="text_login_password">
                          <div class="form_error">
                           <?php echo form_error('text_login_password'); ?>
                        </div>

                    </div>



                    <div class="row">





							<div class="col-md-6">  

									 <div class="form-check form-check-remebers">
									    <label class="form-check-label">
									      <input class="form-check-input" type="checkbox"> Remember me
									    </label>
  								   </div>

							</div>



							 <div class="col-md-6">  

								<div class="form-group">

								  <div>

										<a href="#" id="forgotBtn" class="forget_pwd_new">

										

										I forgot my password

										</a>

									</div>

								</div>

							 </div>
 
 							</div> <!-- row -->
                 


                          <button type="submit" class="btn btn-primary btn-login-primary-login-btn">Login</button>
    </form>

                          <div class="login_through">OR LOGIN THROUGH</div>
                      
                         
                        <!-- <div class="facebook_btn">
                         
                             <a  href="<?=$authUrl?>">
                            <img src="<?php echo base_url(); ?>assets/img/facebook-new.png" >
                          </a>
                         </div>-->
						 
                          <div class="google_btn">
                            <a href="<?php echo $loginURL;?>"><img src="<?php echo base_url(); ?>assets/img/gmail.png" ></a>
                          </div>  

                        </div> <!-- id -->

                       

                        <!-- forget new mail id -->
                           <div id="forgrt_email_pwd" style="display: none;">
             
                               

                               <h3 class="login_haed_section_forget">Forgot Password?</h3>


                          <form class="email_part" action="<?php echo base_url(); ?>user_forgot_pass" method="post">
                                <div class="form-group">
                                  <p>Enter your email and to receive instructions</p>
                                 <input type="email" class="form-control mailclass"  placeholder="Email" name="text_forget_email" required="">
                                </div>
                    
                               <button type="submit" class="btn btn-primary btn-login-primary-forget">Submit</button> 
                          </form>



                                <div class="toolbar center">
				                     <a href="<?php echo base_url(); ?>login_main"  class="back-to-login-link back-login-center-tool">
				                     <i class="ace- fa fa-arrow-left"></i>
				                     Back to login
				                     </a>
                                </div><!-- back login -->



                        </div> <!-- centeer --> 

                      <!-- forget end new mail id -->




                </div> <!-- col-md-6 -->

                 <div class="col-md-6">
                   
                 	<h3 class="login_haed_section">REGISTER</h3>

 <form method="post" action="<?php echo base_url(); ?>register_user">

						  <div class="form-group">
						    <label class="Name">First Name:</label>
						    <input type="text" class="form-control" placeholder="First Name *" value="<?php echo set_value('text_firstname'); ?>" name="text_firstname"/>
                  <div class="form_error">
                    <?php echo form_error('text_firstname'); ?>
                  </div>
						  </div>

						   <div class="form-group">
						    <label class="Name">Last Name:</label>
						    <input type="text" class="form-control" placeholder="Last Name *" value="<?php echo set_value('text_lastname'); ?>" name="text_lastname"/>
                  <div class="form_error">
                     <?php echo form_error('text_lastname'); ?>
                  </div>
						  </div>

						  <div class="form-group">
						    <label class="Name">Email Address:</label>
						    <input type="email" class="form-control" placeholder="Your Email *" value="<?php echo set_value('text_emailid'); ?>" name="text_emailid" />
                  <div class="form_error">
                    <?php echo form_error('text_emailid'); ?>
                  </div>
						  </div>


              <div class="form-group">
						    <label class="Name">Username:</label>
						   <input type="text" class="form-control" placeholder="Username *" value="<?php echo set_value('text_username'); ?>" name="text_username"/>
                  <div class="form_error">
                   <?php echo form_error('text_username'); ?>
                  </div>
						  </div>

				  <div class="form-group">
					<label class="pwd">Password:</label>
					 <input type="password" class="form-control" placeholder="Password *" value="<?php echo set_value('text_password'); ?>" name="text_password"/>
			<div class="form_error">
			 <?php echo form_error('text_password'); ?>
			</div>
				  </div>


              <div class="form-group">
                <label class="pwd">Confirm Password:</label>
                 <input type="password" class="form-control" placeholder="Confirm Password *" value="<?php echo set_value('text_confirm_password'); ?>" name="text_confirm_password"/>
                    <div class="form_error">
                     <?php echo form_error('text_confirm_password'); ?>
                    </div>
              </div>
						  
						  <button  type="submit" class="btn btn-primary btn-login-primary-login-btn">Register</button>

 </form>

                      
  



                 </div> <!-- col-md-6 -->
              
             </div><!-- form -->
				
            </div><!-- row -->

		</div>

	</div>

</section>

<?php include ("footer.php"); ?>


