<!DOCTYPE html>

<html>

<head>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>



<!------ Include the above in your HEAD tag ---------->

</head>

<body>
  <div class="row">
<div class="col-md-4 ">

</div>
<div class="col-md-4 ">

<?php if($this->session->flashdata('success'))

                  { ?>

                        <div class="alert alert-info" style="">

                            <?php echo $this->session->flashdata('success'); ?>

                        </div>

                <?php } ?>

                <?php if($this->session->flashdata('error'))

                  { ?>

                        <div class="alert alert-danger" style="">

                            <?php echo $this->session->flashdata('error'); ?>

                        </div>

                <?php } ?>
</div>
<div class="col-md-4 ">

</div>
</div>

<div class="container register">


                <div class="row">
  
                    <div class="col-md-3 register-left">

                        <img src="assets/img/logo.png" alt=""/>

                        <h3>Welcome</h3>

                        <!--<p>Lorem text lorem text lorem text lorem text</p>-->

                        <a href="<?php echo base_url(); ?>login_main"><input type="submit" name="" value="Login"/><br/></a>

                    </div>




                    

                    <div class="col-md-9 register-right">






                       <div id="forgotMain1">

                             <form class="change_part" action="<?php echo base_url(); ?>Front/change_password" method="post">

                                <div class="form-group">
                                  <input type="password" class="form-control" id="text_current_password" placeholder="Current Password" name="text_current_password">
                                </div>



                                <div class="form-group">
                                  <input type="password" class="form-control" id="text_new_password" placeholder="New Password" name="text_new_password">
                                </div>



                                <div class="form-group">

                                 

                                 <input type="password" class="form-control" id="text_confirm_password" placeholder="Confirm Password" name="text_confirm_password">

                                </div>


                                <button type="submit" class="btn btn-primary btn-login-primary-forget" style="width:100%;">Change Password</button> 

                                

                            </form>

                        </div> <!-- forgotMain -->



  







                    </div>   <!-- md 9 -->



                </div><!-- row -->



</div> <!-- container -->



</body>

</html>