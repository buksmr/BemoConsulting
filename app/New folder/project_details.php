<?php include ("header3.php"); ?>
<style>

/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;  
}
/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:1em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}
/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}
/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
  
  
}
.spancls {
    font-size: 20px;
}
.checked{color:orange;}
</style>



<section class="web_design_section">
	
	<div class="container-fluid">
		 <div class="container">
		 
	 		<h2 class="mainHdg"> <span>Project - </span> <?php echo $proj_basic_details->title; ?></h2>

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

        	
             
              <?php if(count($proj_media_details) > 0){
			  foreach ($proj_media_details as  $value) { 
                 if($value['media_type'] == 'video'){
                     $video_thumb = $this->Front_model->check_video_thumb($this->config->item('UPLOAD_PATH') . '' . $value['media'], 'upload_proj_video_thumb');
                     ?>                
                <div>
                    <video class="slide_data_video" width="100%" height="360" controls>
                                                    <source src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>">
                                                </video>
                    
                                                <img data-u="thumb" src="<?php echo $video_thumb; ?>" />
				   
                </div>

                 <?php }else{ ?>
                 	<div>
		                <img data-u="image" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" />
		                <img data-u="thumb" src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" />
                    </div>

                 <?php } ?>
               
              <?php } }else{ ?>
					<div>
		                <img data-u="image" src="<?php echo base_url(); ?>assets/img/marketplace1.png" />
		                <img data-u="thumb" src="<?php echo base_url(); ?>assets/img/marketplace1.png" />
                    </div>
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
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:-36px;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
        

				</div><!-- 8 -->

<?php //print_r($proj_basic_details);?>
		 		<div class="col-md-4">
		 			
	              <div class="card rightCard">

                     <?php if($proj_basic_details->banner_image){ ?>
                       <img src="<?php echo base_url(); ?>profile_image/<?php echo $proj_basic_details->banner_image; ?>" alt="" class="background-profile-image">
                    <?php  }else{ ?>
                      <img src="<?php echo base_url(); ?>assets/img/profile_bg.jpg" alt="" class="background-profile-image">
                     <?php } ?>
					
					

<?php if($proj_basic_details->display_name !='')
{
	$name_user = str_replace(' ', '_', $proj_basic_details->display_name);
	$user_nam_on_url=$name_user;
}
else{ 
	$name_user = str_replace(' ', '_', $proj_basic_details->username);
	$user_nam_on_url=$name_user;
}?>

					 <div class="card-body snd-part-right-card">
                       <?php if($proj_basic_details->profile_image){ ?>
                      <a href="<?php echo base_url();?>freelancebit_profile_new/<?php echo base64_encode($proj_basic_details->user_id);?>/<?php echo $name_user; ?>"> <img src="<?php echo base_url(); ?>profile_image/<?php echo $proj_basic_details->profile_image; ?>" class="profile-pic-card"
					  alt=""></a>
                      <?php }else{ ?>
                      <a href="<?php echo base_url();?>freelancebit_profile_new/<?php echo base64_encode($proj_basic_details->user_id);?>/<?php echo $name_user; ?>"><img src="<?php echo base_url(); ?>assets/img/profile_pic1.jpg" class="profile-pic-card"
					  alt=""></a>
                       <?php } ?>
					  
					  <!--  -->
					   <?php 
							$upload_proj_id = $proj_basic_details->id;
														
							$query1=$this->db->query("SELECT count(id) as rescount,sum(com_rating) as com_rating, sum(rec_rating) as rec_rating , sum(qua_rating) as qua_rating FROM `tbl_review` where project_id = $upload_proj_id");			
							$res1=$query1->row();
							$rr= $res1->rescount;
							if($rr !=0){
								$rescount =$res1->rescount;
								$com_rating = round($res1->com_rating / $rescount);
								$rec_rating = round($res1->rec_rating / $rescount);
								$qua_rating = round($res1->qua_rating / $rescount);
								$total=round((($res1->com_rating + $res1->rec_rating + $res1->qua_rating) / 3) / $rescount);
								$cnt= $res1->rescount;
							}else{
								
								$com_rating = 0;
								$rec_rating = 0;
								$qua_rating = 0;
								$total=0;
								$cnt=0;
							}
							
							
					   ?>

					  <h4 class="profile_robert"><?php if($proj_basic_details->display_name !=''){echo $proj_basic_details->display_name;}else{ echo $proj_basic_details->username; }?></h4>
					

					  
					  <div class="robertpro_sub_txt"><?php echo $proj_basic_details->user_description; ?></div>

					  <!--<p class="star_pro_image"><img src="<?php echo base_url(); ?>assets/img/star_ratting.png"></p>-->
					  <p class="stars-icons">  <span class="fa fa-star <?php if($total >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($total >= 5){echo "checked";}?>"></span></p>
					  <p class="reviews"><?php echo round($total,1);?> (<?php echo $cnt;?> Reviews)</p>

					  <?php if($this->session->userdata('user_login')!= $proj_basic_details->user_id){


					   ?>
					  
					  <a href="#" class="applozic-launcher" data-mck-id="<?php echo $proj_basic_details->email_id; ?>" data-mck-name="<?php if($proj_basic_details->display_name !=''){echo $proj_basic_details->display_name;}else{ echo $proj_basic_details->username; }?>">

					  	<p>
					  		<button type="button" id="show" class="btn btn-primary btn-contact-me">Contact Me</button>
					  	</p>
					  </a>
					<?php } ?>



					   <div id="contact_id" style="display:none;">
					  	<p><?php echo $proj_basic_details->email_id; ?></p>
					  </div>

	                  <a href="#" class="card-link card-link-sydeny pull-left"><?php echo $proj_basic_details->country_name; ?></a>
					   <a href="#" class="card-link card-link-sydeny pull-right">Joined <?php echo date('F Y',strtotime($proj_basic_details->created_date_time)); ?></a>

					 </div> 
					 
	             </div><!-- card -->
				</div> <!-- 4 -->
				</div>
			</section>
		 	
		 	
		 </div>

	</div>
</section>
<div class="clearfix"></div>

<section class="packageSection">
	<div class="container-fluid">
	 <div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
                    <h2 class="mainHdg text-center"> Packages </h2>
                    <div class="package_table">
                        <?php
                        $pack_head_perc = 16;
                        $pack_per_perc = 21; //total 84/4,per size=21
                        $total_cols_perc = $pack_per_perc * intval(count($package_title));

                        $tot_space = $pack_head_perc + intval($total_cols_perc);
                        ?>
                        <table class="table table-responsive-sm" style="width: <?php echo $tot_space;?>%">
                            <thead>
                                <tr>
                                    <th style="width:<?php echo $pack_head_perc; ?>%">Package Name</th>
                                    <?php foreach ($package_title as $value) { ?>
                                        <th style="width:<?php echo $pack_per_perc; ?>%"><?php echo $value ? $value : '-'; ?></th>

<?php } ?>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Description</b></td>
<?php foreach ($package_description as $value) { ?>
                                        <td><div class="proj-desc"><?php echo $value ? $value : '-'; ?> </div>
                                        </td>
<?php } ?>	
                                </tr>
                                <tr>
                                    <td><b>Revision</b></td>
<?php foreach ($package_revision as $value) { ?>
                                        <td><?php echo $value ? $value : '-'; ?></td>
                                    <?php } ?>	
                                </tr>
                                <tr>
                                    <td>
                                        <b>Delivery Time</b> </td>
<?php
foreach ($package_delivetime as $value) {

    $did = $value;
    if ($did != '') {
        $query = $this->db->query('select time from tbl_delivery_time where id = ' . $did);
        $result = $query->row();
        $del_time = $result->time;
    } else {
        $del_time = '-';
    }
    ?>
                                        <td>                                           
                                            <div class="custom-controls">
    <?php echo $del_time; ?>
                                            </div>
                                        </td>
<?php } ?>	


                                <tr>
                                    <td>
                                    </td>
<?php
$i = 0;
foreach ($package_price as $value) {
    ?>
                                        <td>

                                            <a href="<?php echo base_url(); ?>project_package_summary/<?php echo base64_encode($value['pack_id']); ?>/<?php echo base64_encode($upload_proj_id); ?>">

    <?php $price = str_replace('.', ',', $value['price']); ?>
                                                <button type="button" class="btn btn-primary btn-select-price"><?php
                                                if ($price == '') {
                                                    echo "Select";
                                                } else {
                                                    echo "Select ";
                                                }
                                                ?><?php echo $price; ?><?php
                                                    if ($price != '') {
                                                        echo " &#8364";
                                                    }
                                                    ?> </button> </a>


                                        </td>
    <?php
    $i++;
}
?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div><!-- Col8 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
				<div class="abt-projects">
				<h2 class="mainHdg"> About This Project</h2>
				</div>
				<div class="aboutBox scroll">

					<div class="abt_txt_project"><?php echo $proj_basic_details->description; ?>
					</div>

				</div>

			</div><!-- Col4 -->
		</div>
	  </div>
	</div>
</section>


<section class="reviewSection">
	 <div class="container">
		<h2 class="mainHdg"> Reviews</h2>
		
       <div class="row first_part">

			   <div class="col-sm-4 summary-4-overall">
	             <div class="summry_Seller">
	             	 <p class="overall_subtxt">Seller Communication</p>
	                  <span class="fa fa-star spancls <?php if($com_rating >= 1){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($com_rating >= 2){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($com_rating >= 3){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($com_rating >= 4){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($com_rating >= 5){echo "checked";}?>"></span>
						<span style="font-size:20px">(<?php echo $com_rating;?>)</span>
	             </div>

	           </div><!-- sm-3 -->

	           <div class="col-sm-4 summary-4-overall">
	             <div class="summry_Seller">
	             	 <p class="overall_subtxt">Quality of product</p>
						<span class="fa fa-star spancls <?php if($qua_rating >= 1){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($qua_rating >= 2){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($qua_rating >= 3){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($qua_rating >= 4){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($qua_rating >= 5){echo "checked";}?>"></span>
						<span style="font-size:20px">(<?php echo $qua_rating;?>)</span>
	             </div>

	           </div><!-- sm-3 -->

	           <div class="col-sm-4 summary-4-overall">
	             <div class="summry_Seller">
	             	 <p class="overall_subtxt">Recommendation</p>
	                  <span class="fa fa-star spancls <?php if($rec_rating >= 1){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($rec_rating >= 2){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($rec_rating >= 3){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($rec_rating >= 4){echo "checked";}?>"></span>
						<span class="fa fa-star spancls <?php if($rec_rating >= 5){echo "checked";}?>"></span>
						<span style="font-size:20px">(<?php echo $rec_rating;?>)</span>
	             </div>

	           </div><!-- sm-3 -->

           </div> <!-- row 1-->


           <!-- below second row -->
		   
		   <?php //print_r($review);?>

            <div class="row reviews_recent_references">
            	
              <div class="col-sm-2 recent">
              	  <h5>Recent Reviews</h5>

              </div>

              <div class="col-sm-10 references-10">
              
               <!-- <div class="row"> -->

					<div id="#RecentReviews" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->
						  <ul class="carousel-indicators" style="display: none;">
							<li data-target="#RecentReviews" data-slide-to="0" class="active"></li>
							<li data-target="#RecentReviews" data-slide-to="1"></li>
							
						  </ul>  

							 <div class="carousel-inner products">							 
							    <?php
								if(count($review) > 0){ 
								$i = 0;
								foreach($review as $data){
								?>
									
								<div class="carousel-item <?php if($i == 0){echo 'active';}?>">	
									<div class="row">
									  <div class="col-sm-12">
									   <p class="carousel_subtxt"><?php echo $data['review']?> </p> 
									   </div>
									</div> <!-- row -->
								</div>	 <!-- inner item -->
								
								<?php $i++;  }  }else{ ?>
								<div class="carousel-item active">	
									<div class="row">
									  <div class="col-sm-12">
									   <p class="carousel_subtxt">No Review Found </p> 
									   </div>
									</div> <!-- row -->
								</div>
								<?php } ?>

							 </div>  <!-- inner -->
				   			   			 
						  <!-- Left and right controls -->
						  <a class="carousel-control-prev recnt-reviews" href="#RecentReviews" data-slide="prev">
							<span class="carousel-control-prev-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
						  </a>

						  <a class="carousel-control-next recnt-reviews" href="#RecentReviews" data-slide="next">
							<span class="carousel-control-next-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
						  </a>
						  
					 </div>  <!-- demo -->
   
                      <!-- </div> main outer row --> 
              </div>
             	  
 </div>  <!-- row 2-->

           <!-- below second end row -->

<!-- below is third row -->
  <div class="row positive_reviews_references">
            	
              <div class="col-sm-2 recent">
              	  <h5>Positive Reviews</h5>

              </div>

              <div class="col-sm-10 references-10">
              
               <!-- <div class="row"> -->

					<div id="PositiveReviews" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->
						  <ul class="carousel-indicators" style="display: none;">
							<li data-target="#PositiveReviews" data-slide-to="0" class="active"></li>
							<li data-target="#PositiveReviews" data-slide-to="1"></li>
							
						  </ul>  

							<div class="carousel-inner products">							 
							    <?php
								if(count($review) > 0){ 
								$k = 1;
								foreach($review as $data1){
								//$rating2 =$data1['rating'];
								$rating2 =$rating3 =round(($data1['com_rating'] + $data1['rec_rating'] + $data1['qua_rating'])/3 );
								
								
								if($rating2 > 2){ 
								
								?>	
									
								<div class="carousel-item <?php if($k == 1){echo 'active 11';}?>">	
									<div class="row">
									  <div class="col-sm-12">
									   <p class="carousel_subtxt"><?php echo $data1['review']?> </p> 
									   </div>
									</div> <!-- row -->
								</div>	 <!-- inner item -->
								
								<?php $k++;  }   }  }else{ ?>
								<div class="carousel-item active">	
									<div class="row">
									  <div class="col-sm-12">
									   <p class="carousel_subtxt">No Review Found </p> 
									   </div>
									</div> <!-- row -->
								</div>
								<?php } ?>

							 </div>  <!-- inner -->
				   			   			 
						  <!-- Left and right controls -->
						  <a class="carousel-control-prev recnt-reviews" href="#PositiveReviews" data-slide="prev">
							<span class="carousel-control-prev-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
						  </a>

						  <a class="carousel-control-next recnt-reviews" href="#PositiveReviews" data-slide="next">
							<span class="carousel-control-next-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
						  </a>
						  
					 </div>  <!-- demo -->
   
                      <!-- </div> main outer row --> 
              </div>
             	  
 </div>  <!-- row 3-->     


<!-- below is third end row -->

<!-- below is four row -->
<div class="row negative_reviews_references">
            	
              <div class="col-sm-2 recent">
              	  <h5>Negative Reviews</h5>

              </div>

              <div class="col-sm-10 references-10">
              
               <!-- <div class="row"> -->

					<div id="NegativeReviews" class="carousel slide" data-ride="carousel">

						  <!-- Indicators -->
						  <ul class="carousel-indicators" style="display: none;">
							<li data-target="#NegativeReviews" data-slide-to="0" class="active"></li>
							<li data-target="#NegativeReviews" data-slide-to="1"></li>
							
						  </ul>  

							 <div class="carousel-inner products">							 
							    <?php
								if(count($review) > 0){ 
								$cnt =0;
								foreach($review as $negative){
								 //$rating3 =$negative['rating'];
								$rating3 =round(($negative['com_rating'] + $negative['rec_rating'] + $negative['qua_rating'])/3 );
								 
								if($rating3 <= 2 ){  ?>
								
										<div class="carousel-item <?php if($cnt == 0){echo 'active';}?>">	
											<div class="row">
											  <div class="col-sm-12">
											   <p class="carousel_subtxt"><?php echo $negative['review']?> </p> 
											   </div>
											</div> <!-- row -->
										</div>	 <!-- inner item -->
								
								<?php $cnt++; }   }  } else{ ?>
								<div class="carousel-item active">	
									<div class="row">
									  <div class="col-sm-12">
									   <p class="carousel_subtxt">No Review Found </p> 
									   </div>
									</div> <!-- row -->
								</div>
								<?php } ?>

							 </div>  <!-- inner -->
				   			   			 
						  <!-- Left and right controls -->
						  <a class="carousel-control-prev recnt-reviews" href="#NegativeReviews" data-slide="prev">
							<span class="carousel-control-prev-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
						  </a>

						  <a class="carousel-control-next recnt-reviews" href="#NegativeReviews" data-slide="next">
							<span class="carousel-control-next-icon" style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
						  </a>
						  
					 </div>  <!-- demo -->
   
                      <!-- </div> main outer row --> 
              </div>
             	  
 </div>  <!-- row 3-->

<!-- below is four row end -->


	 </div>
</section>


<script>
$(document).ready(function(){
	
  $("#show").click(function(){
    $("#contact_id").show();
  });
});
</script>

<script>
$(document).ready(function() {
  $('#play-video').on('click', function(ev) {
 
    // $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });
});
</script>
<?php include ("footer.php"); ?>














