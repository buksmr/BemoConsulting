<?php include ("header.php"); ?>
<!--============ HEader End Here============-->


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!--============ Sidebar Satrt Here============-->
			<?php include ("sidebar.php"); ?>
<!--============ Sidebar END Here============-->


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url(); ?>Admin/index">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>Admin/payment">Payment</a>
							</li>
							<li class="active" >View Payment</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								View Payment						
							</h1>
						</div><!-- /.page-header -->
						<?php  //print_r($orderdetails);
						$project_id =$orderdetails->project_id ;
						$seller_id =$orderdetails->seller_id ;
							if($project_id != ''){		
									$query=$this->db->query("SELECT first_name as seller_fname,last_name as seller_lname FROM `tbl_user` where id =".$seller_id);
									$result=$query->result_array();
									
									if($result){
										$seller =$result[0]['seller_fname']." ".$result[0]['seller_lname'] ;
									}else{
										$seller = '';
									} 
							}else{
								$seller = '';
							}
						?>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Client</label>
									<input type="text" id="" value="<?php echo $orderdetails->buyer_fname ."  ". $orderdetails->buyer_lname; ?>" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Freelancer</label>
									<input type="text" id="" value="<?php echo $seller;?>" disabled="" class="form-control">
								</div>
							</div>
							

							

							<div class="col-sm-3">
								<div class="form-group">
									<label>Project Name</label>
									<input type="text" id="" value="<?php echo $orderdetails->project_title ;?>" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Package Name</label>
									<input type="text" id="" value="<?php echo $orderdetails->package_title ;?>" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Payment Date</label>
									<input type="text" id="" value="<?php echo $orderdetails->created_date ;?>" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Stripe Charge Id</label>
									<input type="text" id="" value="<?php echo $orderdetails->charge_id ;?>" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Total Payment</label>
									<input type="text" id="" value="<?php echo $orderdetails->total_price ;?>" disabled="" class="form-control">
								</div>
							</div>

                        
							<div class="col-sm-12">
								<div class="form-group">
									<a href="<?php echo base_url();?>Admin/payment"><button class="btn btnDefault">Back</button></a>
								</div>
							</div>
						</div>
								
		
						

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>