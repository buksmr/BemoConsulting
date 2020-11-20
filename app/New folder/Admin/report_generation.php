<?php include ("header.php"); ?>
<!--============ HEader End Here============-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />

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
								<a class="active">Report Management</a>
							</li>							
							

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Report Management	

										
							</h1>
						</div><!-- /.page-header -->
						<?php //print_r($user_list[0]);?>
						<div class="row">	

						    <h3 style="margin-left: 9px;">Payment Reports</h3>



                            <div class="col-sm-3">
								<div class="form-group">
									<label>Timespan</label>
									<select class="form-control font-mark-form" id="sel1" name="sellist1">
								        <option>All</option>
								        <option>Daily</option>
								        <option>Weekly</option>
								        <option>Monthly</option>
 								   </select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
										  <label for="usr">Seller</label>
										  <input type="text" class="form-control">
                                 </div>
							</div>

							<div class="col-sm-3">
								<div class="form-group">
										  <label for="usr">Projects</label>
										  <input type="text" class="form-control">
                                 </div>
							</div>

						
							<div class="col-sm-3">
								<div class="form-group">
									<button class="btn btnDefault" style="margin-top:25px;">Submit</button>
								</div>
							</div>
						</div>
						
				<div class="clearfix"></div>
				
                  <div class="row">
					<table id="examples" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							
							<th>Buyers</th>
							<th>Sellers</th>
							<th>Project Name</th>
							<th>Payment Date</th>
							<th>Total Payment</th>
							<!--<th>Actions</th>-->							
						</tr>
					</thead>
					
				
	
						

			
				<tbody>
					<tr>
						<td>John</td>
						<td>Harry</td>
						
						<td>Test Project</td>
                        <td>2019-11-28</td>		
                        <td>8000</td>				
							
                        <!--<td>
                        	<span title="Edit"><a href="<?php echo base_url(); ?>/Admin/viewreport"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></a></span>

                        	<span title="Edit"><a href="<?php echo base_url(); ?>/Admin/editreport"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button><a></span>

                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>-->
					</tr>
					
					
					

					




				
				</tbody>
				
				</table>
	      
						 
		</div><!-- row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		
		<?php include ("footer.php"); ?>	
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
		<script>
		
		  $(document).ready(function() {
					$('#examples').DataTable( {
						dom: 'Bfrtip',
						buttons: [
							'excel', 'pdf'
						]
					} );
				} );
		
		</script>