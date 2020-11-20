<?php include ("header.php"); ?>


<section class="banner">
   <?php 
      $query1=$this->db->query("SELECT * FROM `tbl_slider` where status = 1");			
      $res=$query1->result_array();
      						
      	$quelist=$this->db->query("SELECT title FROM `tbl_upload_project` ");			
		$data_list=$quelist->result_array();					
      						
      						
      				   ?>

   <div class="flexslider left1">
      <ul class="slides">
          

         <?php if(count($res) > 0){
            foreach($res as $data){ ?>
         <li>
            <img src="<?php echo base_url(); ?>uploads/slider/<?php echo $data['image_url'];?>">
         </li>
         <?php } } ?> 
      </ul>
   </div>
</section>
 <!--banner -->

 

<section class="category-nav">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary-free-nav">
             <button class="navbar-toggler navbar-toggler-category-customizes" type="button" data-toggle="collapse" data-target="#navbarhome" aria-controls="navbarhome" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-toggle-icons-customizes">
      <span></span>
      <span></span>
      <span></span>
      </span>
      </button>
   <div class="container-fluid">
      <div class="container">
        
      <div class="collapse navbar-collapse" id="navbarhome">
            <ul class="navbar-nav category-Nav  mr-auto">
               <?php foreach ($all_category as  $value) { 
                  ?>
               <li class="nav-item col-xs-12">
                  <a class="nav-link active"  href="<?php echo base_url(); ?>marketplace/<?php echo $value['category_alias']; ?>"><?php echo $value['category_name']; ?></a>
               </li>
               <?php } ?>
            </ul>
         </div>
      </div>
   </div>
         </nav>
   <!-- container -->
</section>
<!-- category-nav -->
<section class="search">
   <div class="container">
      <div class="row">
         <div class="col-sm-5">
            <div class="searchImg">
               <img src="<?php echo base_url(); ?>assets/img/freelancer1.jpg">
            </div>
         </div>
         <!-- col-sm-5 -->
         <div class="col-sm-7">
            <h4>Search</h4>
            <form action="<?php echo base_url();?>searchdata" method="post">
               <input list="browsers" type="text" placeholder="Type here" class= "form-control search-text" name="search" required autocomplete="off">
			  <!-- <datalist id="browsers">
				 <?php //if(count($data_list)> 0 ){
					// foreach($data_list as $mydata){?>
					<option value="<?php //echo $mydata['title']?>">									
				<?php // } } ?>
				  </datalist> -->
               <input type="submit" class="btn btn-info searchbtn" value="SEARCH NOW">
            </form>
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->   
</section>

<section class="marketplace-parts">
   <div class="blueBg">
   
   <div class="col-sm-12">
      <div class="container">
         <h4>Explore the Marketplace</h4>
    
      <!-- <div class="border-line">
         </div>-->
      <div class="divide_border_img">
         <img src="<?php echo base_url(); ?>assets/img/divider.png" alt="">
      </div>
     
         <!-- <h6>Find the Perfect Freelancer for Your Job</h6>-->
         <h6>Freelancing done cost-effectively</h6>
     </div> <!-- container -->
   </div> <!-- sm 12 -->
   <div class="container">
      <div class="whiteBg">
         <div class="row">
               <?php foreach ($all_category as  $value) { 
                  ?>
                  <div class="col-md-3 col-sm-2 col-xs-1">
                     <div class="marketGrid marketOuterGrid">
               <a href="<?php echo base_url(); ?>marketplace/<?php echo $value['category_alias']; ?>">
                     <img src="<?php echo base_url(); ?>uploads/category/<?php echo $value['cat_image']; ?>" alt="img" class="image border-black">
                     <?php echo $value['category_name']; ?>
                     <!-- <div class="overlay overlayleft">
                        <div class="text text-center"><?php echo $value['category_name']; ?></div>
                     </div> -->
               </a>
            </div>
                  </div>
               <?php } ?>
         </div> <!-- row -->
         
         <div class="button">
          
            <a href="<?php echo base_url();?>freelancer_project_opening"><button  class="btn btn-info projectopn">Project Marketplace </button></a>
            <a href="<?php echo base_url();?>upload_project"><button class="btn btn-info uploadpro">Upload Gig   </button></a>
         </div> <!-- buttons -->
      </div> <!-- whitebg -->
   </div> <!-- container -->
   </div> 
</section>

<!-- <div class="spacebug"></div> -->
<div class="clearfix"></div>
<?php /*
<section class="terms-parts">
   <div class="terms">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <div class="free_img">
               <img src="<?php echo base_url(); ?>assets/img/zero.png" alt="">
            </div>
            <div class="free_txt">
               <h3>ZERO</h3>
               <h4>FEES</h4>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="freelance_bit">
               <h5 class="free_fees">A marketplace without fees</h5>
               <p class="free_fees_firset">
                Freelancebit is the first freelance marketplace to offer its services without fees.
               </p>
               <p class="money_txt">Transaction fees from third-parties are still included</p>
            </div>
         </div>
      </div>
      
      
   </div>
</section>
 * <?php */?>



<?php include ("footer.php"); ?>