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
								
								<a href="<?php echo base_url(); ?>Admin/report_generation">Report Generation</a>
							</li>
							<li>
								<a class="active">Edit Report</a>
							</li>							
							

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Report Generation				
							</h1>
						</div><!-- /.page-header -->

						<div class="row">	

						    <h3 style="margin-left: 9px;">User Reports</h3>


							<div class="col-sm-3">
								<div class="form-group">
									<label>Register</label>
									<select class="form-control font-mark-form" id="sel1" name="sellist1" disabled="">
								        <option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
 								   </select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>New Register</label>
									<select class="form-control font-mark-form" id="sel1" name="sellist1" disabled="">
								        <option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
 								   </select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Buyers</label>
									<select class="form-control font-mark-form" id="sel1" name="sellist1" disabled="">
								        <option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
 								   </select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
									<label>Sellers</label>
									<select class="form-control font-mark-form" id="sel1" name="sellist1" disabled="">
								        <option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
 								   </select>
								</div>
							</div>
						
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
						
				
			
                  

			
							

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		
		<?php include ("footer.php"); ?>	