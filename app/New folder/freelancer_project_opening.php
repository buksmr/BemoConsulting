<?php include ("header4.php"); ?>


<script src='<?php echo base_url(); ?>assets/js/select2.min.js' type='text/javascript'></script>
<link href='<?php echo base_url(); ?>assets/css/select2.min.css' rel='stylesheet' type='text/css'>
<section class="market_place">
	
	<div class="container-fluid">
		 <div class="container mkt_txt">
		 	
		 	<h2 class="pro_opening">Project Opening</h2>

		 </div>

	</div>
</section>
<?php 
///print_r($proj_opening_list);
//print_r($skills);
//$main_cat_id = $this->uri->segment(3); 
?>

<?php 
if(isset($sub_cat_id) && $sub_cat_id != NULL){
$que=$this->db->select("sub_cat_image_opening")->from('tbl_sub_category_opening')->where('id',$sub_cat_id)->get()->row();
 $sub_cat_image=$que->sub_cat_image_opening;
	if($sub_cat_image !=''){
		$image = base_url() .'/uploads/sub_category/'.$sub_cat_image;
	}else{
		$image= base_url() .'assets/img/035.jpg';
	}
}else{
	$image= base_url() .'assets/img/035.jpg';
}
?>

<section class="market_project_opening" style="background-image:url('<?php echo $image;?>');background-repeat: no-repeat;background-size: cover; min-height: 300px; ">
	<div class="container-fluid">
		<div class="container project_opening_overlays">
		
		<h4 class="filter_options">Marketplaces</h4>
        <form action="<?php echo base_url(); ?>freelancer_project_opening" method="post"> 
        <div class="row">
		<input type="hidden" name="text_main_cat_id" value="<?php echo $main_cat_id; ?>">
		<input type="hidden" name="searchnew" value="<?php echo $searckdata; ?>">
		
		 <?php if($main_cat_id){ ?>
		  
		  <div class="col-lg-3 col-md-4 col-sm-12">
		  	<div class="form-group">
          	<label class="skill">Sub Category</label> 
		      <select class="form-control sel1" id="text_sub_cat_id" name="text_sub_cat_id">
		        <option value="">Select</option>				
				<?php 
				$query=$this->db->query("SELECT * FROM `tbl_sub_category_opening` where category_id = $main_cat_id");			
				$subcat=$query->result_array();				
				if(count($subcat) > 0){
					foreach($subcat as $value ){ ?>				
						<option value="<?php echo $value['id'];?>" <?php if($value['id'] == $sub_cat_id){echo 'selected="selected"';}?>><?php echo $value['sub_cat_name_opening'];?></option>				
				<?php } } ?>		        
		      </select>   
		      </div>         
          </div> 
		  
		  <?php } ?>
		  
          <div class="col-lg-3 col-md-4 col-sm-12">
          	<div class="form-group">
          	<label class="skill">Required Profession</label> 
		      <select class="form-control sel1" id="select_skill" name="select_skill">
		        <option value="">Select</option>
				<?php if(count($skills) > 0){
					foreach($skills  as $value){ ?>				
						<option value="<?php echo $value['id'];?>" <?php if($value['id'] == $skill){echo 'selected="selected"';}?>><?php echo $value['cat_skill_name'];?></option>				
				<?php } } ?>
		        
		      </select>
		   </div>
            
          </div><!-- sm-3 -->
		  
		   <div class="col-lg-3 col-md-4 col-sm-12">
          	<div class="form-group">
          	<label class="skill">Tools</label> 
		      <select class="form-control sel1" id="select_tool" name="select_tool">
		         <option value="">Select</option> 
				<?php if(count($tools) > 0){
					foreach($tools  as $value){ ?>				
						<option value="<?php echo $value['id'];?>" <?php if($value['id'] == $tool){echo 'selected="selected"';}?>><?php echo $value['tool_name'];?></option>				
				<?php } } ?>
		        
		      </select>
		   </div>
            
          </div><!-- sm-3 -->
		  
		 
		  
		  
		  <?php if($main_cat_id ==1){ ?>
		  <div class="col-lg-3 col-md-4 col-sm-12">
		  	<div class="form-group">
          	<label class="skill">Document Type</label> 
		      <select class="form-control sel1" id="select_document_type" name="select_document_type">
		        <option value="">Select</option>				
				<?php 
				$query=$this->db->query("SELECT * FROM `tbl_document_type_opening`");			
				$result=$query->result_array();				
				if(count($result) > 0){
					foreach($result as $value ){ ?>				
						<option value="<?php echo $value['id'];?>" <?php if($value['id'] == $document_type){echo 'selected="selected"';}?>><?php echo $value['documant_type_name_opening'];?></option>				
				<?php } } ?>		        
		      </select>    
		      </div>        
          </div> 
		  
		  
		  <div class="col-lg-3 col-md-4 col-sm-12">
		  	<div class="form-group">
          	<label class="skill">Service Include</label> 
		      <select class="form-control sel1" id="select_service_include" name="select_service_include">
		        <option value="">Select</option>				
				<?php 
				$query1=$this->db->query("SELECT * FROM `tbl_service_include_opening`");			
				$servicedata=$query1->result_array();				
				if(count($servicedata) > 0){
					foreach($servicedata as $value1 ){ ?>				
						<option value="<?php echo $value1['id'];?>" <?php if($value1['id'] == $service){echo 'selected="selected"';}?>><?php echo $value1['servive_include_name_opening'];?></option>				
				<?php } } ?>		        
		      </select>   
		      </div>         
          </div> 
		  
		  
		  <?php } ?>
		  
		  
		  
		  <div class="col-lg-3 col-md-4 col-sm-12">
		  	<div class="form-group">
          	<label class="skill">Price Range</label> 
		      <select class="form-control sel1" id="select_price" name="select_price">
		         <option value="">Select</option>
		        <option value="0-0" <?php if($price =='0-0'){echo 'selected="selected"';}?>>€0</option>
		        <option value="1-5" <?php if($price =='1-5'){echo 'selected="selected"';}?>>€1-5</option>
		        <option value="5-20" <?php if($price =='5-20'){echo 'selected="selected"';}?>>€5-20</option>
		        <option value="20-50" <?php if($price =='20-50'){echo 'selected="selected"';}?>>€20-50</option>
		        <option value="50-100" <?php if($price =='50-100'){echo 'selected="selected"';}?>>€50-100</option>
		        <option value="100-150" <?php if($price =='100-150'){echo 'selected="selected"';}?>>€100-150</option>
		        <option value="150-200" <?php if($price =='150-200'){echo 'selected="selected"';}?>>€150-200</option>
		        <option value="200-300" <?php if($price =='200-300'){echo 'selected="selected"';}?>>€200-300</option>
		        <option value="300-400" <?php if($price =='300-400'){echo 'selected="selected"';}?>>€300-400</option>
		        <option value="400-500" <?php if($price =='400-500'){echo 'selected="selected"';}?>>€400-500</option>
		        <option value="500-500" <?php if($price =='500-500'){echo 'selected="selected"';}?>>€500 and above</option>
		      </select>
		  </div>

          </div> <!--sm-3 -->

		  <div class="col-lg-3 col-md-4 col-sm-12">
          	<label class="skill">Delivery Time</label> 
		      <select class="form-control sel1" id="select_delivery_time" name="select_delivery_time">
		        
		        <option value="">Select</option>
		        <option value="1" <?php if($select_delivery_time == 1){echo 'selected="selected"';} ?> >Up to 12 hours</option>
				<option value="2" <?php if($select_delivery_time == 2){echo 'selected="selected"';} ?>>Up to 24 hours</option>
				<option value="3" <?php if($select_delivery_time == 3){echo 'selected="selected"';} ?>>Up to 3 days</option>
				<option value="4" <?php if($select_delivery_time == 4){echo 'selected="selected"';} ?>>Up to 7 days</option>
				<option value="5" <?php if($select_delivery_time == 5){echo 'selected="selected"';} ?>>Up to 2 weeks</option>
				<option value="6" <?php if($select_delivery_time == 6){echo 'selected="selected"';} ?>>Up to 4 weeks</option>
				<option value="7" <?php if($select_delivery_time == 7){echo 'selected="selected"';} ?>>Longer than a week</option>
				<option value="8" <?php if($select_delivery_time == 8){echo 'selected="selected"';} ?>>4 weeks and above</option>
				<option value="9" <?php if($select_delivery_time == 9){echo 'selected="selected"';} ?>>Unspecified</option>
		      </select>
			 
          </div> <!--sm-3 -->

          
			<div class="col-lg-3 col-md-4 col-sm-12">
			<div class="form-group">	
			 <label class="skill">Location</label>
			  <select class="form-control font-mark-form sel1" id="select_location" name="select_location">
				<option value="">Location</option>
				<?php foreach ($country_list as  $value) { ?>
				<option value="<?php echo $value->id; ?>" <?php if($value->id == $location){echo 'selected="selected"';}?>><?php echo $value->name; ?></option>
			   <?php } ?>
			  </select>
			</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="form-group">
          	 <label class="skill">Language</label>
		      <select class="form-control font-mark-form sel1" id="select_language" name="select_language">
				<option value="">Select</option>
                        <?php  foreach ($language_list as  $lng) { ?>
							<option value="<?php echo $lng->id; ?>"><?php echo $lng->language; ?></option>
						<?php } ?>
			  </select>
               </div> 
			</div><!-- sm-3 -->
			 
		  
		 
		  
				<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="form-group">	
	          	 <label class="skill">Sort by</label>
			      <select class="form-control sel1" id="select_sortby" name="select_sortby">
			        <option value="">Default</option>
			        <option value="1">Rating</option>
			        <option value="2">Best Selling</option>
			        <option value="3">Newest project</option>
			      </select>
                </div>
				</div><!--sm-3-->
				
			<div class="col-lg-3 col-md-4 col-sm-12">
			 <div class="form-group">	
          	 <label class="skill">Seller Status</label>
		      <select class="form-control sel1" id="select_status" name="select_status">
		        <option value="">Select</option>
		        <option value="1">Online</option>
		        <option value="2">Idle</option>
		        <option value="3">Offline</option>
		      </select>
             </div>
          </div> <!--sm-3 -->
			 
		<div class="col-lg-3 col-md-4 col-sm-12">
                        <label class="skill d-lg-none d-block">&nbsp;</label>
			<button type="submit" name="submit" class="btn btn-secondary btn-search-now">SEARCH NOW</button>
		</div>

  
  </div> <!-- row -->
	
 </form>

		  <div class="row project_opening_row">

		  	 <!--<div class="col-sm-3">
	          	 <label class="skill">Specification</label>
			      <select class="form-control" id="sel12" name="sellist12">
			        <option>Select</option>
			        
			      </select>

             </div> sm-3 -->



		  </div><!-- 2nd row -->
  

       </div>  <!-- container -->
	</div>   <!--  container-fluid -->

</section>


<?php //print_r($proj_opening_list);?>

<section class="pro_title_desc"> 
    <div class="container">
        <div class="proj_open_listing">

            <?php
            $delivery_time_arr = ['1' => 'Up to 12 hours', '2' => 'Up to 24 hours', '3' => 'Up to 3 days', '4' => 'Up to 7 days', '5' => 'Up to 2 weeks', '6' => 'Up to 4 weeks', '7' => 'Longer than a week', '8' => '4 weeks and above', '9' => 'Unspecified'];

            foreach ($proj_opening_list as $value) {
                $tags = [];
                $skills = [];

                if ($value['skill_id']) {
                    $skill_ids = explode(',', $value['skill_id']);
                    $skills = $this->Front_model->getSkillsByIds($skill_ids, $value['category'], 'cat_skill_name');

                    if ($skills) {
                        foreach ($skills as $skill_dt) {
                            $tags[] = $skill_dt['cat_skill_name'];
                        }
                    }
                }

                $date = $value['expiration_date_proj_opening'];


                $duration = '';
                if ($date != '') {
                    $date11 = strtotime($date);

                    $rrr = date('d-m-Y', $date11);

                    $diwali = strtotime($rrr);
                    $current = strtotime('now');
                    $diffference = ($diwali - $current);
                    $days = floor($diffference / (60 * 60 * 24));
                    $week = floor($diffference / (60 * 60 * 24) / 7);
                    $hours = floor($diffference % ( 60 * 60 * 24) / ( 60 * 60));
                    $min = floor($diffference % ( 60 * 60 ) / (60));

                    $duration = ($week != 0 ? $week . ' Week' : ($hours != 0 ? ($hours == 1 ? '1 Hour' : $hours . ' :' . $min . ' min') : ($min != 0 ? '00:' . $min . ' Min' : ($days != 0 ? ($days == 1 ? '1 Day' : $days . ' Days') : ''))) );
                } else {
                    $week = "";
                    $days = 100;
                    $duration = '100 Days';
                }
                if ($days > 0) {
                    ?>

                    <?php
                    $trimname = trim($value['title']);
                    $title = str_replace(' ', '-', $trimname);
                    ?>
                    <a href="<?php echo base_url(); ?>freelancebit_project_opening_details/<?php echo base64_encode($value['id']); ?>/<?php echo $title; ?>">

                        <div class="proj_open_desc">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-12"> 
                                    <?php
                                    if ($value['media']) {
                                        ?>
                                        <img class="cat_img" src="<?php echo ar($this->config->item('UPLOAD_PATH') . $value['media'], 280, 190, 'cat_images'); ?>"/> 
                                    <?php } else { ?>
                                        <img class="cat_img" src="<?php echo ar($this->config->item('UPLOAD_PATH') . 'category/' . $value['cat_image'], 280, 190, 'cat_images'); ?>"/>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-lg-5 col-md-8 col-sm-12">
                                    <h2 class="pro_title"><?php echo $value['title']; ?> </h2>
                                    <div class="p_desc_txt"> <?php echo character_limiter(strip_tags($value['describe_proj']), 250); ?>
                                    </div>
                                    <div class="tags">
                                        <i class="fa fa-tag float-left" aria-hidden="true"></i>
                                        <ul>  
                                            <?php foreach ($tags as $tag) { ?>
                                                <li><?php echo $tag; ?></li>                                                                                                                                            
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6 other_info">
                                    <ul style="list-style:none;">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Location:<?php echo $value['country_name'] != '' ? $value['country_name'] : 'Global'; ?>
                                        </li>                                        
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>Duration:<?php echo $delivery_time_arr[$value['select_delivery_time']]; ?>                                             
                                        </li>
                                        <li><i class="fa fa-eur" aria-hidden="true"></i>&nbsp;&nbsp;Budget:<?php echo $value['budget']; ?>
                                        </li>
                                    </ul>                                   
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6 media_info">
                                    <div class="media">
                                        <div class="profile_pic">
                                            <?php if ($value['profile_image']) {
                                                ?>
                                                <img src="<?php echo resize($this->config->item('PROFILE_IMG_PATH') . $value['profile_image'], 100, 75, 'profile_images'); ?>" alt="<?php echo $value['display_name'] ? $value['display_name'] : $value['username']; ?>"  height="100%" >
                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>assets/img/profile-icon12.png" alt="<?php echo $value['display_name'] ? $value['display_name'] : $value['username']; ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="media-body">
                                            <div class="john_txt"> <?php echo $value['display_name']; ?> </div>
                                            <div class="joined-date-txt">Joined (<?php echo date("Y", strtotime($value['created_date_time'])); ?>)</div>                                            
                                        </div>
                                    </div>


                                </div>

                            </div><!-- row 1 -->
                        </div>
                    </a>
                    <?php
                }
            }
            ?>

        </div>
    </div>


</section>

<?php include ("footer.php"); ?>

<script type="text/javascript">

	$(document).ready(function(){
	
	$("#select_tool, #select_skill, #select_price, #select_delivery_time, #select_location, #select_language, #select_sortby, #select_status").select2();

	});


</script>


