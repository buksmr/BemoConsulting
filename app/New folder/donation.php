<?php include ("header3.php"); ?>


<!-- modal stripe start -->
<div class="modal" id="myModaldonation">
	<div class="modal-dialog modal-donations-dialog">
		<div class="modal-content modal_sub_content">
			<div class="modal-header">
				<h4>Donation</h4>
			</div>

			<div class="modal-body">
				<div class="container modals-inner-parts">
					<form action="<?php echo base_url();?>stripe_donation" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1">Amount (€)</label>
									<input type="text" class="form-control" id="donation_amount" name="donation_amount" placeholder="Enter Amount" value="" required >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1">Comment</label>
									<textarea type="text" rows="1" class="form-control" id="comment" name="comment" placeholder="Enter comment here..." required ></textarea>

								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1"> </label>
									<button type="submit" class="btn btn-secondary btns-submits">Pay With Stripe</button>

								</div>
							</div>

						</div>  <!-- row -->
					</form>
				</div> <!-- container -->
			</div>  <!-- modal body -->

		</div><!-- Modal footer -->
		<div class="modal-footer modal-about-footer">
		<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
		</div>

	</div>
</div><!-- modal stripe end part -->

<!-- modal paypal start -->
<div class="modal" id="myModaldonation_paypal">
	<div class="modal-dialog modal-donations-dialog">
		<div class="modal-content modal_sub_content">
			<div class="modal-header">
				<h4>Donation</h4>
			</div>

			<div class="modal-body">
				<div class="container modals-inner-parts">
					<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">-->
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						 <input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="upload" value="1">
						<input type="hidden" name="business" value="frelancebit_business@frelancebit.com">
						<!--LIVE SETTING<input type="hidden" name="business" value="business@freelancebit.com">-->
						
						<input type="hidden" value="test Plan" name="item_name_1">
						<input type="hidden" value="100" name="amount_1">
						<input type="hidden" value="1" name="quantity_1">
						<input type="hidden" name="notify_url" value="<?php echo base_url();?>Front/paypal_success">
						<input type="hidden" name="return" value="<?php echo base_url();?>Front/paypal_success">
						<input type="hidden" name="rm" value="2">
						<input type="hidden" name="cbt" value="Return to The Store">
						<input type="hidden" name="cancel_return" value="<?php echo base_url();?>Front/paypal_cancel">
						<input type="hidden" name="lc" value="FR">
						<input type="hidden" name="currency_code" value="EUR">
					
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1">Amount (€)</label>
									<input type="text" class="form-control" id="amount_1" name="amount_1" placeholder="Enter Amount" value="" required >
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1">Comment</label>
									<textarea type="text" rows="1" class="form-control" id="custom" name="custom" placeholder="Enter comment here..." required ></textarea>

								</div>
							</div>

							

							<div class="col-md-4">
								<div class="form-group">
									<label for="" class="formGroupExampleInput1"> </label>
									<button type="submit" class="btn btn-secondary btns-submits">Pay With Paypal</button>

								</div>
							</div>

						</div>  <!-- row -->
					</form>
				</div> <!-- container -->
			</div>  <!-- modal body -->

		</div><!-- Modal footer -->
		<div class="modal-footer modal-about-footer">
		<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
		</div>

	</div>
</div> <!-- modal paypal end part -->
					<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				    <input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="metinpotbusi@gmail.com">
					
					<input type="hidden" value="test Plan" name="item_name_1">
					<input type="hidden" value="100" name="amount_1">
					<input type="hidden" value="1" name="quantity_1">
				   
					<input type="hidden" name="custom" value="no record">
					<input type="hidden" name="notify_url" value="<?php echo base_url();?>Front/paypal_success">
					<input type="hidden" name="return" value="<?php echo base_url();?>Front/paypal_success">
					<input type="hidden" name="rm" value="2">
					<input type="hidden" name="cbt" value="Return to The Store">
					<input type="hidden" name="cancel_return" value="<?php echo base_url();?>Front/paypal_success">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" style="margin-left:200px;"  src="<?php echo base_url(); ?>assets/img/paypal.png" name="submit" alt="Make payments with PayPal">
					

				</form>-->
<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
      <div class="container">
      </div>
   </div>
</section>
<section class="project_form">
   <div class="container-fluid ">
   <div class="container">
   
      <div class="row row h-100 justify-content-center align-items-center">
	 
	  
         <form class="col-8 form-pro-lbl-section">
		 
		  <?php if($this->session->flashdata('success')) { ?>
            <div class="col-sm-12 alert alert-success">
               <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } if($this->session->flashdata('error')){ ?>
            <div class="col-sm-12 alert alert-danger">
               <?php echo $this->session->flashdata('error'); ?>
            </div><?php } ?>
			
         <h2 class="donate_through">DONATE THROUGH</h2>
         <div class="clearfix"></div>
         <div class="row">
            <div class=" col-md-6">
               <div class="payapl_img">
                  <a data-toggle="modal" data-target="#myModaldonation" href="#" title="Stripe"> <img src="<?php echo base_url(); ?>assets/img/stripe.png"></a> 
               </div>
			   
            </div>
            <div class="col-md-6">
               <div class="parton_img">
                  <a  data-toggle="modal" data-target="#myModaldonation_paypal" href="#" title="Paypal"> <img src="<?php echo base_url(); ?>assets/img/paypal.png"></a> 
               </div>
               <!-- paypal img -->
            </div> 
			<div class="col-md-12">
               
            </div>
         </div>
         <!-- row -->
		 
							
         <div class="donation_box">
            <h4 class="why_donate">Why donate?</h4>
            <!--<p class="why_donate_txt_lorem">We, Freelancebit, is a company committed to improving and better the freelance industry, making it a better workplace for freelancers. We are also committed to improving and better the experience as a customer making it enjoyable and easier overall.</p>-->
			
			<p class="why_donate_txt_lorem">We, Freelancebit, is a company committed to improving and better the freelance industry, making it a better workplace for freelancers and better marketplace for buyers.</p>
			
			
			<p class="why_donate_txt_lorem">Your donation will go towards website maintenance, website development , the Freelancebit staff and tools for us, and so much more.</p>
		   <p class="why_donate_txt_lorem clickbox">Click on a box below to see our list of commitments:</p>
		  </div>


		<div class="donatedetails">
		  <div id="accordion">
    <div class="card carddonate">
      <div class="card-header cardhead" >
      <h4  data-toggle="collapse" href="#collapseOne">  <a class="card-link">
          Zero Fees
        </a></h4>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body bodypara" >
		<p>Zero fees is the fundament of Freelancebit. We are committed to a zero fee promise for our website. Meaning that we will not charge any fees for gigs nor project. </p>
		<p>It is currently not worthwhile to sell cheap (between $5 and $15) gigs on freelance platforms where it is possible, but with us (because of the zero fees), it is actually worthwhile. For example, on <span class="heres"><a href="https://www.engagewp.com/why-fiverr-sucks-for-freelancers/">Fiverr if a freelancer is to sell a gig for $5, they will only get a total of $3.58.</a></span> </p>
		<p>You can find a list of some popular freelance services' and freelance consultants' fees <span class="heres"><a href="https://docs.google.com/document/d/10_lK9hS8s90GAiL1C3_Ddefmf3NK4xRbPOrCK5Spj_Y/edit">here</a></span>. </p>
	 
         </div>
      </div>
    </div>
 
     <div class="card carddonate">
      <div class="card-header cardhead" >
      <h4  data-toggle="collapse" href="#collapseOne1">  <a class="card-link">
          Free Services
        </a></h4>
      </div>
      <div id="collapseOne1" class="collapse" data-parent="#accordion">
        <div class="card-body bodypara" >
		 <p>As an addition to our zero fees we are also offering free services that would otherwise cost on other freelance platforms. We offer free additional services for project (hidden and privacy protection), tools (localization management) and more.</p>
		 <p>We will offer more and more services free of charge, tools and more, as we go on.</p>
         </div>
      </div>
    </div>
	
	    <div class="card carddonate">
      <div class="card-header cardhead" >
      <h4  data-toggle="collapse" href="#collapseOne2">  <a class="card-link">
         Minimalistic Prices
        </a></h4>
      </div>
      <div id="collapseOne2" class="collapse" data-parent="#accordion">
        <div class="card-body bodypara" >
		 <p>With Freelancebit.com we are also committed to keeping the prices for services, additional services (consultant, urgent, featured), tools (project management) and more, as low as possible. Our goal is to provide them cheaper than market average and ultimately provide them free of charge.</p>
		 <p>We will and are working tirelessly to provide all of this as cheap as possible whilst ensuring the quality of it is the best possible. And also offer more and more services, tools and more, as we go on.</p>
		 
         </div>
      </div>
    </div>
	
	    <div class="card carddonate">
      <div class="card-header cardhead" >
      <h4  data-toggle="collapse" href="#collapseOne3">  <a class="card-link">
         Partnerships
        </a></h4>
      </div>
      <div id="collapseOne3" class="collapse" data-parent="#accordion">
        <div class="card-body bodypara" >
		 <p>We are also partnering up with companies, organizations, developers and other free of charge. Within the partnerships, we manage their project. Managing a gig include the following but is not limited to it:</p>
			<ul class="">
			<li>Negotiating on behaves of the partner (if needed)</li>
			<li>Find freelancers to work on the project (consultation)</li>
			<li>Communicating with the freelancers and partners via mail and the website</li>
			<li>Assist the freelancers with anything that may come up</li>
			<li>Updating the project to fit the partner’s needs</li>
			<li>& more</li>
			</ul>
		<p>A partnership will spare the partner from having to hire a gig manager and a consultant which is expensive in the long-run.</p>
		</div>
      </div>
    </div>
  </div>
  <br>
   <!--<p class="makeservice">We are and will always be working on making as many services, tools and other free of charge or the prices of it minimalist, whilst keeping the quality of it as high as feasible.</p>-->
   
   <p class="makeservice">We are and will always be working on offering as many services, tools and add-ons free of charge or the prices of them minimalist, whilst keeping the quality of them as high as feasible.</p>
         
</div>
    
		 <?php //print_r($donation_data);?>

    <h4 class="recent_donate">RECENT DONATION</h4>

         <section class="donetslider">
          <div class="row">
            <div class="col-md-12">
         <div id="slider" class="carousel slide" data-ride="carousel">
 
	<div class="carousel-inner">
	<?php if(count($donation_data) > 0){ 
	$i=0;
	  foreach($donation_data as $donation){
		if($i ==0){
			$activecls="active";
		}else{
			$activecls="";
		}
		 if($i%2 ==0){ ?>  
			<div class="carousel-item <?php echo $activecls;?>">
				 <div class="row media_info_"> <?php } ?>
					<div class="col-md-6">
					   <div class="donation_info">
						  <div class="media border p-3 media-donation">
							 <?php if($donation['profile_image'])
								   { ?>
								<img src="<?php echo base_url(); ?>profile_image/<?php echo $donation['profile_image']; ?>" class="mr-3 mt-3 rounded-circle" style="width:60px;">
								
								<?php }else{ ?>
								 <img src="<?php echo base_url(); ?>assets/img/person.jpg" class="mr-3 mt-3 rounded-circle" style="width:60px;">
								<?php } ?>
						  
						  
							
							 <div class="media-body subdonet">
								<h4 class="sub_donate_txt"><?php echo $donation['first_name'];?> </h4>
								<small><i><?php echo $donation['amount'];?> €</i></small>
								<p class="lorem_donate_sub_txt"><?php echo $donation['comment'];?> </p>
							 </div>
						  </div>
						  
					   </div>
					</div>  
				   <?php if($i%2 !=0){ ?> 
				</div>  
			</div><!-- carousel-item -->
	<?php } $i++; } } ?>
	
  </div><!-- carousel-inner -->
  <a style="left: -11%;" class="carousel-control-prev prev1" href="#slider" data-slide="prev">
    <span class="carousel-control-prev-icon " style="background-image: url(<?php echo base_url(); ?>assets/img/arrow1.png);"></span>
  </a>
  <a style="right: -11%;" class="carousel-control-next next1" href="#slider" data-slide="next">
   <span class="carousel-control-next-icon " style="background-image: url(<?php echo base_url(); ?>assets/img/arrow4.png);"></span>
  </a>
</div>
          </div>
        </div>


         </section>








         
      </div>
   </div>
</section>


                              
<?php include ("footer.php"); ?>