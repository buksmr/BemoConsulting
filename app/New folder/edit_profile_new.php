<?php include ("header3.php"); ?>


<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'></script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/userprofile.css' rel='stylesheet' type='text/css'>




 
<form action="<?php echo base_url(); ?>update_profile" method="post" enctype="multipart/form-data">
   <!-- style="background:url('<?php echo base_url(); ?>assets/img/bg.jpg');" -->
   <section>
      <div  class="banner_bgd_images" id="showimg" >
         <?php if($user_profile->banner_image)
            { ?>
         <img src="<?php echo base_url(); ?>profile_image/<?php echo $user_profile->banner_image; ?>">
         <?php }else{ ?>
         <img src="<?php echo base_url(); ?>assets/img/bg.jpg">
         <?php } ?>
      </div>
     
      <div class="container-fluid">
         <div class="camera_img" id="inputGroupFile02" >
            <img src="<?php echo base_url(); ?>assets/img/cam1.png" alt="....">
            <div class="input-group mb-3"> 
               <input type="file" class="custom-file-input" name="userfile" id="userfile" onchange="previewFile()">
            </div>
         </div>
      </div>
   </section>
   <section class="robert_info_project">
      <div class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="media">
                     <div class="media_top_images mediapic" id="showimg2">
                        <?php if($user_profile->profile_image)
                           { ?>
                        <img src="<?php echo base_url(); ?>profile_image/<?php echo $user_profile->profile_image; ?>">
                        <?php }else{ ?>
                        <img class="" src="<?php echo base_url(); ?>assets/img/profile_edit.png" alt="Generic placeholder image">
                        <?php } ?>
                        <!-- <div id="showimg2"></div> -->
                     </div>
                     <div class="camera_img2" id="inputGroupFile03" >
                        <img src="<?php echo base_url(); ?>assets/img/cam2.png" alt="Generic placeholder image">
                        <div class="input-group-img ">
                           <input type="file" class="custom-file-input"  name="userfile2" id="userfile2" onchange="previewFile2()">
                        </div>
                        <!-- 3 -->  
                     </div>
                     <!-- camera 2 -->
                  </div>
               </div>
               <!-- media -->
               <div class="col-md-4">
               <div class="preview_mode">
                  <a href="<?php echo base_url(); ?>freelancebit_profile"> <button type="button" class="btn btn-primary btn-previewmode-primary">Back To Profile</button></a>
                  <button type="submit" class="btn btn-primary btn-previewmode-primary" id="btnsave1">Save</button>

               </div>



               </div>
               <!-- 4  -->
            </div>
            <!-- 8 -->
         </div>
      </div>
   </section>
   <div class="clearfix"></div>
   <section class="description_display">
      <div class="container-fluid">
         <div class="container">
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
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="usr" class="set_name">Display Name
                        <!-- <span class="display-icon-section">
                                 <a href="#" data-toggle="tooltip"  title="A display name, is the name that is visible to other users.">
                                    <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre">
                                 </a>
                        </span>-->
                         <div class="tooltip"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre">
                             <span class="tooltiptext">A display name, is the name that is visible to other users.</span>
                          </div>




                     </label>
                     <input type="text" class="form-control" id="" value="<?php echo  $user_profile->display_name ?  $user_profile->display_name : set_value('text_display_name'); ?>" name="text_display_name">
                     <div class="form_error"><?php echo form_error('text_display_name'); ?></div>
                  </div>
               </div>
               <!-- md-4 -->
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="usr" class="set_name">Username</label>
                     <input type="text" class="form-control" id="" value="<?php echo $user_profile->username; ?>" readonly>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="usr" class="set_name">Contact mail Address</label>
                     <input type="text" class="form-control" id="" value="<?php echo $user_profile->email_id; ?>" readonly>
                  </div>
               </div>
               <!-- md- 3 -->
               <?php //print_r($user_profile);
                  $time = strtotime($user_profile->created_date_time);
                  $newformat = date('F Y',$time); 
                  
                  ?>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="usr" class="set_name">Registration date</label>
                     <input type="text" class="form-control" id="" value="<?php echo $newformat; ?>" readonly>
                  </div>
               </div>
               <!-- md- 3 -->
               <div class="col-md-12">
                  <div class="row">
                     <div class="form-group col-sm-4">
                        <label class="count_main">Country:</label>
                        <select name="country" id="country" class="form-control">
                           <option value="">Select Country</option>
                           <?php
                              foreach($country as $row)
                              {?>
                           <option value="<?php echo $row->id ;?> " <?php if($row->id == $user_profile->country_id ){echo "selected";}?> ><?php echo $row->name?> </option>
                           <?php }
                              ?>
                        </select>
                        <div class="form_error"><?php echo form_error('country'); ?></div>
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="count_main">State</label>
                        <select class="form-control" id="state" name="state" onChange="get_city(this.value);" >
                           <option value="">Select</option>
                           <?php
                              $state_list = $this->Front_model->get_state($user_profile->country_id);
                              foreach ($state_list as  $state) { ?>
                           <option value="<?php echo $state['id']; ?>" <?php if( $state['id'] == $user_profile->state_id){echo 'selected="selected"';}?>><?php echo $state['name']; ?></option>
                           <?php } ?> 
                        </select>
                     </div>
                     <div class="form-group col-sm-4">
                        <label class="count_main">City</label>
                        <select class="form-control" id="city" name="city" >
                           <option value="">Select</option>
                           <?php
                              $city_list = $this->Front_model->get_city($user_profile->state_id);
                              foreach ($city_list as  $city) { ?>
                           <option value="<?php echo $city['id']; ?>" <?php if( $city['id'] == $user_profile->city_id){echo 'selected="selected"';}?>><?php echo $city['name']; ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <!-- row -->
               </div>
               <!-- md- 12 -->  
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="comment" class="formGroupExampleInput2">Description 
                     </label>
                     <textarea class="form-control describe_textareas" rows="5" id="text_description" name="text_description"><?php echo $user_profile->description ? $user_profile->description : set_value('description'); ?></textarea>
                <script>
                                    CKEDITOR.replace( 'text_description', {
                                       fullPage: true,
                                       allowedContent: true,
                                       extraPlugins: 'wysiwygarea',
                                       width: '1100px'
                                    });
                                 </script> 
                     <div class="form_error">
                        <?php echo form_error('text_description'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- container -->
   </section>
   <section class="communication_social">
      <div class="container-fluid">
         <div class="container">
            <h4 class="commsocial">Communication and Social Media </h4>
            <p class="communication-subtxts">Please, insert or type in the entire URL, not the ID or username for that platform.</p>
            <div class="row">
               <div class="col-md-4">
                  <div class="row fb_connect_img">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/facebook.png" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input class="form-control" value="<?php echo $user_profile->facebook; ?>" placeholder="Facebook" name="facebook"></div>
                     <!-- Ex:https://www.facebook.com/profile.php?id='fbid' -->
                     <div class="deletemedia"></div>
                  </div>
                  <!-- row -->
               </div>
               <!-- md-3 -->
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/instagram.gif" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input class="form-control" value="<?php echo $user_profile->instagram; ?>" name="instagram" placeholder="Instagram"></div>
                     <div class="deletemedia"></div>
                     <!-- Ex:https://www.instagram.com/'username'/ -->
                  </div>
                  <!-- row -->
               </div>
               <!-- md-3 -->
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/linkedin.png" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input class="form-control" value="<?php echo $user_profile->linkedin; ?>" placeholder="Linkedin" name="linkedin"></div>
                     <!-- Ex:https://in.linkedin.com/ -->
                  </div>
                  <!-- row -->
               </div>
               <!-- md-3 -->
               <!--<div class="col-md-3">
                  <div class="row">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/mail.png" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input type="hidden" class="form-control" value="<?php echo $user_profile->gmail; ?>" name="gmail"></div>
                  </div>
                  
                  </div>-->
               <!-- md-3 -->        
            </div>
            <!-- row 1-->
         
            <div class="row C_N_P">
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/skype.png" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input class="form-control" value="<?php echo $user_profile->skype; ?>" placeholder="Ex:'live:user_name'" name="skype"></div>
                  </div>
                  <!-- row -->
               </div>
               <!-- md-3 -->  
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/whatsupps.png" style="width:37px;"></div>
                     <div class="col-md-10 label_connect_txt"><input class="form-control" value="<?php echo $user_profile->whatsapp; ?>" placeholder="Ex:910000000001" name="whatsapp"></div>
                  </div>
                  <!-- row -->
               </div>
               <input  type="hidden" class="form-control" value="<?php echo $user_profile->wechat; ?>" name="wechat">
               <input type="hidden" class="form-control" value="<?php echo $user_profile->gmail; ?>" name="gmail">
 

            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/twitter.png" style="width:37px;"></div>
                  <div class="col-md-10 label_connect_txt"><input type="text" class="form-control" value="<?php echo $user_profile->Twitter; ?>" placeholder="Twitter" name="Twitter"></div>
                
                  </div>                  
                </div>
               
            </div> <!-- second rows -->
            
            
            <div class="row C_N_P">
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-2 label_img">

                     <img src="<?php echo base_url(); ?>assets/img/discord.png" style="width:37px;">


                       <div class="tooltip">
                        <div class="profilenew-icon-section"><img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre">
                             <span class="tooltiptext">It is only possible to link Discord servers, not accounts.</span></div>
                          </div>
                        <!--<span class="profilenew-icon-section">
                              <a href="#" data-toggle="tooltip" data-placement="top" 
                              title="It is only possible to link Discord servers, not accounts.">
                               <img src="<?php echo base_url(); ?>assets/img/about.png" class="img-fluid" alt="Cinque Terre"></a>
                              </span> -->
                  </div>
                  <div class="col-md-10 label_connect_txt">  <input type="text"  class="form-control" value="<?php echo $user_profile->Discord; ?>"  placeholder="Discord" name="Discord"></div>
                  </div>                  
                </div>
            
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/youtube.png" style="width:37px;"></div>
                  <div class="col-md-10 label_connect_txt">  <input type="text"  placeholder="Youtube" class="form-control" value="<?php echo $user_profile->Youtube; ?>" name="Youtube"></div>
                  </div>                  
                </div>
            
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/steam.png" style="width:37px;"></div>
                  <div class="col-md-10 label_connect_txt">  <input  type="text"  placeholder="Steam" class="form-control" value="<?php echo $user_profile->Steam; ?>" name="Steam"></div>
                  </div>                  
                </div>
                </div><!-- third row complete -->
            
            <div class="row">
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-2 label_img"><img src="<?php echo base_url(); ?>assets/img/spotify.png" style="width:37px;"></div>
                  <div class="col-md-10 label_connect_txt">  <input  placeholder="Spotify" type="text" class="form-control" value="<?php echo $user_profile->Spotify; ?>" name="Spotify"></div>
                  </div>                  
                </div>
                </div> <!-- four row complete -->
            
            
               
            </div>
         
            <!-- row 2 -->
         </div>
         <!-- container -->
      </div>
   </section>
   <section class="submit">
      <div class="container-fluid">
         <div class="container">


            <div class="sbt">

               <a href="<?php echo base_url(); ?>freelancebit_profile"> <button type="button" class="btn btn-primary btn-previewmode-primary">Back To Profile</button></a>
               <button type="submit" class="btn btn-primary btn-sbt-primary" id="btnsave2">Save</button>

            </div>
            <!-- sbt -->
         </div>
      </div>
   </section>
</form>
<section class="featured_newproject">
   <div class="container-fluid">
      <div class="container">
         <!-- <div class="row"> -->
         <div class="featured_img">
            <div class="row" >
               <div class="col-md-4">
                  <h4 class="feature_head">FEATURED GIG</h4>
               </div>
               <div class="col-md-8 upload_project">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#uploadproject" >upload GIG</button>
                  <!-- <Upload banner modal> -->
                  <div class="modal " id="uploadproject">
                     <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                           <!-- Modal Header -->
                           <div class="modal-header">
                              <h4 class="modal-title">Featured GIG</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <form action="<?php echo base_url(); ?>add_to_feature_proj" method="post">
                              <!-- Modal body -->
                              <div class="modal-body">
                                 <div class="input-group mb-3">
                                    <div class="custom-file">
                                       <select class="form-control" name="select_project_name" required="">
                                          <option value="">Select Gig</option>
                                          <?php foreach ($my_upload_proj_list as $value) {
                                             ?>
                                          <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary footupload">Add to feature gig</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <close Upload banner modal> -->
               </div>
            </div>
         </div>
         <?php if(count($feature_proj_list) > 0){  ?>   
         <!-- featured img -->  
         <div id="demo" class="carousel slide">
            <?php //print_r($feature_proj_list);?>
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
                     <div class="col-md-4 col-sm-4 col-12">
                        <div class="card cards-features mb-2">
                           <div class="card-gallery-pro">
                              <h5>
                                <?php echo ucfirst($value['title']); ?> 
                                 <div class="portfolio-rights">
                           
                           
                                    <a href="<?php echo base_url();?>delete_featured_product/<?php echo base64_encode($value['id']);?>">
                                    <span class="deletefeatures"><i class="fa fa-window-close" aria-hidden="true"></i></span>
                                    </a>
                                 </div><!-- portfolio text -->
                                 
                              </h5>
                           </div><!-- card-gallery-pro -->
                           
                            <?php if($value['media_type'] =='image'){?>
                     <img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" alt="image" style="height:200px;width:100%"></a>
                     <?php }else{ ?>                           
                        <iframe style="height:200px;width:100%" src="<?php echo base_url(); ?>/uploads/<?php echo $value['media']; ?>"></iframe>
                        
                     <?php } ?>
                           <!--<a href="<?php echo base_url();?>Front/delete_featured_product/<?php echo $value['id'];?>"><span class="deletefeatures"><i class="fa fa-window-close" aria-hidden="true"></i></span></a>-->
                           <div class="carddetails">
                              <div class="card-descp"><?php echo $value['description']; ?></div>
                             
                       <a class="card-link card-link-features1-pro">  <span class="fa fa-star <?php if($total >= 1){echo "checked";}?>"></span>
                        <span class="fa fa-star <?php if($total >= 2){echo "checked";}?>"></span>
                        <span class="fa fa-star <?php if($total >= 3){echo "checked";}?>"></span>
                        <span class="fa fa-star <?php if($total >= 4){echo "checked";}?>"></span>
                        <span class="fa fa-star <?php if($total >= 5){echo "checked";}?>"></span></a>
                       
                      <!-- <span class="card-star-link">(<?php //echo round($total,1);?>)</span>-->
                              
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
          <?php if(count($feature_proj_list) > 3){  ?>
            <a class="carousel-control-prev prevarrow" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next nextarrow" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a> <?php } ?>              
         </div>
         <?php
            } else{
              echo "No Feature Gig";
            }
            ?>          
      </div>
      <!-- container -->
     
     
    

   </div>
   <!-- container-fluid --> 
</section>
<!-- Below is portfolio -->
<section class="portfolio">
   <div class="container-fluid">
      <div class="container">
         <div class="port_img">
            <div class="row" >
               <div class="col-md-4">
                  <h4 class="portfolio_head">PORTFOLIO</h4>
                 
               </div>
               <div class="col-md-8 upload_project">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#uploadportfolio" >upload portfolio</button>
                  <!-- <Upload banner modal> -->
                  <form action="<?php echo base_url();?>add_portfolio" method="post" enctype="multipart/form-data">
                     <div class="modal " id="uploadportfolio">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                           <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">

                                 <h4 class="modal-title">Portfolio

                                    <p class="porofolio-txts">Your portfolio is a collection of your work, done outside of Freelancebit.com, that is representative of your skills and accomplishments.</p>


                                 </h4>
                                

                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                         
                              </div>
                       
                              <!-- Modal body -->
                              <div class="modal-body">
                                 <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="project_name" value="" required placeholder="Project name"/>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" required id="customFile" name="cover_photo">
                                    <label class="custom-file-label" for="customFile">Choose Cover Photo</label>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="form-group mb-3">
                                    <input type="text" class="form-control" required name="project_title" value="" placeholder="Project Role">
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" required id="customFile" name="profile_photo">
                                    <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="user_name" required value="" placeholder="User name">
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="project_url" required value="" placeholder="Project Url (Ex:http://www.domain.com)">
                                 </div>

                                  <div class="form-group">
                  
                                    <label class="formGroupExampleInput1" for="formGroupExampleInput2" >Keywords</label>
                                    <select class="form-control"  name="keyword[]" multiple id="keyword" required >
                                       <?php 
                                          $keywords_list=$this->Front_model->get_keywords();
                                           foreach ($keywords_list as  $value1) { ?>
                                       <option value="<?php echo $value1['id']; ?>" ><?php echo $value1['keyword']; ?></option>

                                       <?php } ?>
                                    </select>
                   
                                  </div>

                                 <span id="keyword_error" hidden style="color: red">Maximum keyword is 10</span>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary footupload">Upload portfolio</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <!-- <close Upload banner modal> -->
               </div>
            </div>
         </div>
         <!-- port img -->
      
         <?php if(count($portfolio_list) > 0){  ?>
         <div id="demoportfolio" class="carousel slide">
            <ol class="carousel-indicators" style="display:none;">
               <li data-target="#demoportfolio" data-slide-to="0" class="active"></li>
               <li data-target="#demoportfolio" data-slide-to="1"></li>
               <li data-target="#demoportfolio" data-slide-to="2"></li>
            </ol>
         
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
                           <div class="float-right" >
                               <a data-toggle="modal" data-target="#myModaleditsprofiles<?php echo $value1['id'];?>">
                              <span class="link-black text-sm">    <i class="fa fa-edit"></i></span></a>      
                               <a href="<?php echo base_url();?>delete_portfolio/<?php echo base64_encode($value1['id']);?>"><span class="link-black text-sm"><i class="fa fa-window-close" aria-hidden="true"></i></span></a>                     
                           </div>
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
                     <?php } ?>
            <div class="modal" id="myModaleditsprofiles<?php echo $value1['id'];?>">
            <div class="modal-dialog">
               <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header">
                   <h4 class="modal-title">Edit portfolio </h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <!-- Modal body -->
                 <div class="modal-body">
                   <form action="<?php echo base_url();?>edit_portfolio" method="post" enctype="multipart/form-data">
                     <h4 class="">
                        Portfolio
                        <p class="porofolio-txts">Your portfolio is a collection of your work, done outside of Freelancebit.com, that is representative of your skills and accomplishments.</p>
                     </h4>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control" name="project_name" value="<?php echo $value1['project_name'];?>" required placeholder="Project name"/>
                     </div>
                     <div class="clearfix"></div>
                     
                     <div class="mb-3">
                        <img src="<?php echo base_url();?>uploads/portfolio/cover/<?php echo $value1['cover_photo']?>" style="height:100px; width:100px;">
                         <input type="hidden" name="cover_photo_old" value="<?php echo $value1['cover_photo']?>">
                        
                     </div>
                     <div class="clearfix"></div>
                     
                     <input type="hidden" name="id" value="<?php echo $value1['id']?>">
                     
                     <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input"  id="customFile" name="cover_photo">
                        <label class="custom-file-label" for="customFile">Choose Cover Photo</label>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control" required name="project_title" value="<?php echo $value1['project_title'];?>" placeholder="Project title">
                     </div>
                     <div class="clearfix"></div>
                     <div class="mb-3">
                        <img src="<?php echo base_url();?>uploads/portfolio/profile/<?php echo $value1['profile_photo']?>" style="height:100px; width:100px;" >
                         <input type="hidden" name="profile_photo_old" value="<?php echo $value1['profile_photo']?>">
                     </div>
                     <div class="clearfix"></div>
                     <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input"  id="customFile" name="profile_photo">
                        <label class="custom-file-label" for="customFile">Choose Profile Photo</label>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group">
                        <input type="text" class="form-control"  name="user_name" required value="<?php echo $value1['user_name'];?>" placeholder="User name">
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="project_url" required value="<?php echo $value1['project_url'];?>" placeholder="Project Url (Ex:http://www.domain.com)">
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group">

                        <label class="formGroupExampleInput1" for="formGroupExampleInput2" >Keywords</label>
                        <select class="form-control"  name="keywordd[]" multiple id="keywordd" value="" required >
                           <?php 
                              $keywords_listt=$this->Front_model->get_keywords();
                               foreach ($keywords_list as  $value1) { ?>
                           <option value="<?php echo $value1['id']; ?>" ><?php echo $value1['keyword']; ?></option>

                           <?php } ?>
                        </select>

                      </div>


                   
                 </div>
                 <!-- modals bodys -->
                 <!-- Modal footer -->
                 <div class="modal-footer">
                   <button type="submit" class="btn btn-secondary footupload">Update portfolio</button>
                 </div>
                 </form>
               </div>
            </div>
            </div>    <!-- The Modal -->        
            
            
               <?php 
                  $cnt++;
                  $i++;  }//foreach
                  ?>
            </div>
            <!-- item -->
            <!-- Left and right controls -->
          <?php if(count($portfolio_list) > 3){  ?>
            <a class="carousel-control-prev prevarrow " href="#demoportfolio" data-slide="prev">
            <span class="carousel-control-prev-icon" ></span>
            </a>
            <a class="carousel-control-next nextarrow" href="#demoportfolio" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a><?php } ?>
         </div>
      </div>
      <!-- Carousel -->
      <?php
         } else{
           echo "No Portfolio";
         }
         ?>
   </div>
   
      <!-- The Modal -->


   
   
   
   
   <!-- container -->
   </div>
   <!-- container-fluid --> 
</section>
<section class="skills_section_news">
   <div class="container-fluid">
      <div class="container">
         <div class="port_skills">
            <div class="row">
               <div class="col-md-4">
                  <h4 class="skillHdg">Experience</h4>
               </div>
               <div class="col-md-8 upload_project">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addskill">add Experience</button>
                  <!-- <Upload banner modal> -->
                  <div class="modal " id="addskill">
                     <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                           <form action="<?php echo base_url(); ?>add_skills" method="post">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                 <h4 class="modal-title">Experience</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                                 <div class="row">
                                    <!--<div class="form-group">
                                       <input type="text" class="form-control" placeholder="Skill name" name="text_skill_name" required="">
                                       </div>-->
                                    <div class="col-md-4 mb-3">
                                       <label class="formGroupExampleInput1" for="formGroupExampleInput2" >Category </label>
                                       <select class="form-control"  name="skill" id="skill" onChange="get_skill(this.value);" required>
                                          <option value="">Select </option>
                                          <?php 
                                             $skill_list_profile=$this->Front_model->get_skill_profile();
                                              foreach ($skill_list_profile as  $value11) { ?>
                                          <option value="<?php echo $value11['id']; ?>" ><?php echo $value11['skill_name']; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                           
                                    <div class="col-md-4 mb-3">
                                      <!--<label for="state" class="formGroupExampleInput1">Skill</label>          
                                       <select class="form-control" id="sub_skill" name="sub_skill[]" multiple required>
                                       </select> -->
                              
                              <label for="state" class="formGroupExampleInput1">Experience</label> 
                                       <select class="form-control" id="sub_skill" name="sub_skill[]" multiple required>
                                       </select>
                                    </div>

                                     

                                    <div class="col-md-4">                              
                              <label for="state" class="formGroupExampleInput1">Year of Experience </label> 
                                      <input type="number" name="year_of_experience" class="form-control" pattern="[0-9]" required>
                                    </div>

   

                                 </div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary footupload">Submit</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <close Upload banner modal> -->
               </div>
            </div>
         </div>
         <!-- port skills --> 
         <?php //print_r($skill_list);?>     
         <!--<ul class="skillList">
            <?php foreach ($skill_list as  $value) { ?>
             <li><?php echo $value['skill_name']; ?> :</li>
            <?php } ?>
            </ul>-->
         <?php
            foreach ($skill_list as  $value) { ?> 

               <?php $skill_id= $value['skill'];
          $experience = $this->Front_model->get_year_of_experience($skill_id);
            $sub_skill_data = $this->Front_model->get_sub_skill_data($skill_id); ?>
         <h6 class="skill-main-heading"><?php echo $value['skill_name']; ?>
         <?php if ($experience[0]->experience) { ?>
         &nbsp;&nbsp;<span style="color:red;">( <?php echo $experience[0]->experience; ?> year of experience )</span> <?php } ?> </h6>

         <ul class="skillList">
            <?php foreach ($sub_skill_data as  $data) { ?>
            <!--<a href="<?php echo base_url();?>Front/delete_profile_skill/<?php echo $data['id'];?>"><li><?php echo  $data['sub_skill_name'] .',  '; ?> </li></a>-->
            <li class="lists-icons"><?php echo $data['sub_skill_name']; ?><a href="<?php echo base_url();?>delete_profile_skill/<?php echo base64_encode($data['id']);?>"><span class="deleteprofiles"><i class="fa fa-window-close" aria-hidden="true"></i></span></a></li>
            <?php } ?>
            </br> 
         </ul>
         <?php } 
            ?>
         <div class="clearfix"></div>
         <div class="port_tools">
            <div class="row">
               <div class="col-md-4">
                  <h4 class="skillHdg">TOOLS </h4>
               </div>
               <div class="col-md-8 upload_project">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addtools">add tools</button>
                  <!-- <Upload banner modal> -->
                  <div class="modal " id="addtools">
                     <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                           <form action="<?php echo base_url(); ?>add_tools" method="post">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                 <h4 class="modal-title">Tools</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-4 mb-3">
                                       <label class="formGroupExampleInput1" for="formGroupExampleInput2" >Tool </label>
                                       <select class="form-control"  name="tool_id[]" multiple id="tool_id" required >
                                          <?php 
                                             $tool_list_profile=$this->Front_model->get_tools_opening();
                                              foreach ($tool_list_profile as  $value1) { ?>
                                          <option value="<?php echo $value1['id']; ?>" ><?php echo $value1['tool_name']; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary footupload">Submit</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <close Upload banner modal> -->
               </div>
            </div>
         </div>
         <!-- port skills -->  
         <ul class="skillList">
            <?php foreach ($tool_list as  $value) { ?>
            <li class="lists-icons"><?php echo $value['tool_name']; ?><a href="<?php echo base_url();?>delete_profile_tools/<?php echo base64_encode($value['id']);?>"><span class="deleteprofiles"><i class="fa fa-window-close" aria-hidden="true"></i></span></a></li>
            <?php } ?>
         </ul>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="education_section">
   <div class="container-fluid">
      <div class="container">
         <div class="port_skills_educations">
            <div class="row">
               <div class="col-md-4">
                  <h4 class="education_head"> EDUCATION AND COURSES</h4>
               </div>
               <div class="col-md-8 upload_project">

                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addnew">add Education</button>

                  <!-- <Upload banner modal> -->
                  <div class="modal " id="addnew">
                     <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                           <!-- Modal Header -->
                           <div class="modal-header">
                              <h4 class="modal-title">Education and courses</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                           </div>
                           <!-- Modal body -->
                           <form action="<?php echo base_url(); ?>add_education" method="post">
                              <div class="modal-body">
                                 <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="select_country_collage" required>
                                       <option value="" class="hidden">Country of College/University</option>
                                       <?php
                                          foreach($country as $row)
                                          {
                                            echo '<option value="'.$row->id.'" >'.$row->name.'</option>';
                                          }
                                           ?>
                                          
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Institute name" name="text_collage_name" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title" name="text_title" required >
                                 </div>
                                 <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="select_year_of_graduation" required >
                                       <option value="" class="hidden">Year of complition</option>
                             <?php
                              $count=0;
                              for($i=2020; $count < 100; $i--){?>
                                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                 <?php $count++;
                                 
                              }
                             ?>
                                       
                                    </select>
                                 </div>
                                       <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Course Description" name="course_descrption" required >
                                 </div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary footupload">Submit</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <close Upload banner modal> -->
               </div>
            </div>
         </div>
   
         <div class="row">
            <?php foreach ($education_list as $value2) { ?>
            <div class="col-sm-3" >
               <div class="estern_edu">
                  <a href="<?php echo base_url();?>delete_education/<?php echo base64_encode($value2['id']);?>"><span class="deleteaccred"><i class="fa fa-window-close" aria-hidden="true"></i></span>
                  </a>
                  <h6><?php echo $value2['collage_name']; ?></h6>
                  <h6 class="master_social"><?php echo $value2['title']; ?></h6>
               <h6 class="country_parts"><span class="country-txts"><?php echo $value2['country_name']; ?></span>
              <span class="country-years"><?php echo $value2['year_of_graduation']; ?></span>
              </h6>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</section>

<script>
   $(document).ready(function(){

    document.getElementById("btnsave1").disabled = true;
    document.getElementById("btnsave2").disabled = true;

   $('form').bind('change keyup', function () {
   document.getElementById("btnsave1").disabled = false;
   document.getElementById("btnsave2").disabled = false;
   });
    
    $("#tool_id").select2();
    
    $("#sub_skill").select2();
     $("#keyword").select2();
         $("#keywordd").select2();
     
       $('#keyword').change(function(){
     var keyword = $('#keyword').val();
    if (keyword.length == 10) {

    keyword.pop()
       $("#keyword").val(keyword );
        $('#keyword_error').removeAttr('hidden');

    }


   });
    
    

    $('#country').change(function(){
     var country_id = $('#country').val();
     if(country_id != '')
     {
      $.ajax({
       url:"<?php echo base_url(); ?>Front/fetch_state",
       method:"POST",
       data:{country_id:country_id},
       success:function(data)
       {
        $('#state').html(data);
        $('#city').html('<option value="">Select City</option>');
       }
      });
     }
     else
     {
      $('#state').html('<option value="">Select State</option>');
      $('#city').html('<option value="">Select City</option>');
     }
    });
    
    
    
   
    $('#state').change(function(){
     var state_id = $('#state').val();
     if(state_id != '')
     {
      $.ajax({
       url:"<?php echo base_url(); ?>Front/fetch_city",
       method:"POST",
       data:{state_id:state_id},
       success:function(data)
       {
        $('#city').html(data);
       }
      });
     }
     else
     {
      $('#city').html('<option value="">Select City</option>');
     }
    });
    
   });
</script>
<script type="text/javascript">
   function previewFile() {
   $('#showimg').html('');
   // Multiple images preview in browser
   var total_file=document.getElementById("userfile").files.length;
   var imgPre="";
   for(var i=0;i<total_file;i++)
   {
   imgPre+='<img  src="'+URL.createObjectURL(event.target.files[i])+'">';
   }
   $('#showimg').append(imgPre);
   }
   
   function previewFile2() {
   $('#showimg2').html('');
   // Multiple images preview in browser
   var total_file=document.getElementById("userfile2").files.length;
   var imgPre="";
   for(var i=0;i<total_file;i++)
   {
   imgPre+='<img  src="'+URL.createObjectURL(event.target.files[i])+'">';
   }
   $('#showimg2').append(imgPre);
   }
</script>
<script>  
   function get_skill(val) {
            $('#sub_skill').html('');
       $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>Front/get_sub_skill',
        data:{'profile_skill_id':val},
        success: function(data)
        {                   
          var objJson = JSON.parse(data); 
          // $('#sub_skill').append("<option value='' >select</option>"); 
          $.each(objJson.subskills, function(val,text) { 
          
             $('#sub_skill').append("<option value='"+text.id+"' >"+text.sub_skill_name+"</option>");
                
          }); 
        }
      });
   }  
</script>
<script>
   // Add the following code if you want the name of the file appear on select
   $(".custom-file-input").on("change", function() {
     var fileName = $(this).val().split("\\").pop();
     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
   });
</script>
<?php include ("footer.php"); ?>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(
    placement : 'top'


   );   
});
</script>