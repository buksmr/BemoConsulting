<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style type="text/css">
    
    .register{
        margin-top: 94px !important;
    }
    #forgotMain{
       position: relative!important;
    top: 91px !important; 
    height: 293px!important;
    padding: 0px!important;
    text-align: center!important;
    }
    .register-right{
            margin-top: 73px!important;
    }
    .register-left img{
        margin-top: 35%!important;
    margin-bottom: 12% !important;
    width: 59% !important;
    }
</style>

<!-- Include the above in your HEAD tag  -->

</head>

<body>

<div class="container register">

                <div class="row">

                    <div class="col-md-3 register-left">

                        <img src="<?php echo base_url();?>assets/img/logo.png" alt=""/>

                        <h3>Welcome</h3>

                        

                         <!--<p>Lorem text lorem text lorem text lorem text</p>-->

                        

                        

                        <a href="<?php echo base_url(); ?>login_main"><input type="submit" name="" value="Login"/><br/></a>

                    </div>

                    <div class="col-md-9 register-right">

                       <div id="forgotMain">

                        <?php

                        if($token){

                         ?>

                         <h3><span style="color : green">Your email has been verified successfully. Please log into your account.</span></h3>
						 

                          

                         <?php }else{  ?>

                        <h3><span style="color : red">You have already varified this email.</span></h3>

                          <?php }

                        ?>

                        </div> <!-- forgotMain -->

                    </div>   <!-- md 9 -->

                </div><!-- row -->

</div> <!-- container -->

</body>

</html>