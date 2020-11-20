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
							<li class="active" >Edit Payment</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Edit Payment						
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Buyer</label>
									<input type="text" id="" placeholder="John" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Seller</label>
									<input type="text" id="" placeholder="Harry" disabled="" class="form-control">
								</div>
							</div>
							

							

							<div class="col-sm-3">
								<div class="form-group">
									<label>Project Name</label>
									<input type="password" id="" placeholder="Freelancebit" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Payment Date</label>
									<input type="password" id="" placeholder="14/04/2019" disabled="" class="form-control">
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Total Payment</label>
									<input type="password" id="" placeholder="16000" disabled="" class="form-control">
								</div>
							</div>

                        
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
								
		
						

						<div class="clearfix"></div>
		

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>