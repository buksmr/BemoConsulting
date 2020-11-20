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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/banner.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/details.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>

     
   </head>
   <body>
      <div class="wrapper">
      <div class="header">
         <div class="container-fluid">
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <!-- col6 -->
                  <?php if(isset($search)){
                     $searckdata =$search;
                     }else{
                     $searckdata ='';
                     }
                     
                     $quelist=$this->db->query("SELECT title FROM `tbl_upload_project` where is_delete =0; ");			
                     $data_list=$quelist->result_array();
                     
                     ?>
                  <div class="col-sm-3 search_txt_box">
                     <!-- <ul class="navbar-nav main-menu">
                        <li class="nav-item" >
                           <form action="<?php echo base_url();?>searchdata" method="post">
                              <div class="input-group search_txt_btn">
                                 <input type="text" list="browsers" class="form-control" placeholder="Search" value="<?php echo $searckdata;?>" name="search" required>
                                 <datalist id="browsers">
                                    <?php if(count($data_list)> 0 ){
                                       foreach($data_list as $mydata){?>
                                    <option value="<?php echo $mydata['title']?>">
                                       <?php } } ?>
                                 </datalist>
                                 <div class="input-group-append">
                                 <button class="btn btn-secondary btn-search" type="submit">
                                 <i class="fa fa-search"></i>
                                 </button>
                                 </div>
                              </div>
                           </form>
                        </li>
                     </ul> -->
                  </div>
                  <div class="col-sm-6 col-xs-12">
                  <div class="">
                  <div class="topnav" id="topnav_search">
                  <!--<nav class="navbar navbar-expand-sm bg-light pull-right">-->
                  <nav class="navbar navbar-expand-md navbar-light bg-light">
                  <button class="navbar-toggler navbar-toggler-right navbar-customize-toggles" type="button" data-toggle="collapse" data-target="#navbar5" aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>	
                  <div class="navbar-collapse collapse justify-content-stretch" id="navbar5">   
                  <ul class="navbar-nav main-menu ml-auto">
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>upload_gig">Create Gig</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>upload_project">Create Project</a>
                  </li>
                  <?php
                     if($this->session->userdata('user_login'))
                     { 
                     
                     $uidid=$this->session->userdata('user_login');
                     $query2=$this->db->query("SELECT profile_image,is_login_from_google FROM `tbl_user` where id =$uidid");			
                     $user_profiledata=$query2->row();
                     $is_login_from_google=$user_profiledata->is_login_from_google; 				
                      ?>
                  <!--<div class="dropdown">-->
                  <li class="nav-item dropdown dafterloginmenu">

                  <?php if($user_profiledata->profile_image)
                     { ?>
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" 
                     role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid"  id="img_profile" src="<?php echo base_url(); ?>profile_image/<?php echo $user_profiledata->profile_image; ?>" alt=""></a> 
                  <?php }else{ ?>
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" 
                  role="button" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid"  id="img_profile" src="<?php echo base_url(); ?>assets/img/profile.png" alt="Profile"></a>
                  <?php } ?>
                  <!--<div class="dropdown-menu dropdown-header" aria-labelledby="navbardrop">-->
                  <div class="dropdown-menu dropdown-submenu-homepf sm-menu" 
                     aria-labelledby="navbardrop">
                  <a class="dropdown-item" href="<?php echo base_url(); ?>freelancebit_profile">Profile</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>order_history">My Orders</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>sales">My Sales</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>project_uploading_list">My Gigs</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>project_opening_list">My Project</a>
                  <?php if(($is_login_from_google =='1') || ($is_login_from_google == 1) || ($is_login_from_google == '') ){ ?>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>Change_password">Change Password</a>
                  <?php } ?>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
                  </div> <!-- dropdown-menu dropdown-submenu-homepf sm-menu-->
                  <!--</div>  dropdown -->
                  </li>
                  <?php }
                     else{ ?>
                  <li class="nav-item ">
                  <a class="nav-link" href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>assets/img/join.png" alt="..."></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link nav-pro" href="<?php echo base_url(); ?>login">Sign In</a>
                  </li> 
                  <?php }
                     ?>
                  </ul>
                  </nav>
                  </div>
                  </div>
                  </div> <!-- collapse -->
                  </div><!-- col6 -->
               </div>
               <!-- row -->
            </div>
         </div>
         <!-- row -->
         <div class="clearfix"></div>  
      </div>
      <?php 
         $main_category=$this->Front_model->get_category_list();
         //print_r($main_category);
         ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary-free-nav">
      <div class="container">
      <button class="navbar-toggler navbar-toggler-category-customizes" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-toggle-icons-customizes">
      <span></span>
      <span></span>
      <span></span>
      </span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"> 
      <?php foreach ($main_category as  $value) { ?>
      <li class="nav-item dropdown subdpitems">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo $value['category_name']; ?>
      </a>
      <div class="dropdown-menu subbusinessitemsss" aria-labelledby="navbarDropdown">
      <div class="container">
      <div class="row">
      <?php
         $sub_category=$this->Front_model->get_sub_category_list($value['id']);
         
          foreach ($sub_category as  $value2) {
         $subcat_id =$value2['id'];
         $query_project1=$this->db->select("count(id) as projectcnt")->from('tbl_upload_project')->where('subcat_id',$subcat_id)->where('is_delete',0)->get();
         $project1=$query_project1->row();
         $projectcnt1 = $project1->projectcnt;
         
         
         ?>
         <!-- freelance_marketplace -->
      <div class="col-md-3"><a href="<?php echo base_url(); ?>marketplace/<?php echo $value['category_alias']; ?>/<?php echo $value2['sub_cat_alias']; ?>"> <?php echo $value2['sub_cat_name']; ?> (<?php echo $projectcnt1; ?>) </a></div>
      <?php } ?>
      </div>
      </div>
      </div>   <!-- main dropdown -->
      </li>  <!-- business 1 -->
      <?php } ?>
      </ul>
      </div>
      </div>
      </nav> <!-- nav -->


