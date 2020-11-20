<?php include ("header3.php"); ?>





<section class="market_place">
	
	<div class="container-fluid">
		 <div class="container mkt_txt">		 	
		 	<h2>Marketplace</h2>
		 </div>

	</div>
</section>

<?php 
if($sub_cat_id){
$que=$this->db->select("sub_cat_image")->from('tbl_sub_category')->where('id',$sub_cat_id)->get()->row();
 $sub_cat_image=$que->sub_cat_image;
	if($sub_cat_image !=''){
		$image = base_url() .'/uploads/sub_category/'.$sub_cat_image;
	}else{
		$image= base_url() .'assets/img/035.jpg';
	}
}else{
	$image= base_url() .'assets/img/035.jpg';
}
?>

 <form action="<?php echo base_url(); ?>sort_upload_project_by_filter" method="post">  
 
<section class="filter_option" style="background-image:url('<?php echo $image;?>');background-repeat: no-repeat;background-size: cover; min-height: 300px; " >

	<div class="container-fluid">   
		<div class="container marketplace-overlay">

		<div class="business_sec">
			<h5 class="business_sec_sub_filter"><?php echo $cat_info['category_name']; ?></h5>

		</div>	
		<div class="form-group btn-group-filter">
			<select class="form-control font-mark-form sel-trasations" id="text_sub_cat_id" name="text_sub_cat_id" >
			<option value="">Select</option>
			<?php if(count($subcatlist) > 0){
				foreach($subcatlist as $data){
						$subcat_id =$data['id'];
						$query_project1=$this->db->select("count(id) as projectcnt")->from('tbl_upload_project')->where('subcat_id',$subcat_id)->where('is_delete',0)->get();
						$project1=$query_project1->row();
						$projectcnt1 = $project1->projectcnt;


					?>
					<option value="<?php echo $data['id'];?>" data-alias="<?php echo $data['sub_cat_alias'];?>" <?php if($data['id'] == $sub_cat_id){ echo 'selected="selected"';}?>><?php echo $data['sub_cat_name'];?> (<?php echo $projectcnt1; ?>) </option>
					
			<?php } } ?>
			
		  </select>
		</div>

		<h4 class="business_sec_sub_filter">Filtering Options</h4>


<?php  
		if(isset($specification_list)){
			$res= count($specification_list);
		}else{
			$res=0;
		}
		?>

<input type="hidden" name="text_main_cat_id" id="text_main_cat_id" value="<?php echo $main_cat_id; ?>">
<input type="hidden" name="text_main_cat_alias" id="text_main_cat_alias" value="<?php echo $cat_info['category_alias']; ?>">
<!--<input type="hidden" name="text_sub_cat_id" value="<?php echo $sub_cat_id; ?>">-->


  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_price_range">
        <option value="">Price Range</option>
		<option value="1">€0</option>
		<option value="2">€1-5</option>
		<option value="3">€5-20</option>
		<option value="4">€20-50</option>
		<option value="5">€50-100</option>
		<option value="6">€100-150</option>
		<option value="7">€150-200</option>
		<option value="8">€200-300</option>
		<option value="9">€300-400</option>
		<option value="10">€400-500</option>
		<option value="11">€500 and above</option>
      </select>
  </div>

  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_delivery_time">
        <option value="">Delivery Time</option>
        <?php foreach ($delivery_time as  $value) { ?>
        <option value="<?php echo $value['id']; ?>"><?php echo $value['time']; ?></option>
        <?php } ?>
      </select>
  </div>

					  <div class="form-group btn-group-filter" id="selectspecification">
						  <select class="form-control font-mark-form sel1" id="select_specification" name="select_specification">
							<option value="">Specification</option>
						   <?php foreach ($specification_list as  $value) { ?>
							<option value="<?php echo $value['id']; ?>"><?php echo $value['specification_name']; ?></option>
						   <?php } ?>
						  </select>
					  </div>
					  
					  <div class="form-group btn-group-filter" id="selectpresentation">
						  <select class="form-control font-mark-form sel1" id="select_presentation" name="select_presentation">
							<option value="">Presentation</option>
						   <?php foreach ($presentation_list as  $plist) { ?>
							<option value="<?php echo $plist['id']; ?>"><?php echo $plist['presentation_name']; ?></option>
						   <?php } ?>
						  </select>
					  </div>
					  
					  <div class="form-group btn-group-filter" id="selectstyle">
						  <select class="form-control font-mark-form sel1" id="select_style" name="select_style">
							<option value="">Style</option>
						   <?php foreach ($style_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['style_name']; ?></option>
						   <?php } ?>
						  </select>
					  </div>
  
					<div class="form-group btn-group-filter" id="selectgender">
						<select class="form-control font-mark-form sel1"  name="select_gender" id="select_gender">
						 <option value="">Gender</option>
							<?php foreach ($gender_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['gender_name']; ?></option>
						   <?php } ?>
						</select>
					</div> 
	
					<div class="form-group btn-group-filter" id="selectpitch">
						<select class="form-control font-mark-form sel1"  name="select_pitch" id="select_pitch">
						 <option value="">Pitch</option>
						 <?php foreach ($pitch_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['pitch_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectgenre">
						<select class="form-control font-mark-form sel1"  name="select_genre" id="select_genre">
						 <option value="">Genre</option>
						 <?php foreach ($genre_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['genre_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectinstrument">
						<select class="form-control font-mark-form sel1"  name="select_instrument" id="select_instrument">
						 <option value="">Instrument</option>
						 <?php foreach ($instrument_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['instrument_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectsoundgenre">
						<select class="form-control font-mark-form sel1"  name="select_sound_genre" id="select_sound_genre">
						 <option value="">Sound Genre</option>
						 <?php foreach ($soundgenre_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['sound_genre_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectsoundeffectfor">
						<select class="form-control font-mark-form sel1"  name="select_sound_effect_for" id="select_sound_effect_for">
						 <option value="">Sound Effect For</option>
						 <?php foreach ($soundeffectfor_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['sound_effect_for_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectplatform">
						
						<select class="form-control font-mark-form sel1"  name="select_platform" id="select_platform">
						 <option value="">Platform</option>
						 <?php foreach ($platform_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['platform_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectcodelanguage">						
						<select class="form-control font-mark-form sel1"  name="select_code_language" id="select_code_language">
						 <option value="">Code Language</option>
						 <?php foreach ($codelanguage_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['code_language_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectoperatingsystem">
						
						<select class="form-control font-mark-form sel1"  name="select_operating_system" id="select_operating_system">
						 <option value="">Operating System</option>
						 <?php foreach ($operatingsystem_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['operating_system_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selecttool">
						
						<select class="form-control font-mark-form sel1"  name="select_tool" id="select_tool">
						 <option value="">Tool</option>
						 <?php foreach ($tool_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['tool_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectserviceinclude">
						
						<select class="form-control font-mark-form sel1"  name="select_service_include" id="select_service_include">
						 <option value="">Service Include</option>
						 <?php foreach ($serviceinclude_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['service_include_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selecttypeofvideo">
						<select class="form-control font-mark-form sel1"  name="select_type_of_video" id="select_type_of_video">
						 <option value="">Type Of Video</option>
						 <?php foreach ($typeofvideo_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['type_of_video_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectagerange">
						
						<select class="form-control font-mark-form sel1"  name="select_age_range" id="select_age_range">
						 <option value="">Age Range</option>
						 <?php foreach ($ageranger_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['age_range_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selecttext">
						
						<select class="form-control font-mark-form sel1"  name="select_text" id="select_text">
						 <option value="">Text</option>
						 <?php foreach ($text_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['text_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selecttopic">
						
						<select class="form-control font-mark-form sel1"  name="select_topic" id="select_topic">
						 <option value="">Topic</option>
						 <?php foreach ($topic_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['topic_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selecttone">
						
						<select class="form-control font-mark-form sel1"  name="select_tone" id="select_tone">
						 <option value="">Tone</option>
						 <?php foreach ($tone_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['tone_name']; ?></option>
						   <?php } ?>
						</select>
					</div>
					
					<div class="form-group btn-group-filter" id="selectarticletype">
						
						<select class="form-control font-mark-form sel1"  name="select_article_type" id="select_article_type">
						 <option value="">Article Type</option>
						 <?php foreach ($articletype_list as  $slist) { ?>
							<option value="<?php echo $slist['id']; ?>"><?php echo $slist['article_type_name']; ?></option>
						   <?php } ?>
						</select>
					</div>

  

  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_location">
        <option value="">Location</option>
        <?php foreach ($country_list as  $value) { ?>
        <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
       <?php } ?>
      </select>
  </div>
  
  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_language">
	  
        <option value="">Language</option>
        <?php  foreach ($language_list as  $lng) { ?>
			<option value="<?php echo $lng->id; ?>"><?php echo $lng->language; ?></option>
		<?php } ?>
      </select>
  </div>
  

   <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_seller_status">
        <option>Seller Status</option>
        <option>Online</option>
        <option>idle</option>
        <option>Offline</option>
      </select>
  </div>
  
  <div class="form-group btn-group-filter">
      <select class="form-control font-mark-form" id="sel1" name="select_sort_by">
        <option>Sort By</option>
        <option>Default</option>
        <option>Ratings</option>
        <option>Best selling</option>
        <option>Newest gigs</option>
      </select>
  </div>

   

  <div class="form-group btn-group-filter">
     <button type="submit" class="btn btn-secondary btn-search-now">SEARCH NOW</button>
  </div>
</form> 


</div>  <!-- container -->
	</div>   <!--  container-fluid -->

</section>
<?php //print_r($market_place[1]);?>
     <section class="project_title">
	  <div class="container-fluid">
	  	<div class="container">
		  <div class="row">
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
	
	$query=$this->db->query('select price from tbl_upload_project_package where upload_proj_id = '.$value['id'].' and price !="" and price !=0 order by price ASC ');
	$result=$query->result_array();
	//print_r($result);
	if(count($result) > 0){
		$minprice =$result[0]['price'];
	}else{
		$minprice =0;
	}
	 
	
   if($i%4 == 0)
    {
       if($class_count == 1){
         $add_class='project_title';
         $add_class2='project_title_new';

       }else{
         $add_class='project_title_second_part';
         $add_class2='project_title_second';

       } 
     

?>
    
<?php }
?>
	            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
                                                    <img class="img-fluid_market" src="<?php echo base_url(); ?>uploads/category/<?php echo $cat_info['cat_image']; ?>" alt="<?php echo $cat_info['category_name']; ?>">
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <img class="img-fluid_market" src="<?php echo base_url(); ?>uploads/category/<?php echo $cat_info['cat_image']; ?>" alt="<?php echo $cat_info['category_name']; ?>">
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
   </div>
            </div>
        </div> 
    </section> 	

<div class="clearfix"></div>

<!-- <div class="bottom_space_marketing"></div> -->




<?php include ("footer.php"); ?>



</script>

<script type="text/javascript">
$(document).ready(function(){
	
   var editsubcatid = '<?php echo $sub_cat_id;?>';
   //alert(editsubcatid);
	
	var presentation_array = ['14', '37'];		
	var style_array = ['35'];	
	var gender_array = ['42','46','69'];	
	var pitch_array = ['42'];	
	var sound_genre_array = ['43'];	
	var genre_array = ['44','45'];			
	var instrument_array = ['46'];	
	var soundeffect_array = ['47'];	
	var platform_array = ['50','52'];	
	var code_language_array = ['51','54'];	
	var os_array = ['72'];	
	var tool_array = ['57'];	
	var service_array = ['7','8','64','68','4','5','6'];	
	var typeofvideo_array = ['66'];	
	var agerange_array = ['69'];	
	var text_array = ['1','2'];	
	var topic_array = ['6'];	
	var tone_array = ['6'];	
	var article_array = ['6'];
	
	if (jQuery.inArray(editsubcatid, presentation_array)!='-1') {
        $("#selectpresentation").show();   		
    }else{
		$("#selectpresentation").hide();
	}

	if (jQuery.inArray(editsubcatid, style_array)!='-1') {
        $("#selectstyle").show();   		
    }else{
		$("#selectstyle").hide();
	}
	
	if (jQuery.inArray(editsubcatid, pitch_array)!='-1') {
        $("#selectpitch").show();   		
    }else{
		$("#selectpitch").hide();
	}
	
	
	if (jQuery.inArray(editsubcatid, gender_array)!='-1') {
        $("#selectgender").show();   		
    }else{
		$("#selectgender").hide();
	}
	
	if (jQuery.inArray(editsubcatid, genre_array)!='-1') {
        $("#selectgenre").show();   		
    }else{
		$("#selectgenre").hide();
	}
	
	if (jQuery.inArray(editsubcatid, sound_genre_array)!='-1') {
        $("#selectsoundgenre").show();   		
    }else{
		$("#selectsoundgenre").hide();
	}
	
	if (jQuery.inArray(editsubcatid, instrument_array)!='-1') {
        $("#selectinstrument").show();   		
    }else{
		$("#selectinstrument").hide();
	}
	
	if (jQuery.inArray(editsubcatid, soundeffect_array)!='-1') {
        $("#selectsoundeffectfor").show();   		
    }else{
		$("#selectsoundeffectfor").hide();
	}
	
	if (jQuery.inArray(editsubcatid, platform_array)!='-1') {
        $("#selectplatform").show();   		
    }else{
		$("#selectplatform").hide();
	}
	
	if (jQuery.inArray(editsubcatid, code_language_array)!='-1') {
        $("#selectcodelanguage").show();   		
    }else{
		$("#selectcodelanguage").hide();
	}
	
	if (jQuery.inArray(editsubcatid, os_array)!='-1') {
        $("#selectoperatingsystem").show();   		
    }else{
		$("#selectoperatingsystem").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tool_array)!='-1') {
        $("#selecttool").show();   		
    }else{
		$("#selecttool").hide();
	}
	
	if (jQuery.inArray(editsubcatid, service_array)!='-1') {
        $("#selectserviceinclude").show();   		
    }else{
		$("#selectserviceinclude").hide();
	}
	
	if (jQuery.inArray(editsubcatid, typeofvideo_array)!='-1') {
        $("#selecttypeofvideo").show();   		
    }else{
		$("#selecttypeofvideo").hide();
	}
	
	if (jQuery.inArray(editsubcatid, agerange_array)!='-1') {
        $("#selectagerange").show();   		
    }else{
		$("#selectagerange").hide();
	}
	
	if (jQuery.inArray(editsubcatid, text_array)!='-1') {
        $("#selecttext").show();   		
    }else{
		$("#selecttext").hide();
	}
	if (jQuery.inArray(editsubcatid, topic_array)!='-1') {
        $("#selecttopic").show();   		
    }else{
		$("#selecttopic").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tone_array)!='-1') {
        $("#selecttone").show();   		
    }else{
		$("#selecttone").hide();
	}
	
	if (jQuery.inArray(editsubcatid, tone_array)!='-1') {
        $("#selectarticletype").show();   		
    }else{
		$("#selectarticletype").hide();
	}
	
   
   var specid = '<?php echo $res;?>';
   if(specid !=0){
		$("#selectspecification").show();
   }else{
		$("#selectspecification").hide();
   } 
   
   
   

     $('#text_sub_cat_id').on("change",function () {
        var sub_categoryId = $(this).find('option:selected').val();
        var cat_id = $("#text_main_cat_id").val();
		
        var cat_alias = $("#text_main_cat_alias").val();
        var sub_categoryAlias = $(this).find('option:selected').data('alias');
		
		//var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/++[++^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

			
		//var encodedcat_id = Base64.encode(cat_id);
		//var encodedsub_categoryId = Base64.encode(sub_categoryId);
			
        
		window.location.href="<?php echo base_url(); ?>marketplace/"+cat_alias+"/"+sub_categoryAlias;
		
		
	
		$("#select_specification").html('');
		$("#select_presentation").html('');
		$("#select_style").html('');
		$("#select_pitch").html('');
		$("#select_gender").html('');
		$("#select_genre").html('');
		$("#select_sound_genre").html('');
		$("#select_instrument").html('');
		$("#select_sound_effect_for").html('');
		$("#select_platform").hide();
		$("#select_code_language").html('');
		$("#select_operating_system").html('');
		$("#select_tool").html('');
		$("#select_service_include").html('');
		$("#select_type_of_video").html('');
		$("#select_age_range").html('');
		$("#select_text").html('');
		$("#select_topic").html('');
		$("#select_tone").html('');
		$("#select_article_type").html('');
		
		$("#selectspecification").hide();
		$("#selectpresentation").hide();
		$("#selectstyle").hide();
		$("#selectpitch").hide();
		$("#selectgender").hide();
		$("#selectgenre").hide();
		$("#selectsoundgenre").hide();
		$("#selectinstrument").hide();
		$("#selectsoundeffectfor").hide();
		$("#selectplatform").hide();
		$("#selectcodelanguage").hide();
		$("#selectoperatingsystem").hide();
		$("#selecttool").hide();
		$("#selectserviceinclude").hide();
		$("#selecttypeofvideo").hide();
		$("#selectagerange").hide();
		$("#selecttext").hide();
		$("#selecttopic").hide();
		$("#selecttone").hide();
		$("#selectarticletype").hide();		

        $.ajax({
            url: "<?php echo base_url(); ?>Front/get_specification",
            type: "POST",
            data: {sub_categoryId:sub_categoryId},
            success: function (response) {
				if(response != 0){
					console.log(response);
					$("#select_specification").html(response);
					$("#selectspecification").show();
				}
            },
        });
		
		var presentation_array = ['14', '37'];
		if (jQuery.inArray(sub_categoryId, presentation_array)!='-1') {
            $("#select_presentation").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_presentation",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					if(response != 0){
						$("#select_presentation").html(response);
						$("#selectpresentation").show();
					}
				},
			});			
        } 
		
		
		var style_array = ['35'];
		if (jQuery.inArray(sub_categoryId, style_array)!='-1') {
			 $("#select_style").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_style",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_style").html(response);
					$("#selectstyle").show();
				},
			});
		}
		
		
		var gender_array = ['42','46','69'];
		if (jQuery.inArray(sub_categoryId, gender_array)!='-1') {
			 $("#select_gender").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_gender",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_gender").html(response);
					$("#selectgender").show();
				},
			});
		}
		
		var pitch_array = ['42'];
		if (jQuery.inArray(sub_categoryId, pitch_array)!='-1') {
			 $("#select_pitch").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_pitch",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_pitch").html(response);
					$("#selectpitch").show();
				},
			});
		}
		
		var sound_genre_array = ['43'];
		if (jQuery.inArray(sub_categoryId, sound_genre_array)!='-1') {
			 $("#select_sound_genre").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_sound_genre",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_sound_genre").html(response);
					$("#selectsoundgenre").show();
				},
			});
		}
		
		var genre_array = ['44','45'];
		if (jQuery.inArray(sub_categoryId, genre_array)!='-1') {
			 $("#select_genre").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_genre",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_genre").html(response);
					$("#selectgenre").show();
				},
			});
		}
		
		var instrument_array = ['46'];
		if (jQuery.inArray(sub_categoryId, instrument_array)!='-1') {
			 $("#select_instrument").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_instrument",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_instrument").html(response);
					$("#selectinstrument").show();
				},
			});
		}
		
		var soundeffect_array = ['47'];
		if (jQuery.inArray(sub_categoryId, soundeffect_array)!='-1') {
			 $("#select_sound_effect_for").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_sound_effect_for",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_sound_effect_for").html(response);
					$("#selectsoundeffectfor").show();
				},
			});
		}
		
		var platform_array = ['50','52'];
		if (jQuery.inArray(sub_categoryId, platform_array)!='-1') {
			 $("#select_platform").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_platform",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_platform").html(response);
					$("#selectplatform").show();
				},
			});
		}
		
		
		var code_language_array = ['51','54'];
		if (jQuery.inArray(sub_categoryId, code_language_array)!='-1') {
			 $("#select_code_language").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_code_language",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_code_language").html(response);
					$("#selectcodelanguage").show();
				},
			});
		}
		
		
		var os_array = ['72'];
		if (jQuery.inArray(sub_categoryId, os_array)!='-1') { 
		 $("#select_operating_system").html('');
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_opearating_system",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_operating_system").html(response);
					$("#selectoperatingsystem").show();
				},
			});
		}
		
		var tool_array = ['57'];
		if (jQuery.inArray(sub_categoryId, tool_array)!='-1') {
			$("#select_tool").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_tool",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_tool").html(response);
					$("#selecttool").show();
				},
			});
		}
		
		var service_array = ['7','8','64','68','4','5','6'];
		if (jQuery.inArray(sub_categoryId, service_array)!='-1') {
			$("#select_service_include").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_service_include",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_service_include").html(response);
					$("#selectserviceinclude").show();
				},
			});
		}
		
		var typeofvideo_array = ['66'];
		if (jQuery.inArray(sub_categoryId, typeofvideo_array)!='-1') {
			$("#select_type_of_video").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_type_of_video",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_type_of_video").html(response);
					$("#selecttypeofvideo").show();
				},
			});
		}
		
		
		var agerange_array = ['69'];
		if (jQuery.inArray(sub_categoryId, agerange_array)!='-1') {
			$("#select_age_range").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_age_range",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_age_range").html(response);
					$("#selectagerange").show();
				},
			});
		}
		
		var text_array = ['1','2'];
		if (jQuery.inArray(sub_categoryId, text_array)!='-1') {
			$("#select_text").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_text",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_text").html(response);
					$("#selecttext").show();
				},
			});
		}
		
		var topic_array = ['6'];
		if (jQuery.inArray(sub_categoryId, topic_array)!='-1') {
			$("#select_topic").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_topic",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_topic").html(response);
					$("#selecttopic").show();
				},
			});
		}
		
		var tone_array = ['6'];
		if (jQuery.inArray(sub_categoryId, topic_array)!='-1') {
			$("#select_tone").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_tone",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_tone").html(response);
					$("#selecttone").show();
				},
			});
		}
		
		var article_array = ['6'];
		if (jQuery.inArray(sub_categoryId, article_array)!='-1') {
			$("#select_article_type").html();
			$.ajax({
				url: "<?php echo base_url(); ?>Front/get_article_type",
				type: "POST",
				data: {sub_categoryId:sub_categoryId},
				success: function (response) {
					$("#select_article_type").html(response);
					$("#selectarticletype").show();
				},
			});
		}
    });  



});

</script>