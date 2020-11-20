<?php include ("header3.php"); ?>
<link href='<?php echo base_url(); ?>assets/css/userprofile.css' rel='stylesheet' type='text/css'>Y

<?php if($user_profile->banner_image)
            { 
         $img = base_url().'profile_image/'.$user_profile->banner_image;
         }else{ 
         $img = base_url().'/assets/img/bg.jpg';
          } ?>

<section class="banner_bgd_images" style="background:url('<?php echo $img; ?>');">
  
</section> 


  

<?php //print_r($user_profile);
   $time = strtotime($user_profile->created_date_time);
   
   $newformat = date('d F Y',$time);
   
   ?>
<?php 
   $user_id= $_SESSION['user_login'];
   $res2 = array();
   $query=$this->db->query("SELECT id FROM `tbl_upload_project` where user_id = $user_id");			
   $res=$query->result_array();
   if(count($res) > 0){
   foreach($res as $list){
   $pro[] =$list['id'];
   }
   if(!empty($pro)){
   
   $ids= implode(",",$pro);  
   if(!empty($ids)){
   $query1=$this->db->query("SELECT count(id) as rescount,sum(com_rating) as com_rating, sum(rec_rating) as rec_rating , sum(qua_rating) as qua_rating FROM `tbl_review` where project_id IN($ids)");			
   $res1=$query1->row();
   
   $query2=$this->db->query("SELECT review,refrence FROM `tbl_review` where project_id IN($ids)");			
   $res2=$query2->result_array();
   //print_r($res1); die;
   if(!empty($res1)){
   $rescount =$res1->rescount;
   if($rescount !=0){
   	$com_rating = round($res1->com_rating / $rescount);
   	$rec_rating = round($res1->rec_rating / $rescount);
   	$qua_rating = round($res1->qua_rating / $rescount);
   	$total=round((($res1->com_rating + $res1->rec_rating + $res1->qua_rating) / 3) / $rescount);
   }else{
   	$com_rating = 0;
   	$rec_rating = 0;
   	$qua_rating = 0;
   	$total=0;
   }
   }else{
   
   $com_rating = 0;
   $rec_rating = 0;
   $qua_rating = 0;
   $total=0;
   }
   }else{
   $com_rating = 0;
   $rec_rating = 0;
   $qua_rating = 0;
   $total=0;
   }
   }
   }else{
   $com_rating = 0;
   $rec_rating = 0;
   $qua_rating = 0;
   $total=0;
   }
   
   //print_r($res1);
   
   // print_r($res2);
   if(($user_profile->country_id != '') || ($user_profile->country_id != 0) ){
		$country_id =$user_profile->country_id;
	   
		$country=$this->db->query("SELECT name,sortname FROM `tbl_countries` where id =$country_id");			
		$cndata=$country->row();
		if($cndata){
			$cnname =$cndata->name;
			$sortname =strtolower($cndata->sortname);
		}else{
			$cnname ="";//Australia
			$sortname ="";//au
		}   
   }else{
		$cnname ="";//Australia
		$sortname ="";//au  
   }
   
   
   if(($user_profile->state_id != '') || ($user_profile->state_id != 0)){
   $state_id =$user_profile->state_id;
   
   $state=$this->db->query("SELECT name FROM `tbl_states` where id =$state_id");
   $statedata=$state->row();
		if($statedata){
			$statename =', '.$statedata->name;
		}else{		
			$statename ="";
		}   
   
   }else{
		$statename ="";
   }
   
   
   
	if(($user_profile->city_id != '') || ($user_profile->city_id != 0)){
		$city_id =$user_profile->city_id;
   
		$city=$this->db->query("SELECT name FROM `tbl_cities` where id =$city_id");			
		$citydata=$city->row();
		if($citydata){
			$cityname =', '.$citydata->name;
		}else{		
			$cityname ="";
		}
	}else{
		$cityname ="";
	}
   
   ?>
<section class="robert_info_project">
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="media">
                  <div class="media_top_images">
                     <?php if($user_profile->profile_image)
                        { ?>
                     <img class="rounded mr-3" src="<?php echo base_url(); ?>profile_image/<?php echo $user_profile->profile_image; ?>" alt="Generic placeholder image" style="width: 140px;">
                     <?php }else{ ?>
                     <img class="rounded mr-3" src="<?php echo base_url(); ?>assets/img/profile_edit.png" alt="Generic placeholder image" style="width: 140px;">
                     <?php } ?>
					 
					 
                     <div class="media_star_images">
                        <span class="fa fa-star spancls <?php if($total >= 1){echo "checked";}?>"></span>
                        <span class="fa fa-star spancls <?php if($total >= 2){echo "checked";}?>"></span>
                        <span class="fa fa-star spancls <?php if($total >= 3){echo "checked";}?>"></span>
                        <span class="fa fa-star spancls <?php if($total >= 4){echo "checked";}?>"></span>
                        <span class="fa fa-star spancls <?php if($total >= 5){echo "checked";}?>"></span>
                     </div>
                  </div>
                  <div class="media-body md-robert-reoch">
                     <h5 class="mt-0 head-robert-txt"> <?php if($user_profile->display_name !=''){echo $user_profile->display_name;}else{ echo $user_profile->username; }?> </h5>
					 <h6><span class="jan_txt"></span>(<?php echo $newformat; ?>)</h6>
					 
                    
                  </div>
               </div>
               <!-- media -->  
            </div> <!-- 4 -->
            
            <div class="col-md-4">
               <div class="oxford_art_txt">
                  <div class="float-left oxford-img-float-lfttxt">
                     <?php if($cnname != ""){ ?>
                     <img src="<?php echo base_url(); ?>country_flag/country/<?php echo $sortname;?>.png" alt="IMG" height="24px" width="41px" class="img-fluid">
                     <?php } ?>
                  </div>
                  <div class="oxford-img-rt-txt">
                     <h5 class="mt-0 oxford_head_txt">
                        <?php echo $cnname .$statename .$cityname;?>
                     </h5>
                  </div>
               </div>
               <div class="float-right edit-buttons">
                 
               </div>
            </div>  <!-- 4 -->
			
			
			  <div class="col-md-4">
               <div class="oxford_art_txt">
			     <div class="row">

              <div class="col-md-9">
                    <div class="oxford-img-rt-txt" >
                      <h5 class="mt-0 oxford_head_txt" id="contact_id">
                        <?php echo $user_profile->email_id ;?>
                      </h5>
                    </div>
                </div> <!-- col-md-9 -->

				   <div class="col-md-3">
					  <div class="float-left oxford-img-float-lfttxt">
						  <div class="btn-group-horizontal">
							<button type="button" id="show" class="btn btn-primary btn-prm-contact">Contact</button>
							
						 </div>
					  </div>
				  </div>

				    

				  </div> <!-- row -->
               </div>
               
            </div>  <!-- 4 -->
           
         </div>
		 
		      <div class="float-right edit-buttons">
                  <a href="<?php echo base_url(); ?>edit_profile_new">
                  <button type="button" class="btn btn-primary btn-edt-proile">Edit Profile</button>
                  </a>
               </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<?php
   if($this->session->flashdata('success')){ ?>
<div class="col-sm-12 alert alert-success">
   <?php echo $this->session->flashdata('success'); ?>
</div>
<?php }	?>
<section class="description_txt">
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-2">
               <h4 class="desc_head">DESCRIPTION</h4>
            </div>
            <div class="col-md-10">
               <div class="desc_sub_txt"><?php echo $user_profile->description ;?></div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php //print_r($user_profile);?>
<?php if($user_profile->facebook !='' || $user_profile->linkedin !='' || $user_profile->skype !='' || $user_profile->whatsapp !='' || $user_profile->instagram !='' || $user_profile->Twitter !='' || $user_profile->Discord !='' || $user_profile->Steam !='' || $user_profile->Youtube !='' || $user_profile->Spotify !=''){ ?>
<section class="communication_link_media">
   <div class="container-fluid">
      <div class="container">
         <h4 class="communication_head">COMMUNICATION LINKS & SOCIAL MEDIA</h4>
         <div class="row">
            <?php if($user_profile->facebook !='' || $user_profile->linkedin !='' || $user_profile->skype !='' || $user_profile->whatsapp !='' || $user_profile->Twitter !='' || $user_profile->Discord !='' || $user_profile->Steam !=''){ ?>
            <div class="col-md-6">
               <h5 class="communication_subhead">COMMUNICATION LINKS</h5>
               <?php if($user_profile->facebook !='' || $user_profile->linkedin !='' || $user_profile->skype !='' || $user_profile->whatsapp !=''){ ?>
               <div class="social-links">
                  <?php if($user_profile->facebook !=''){ ?>
                  <a href="<?php echo $user_profile->facebook ;?>" target="_blank" class="facebook">
                  <img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="...">
                  </a>
                  <?php } if($user_profile->linkedin !=''){ ?>
                  <a href="<?php echo $user_profile->linkedin ;?>" target="_blank" class="youtube">
                  <img src="<?php echo base_url(); ?>assets/img/linkedin.png" alt="...">
                  </a>
                  <?php } if($user_profile->gmail !=''){ ?>
                  <!-- <a href="<?php echo $user_profile->gmail ;?>" target="_blank" class="youtube">
                     <img src="<?php echo base_url(); ?>assets/img/mail.png" alt="...">
                     </a>-->
                  <?php } if($user_profile->skype !=''){ ?>
                  <a href="skype:<?php echo $user_profile->skype ;?>?chat" target="_blank" class="instagram">
                  <img src="<?php echo base_url(); ?>assets/img/skype.png" alt="...">
                  </a>
                  <?php } if($user_profile->whatsapp !=''){ ?>
                  <a href="https://web.whatsapp.com/send?phone=<?php echo $user_profile->whatsapp ;?>" target="_blank" class="instagram">
                  <img src="<?php echo base_url(); ?>assets/img/whatsupps.png" alt="...">
                  </a>
                  <?php } if($user_profile->Twitter !=''){ ?>
                  <a href="<?php echo $user_profile->Twitter ;?>" target="_blank" class="youtube">
                     <img width="44px" src="<?php echo base_url(); ?>assets/img/twitter.png" alt="...">
                     </a>
                  <?php } if($user_profile->Discord !=''){ ?>
                  <a href="<?php echo $user_profile->Discord ;?>" target="_blank" class="youtube">
                     <img width="44px" src="<?php echo base_url(); ?>assets/img/discord.png" alt="...">
                     </a>
                  <?php } if($user_profile->Steam !=''){ ?>
                  <a href="<?php echo $user_profile->Steam ;?>" target="_blank" class="youtube">
                     <img width="44px" src="<?php echo base_url(); ?>assets/img/steam.png" alt="...">
                     </a>
                  <?php }  ?>
               </div>
               <?php } else{ echo "No Communication Links "; }  ?>
            </div>
            <!-- md 4 -->
            <?php } ?>
            <?php if($user_profile->facebook !='' || $user_profile->linkedin !='' || $user_profile->instagram !='' || $user_profile->Youtube !='' || $user_profile->Spotify !=''){ ?>
            <div class="col-md-4">
               <h5 class="communication_subhead">SOCIAL MEDIA</h5>
               <?php if($user_profile->facebook !='' || $user_profile->linkedin !='' || $user_profile->instagram !=''){ ?>
               <div class="social-links">
                  <?php if($user_profile->facebook !=''){ ?>
                  <a href="<?php echo $user_profile->facebook ;?>" target="_blank" class="youtube">
                  <img src="<?php echo base_url(); ?>assets/img/facebook.png" alt="...">
                  </a>
                  <?php } if($user_profile->linkedin !=''){ ?>					
                  <a href="<?php echo $user_profile->linkedin ;?>" target="_blank" class="youtube">
                  <img src="<?php echo base_url(); ?>assets/img/linkedin.png" alt="...">
                  </a>
                  <?php } if($user_profile->instagram !=''){ ?>
                  <a href="<?php echo $user_profile->instagram ;?>" target="_blank" class="youtube">
                  <img width="42px" src="<?php echo base_url(); ?>assets/img/instagram.gif" alt="...">
                  </a>
                  <?php } if($user_profile->Youtube  !=''){ ?>
                  <a href="<?php echo $user_profile->Youtube  ;?>" target="_blank" class="youtube">
                     <img width="44px" src="<?php echo base_url(); ?>assets/img/youtube.png" alt="...">
                     </a>
                  <?php } if($user_profile->Spotify !=''){ ?>
                  <a href="<?php echo $user_profile->Spotify ;?>" target="_blank" class="youtube">
                     <img width="44px" src="<?php echo base_url(); ?>assets/img/spotify.png" alt="...">
                     </a>
                  <?php }  ?>
               </div>
               <?php } else{ echo "No Social Media Links "; }  ?>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</section>
<?php } ?>

<?php if(count($my_upload_proj_list) > 0){  ?>
<section class="featured_project">
   <div class="container-fluid">
      <div class="container">
         <!-- <div class="row"> -->
         <h4 class="feature_head">UPLOAD PROJECT</h4>
         <?php if(count($my_upload_proj_list) > 0){  ?>	
         <div id="demo" class="carousel slide">
            <div class="carousel-inner products">
               <?php
                  $i=0;
                  $cnt=1;
                  $count=count($my_upload_proj_list);
                  
                  foreach ($my_upload_proj_list as $value) {
					$upload_proj_id = $value['id'];  
					$query1=$this->db->query("SELECT count(id) as rescount,sum(com_rating) as com_rating, sum(rec_rating) as rec_rating , sum(qua_rating) as qua_rating FROM `tbl_review` where project_id = $upload_proj_id");			
					$res1=$query1->row();
					$rr= $res1->rescount;
					if($rr !=0){
						$rescount =$res1->rescount;
						$com_rating = round($res1->com_rating / $rescount);
						$rec_rating = round($res1->rec_rating / $rescount);
						$qua_rating = round($res1->qua_rating / $rescount);
						$total=round((($res1->com_rating + $res1->rec_rating + $res1->qua_rating) / 3) / $rescount);
						$cnt11= $res1->rescount;
					}else{						
						$com_rating = 0;
						$rec_rating = 0;
						$qua_rating = 0;
						$total=0;
						$cnt11=0;
					} 
					  
					  
					  
					  
                    if($i == 0)
                    {
                  	$add_class='active';
                    }else{
                  	$add_class='';
                    }
                    if($i%3==0)
                  	  {  ?>
               <div class="carousel-item <?php echo $add_class; ?>">
                  <div class="row">
                     <?php }?>
                     <div class="col-md-4 col-sm-4 ">
                        <div class="card mb-3">
                           <div class="card-gallery-pro">
                              <h5><?php echo ucfirst($value['title']); ?> </h5>
                           </div>
                           <!-- card text -->
						   
						    <?php $trimname =trim($value['title']);
							  $title = str_replace(' ', '-', $trimname);?>
						   <a href="<?php echo base_url();?>project_details/<?php echo base64_encode($value['id']);?>/<?php echo $title;?>">
						   
						   <?php if($value['media_type'] =='image'){?>
							<img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>"  autoplay=0 alt="image" style="height:200px;width:100%"></a>
							<?php }else{ ?>
								<!-- <iframe style="height:200px;width:100%" src="<-?php echo base_url(); ?>/uploads/<-?php echo $value['media']; ?>"></iframe> -->
                        <video width="100%" height="200px" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>
								
							<?php } ?>
						   
                           <div class="carddetails">
                              <div class="card-descp"><?php echo $value['description']; ?></div>
                              <br>
                              <!--<a href="#" class="card-link card-link-features1-pro"><img src="<?php echo base_url(); ?>assets/img/star_ratting.png" alt="..." style="width:100px;">-->
							   <a class="card-link card-link-features1-pro">  <span class="fa fa-star <?php if($total >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 5){echo "checked";}?>"></span></a>
					 		  
							 <!-- <span class="card-star-link">(<?php //echo round($total,1);?>)</span>-->
                              </a>
                              <a class="card-link card-link-features2-pro">(<?php echo $cnt11;?>)</a>
                           </div>
                        </div>
                     </div>
                     <?php 
                        if($i%3==2 || $count == $cnt)
                        	  { ?>
                  </div>
               </div>
               <?php }
                  $cnt++;
                  $i++;
                   }//foreach
                  ?>
            </div>
            <!-- carouser inner -->
            <!-- Left and right controls -->
			 <?php if(count($my_upload_proj_list) > 3){  ?>
            <a class="carousel-control-prev carousel-slide-prev-pro-info" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next carousel-slide-prev-next-info" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
			 <?php } ?>
         </div>
         <!-- Carousel -->
         <!-- new conditions -->
         <?php
            } else{
            	echo "No Upload Project";
            }
            ?>
         <!--  </div>  row -->
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid --> 
</section>
<?php } ?>


<?php if(count($my_opening_proj_list) > 0){  ?>
<section class="featured_project">
   <div class="container-fluid">
      <div class="container">
         <!-- <div class="row"> -->
         <h4 class="feature_head"> PROJECT OPENING</h4>
         <?php if(count($my_opening_proj_list) > 0){  ?>	
         <div id="demo2" class="carousel slide">
            <div class="carousel-inner products">
               <?php
                  $i=0;
                  $cnt=1;
                  $count=count($my_opening_proj_list);
                  
                  foreach ($my_opening_proj_list as $value) {
					$upload_proj_id = $value['id'];  
						
					  
                    if($i == 0)
                    {
                  	$add_class='active';
                    }else{
                  	$add_class='';
                    }
                    if($i%3==0)
                  	  {  ?>
               <div class="carousel-item <?php echo $add_class; ?>">
                  <div class="row">
                     <?php }?>
                     <div class="col-md-4 col-sm-4 ">
                        <div class="card mb-3">
                           <div class="card-gallery-pro">
                              <h5><?php echo ucfirst($value['title']); ?> </h5>
                           </div>
                           <!-- card text -->
						   
						    <?php $trimname =trim($value['title']);
							  $title = str_replace(' ', '-', $trimname);?>
						   <a href="<?php echo base_url();?>freelancebit_project_opening_details/<?php echo base64_encode($value['id']);?>/<?php echo $title;?>">
						   
						   <?php if($value['media_type'] =='image'){?>
							<img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" alt="image" style="height:200px;width:100%"></a>
							<?php }else{ ?>									
								<!-- <iframe style="height:200px;width:100%" src="<?php //echo base_url(); ?>/uploads/<?php //echo $value['media']; ?>"></iframe> -->

                        <video width="100%" height="200px" controls><source src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>" type="video/mp4"></video>
								
							<?php } ?>
						   
                           <div class="carddetails">
                              <div class="card-descp"><?php echo $value['describe_proj']; ?></div>
                              
                           </div>
                        </div>
                     </div>
                     <?php 
                        if($i%3==2 || $count == $cnt)
                        	  { ?>
                  </div>
               </div>
               <?php }
                  $cnt++;
                  $i++;
                   }//foreach
                  ?>
            </div>
            <!-- carouser inner -->
            <!-- Left and right controls -->
			 <?php if(count($my_opening_proj_list) > 3){  ?>
            <a class="carousel-control-prev carousel-slide-prev-pro-info" href="#demo2" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next carousel-slide-prev-next-info" href="#demo2" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
			 <?php } ?>
         </div>
         <!-- Carousel -->
         <!-- new conditions -->
         <?php
            } else{
            	echo "No Opening Project";
            }
            ?>
         <!--  </div>  row -->
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid --> 
</section>
<?php } ?>



<?php if(count($feature_proj_list) > 0){  ?>
<section class="featured_project">
   <div class="container-fluid">
      <div class="container">
         <!-- <div class="row"> -->
         <h4 class="feature_head">FEATURED PROJECT</h4>
         <?php if(count($feature_proj_list) > 0){  ?>	
         <div id="demo1" class="carousel slide">
            <div class="carousel-inner products">
               <?php
                  $i=0;
                  $cnt=1;
                  $count=count($feature_proj_list);
                  
                  foreach ($feature_proj_list as $value) {
					$upload_proj_id = $value['upload_proj_id'];  
					$query1=$this->db->query("SELECT count(id) as rescount,sum(com_rating) as com_rating, sum(rec_rating) as rec_rating , sum(qua_rating) as qua_rating FROM `tbl_review` where project_id = $upload_proj_id");			
					$res1=$query1->row();
					$rr= $res1->rescount;
					if($rr !=0){
						$rescount =$res1->rescount;
						$com_rating = round($res1->com_rating / $rescount);
						$rec_rating = round($res1->rec_rating / $rescount);
						$qua_rating = round($res1->qua_rating / $rescount);
						$total=round((($res1->com_rating + $res1->rec_rating + $res1->qua_rating) / 3) / $rescount);
						$cnt1= $res1->rescount;
					}else{						
						$com_rating = 0;
						$rec_rating = 0;
						$qua_rating = 0;
						$total=0;
						$cnt1=0;
					} 
					  
					  
					  
					  
                    if($i == 0)
                    {
                  	$add_class='active';
                    }else{
                  	$add_class='';
                    }
                    if($i%3==0)
                  	  {  ?>
               <div class="carousel-item <?php echo $add_class; ?>">
                  <div class="row">
                     <?php }?>
                     <div class="col-md-4 col-sm-4 ">
                        <div class="card mb-3">
                           <div class="card-gallery-pro">
                              <h5><?php echo ucfirst($value['title']); ?> </h5>
                           </div>
                           <!-- card text -->
						   
						    <?php $trimname =trim($value['title']);
							  $title = str_replace(' ', '-', $trimname);?>
						   <a href="<?php echo base_url();?>project_details/<?php echo base64_encode($value['upload_proj_id']);?>/<?php echo $title;?>">
						   
						   <?php if($value['media_type'] =='image'){?>
							<img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" alt="image" style="height:200px;width:100%"></a>
							<?php }else{ ?>									
								<iframe style="height:200px;width:100%" src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>"></iframe>
								
							<?php } ?>
						   
                           <div class="carddetails">
                              <div class="card-descp"><?php echo $value['description']; ?></div>
                              <br>
                              <!--<a href="#" class="card-link card-link-features1-pro"><img src="<?php echo base_url(); ?>assets/img/star_ratting.png" alt="..." style="width:100px;">-->
							   <a class="card-link card-link-features1-pro">  <span class="fa fa-star <?php if($total >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 5){echo "checked";}?>"></span></a>
					 		  
							 <!-- <span class="card-star-link">(<?php //echo round($total,1);?>)</span>-->
                              </a>
                              <a class="card-link card-link-features2-pro">(<?php echo $cnt1;?>)</a>
                           </div>
                        </div>
                     </div>
                     <?php 
                        if($i%3==2 || $count == $cnt)
                        	  { ?>
                  </div>
               </div>
               <?php }
                  $cnt++;
                  $i++;
                   }//foreach
                  ?>
            </div>
            <!-- carouser inner -->
            <!-- Left and right controls -->
			 <?php if(count($feature_proj_list) > 3){  ?>
            <a class="carousel-control-prev carousel-slide-prev-pro-info" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next carousel-slide-prev-next-info" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
			 <?php } ?>
         </div>
         <!-- Carousel -->
         <!-- new conditions -->
         <?php
            } else{
            	echo "No Featured Project";
            }
            ?>
         <!--  </div>  row -->
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid --> 
</section>
<?php } ?>



























<!-- Below is portfolio -->


<?php if(count($portfolio_list) > 0){  ?>	
<section class="portfolio">
   <div class="container-fluid">
      <div class="container">
         <h4 class="portfolio_head">PORTFOLIO</h4>
         <?php if(count($portfolio_list) > 0){  ?>	
         <div id="demoportfolio" class="carousel slide">
            <!--<ol class="carousel-indicators" style="display:none;">
               <li data-target="#demoportfolio" data-slide-to="0" class="active"></li>
               <li data-target="#demoportfolio" data-slide-to="1"></li>
               <li data-target="#demoportfolio" data-slide-to="2"></li>
               </ol>-->
            <div class="carousel-inner products">
               <?php
                  $i=0;
                  $cnt=1;
                  $count=count($portfolio_list);
                  
                  foreach ($portfolio_list as $value1) {
                    if($i == 0)
                    {
                  	$add_class='active';
                    }else{
                  	$add_class='';
                    }
                    if($i%3==0)
                  	  {  ?>
 <div class="carousel-item <?php echo $add_class; ?>">
                  <div class="row  ">
                           <?php }?>
                   <div class="col-md-4 col-sm-4 ">
                     <div class="user-block card-gallery-pro" >
                         <?php echo $value1['project_name']?> 

                     </div>
                        <div>
                          <img class="img-fluid" src="<?php echo base_url(); ?>uploads/portfolio/cover/<?php echo $value1['cover_photo'];?>" alt="Photo"  >
                        </div>
                        <div class="col-12 " >                                                 
                           <div class="row card-gallery-pro ">
                              <ul class="user-block  card-gallery-pro">
                                 <?php foreach ($value1['result2'] as  $value) { ?>
                                     <a  class="btn btn-primary btn-sbt-primary">
                                          <?php echo $value['keyword']; ?>
                                     </a>
                                 <?php } ?>
                              </ul>   
                          </div>
                        </div>
  
                      <div class="user-block  card-gallery-pro" >
                        <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>uploads/portfolio/profile/<?php echo $value1['profile_photo'];?>"  alt="User Image">
                        <span class="username">
                          <?php echo $value1['project_title']?>
                          <a href="#" class="float-right btn-tool"></i></a>
                        </span>
                        <span class="username"><?php echo $value1['user_name']?></span>
                      </div>

                   </div>

                         <?php 
                        if($i%3==2 || $count == $cnt)
                            { ?>
                </div>
             </div>
               <?php }
                  $cnt++;
                  $i++;
                   }//foreach
                  ?>
            </div>
            <!-- item -->
            <!-- Left and right controls -->
			 <?php if(count($portfolio_list) > 3){  ?>
            <a class="carousel-control-prev prevarrow " href="#demoportfolio" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next nextarrow" href="#demoportfolio" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
			 <?php } ?>
         </div>
         <!-- Carousel -->
         <?php
            } else{
            	echo "No Portfolio";
            }
            ?>
      </div>
      <!-- container -->
   </div>
   <!-- container-fluid --> 
</section>
<?php } ?>
<!--<section class="review_ref">
   <div class="container-fluid">
   
   	<div class="container review_ref_head">
            <h4 class="reviews_head">REVIEWS AND REFERENCES </h4>
   
   
            <div class="ch_skill">
            	
            	<h6>CHOOSE SKILL</h6>
            </div>
   
   
            <div class="col-md-8">
            	
               <select class="form-control" id="selchoose">
   					    <option>Choose skill</option>
   					    <option>Content Strategy</option>
   					    <option>growth hacking</option>
   					    <option>Social media</option>
   					    <option>Content marketing</option>
   					    <option>email marketing</option>
   					    <option>Seo</option>
   					    <option>Copywriting</option>
   					     <option>brand strategy</option>
   					      <option>community building</option>
   					     <option>lead generation</option> 
                      </select>
            	
            </div>
   
   	</div>
   
   
      </div>
   </section>-->
<section class="summrySection">
   <div class="container-fluid">
      <div class="container">
         <h4 class="reviews_head">SUMMARY OF ALL REVIEWS </h4>
         <!--  <div class="summry1"> -->
         <div class="row summary_row">
            <div class="col-sm-3 summary-3-overall">
               <div class="summry_overwall">
                  <p class="overall_subtxt">Overall</p>
                  <span class="fa fa-star spancls <?php if($total >= 1){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($total >= 2){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($total >= 3){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($total >= 4){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($total >= 5){echo "checked";}?>"></span>
                  <span style="font-size:20px">(<?php echo $total;?>)</span>
               </div>
            </div>
            <!-- sm-3 -->
            <div class="col-sm-3 summary-3-overall">
               <div class="summry_overwall">
                  <p class="overall_subtxt">Communication</p>
                  <span class="fa fa-star spancls <?php if($com_rating >= 1){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($com_rating >= 2){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($com_rating >= 3){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($com_rating >= 4){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($com_rating >= 5){echo "checked";}?>"></span>
                  <span style="font-size:20px">(<?php echo $com_rating;?>)</span>
               </div>
            </div>
            <!-- sm-3 -->
            <div class="col-sm-3 summary-3-overall">
               <div class="summry_overwall">
                  <p class="overall_subtxt">Quality of product</p>
                  <span class="fa fa-star spancls <?php if($qua_rating >= 1){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($qua_rating >= 2){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($qua_rating >= 3){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($qua_rating >= 4){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($qua_rating >= 5){echo "checked";}?>"></span>
                  <span style="font-size:20px">(<?php echo $qua_rating;?>)</span>
               </div>
            </div>
            <!-- sm-3 -->
            <div class="col-sm-3 summary-3-overall">
               <div class="summry_overwall">
                  <p class="overall_subtxt">Recommendation</p>
                  <span class="fa fa-star spancls <?php if($rec_rating >= 1){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($rec_rating >= 2){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($rec_rating >= 3){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($rec_rating >= 4){echo "checked";}?>"></span>
                  <span class="fa fa-star spancls <?php if($rec_rating >= 5){echo "checked";}?>"></span>
                  <span style="font-size:20px">(<?php echo $rec_rating;?>)</span>
               </div>
            </div>
            <!-- sm-3 -->
         </div>
         <!-- row 1-->
         <!-- below is second row -->
         <?php if(count($res2) > 0){ ?>
         <div class="row reviews_references">
            <div class="col-sm-2 recent">
               <h5>Recent Reviews</h5>
            </div>
            <div class="col-sm-10 references-10">
               <!-- <div class="row"> -->
               <?php if(count($res2) > 0){ ?>
               <div id="Recentdemo" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner products">
                     <?php
                        $j=0;
                        $cnt1=1;
                        $count1=count($res2);
                        if($count1 > 0){
                        foreach ($res2 as $data) {
                          if($j == 0)
                          {
                        	$add_class1='active';
                          }else{
                        	$add_class1='';
                          }  
						  ?>
                     <div class="carousel-item <?php echo $add_class1; ?>">
                        <div class="row">
                           <div class="col-sm-12">
                              <p class="carousel_subtxt"><?php echo $data['review']?> </p>
                           </div>
                        </div>
                     </div>
                     <?php 
                        $j++;
                        } //foreach
                        } //iff
                        ?>
                  </div>
                  <!-- inner -->
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev recnt-reviews" href="#Recentdemo" data-slide="prev">
                  <span class="carousel-control-prev-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
                  </a>
                  <a class="carousel-control-next recnt-reviews" href="#Recentdemo" data-slide="next">
                  <span class="carousel-control-next-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
                  </a>
               </div>
               <!-- demo -->
               <?php } 
                  else{
                  	echo "No Recent Reviews Available";
                  }
                  ?>
            </div>
         </div>
         <?php } ?> <!-- row 2-->
         <!-- below is third  row -->
         <?php if(count($res2) > 0){ ?>
		 

         <div class="row reviews_references_second">
            <div class="col-sm-2 recent">
               <h5>References</h5>
            </div>
            <div class="col-sm-10 references-10">              
               <div id="Referenceslide" class="carousel slide" data-ride="carousel">                 
                  <ul class="carousel-indicators" style="display: none;">
                     <li data-target="#Referenceslide" data-slide-to="0" class="active"></li>
                     <li data-target="#Referenceslide" data-slide-to="1"></li>
                  </ul>
                  <div class="carousel-inner products">
				  <?php
                        $k=0;
                        $cnt1=1;
                        $count1=count($res2);
                        if($count1 > 0){
                        foreach ($res2 as $data) {
                          if($k == 0)
                          {
                        	$add_class2='active';
                          }else{
                        	$add_class2='';
                          }  
						  ?>
				  
                     <div class="carousel-item <?php echo $add_class2; ?>">
                        <div class="row">
                           <div class="col-sm-12"	>
                              <p class="carousel_subtxt"><?php echo $data['refrence']?> 
                              </p>
                           </div>
                        </div>
                        <!-- row -->
                     </div>
                     <!-- inner item -->
                    <?php 
                        $k++;
                        } //foreach
                        } //iff
                        ?>
                 
                  <a class="carousel-control-prev recnt-reviews" href="#Referenceslide" data-slide="prev">
                  <span class="carousel-control-prev-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
                  </a>
                  <a class="carousel-control-next recnt-reviews" href="#Referenceslide" data-slide="next">
                  <span class="carousel-control-next-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
                  </a>
               </div>
               <!-- demo -->
            </div>
         </div>
        
      </div>
	   <?php } ?>
   </div>
</section>

<?php if(count($skill_list) > 0){ ?>
<section class="skills_section">
   <div class="container-fluid">
      <div class="container">
         <h4 class="skillHdg">Experience </h4>
         <?php
            foreach ($skill_list as  $value) { ?> 
         <h6 class="skill-main-heading"><?php echo $value['skill_name']; ?> <span class="redColor"> <strong> <small> ( 6 Years of Experience ) </small> </strong> </span></h6>
         <?php $skill_id= $value['skill'];
            $sub_skill_data = $this->Front_model->get_sub_skill_data($skill_id); 
            //print_r($sub_skill_data); ?>
         <ul class="skillList">
            <?php foreach ($sub_skill_data as  $data) { ?>
            <li class="lists-icons"><?php echo $data['sub_skill_name']; ?></li>
            <?php } ?>
            </br> 
         </ul>
         <?php } 
            ?>
      </div>
   </div>
</section>
<?php } ?>


<div class="clearfix"></div>
<?php if(count($tool_list) > 0){ ?>
<section class="tools_section">
   <div class="container-fluid">
      <div class="container">
         <h4 class="skillHdg">TOOLS </h4>
         <ul class="skillList">
            <?php foreach ($tool_list as  $value) { ?>
            <li class="lists-icons"><?php echo $value['tool_name']; ?></li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- container fluid -->
</section>
<?php } ?>

<div class="clearfix"></div>
<?php if(count($education_list) > 0){ ?>
<section class="education_section">
   <div class="container-fluid">
      <div class="container">
         <h4 class="education_head"> EDUCATION</h4>
         <h5 class="accer_subhead">ACCREDITATION</h5>
         <div class="row">
            <?php foreach ($education_list as $value) { ?>
            <div class="col-sm-3" >
               <div class="estern_edu">
                  <h6><?php echo $value['collage_name']; ?></h6>
                  <h6 class="master_social"><?php echo $value['title']; ?></h6>
				  <h6 class="country_parts"><span class="country-txts"><?php echo $value['country_name']; ?></span>
				  <span class="country-years"><?php echo $value['year_of_graduation']; ?></span>
				  </h6>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<?php include ("footer.php"); ?>
<div class="modal" id="myModal_freebit">
   <div class="modal-dialog modal-dialog-freelancer">
      <div class="modal-content">
         <!-- Modal body -->
         <div class="modal-body modal-freelancer-body">
            <h4 class="business_head">Are you a Freelancer?</h4>
            <div class="lorem_txt_bit_div">
               <p class="lorem_txt_bit">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
               </p>
            </div>
            <div class="btn-group btn_yes_no_group">
               <a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-outline-primary btn-no-online">No</button></a>
               <div class="or_yes_no">Or</div>
               <a href="<?php echo base_url(); ?>freelancebit_profile"><button type="button" class="btn btn-outline-primary btn-yes-online"
                  >Yes</button></a>
            </div>
            <!-- btn group -->
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- modal first part -->
<script>
	$(document).ready(function(){
		var abc='<?php echo isset($linka) ?>';
		if(abc){
			//$('#myModal_freebit').modal('show'); 
		}
   
		$("#contact_id").hide();
		  $("#show").click(function(){
			$("#contact_id").show();
		  });
   
   
   });
         
     
</script>
