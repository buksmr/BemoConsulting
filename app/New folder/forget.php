<?php include ("header3.php"); ?>
<div class="container register_forget">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="assets/img/logo.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Lorem text lorem text lorem text lorem text</p>
                        <a href="<?php echo base_url(); ?>login"><input type="submit" name="" value="Login"/><br/></a>
                    </div>


                    <div class="col-md-9 register-right">

                       <div id="forgotMain">
                        <?php if($this->session->flashdata('error'))
                          { ?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('success'))
                          { ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                        <?php } ?>
                             <form class="email_part" action="<?php echo base_url(); ?>user_forgot_pass" method="post">
                                <div class="form-group">
                                  <p>Enter your email and to receive instructions</p>
                                  <input type="email" class="form-control mailclass"  placeholder="Email" name="text_forget_email">
                                </div>
                    
                               
                                <button type="submit" class="btn btn-primary btn-login-primary-forget">Submit</button> 
                                
                            </form>
                        </div> <!-- forgotMain -->

  



                    </div>   <!-- md 9 -->

                </div><!-- row -->

</div> <!-- container -->


<div class="clearfix"></div>
<?php include ("footer.php"); ?>