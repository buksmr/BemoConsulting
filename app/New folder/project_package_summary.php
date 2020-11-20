
<?php include ("header3.php"); ?>


<section class="package-summary">
	<?php

    if((isset($package_detail->delivery_time)) && !empty($package_detail->delivery_time) ){
	$did = $package_detail->delivery_time;
		$query=$this->db->query('select time as newtime from tbl_delivery_time where id = '.$did);
		
		$result=$query->row();
		 $del_time =$result->newtime;
	}else{
		$del_time ="-";
	}	 
	?>
  
  <div class="container-fluid">
  	<div class="container">
  	  <h1 class="custom-package">Package : <?php $title=$package_detail->title ? $package_detail->title  : '-' ;
	  echo $title; ?> </h1>	
  	  <div class="row">
  	  	
        <div class="col-md-8">
        <div class="table-responsive-sm">	
         <table class="table table-hover" id="example-summarydetails" style="width:100%">
			  <tbody>
			    <tr>
			      <td class="projectdetails-images1">
              <?php if(isset($package_media->media)){ ?>
              <img src="<?php echo base_url(); ?>uploads/<?php echo $package_media->media; ?>" >
               <?php } else{ ?>
                <img src="<?php echo base_url();?>uploads/pexels-photo-248528.jpeg" >
          <?php }
               ?>
				       
				  </td>
				  
				  <td class="pro-descriptions">
				    <h5><?php echo $proj_detail->title; ?></h5>
				    <p class="desc-name">Revision : <?php echo $package_detail->revision; ?></p>
			        <p><?php echo $package_detail->description; ?></p>
				  
				  </td>
				  
				 
				  
				  <td class="pro-price">
				  <?php $price = str_replace('.', ',', $package_detail->price);?>
				      <p> <?php echo $price; ?>€</p>
				  </td>
			        
			    </tr>  

			     

			    
			   </tbody>
           </table>	 

        </div> <!-- responsive div -->

        </div> <!-- md-8 -->

         <div class="col-md-4">
        	 <div class="second-right-summary">

        	 	
        	 	<ul class="list-group mb-3" style="margin-top: -10px;">

                <li class="list-group-item d-flex justify-content-between">
                 
                  <span class="sum-txt">Summary</span>
                  
                </li>
		           
		            <li class="list-group-item d-flex justify-content-between">
		              <strong>Total </strong>
					  <?php $price = str_replace('.', ',', $package_detail->price);?>
		              <strong> <?php 
                  $total_price=$price ? $price  : 0 ;
                  echo $total_price; ?> €</strong>

		              
		            </li>

		            <li class="list-group-item d-flex justify-content-between">
		              <span>Delivery Time</span>
		              <span><?php echo $del_time ?></span>

		              
		            </li>

                <li class="list-group-item d-flex justify-content-between">

                 <div class="cta-area">
					<form action="<?php echo base_url();?>place_order" method="post"> 
				 
						<input type="hidden" name="package_id" value="<?php echo base64_decode($this->uri->segment(2));?> ">
						<input type="hidden" name="project_id" value="<?php echo base64_decode($this->uri->segment(3));?> ">
						<input type="hidden" name="del_time" value="<?php echo $del_time;?>">
						<input type="hidden" name="total_price" value="<?php echo $total_price;?>">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_login'];?>">
						<input type="hidden" name="package_title" value="<?php echo $package_detail->title?>">
						<input type="hidden" name="project_title" value="<?php echo $proj_detail->title;?>">
						
						<?php if($proj_detail->user_id == $_SESSION['user_login']){ 	?>
						
							<button class="btn-lrg-standard submit js-open-popup-login" id="orderbtn" type="button">Order Now</button>
						
						<?php }else{?>
							<button class="btn btn-lrg-standard submit js-open-popup-login" type="submit">Order Now</button>
						
						<?php } ?>
					</form>
                 </div>


                </li>  


              </ul> <!-- ul -->

                 <!-- <div class="cta-area">
                 	<a href="#"><button class="btn-lrg-standard submit js-open-popup-login" type="button">Order Now</button></a>

                 </div> -->



        	 </div>



         </div> <!-- md-4 -->





  	  </div> <!-- row -->
  	</div> <!-- container -->
  </div> <!-- fluid -->



</section>







         



<?php include ("footer.php"); ?>
<script>
   $("#orderbtn").click(function(){
	alert("Sorry! You can not purchase your own packages.");
	});
</script>













