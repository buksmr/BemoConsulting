<?php include ("header3.php"); ?>

<div class="container register">

                <div class="row">

                    <div class="col-md-3 register-left">

                        <img src="assets/img/logo.png" alt=""/>

                        <h3>Welcome</h3>

                        <p>Lorem text lorem text lorem text lorem text</p>

                        <a href="<?php echo base_url(); ?>login"><input type="submit" name="" value="Login"/>

                        </a><br/>

                    </div>

                    <div class="col-md-9 register-right">

                       <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">

                            <li class="nav-item">

                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>

                            </li>

                        </ul> -->

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                

                                <h3 class="register-heading">Register</h3>

                                <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-md-6 register-msg alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>



                                <?php

                                if($this->session->flashdata('error'))

                                { ?>

                                <div class="col-md-6 register-msg alert alert-danger">

                                    <?php echo $this->session->flashdata('error'); ?>

                                </div>

                                <?php }

                                ?>

                                <form method="post" action="<?php echo base_url(); ?>register_user">

                                <div class="row register-form">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="First Name *" value="<?php echo set_value('text_firstname'); ?>" name="text_firstname"/>

                                            <div class="form_error">

                                             <?php echo form_error('text_firstname'); ?>

                                            </div>

                                        </div>

                                        

                                        <div class="form-group">

                                            <input type="email" class="form-control" placeholder="Your Email *" value="<?php echo set_value('text_emailid'); ?>" name="text_emailid" />

                                            <div class="form_error">

                                             <?php echo form_error('text_emailid'); ?>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <input type="password" class="form-control" placeholder="Password *" value="<?php echo set_value('text_password'); ?>" name="text_password"/>

                                             <div class="form_error">

                                             <?php echo form_error('text_password'); ?>

                                            </div>

                                        </div>

                                        

                                    </div>

                                    <div class="col-md-6">



                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Last Name *" value="<?php echo set_value('text_lastname'); ?>" name="text_lastname"/>

                                             <div class="form_error">

                                             <?php echo form_error('text_lastname'); ?>

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Username *" value="<?php echo set_value('text_username'); ?>" name="text_username"/>

                                             <div class="form_error">

                                             <?php echo form_error('text_username'); ?>

                                            </div>

                                        </div>

                                       

                                        

                                        

                                        <input type="submit" class="btnRegister"  value="Register"/>

                                    </div>

                                    

                                    

                                </div>

                                </form>
                           
                         <div class="have_account">Have an account? 
                            <span class="login_in_account">Login in</span>
                        </div>

                            </div><!-- right side div 9 -->





                            

                        </div>

                    </div>

                </div>



            </div>





<div class="clearfix"></div>
<?php include ("footer.php"); ?>

