
<?php include ("header4.php"); ?>




<?php //print_r($proj_opening_details);?>
<section class="web_design_section">
	
	<div class="container-fluid">
		 <div class="container">
		 
	 		<h2 class="mainHdg"> <span>Project - </span> <?php echo $proj_opening_details->title; ?></h2>

	 		<section class="detailsSlider1">
	 				<div class="row">
		 		     <div class="col-md-8">
		 			
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:940px;height:480px;overflow:hidden;visibility:hidden;
            ">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">

            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:940px;height:380px;overflow:hidden;">

        	<?php foreach ($proj_opening_media_details as  $value) { 
                     $video_thumb = '';
                 if($value['media_type'] == 'video'){
                     $video_thumb = $this->Front_model->check_video_thumb($this->config->item('UPLOAD_PATH') . '' . $value['media'], 'proj_opening_video_thumb');
                     ?>
                
                <div>
                                            <video class="slide_data_video" width="100%" height="360" controls>
                                                <source src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>">
                                            </video>

                                            <img data-u="thumb" src="<?php echo $video_thumb; ?>" />

                </div>
                

                 <?php }else if($value['media_type'] == 'application'){ ?>
				 
                 <?php }else{ ?>
                 	<div>
		                <img data-u="image" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" />
		                <img data-u="thumb" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" />
                    </div>

                 <?php } ?>
               
              <?php } ?>

           
        </div> <!-- main thumb -->
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:945px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:-5px;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
        

				</div><!-- 812-->
				
				
				
				<?php 
				   $user_id= $proj_opening_details->user_id;
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
					$cnt =$res1->rescount;
				   }else{
					$com_rating = 0;
					$rec_rating = 0;
					$qua_rating = 0;
					$total=0;
					$cnt=0;
				   }
				   }else{
				   
				   $com_rating = 0;
				   $rec_rating = 0;
				   $qua_rating = 0;
				   $total=0;
				   $cnt=0;
				   }
				   }else{
				   $com_rating = 0;
				   $rec_rating = 0;
				   $qua_rating = 0;
				   $total=0;
				   $cnt=0;
				   }
				   }
				   }else{
				   $com_rating = 0;
				   $rec_rating = 0;
				   $qua_rating = 0;
				   $total=0;
				   $cnt=0;
				   }
				
				?>

            <div class="col-md-4">
		 			
	              <div class="card rightCard">
                      <?php if($proj_opening_details->banner_image){ ?>
                         <img src="<?php echo base_url(); ?>profile_image/<?php echo $proj_opening_details->banner_image; ?>" alt="" style="width:100%" class="background-profile-image">
                      <?php }else{ ?>
                         <img src="<?php echo base_url(); ?>assets/img/profile_bg.jpg" alt="" style="width:100%" class="background-profile-image">
                      <?php } ?>
					  

					 <div class="card-body snd-part-right-card">

<?php
 if($proj_opening_details->display_name !='')
 	{
 	
 	 $name_user = str_replace(' ', '_', $proj_opening_details->display_name);
 	}
 	else
 	{
 	  
 	 $name_user = str_replace(' ', '_', $proj_opening_details->username);

 	}?>


                      <?php if($proj_opening_details->profile_image){ ?>
						 <a href="<?php echo base_url();?>freelancebit_profile_new/<?php echo base64_encode($proj_opening_details->user_id);?>/<?php echo $name_user; ?>">
						 
							<img src="<?php echo base_url(); ?>profile_image/<?php echo $proj_opening_details->profile_image; ?>" alt=""  class="profile-pic-card">
						</a>

                      	<?php } else{ ?>
                           <img src="<?php echo base_url(); ?>assets/img/profile_edit.png" alt="" class="profile-pic-card">
                      	<?php } ?>


					  
					  

					  <h4 class="profile_robert"><?php if($proj_opening_details->display_name !=''){echo $proj_opening_details->display_name;}else{ echo $proj_opening_details->username; }?></h4>
					 

					
					  <div class="robertpro_sub_txt"><?php echo $proj_opening_details->description; ?></div>

					  
					   <p class="stars-icons">  <span class="fa fa-star <?php if($total >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 5){echo "checked";}?>"></span></p>
					  <p class="reviews"><?php echo round($total,1);?> (<?php echo $cnt;?> Reviews)</p>
					  
					   <a href="#" class="applozic-launcher" data-mck-id="<?php echo $proj_opening_details->email_id; ?>" data-mck-name="<?php if($proj_opening_details->display_name !=''){echo $proj_opening_details->display_name;}else{ echo $proj_opening_details->username; }?>">

					   	<p>
					   		<?php if(isset($_SESSION["user_login"]) && ($this->session->userdata("user_login")) == $proj_opening_details->user_id){}else{ ?>
					   		<button type="button" id="show" class="btn btn-primary btn-contact-me">Contact Me</button>
					   	<?php } ?>
					   	</p>
					   </a>


					  <div id="contact_id">
					  	<p><?php echo $proj_opening_details->email_id; ?></p>
					  </div>

	                  <a href="#" class="card-link card-link-sydeny pull-left"><?php echo $proj_opening_details->country_name; ?></a>
					   <a href="#" class="card-link card-link-sydeny pull-right">Joined <?php echo date('Y',strtotime($proj_opening_details->created_date_time)); ?></a>

					 </div> 
					 
					   

	             </div><!-- card -->
				</div> <!-- 4 -->


		 		
				</div><!-- row -->
			</section>
		 	
		 	
		 </div>

	</div>
</section>



<section class="web_design_section1">
	
	<div class="container-fluid">
		 <div class="container">
		 	<div class="row">

		 		<!--<h2 class="web_develop_design">Website Design And Developing</h2>-->
		 		<div class="col-md-8 card-first-web-part">
		 			<div class="card developing-card-section">
					  <div class="card-header card-top-head">
					  
					     <div class="row">	
							<div class="col-sm-4">
							   <p class="budge">Budget</p>
								<p class="budge_rupee">€<?php echo $proj_opening_details->budget; ?></p>
							
							</div>	
							<div class="col-sm-4">
							   <p class="budge">Posted On</p>
								<p class="budge_rupee"><?php echo date('m/d/Y',strtotime($proj_opening_details->created_date)); ?></p>
							
							</div>	
							<div class="col-sm-4">
							 <?php if($proj_opening_details->expiration_date_proj_opening !=''){ ?>
							    <p class="budge">Expires On</p>
								<p class="budge_rupee"><?php echo $proj_opening_details->expiration_date_proj_opening; ?></p>
							 <?php } ?>
							</div>

				        </div>	 <!-- row -->	
					  
					  </div>
  
					  <div class="card-body card-description-body">
					    <h4 style="color:#1b5ca0;font-weight: 600;">Description
					    </h4>
					    <div class="wb_sb_txt"><?php echo $proj_opening_details->describe_proj; ?>
					     </div>
					  </div> 
					  

					  <div class="card-footer card-footer-technology">
					    <?php $ids = $proj_opening_details->skill_id;
						$res = $this->db->query("select cat_skill_name from tbl_cat_skills where id IN($ids)")->result_array();
						
						?>
					    <h5 class="main_txt"><span class="skills_txt">Skills:</span>   <span class="span_lang">
							<?php
							if(count($res) > 0){
								$count =count($res);
								$i =1;
								foreach($res as $data){
									if($count == $i){$space ="&nbsp;";}else{$space =",&nbsp;&nbsp;";}
									echo '#' .$data['cat_skill_name'] .$space;								   
									$i++;
								}
							} 
							?>
						
						</span></h5>


					  </div>
  

                    </div><!-- card -->

		 		</div><!-- 8 -->


		 		

		 	</div>
		 	
		 </div>

	</div>
</section>

<section class="files_section">

	<div class="container-fluid">
		<div class="container">
			<h4 style="color:#1b5ca0;font-weight: 600;">FILES
					    </h4>
               <br>
			<div class="row">
			
			<?php
			if(count($proj_opening_media_details) > 0){
			foreach ($proj_opening_media_details as  $value) { 
                if($value['media_type'] == 'application'){
					$media= $value['media'];
					$res= explode('.',$media);
					$ext =$res[1];
					$filename =$res[0];
					if($ext == 'pdf'){
						$image='pdf.png';
					}else if(($ext == 'doc') || ($ext == 'docx')){
						$image='word.png';
					}else if(($ext == 'xls') || ($ext == 'xlsx')){
						$image='excel.png';
					}else{
						$image='pdf.png';
					}
				 ?>
				<div class="col-sm-2">
					<div class="pdf_file">
						<a href="<?php echo base_url();?>uploads/<?php echo $media;?>" download >
							<img src="<?php echo base_url(); ?>assets/img/<?php echo $image;?>" style="width: 79px;">
						</a>
						<h4 class="dc"><?php echo $filename; ?></h4>
					</div>
				</div>
            <?php } } } ?>
			
			
			
			    <!--<div class="col-sm-2">
			    	 <div class="word_file">
			   	 	<img src="<?php echo base_url(); ?>assets/img/<?php echo $image;?>" style="width: 79px;">
			   	 	 <h4 class="dc">Document</h4>
			   	   </div>

			    </div>
			     <div class="col-sm-2">
			     	 <div class="excel_file">
			   	 	<img src="<?php echo base_url(); ?>assets/img/excel.png" style="width: 79px;">
			   	 	 <h4 class="dc">Document</h4>
			   	   </div>

			     </div>-->

			</div><!-- row -->		    



	     </div>		
		

	</div> <!-- fluiid -->
	

</section>

<script>
$(document).ready(function(){
	$("#contact_id").hide();
  $("#show").click(function(){
    $("#contact_id").show();
  });
});
</script>

<?php include ("footer.php"); ?>












