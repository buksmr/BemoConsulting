<!DOCTYPE html>
<html>
   <head>
      <title>Freelancebit</title>
      <meta charset="utf-8">
      <meta name="description" content="Freelancebit is a freelance marketplace for every kind of freelancer and client alike.">
      <meta name="keywords" content="Writing and Translation,Business,Digital Marketing">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- fevicon -->
      <link rel="icon" href="<?= base_url() ?>assets/img/logo_footer.png" type="image/gif" sizes="16x16">
   
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128569378-2"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-128569378-2');
      </script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/banner.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
   </head>
   <body>
      <div class="wrapper">
      <div class="header1">
         <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container-fluid head-main-container-fluid">
               <a class="navbar-brand js-scroll-trigger col-sm-6 desk_logo" href="<?php echo base_url(); ?>">
               <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" class="logo_main">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse col-sm-6" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto navbar-upload navbar-nav-pro">
                     <li class="nav-item">
                        <a class="nav-link nav-pro" href="<?php echo base_url(); ?>upload_gig">Create Gig </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link nav-pro" href="<?php echo base_url(); ?>upload_project">Create Project</a>
                     </li>
                     <?php
                        if($this->session->userdata('user_login'))
                        { 
                        
                        $uidid=$this->session->userdata('user_login');
                        $query2=$this->db->query("SELECT profile_image,is_login_from_google FROM `tbl_user` where id =$uidid");			
                        $user_profiledata=$query2->row();
                        $is_login_from_google=$user_profiledata->is_login_from_google; 
                        
                        ?>
                     <li class="nav-item dropdown dmenu">
                        <!-- <div class="dropdown homeprofile">-->
                        <?php if($user_profiledata->profile_image)
                           { ?>
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="fnt-txts"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            </a> <span class="fnt-txts"><i class="fa fa-angle-down" aria-hidden="true"></i></span>-->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid"  id="img_profile" src="<?php echo base_url(); ?>profile_image/<?php echo $user_profiledata->profile_image; ?>" style="width: 40px;" alt=""></a>
                        <?php }else{ ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" id="img_profile" src="<?php echo base_url(); ?>assets/img/profile.png" alt="Profile"></a>
                        <?php } ?>
                        <div class="dropdown-menu loginheader" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?php echo base_url(); ?>freelancebit_profile">Profile</a>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>order_history">My Orders</a>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>sales">My Sales</a>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>project_uploading_list">My Gigs</a>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>project_opening_list">My Project</a>
                           <?php if(($is_login_from_google =='1') || ($is_login_from_google == 1) || ($is_login_from_google == '') ){ ?>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>Change_password">Change Password</a>
                           <?php } ?>
                           <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
                        </div>
                     </li>
                     <!--</div>-->
                     <?php }
                        else{ ?>			
                     <li class="nav-item ">
                        <a class="nav-link nav-pro" href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>assets/img/join.png" alt="..."></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link nav-pro" href="<?php echo base_url(); ?>login">Sign In</a>
                     </li>
                     <?php 
                        }
                        	?>		
                  </ul>
               </div>
            </div>
         </nav>
      </div>

      