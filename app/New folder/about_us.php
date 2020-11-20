<?php include ("header3.php"); ?>



<?php //print_r($list1);?>

<section class="about_page">  
   <div class="container-fluid">
     <div class="container">
      <h2 class="meet_freelancebit">Meet the Freelancebit Team</h2>
       
       <div class="row">

	    <?php if (count($list1) > 0){ 
		foreach($list1 as $listdata){ 
			$teamid1 = $listdata['id'];
			$team1= array();
			$team1=$this->Front_model->get_team_list($teamid1);
		?>
				<div class="col-sm-3">           
				   <div class="card card-main-founder">
				   	<div class="founder-sections">
				   <img data-toggle="modal" data-target="#myModal<?php echo $listdata['id']?>"
				   class="card-img-top card-avatar-images" src="<?php echo base_url(); ?>uploads/aboutmain/<?php echo $listdata['image']?>" alt="Card image" style="width:120px;">
				   </div> <!-- founder-sections     -->
			
					<div class="card-body inner_founder">
					
						<h3 class="sup_txt_Founder"><?php echo $listdata['title']?></h3>
					  <div class="sub_txt_Founder"><?php echo $listdata['description']?> </div>
					</div>     
					</div>  <!-- card --> 
				</div><!-- sm-3 -->
		
				<div class="modal" id="myModal<?php echo $listdata['id']?>">
				  <div class="modal-dialog modal-sub-dialog-website">
					<div class="modal-content modal_sub_content">

					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title text-center meet_role1_page">Meet Us
                           <br>
                           <p class="meet_role3_page"><?php echo $listdata['title']?>
                           	
                           </p>
                           <div class="sub_txt_profile_desc"><?php echo $listdata['description']?> </div> 
						</h4>

						<!--<h5 class="modal-title meet_role3_page"><?php echo $listdata['title']?></h5>-->
					
					   <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					
					  </div>

					  <!-- Modal body -->
					  <div class="modal-body">
				   
						<div class="container">
						 <div class="row admin_row_sub">
							<?php if(count($team1) > 0){
							 foreach($team1 as $teamdata1){ ?>
								  <div class="col-sm-3">
								   <div class="meet_us_image">
									  <img data-toggle="modal" data-target="#myModalimages<?php echo $teamdata1['teamid'];?>" 
									  src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata1['teamimage'];?>" style="width:120px;">
									<h6 class="sandy_txt"><?php echo $teamdata1['name'];?></h6>								   
								   </div> <!-- meet us page -->								
								</div> <!-- sm-3 -->

								<!-- modal buttons -->
								<div class="modal" id="myModalimages<?php echo $teamdata1['teamid'];?>">
								  <div class="modal-dialog modal-sub-dialog-us-team-member">
									<div class="modal-content modal_sub_content">

									  <!-- Modal Header -->
									  <div class="modal-header">
										<h4 class="modal-title abt_modal_txt"><?php echo $teamdata1['name'];?><br>
											<span class="abt-modals-desc-txtsdesc"><?php echo $teamdata1['designation'];?>
												
											</span>
										</h4>


										<!--<h5 class=" abt_modal_designation_txt"><?php echo $teamdata1['designation'];?></h5>-->
									   
										<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
									
									  </div>

									  <!-- Modal body -->
									  <div class="modal-body modal-body-about-information">
										  <div class="container">
											<div class="row">
											   <div class="col-md-3">
												  <div class="Leonard_img">
												  <img 
												   src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata1['teamimage'];?>" style="width: 143px;">
												  </div> 
											   </div>
											   <div class="col-md-9">
													<h4><?php echo $teamdata1['desctitle'];?></h4>
													<div class="lorem_life_txt"><?php echo $teamdata1['team_description'];?>
													</div>

											   </div>
											</div>  <!-- row -->
										  </div> <!-- container -->
									   </div>  <!-- modal body -->
									   
									  </div>
									  <!-- Modal footer -->
									  <div class="modal-footer modal-about-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									  </div>

									</div>
								  </div>
								 <!-- modal third part -->


								
							<?php } }?>
							
					   </div> <!-- row -->  
					   </div> <!-- container --> 
					  </div> <!-- body -->

					  <!-- Modal footer -->
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					  </div>

					</div>
				  </div>
				</div> <!-- modal Founder & CEO part -->	
		
		
		
		<?php } } ?>


       </div> <!-- row 1-->
	   
    

       <!-- next section is below freelancebit -->

        <h2 class="meet_abtus_people">Contributors </h2>
        <div class="row">

			<?php if (count($list2) > 0){ 
			foreach($list2 as $list){ 
			$teamid = $list['id'];
			$team= array();
			$team=$this->Front_model->get_team_list($teamid);
			
			?>
			<div class="col-sm-3">           
			   <div class="card card-main-founder">
			   	<div class="founder-sections">
			   <img data-toggle="modal" data-target="#myModal_website_Administartor<?php echo $list['id']?>"
			   class="card-img-top card-avatar-images" src="<?php echo base_url(); ?>uploads/aboutmain/<?php echo $list['image']?>" alt="Card image">
			</div>
		
				<div class="card-body inner_founder">
				
					<h3 class="sup_txt_Founder"><?php echo $list['title']?></h3>
					<div class="sub_txt_Founder"><?php echo $list['description']?> </div>
				</div>     
				</div>  <!-- card --> 
			</div><!-- sm-3 -->
			
				<div class="modal" id="myModal_website_Administartor<?php echo $list['id']?>">
				  <div class="modal-dialog modal-sub-dialog-website">
					<div class="modal-content modal_sub_content">

					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title text-center meet_role1_page">Meet Us
                         <br>
                         <p class="meet_role3_page"><?php echo $list['title']?>
                         	
                         </p>
                           <div class="sub_txt_profile_desc"><?php echo $list['description']?> </div> 
						</h4>
						<!--<h5 class="modal-title meet_role3_page"><?php echo $list['title']?></h5>-->
					
					   <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					
					  </div>

					  <!-- Modal body -->
					  <div class="modal-body">
				   
						<div class="container">
						 <div class="row admin_row_sub">
							<?php if(count($team) > 0){
							 foreach($team as $teamdata){ ?>
								  <div class="col-sm-3">
								   <div class="meet_us_image">
									  <img data-toggle="modal" data-target="#myModal_aboutus_images<?php echo $teamdata['teamid'];?>" 
									  src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata['teamimage'];?>">
									<h6 class="sandy_txt"><?php echo $teamdata['name'];?></h6>								   
								   </div> <!-- meet us page -->								
								</div> <!-- sm-3 -->

								<!-- modal buttons -->
								<div class="modal" id="myModal_aboutus_images<?php echo $teamdata['teamid'];?>">
								  <div class="modal-dialog modal-sub-dialog-us-team-member">
									<div class="modal-content modal_sub_content">

									  <!-- Modal Header -->
									  <div class="modal-header">
										<h4 class="modal-title abt_modal_txt"><?php echo $teamdata['name'];?>
											
                                       <p class="abt_modal_designation_txt">
                                       	
                                       	<?php echo $teamdata['designation'];?>
                                       </p>

										</h4>
										<!-- <h5 class=" abt_modal_designation_txt"><?php echo $teamdata['designation'];?></h5> -->
									   
										<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
									
									  </div>

									  <!-- Modal body -->
									  <div class="modal-body modal-body-about-information">
										  <div class="container">
											<div class="row">
											   <div class="col-md-3">
												  <div class="Leonard_img">
												  <img 
												   src="<?php echo base_url(); ?>uploads/aboutteam/<?php echo $teamdata['teamimage'];?>" style="width: 143px;">
												  </div> 
											   </div>
											   <div class="col-md-9">
													<h4><?php echo $teamdata['desctitle'];?></h4>
													<div class="lorem_life_txt"><?php echo $teamdata['team_description'];?></div>

											   </div>
											</div>  <!-- row -->
										  </div> <!-- container -->
									   </div>  <!-- modal body -->
									   
									  </div>
									  <!-- Modal footer -->
									  <div class="modal-footer modal-about-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									  </div>

									</div>
								  </div>
								
							<?php } }?>
						</div> <!-- modal third part -->
					   </div> <!-- row -->  
					   </div> <!-- container --> 
					 

					  <!-- Modal footer -->
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					  </div>

					</div>
				  </div>
				</div> <!-- modal Founder & CEO part -->				
			
			
			
			
			<?php } } ?>
		</div> <!-- row -->




       <!-- bottom txts -->

       







     </div> <!-- contaoiner -->


   </div> <!-- contaoiner fluid -->

</section>



<section class="contact-bottom">
	
<div class="container">
	<div class="row  row h-100 justify-content-center align-items-center">
       	 <div class="contacts-belows-parts">           
			   
			   
		
				
				   <h4 class="main-contact-txts">Freelancebit</h4>
				   <h5 class="main-addcontact-txts">Aladdinvej 6d, DK-9260 Aalborg,41048026</h5>
                  			  
				
				
          </div>


       </div> <!-- rows -->


</div> <!-- containers -->


</section>

<?php include ("footer.php"); ?>