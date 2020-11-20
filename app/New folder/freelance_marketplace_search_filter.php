<?php include ("header3.php"); ?>





<section class="market_place">
	
	<div class="container-fluid">
		 <div class="container mkt_txt">
		 	
		 	<h2>Marketplace</h2>
		 </div>

	</div>
</section>

<?php 
if(isset($sub_cat_id)){
$que=$this->db->select("sub_cat_image")->from('tbl_sub_category')->where('id',$sub_cat_id)->get()->row();
	if($que){
		$sub_cat_image=$que->sub_cat_image;
		if($sub_cat_image !=''){
			$image =base_url() . '/uploads/sub_category/'.$sub_cat_image;
		}else{
			$image= base_url() .'assets/img/035.jpg';
		}
	}else{
		$image= base_url() .'assets/img/035.jpg';
	}
}else{
	$image= base_url() .'assets/img/035.jpg';
}
?>

 
<form action="<?php echo base_url(); ?>search_filter" method="post">  
<section class="filter_option" style="background-image:url('<?php echo $image;?>');background-repeat: no-repeat;background-size: 100% 100%; min-height: 300px; ">
	<div class="container-fluid">
		<div class="container marketplace-overlay">

		<div class="business_sec">
			<h5 class="business_sec_sub"><?php //echo $cat_info->category_name; ?></h5>

		</div>	
		

		<h4 class="business_sec_sub_filter">Filtering Options</h4>

 




  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_price_range">
        <option value="">Price Range</option>
        <option value="50" <?php if($price_range== 50){echo 'selected="selected"';}?>>Above €50</option>
        <option value="100" <?php if($price_range== 100){echo 'selected="selected"';}?> >Above €100</option>
        <option value="500" <?php if($price_range== 500){echo 'selected="selected"';}?> >Above €500</option>
        <option value="1000" <?php if($price_range== 1000){echo 'selected="selected"';}?> >Above €1000</option>
      </select>
  </div>

  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_delivery_time">
        <option value="">Delivery Time</option>
        <?php foreach ($delivery_time as  $value) { ?>
        <option value="<?php echo $value['id']; ?>" <?php if($value['id']== $deliverytime){echo 'selected="selected"';}?> ><?php echo $value['time']; ?></option>
        <?php } ?>
      </select>
  </div>

  

  

   <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_location">
        <option value="">Location</option>
        <?php foreach ($country_list as  $value) { ?>
        <option value="<?php echo $value->id; ?>" <?php if($value->id== $location){echo 'selected="selected"';}?>><?php echo $value->name ; ?></option>
       <?php } ?>
      </select>
  </div>
  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_language">
        <option value="">Language</option>
        <?php  foreach ($language_list as  $lng) { ?>
			<option value="<?php echo $lng->id; ?>" <?php if($language == $lng->id){echo 'selected="selected"';}?> ><?php echo $lng->language; ?></option>
		<?php } ?>
      </select>
  </div>
  
   <?php 
	if(isset($search)){
		$searckdata =$search;
		
	}else{
		$searckdata ='';
	}
   ?>
    <input type="hidden" name="search" value="<?php echo $search;?>">

  <div class="form-group btn-group-filter">
     <button type="submit" class="btn btn-secondary btn-search-now">SEARCH NOW</button>
  </div>
</form> 


</div>  <!-- container -->
	</div>   <!--  container-fluid -->

</section>
<?php 
$i=0;
$cnt=1;
$count=count($market_place);
$class_count=1;
foreach ($market_place as  $value)
 { 
	$upload_proj_id =$value['id'];
     
	$query1=$this->db->query("SELECT count(id) as cnt,sum(com_rating) as com_rating, sum(rec_rating) as rec_rating , sum(qua_rating) as qua_rating FROM `tbl_review` where project_id = $upload_proj_id");
	
	$result1=$query1->row();
	$rr= $result1->cnt;
	
	if($rr !=0){		
		$rescount =$result1->cnt;
		$rating=round((($result1->com_rating + $result1->rec_rating + $result1->qua_rating) / 3) / $rescount,1);		
	}else{
		$rating = 0;
	}
 
        $query=$this->db->query('select price from tbl_upload_project_package where upload_proj_id = '.$value['id'].' and price !="" and price !=0 order by price ASC');
	$result=$query->result_array();
	//print_r($result[0]); 
	
	 if (count($result) > 0) {
            $minprice = $result[0]['price'];
        } else {
            $minprice = 0;
        }
  
        if($i%4 == 0){
       if($class_count == 1){
         $add_class='project_title';
         $add_class2='project_title_new';
       }else{
         $add_class='project_title_second_part';
         $add_class2='project_title_second';

       } 
?>
    <section class="<?php echo $add_class; ?>">
	  <div class="container-fluid">
	  	<div class="container">
		  <div class="row">
<?php }
?>
	             <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="gigBox" style="   ">
    <?php 
    $trimname = trim($value['title']);
    $title = str_replace(' ', '-', $trimname);
    ?>
                                <a href="<?php echo base_url(); ?>project_details/<?php echo base64_encode($value['id']); ?>/<?php echo $title; ?>" target="_blank">
                                    <div class="main_div_gig rounded pb-3">

                                        <div class="<?php echo $add_class2; ?>">
                                            <h2 class="pro_txt_title"> <?php echo $value['title']; ?></h2>

                                <?php
                                
                                if ($value['media']) {
                                    if ($value['media_type'] == 'image') {
                                        ?>
                                                    <img class="img-fluid_market" src="<?php echo ar($this->config->item('UPLOAD_PATH') . $value['media'], 255, 143, 'media_images'); ?>" width="" alt=""> 
                                                <?php } else { ?>
                                                    <img class="img-fluid_market" src="<?php echo base_url(); ?>uploads/category/<?php echo $value['cat_image']; ?>" alt="<?php echo $value['category_name']; ?>">
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <img class="img-fluid_market" src="<?php echo base_url(); ?>uploads/category/<?php echo $value['cat_image']; ?>" alt="<?php echo $value['category_name']; ?>">
                                            <?php } ?>


                                        </div><!-- pro title -->


                                        

                                        <div class="project_desc">
                                            <div class="p_desc_txt">
                                                <?php echo character_limiter(strip_tags($value['description']), 140); ?>
                                            </div>	
                                        </div>
                                        <div class="text-center mt5 mb5">
                                            <button type="button" class="btn font-weight-bold px-5">Starting at <span class="LrzXr kno-fv"></span> <?php echo $minprice; ?> €</button>
                                        </div>
                                    </div><!-- main-div -->
                                        
                                    <div class="media">
                                        <div class="profile_pic">
                                            <?php if ($value['profile_image']) {
                                                ?>
                                                <img src="<?php echo resize($this->config->item('PROFILE_IMG_PATH') . $value['profile_image'], 200, 112, 'profile_images'); ?>" alt="<?php echo $value['display_name'] ? $value['display_name'] : $value['username']; ?> "  height="100%" >
                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>assets/img/profile.png" alt="">
                                            <?php } ?>
                                        </div>
                                        <div class="media-body">
                                            <div class="john_txt"><?php echo $value['display_name'] ? $value['display_name'] : $value['username']; ?> </div>

                                            <div class="joined-date-txt">Joined (<?php echo date("Y", strtotime($value['created_date_time'])); ?>)</div>
                                            <div class="joined-star-images">
                                                <span class="fa fa-star <?php if ($rating >= 1) {
                                            echo "checked";
                                        } ?>"></span>
                                                <span class="fa fa-star <?php if ($rating >= 2) {
                                            echo "checked";
                                        } ?>"></span>
                                                <span class="fa fa-star <?php if ($rating >= 3) {
                                            echo "checked";
                                        } ?>"></span>
                                                <span class="fa fa-star <?php if ($rating >= 4) {
                                            echo "checked";
                                        } ?>"></span>
                                                <span class="fa fa-star <?php if ($rating >= 5) {
                                            echo "checked";
                                        } ?>"></span>

                                            </div>
                                                                                           <!-- <p class="john_sub_txt"><img src="<?php echo base_url(); ?>assets/img/details.png"></p>  -->       
                                        </div>
                                    </div>

                                </a>
                            </div> 
                        </div>
				
<?php
if($i%4==3 || $count == $cnt)
      { ?>

				</div>
		    </div>
		  </div> 
	</section> 
<?php }
?>

<?php 
$cnt++;
$i++;

if($class_count == 5)
{
	$class_count=0;
}
$class_count++;
}//foreach
?>


<div class="clearfix"></div>

<!-- <div class="bottom_space_marketing"></div> -->




<?php include ("footer.php"); ?>