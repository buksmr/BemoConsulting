<?php include ("header3.php"); ?>

<div class="container register">

                <div class="row">

                    <div class="col-md-3 register-left">

                        <img src="assets/img/logo.png" alt=""/>

                        <h3>Welcome</h3>

                        <p>Lorem text lorem text lorem text lorem text</p>





                        <a href="<?php echo base_url();?>register

                          "><input type="submit" name="" value="Register"/></a><br/>

                    </div>





                    <div class="col-md-9 register-right">

                               <?php

                                if($this->session->flashdata('error'))

                                { ?>

                                <div class="col-md-6 register-msg alert alert-danger">

                                    <?php echo $this->session->flashdata('error'); ?>

                                </div>

                                <?php }

                                ?>

                 <div id="loginMain">


                      <form class="login_part col-md-6" method="post" action="<?php echo base_url(); ?>user_login">

                         <input type="hidden" name="redirect_link" id="redirect_link" value="<?php echo $link; ?>">

                        <div class="form-group">

                          <label for="email">Username</label>

                          <input type="text" class="form-control" placeholder="UserName" name="text_username">

                        </div>



                        <div class="form-group">

                          <label for="pwd">Password:</label>

                          <input type="password" class="form-control" placeholder="Password" name="text_password">

                        </div>





                            <div class="row">





                                <div class="col-sm-6">  

                                        <div class="form-group form-check">

                                          <label class="form-check-label">

                                            <input class="form-check-input" type="checkbox" name="remember"> Remember me

                                          </label>

                                        </div>

                                </div>



                                 <div class="col-sm-6">  

                                    <div class="form-group">

                                      <div>

                                            <a href="<?php echo base_url(); ?>forget" id="forgotBtn" class="forget_pwd">

                                            

                                            I forgot my password

                                            </a>

                                        </div>

                                    </div>

                                 </div>

                            

                             </div><!-- loginMain row-->  





                          <button type="submit" class="btn btn-primary btn-login-primary-login-btn">Login</button>

                           </form>

                     <div class="login_through">OR LOGIN THROUGH</div>
                      
                         
                         <div class="facebook_btn">
                           <img src="<?php echo base_url(); ?>assets/img/facebook.jpg" >
                         </div>
                          <div class="google_btn">
                            <img src="<?php echo base_url(); ?>assets/img/gmail.jpg" >
                          </div>  

                         



                        

                 



                    </div>  <!-- right side -->



  







                </div>



            </div>


<div class="clearfix"></div>
<?php include ("footer.php"); ?>















<!-- <script>



$(document).ready(function(){



  $("#forgotBtn").click(function(){

     $("#loginMain").hide();

      $("#forgotMain").show();

       $("#forgotBtn").hide();

  });



  $("#LoginBtn").click(function(){

     $("#loginMain").show();

      $("#forgotMain").hide();

  });







  });



</script> -->



