
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
							<li class="active">Marketplace Management</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Marketplace Management				
							</h1>
							<?php if($this->session->flashdata('success'))
							{ ?>
							   <div class="alert alert-success">
								 <?php echo $this->session->flashdata('success'); ?>
							   </div>
							<?php } ?>

							
						</div><!-- /.page-header -->
                   
						<div class="clearfix"></div>
							<div class="row">
									<div class="col-xs-12">							
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Marketplace Management	
										</div>
									
									<div>
											<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>Sr.No</th>
							<th>Category</th>
							<th>Order </th>							
							<th>Change Order </th>							
						</tr>
					</thead>
					
				<tbody>
					<?php $cnt=1; foreach ($category_list as  $value) { ?>
						<tr>
							<td><?php echo $cnt++; ?></td>
							
							<td><?php echo $value['category_name'];  ?></td>
							<td><?php echo $value['catno'];  ?></td>
	                        <td>
                                     <button data-toggle="modal" data-target="#EditModal<?php echo $value['id']; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
	                        	<button data-toggle="modal" data-target="#myModal<?php echo $value['id'];?>" class="btn btn-success btn-xs">Change Order</button>
	                        </td>
						</tr>
                                                <div id="EditModal<?php echo $value['id']; ?>" class="modal fade" role="dialog">

                                        <form action="<?php echo base_url(); ?>Admin/add_maincat_image" method="post" id="edit_marketplace" enctype="multipart/form-data">			
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Edit Marketplace</h4>
                                                    </div>

                                                    <div class="modal-body">                                                    
                                                        <input type="hidden" id="id" name="id" value="<?php echo $value['id']; ?>" >
                                                        <div class="form-group row">
                                                            <label for="cat_name" class="col-sm-3 col-form-label">Category Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="cat_name" name="cat_name" value="<?php echo $value['category_name']; ?>" class="form-control" required readonly >										 
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="cat_image" class="col-sm-3 col-form-label">Category Image</label>
                                                            <div class="col-sm-9">
                                                                <?php if ($value['cat_image'] != '') { ?>
                                                                    <label>Old Image</label>
                                                                    <p><img height="100px" width="150px" src="<?php echo base_url(); ?>uploads/category/<?php echo $value['cat_image']; ?>"></p>
                                                                <?php } ?>
                                                                <input type="file" id="userfile" name="userfile"  required="">
                                                            </div>
                                                        </div>   
                                                    </div> <!-- rows -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>


                                                </div> <!-- first main body -->

                                            </div> <!-- content -->
                                        </form>  
                                    </div> <!-- dialog -->
                            
						
						<!-- Modal -->
							<div id="myModal<?php echo $value['id'];?>" class="modal fade" role="dialog">
							  <div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Change Order</h4>
								  </div>
								  <div class="modal-body">
										<form action="<?php echo base_url();?>Admin/add_catorder_data" method="post" id="addteam" enctype="multipart/form-data">			
											<div class="row">
												<div class="col-sm-4">
												  <div class="form-group">
													 <label>Category Name</label>
													 <input type="text" id="name" name="name" value="<?php echo $value['category_name'];  ?>" class="form-control" required readonly >										 
												  </div>
												</div>
												<div class="col-sm-4">
												  <div class="form-group">
													 <label>Order</label>
													 <input type="text" id="catno" name="catno" value="<?php echo $value['catno'];  ?>" class="form-control" required >										 
												  </div>
												</div>
											    <input type="hidden" id="id" name="id" value="<?php echo $value['id'];?>" >	
											   
												<div class="col-sm-4">
												  <div class="form-group">
												  <label>  </label>
													 <button type ="submit" class="btn btnDefault btn-changesubmits">Submit
													 </button>
												  </div>
											   </div> 
											</div> <!-- rows --> 										  
										</form>
										
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div> <!-- first main body -->

							  </div> <!-- content -->
							</div> <!-- dialog -->
							</div> <!-- first main modal -->
						
					<?php } ?>
					
				</tbody>
				
				</table>
										</div>
									</div>
								</div>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			
			
<script>
	/* $("input").keyup(function(){
		var catno =  $(this).val();
		
alert(catno);
		$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>Admin/change_maincat_status',
				data:{'catno':catno},
				success: function(html){
					location.reload();
				}
			});
			 
		}); */

	
		

</script>

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
   	$('#datatable').DataTable( {
   		dom: 'Bfrtip',
   		buttons: [
   		]
   	} );
   } );
   
</script>
	
