<?php include ("header3.php"); ?>


<?php //echo "<pre>"; print_r($order_list);?>
<section class="ProjectList">

   <?php

	if($this->session->flashdata('success'))

	{ ?>
	<div class="container">
	<div class="col-md-12 col-md-offset-3 alert alert-success">

		<?php echo $this->session->flashdata('success'); ?>

	</div>
	</div>
	<?php }

	?>
	
	
	<div class="container">
  <h2 class="meet_contactus">My Orders</h2>
  <div class="clearfix"></div>

  <div class="tableMain table-responsive-sm">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="first_th">Sr. No.</th>
                <th class="main_title">Gig Title</th>
                <th>Package Name</th>
                <th>Price</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		
		<?php //print_r($order_list);?>
		<?php //print_r($_SESSION);?>
          <?php $cnt=1; foreach ($order_list as  $value) { 
			$order_id =$value['order_id'];
			//echo $_SESSION['login_user'];
			$query=$this->db->query("SELECT * FROM `tbl_review` where order_id = $order_id");			
			$res1=$query->row();	
			 
			 //$res = count($res1);
		  ?>
            <tr>
                <td class="first_td"><?php echo $cnt++; ?></td>
                <?php $trimname =trim($value['project_title']);
							  $title = str_replace(' ', '-', $trimname);?>
                <td class="main_title order-titles"><a href="<?php echo base_url();?>project_details/<?php echo base64_encode($value['project_id']);?>/<?php echo $title;?>"> <?php echo $value['project_title']; ?> </a></td>
                <td><?php echo $value['package_title']; ?></td>
                <td>&euro; <?php echo $value['total_price']; ?></td>
                <td><?php echo $value['created_date']; ?></td>
                
                <td>
					<?php if($res1){  
						// $rating = $res1->rating; 
						 $rating = ($res1->com_rating + $res1->qua_rating + $res1->rec_rating)/3; 
						 
						 ?>
								<span class="fa fa-star <?php if($rating >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rating >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rating >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rating >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rating >= 5){echo "checked";}?>"></span>
					 <?php }else{ ?>
						 <?php if($value['buyer_status'] == 1){ ?>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewmodal<?php echo $value['order_id']; ?>">add Review </button>
						 <?php }else{ ?>
							<button  class="btn btn-success" onClick="change_status('<?php echo $value['order_id'];?>');">Complete</button>
						
						 <?php } } ?>
					
				</td>
                
                 
            </tr>
			
			<div class="modal show" id="reviewmodal<?php echo $value['order_id']; ?>">
						   <div class="modal-dialog modal-recipes-info">
							  <div class="modal-content">
								 <div class="modal-header">
									<h4 class="modal-title">Your opinion about this Order</h4>
									<button type="button" class="close" data-dismiss="modal">×</button>
									
									
									
								 </div>        
								 <div class="modal-body">
									<h4 class="rate-product">Rating</h4>
									
									
									<form action="<?php echo base_url();?>add_review" method="post">
									 <div class="container">
									 <div class="table tables-orders">
									<div class="row bdr-bottom ">
                                      <div class="col-md-2 right-bdr">
										
									   </div>
									    <div class="col-md-2 right-bdr">
										1 Star
									   </div>
									  
									    <div class="col-md-2 right-bdr">
										2 Star
									   </div>
									   
									    <div class="col-md-2 right-bdr">
										3 Star
									   </div>
									    <div class="col-md-2 right-bdr">
										4 Star
									   </div>
									       <div class="col-md-2">
										5 Star
									   </div>
									  </div>
									  
									  <div class="row bdr-bottom ">
										<div class="col-md-2 right-bdr">
											Communication
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="com_rating" id="com_rating" value="1" class="radio">
										</div>
									  
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="com_rating" id="com_rating" value="2" class="radio">
										</div>
									   
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="com_rating" id="com_rating" value="3" class="radio">
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="com_rating" id="com_rating" value="4" class="radio">
										</div>
									    <div class="col-md-2">
											<input type="radio" name="com_rating" id="com_rating" value="5" class="radio">
										</div>
									  </div>
									  
									  <div class="row bdr-bottom ">
										<div class="col-md-2 right-bdr">
											Quality 
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="qua_rating" id="qua_rating" value="1" class="radio">
										</div>
									  
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="qua_rating" id="qua_rating" value="2" class="radio">
										</div>
									   
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="qua_rating" id="qua_rating" value="3" class="radio">
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="qua_rating" id="qua_rating" value="4" class="radio">
										</div>
									    <div class="col-md-2">
											<input type="radio" name="qua_rating" id="qua_rating" value="5" class="radio">
										</div>
									  </div>
									  
									  <div class="row bdr-bottom ">
										<div class="col-md-2 right-bdr">
											Recomendation
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="rec_rating" id="rec_rating" value="1" class="radio">
										</div>
									  
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="rec_rating" id="rec_rating" value="2" class="radio">
										</div>
									   
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="rec_rating" id="rec_rating" value="3" class="radio">
										</div>
									    <div class="col-md-2 right-bdr">
											<input type="radio" name="rec_rating" id="rec_rating" value="4" class="radio">
										</div>
									    <div class="col-md-2">
											<input type="radio" name="rec_rating" id="rec_rating" value="5" class="radio">
										</div>
									  </div>
									</div>
									
									</div>
									
									
								
									<div class="main-desc-section">
										<div class="form-group">
											<label for="comment">Nick Name:</label>				
											<input type="text" class="form-control" id="nick_name" name="nick_name" value="" required="">
										</div>
										
										<!--<input class="ratingval" type="hidden" id="rating" name="rating" value="">-->
										<input class="" type="hidden" id="order_id" name="order_id" value="<?php echo $value['order_id']; ?>">
										
										<input class="" type="hidden" id="project_id" name="project_id" value="<?php echo $value['project_id']; ?>">
										<div class="form-group">
											<label for="comment">Title:</label>
											<input type="text" class="form-control" id="title" name="title" value="" required="">
										</div>
										<div class="form-group">
											<label for="comment">Comment:</label>
											<textarea class="form-control" rows="2" id="review" name="review" required=""></textarea>
										</div>	
										<div class="form-group">
											<label for="comment">Refrences:</label>
											<textarea class="form-control" rows="2" id="refrence" name="refrence" required=""></textarea>
										</div>
									</div>								   
								</div>
								 <div class="modal-footer">
									<button type="submit" class="btn btn-success" style="border-radius:5px;">Submit</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								 </div>
								 </form>
							  </div>
						   </div>
						</div>
                     <!-- <close Upload banner modal> -->
          <?php } ?>
            
          
          </tbody>

      </table>
</div><!-- tableMain -->
    </div> <!-- container -->
						
    
   

</section>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );

  function change_status(val) {
    if (confirm('Are you sure that your order is completed?')) {	
        $.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Front/change_order_status',
			data:{'order_id':val},
			success: function(data)
			{   
				if(data==1){
					location.reload();
				}			
			}
		});
    }		
}	
  
</script>



<script type="text/javascript">
   $(document).ready(function(){ 
   
   /* 1. Visualizing things on Hover - See next part for action on click */
   $('.stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
   }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
   });
   
   
   /* 2. Action to perform on click */
   $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
	//alert(ratingValue);
	$('.ratingval').val(ratingValue);
	
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
   });
   
   
   });
   
</script>
<?php include ("footer.php"); ?>



 
 

