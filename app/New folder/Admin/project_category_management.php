
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
							<li class="active">Project Category Management  </li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Project Category Management				
							</h1>
							<?php if($this->session->flashdata('success'))
							{ ?>
							   <div class="alert alert-success">
								 <?php echo $this->session->flashdata('success'); ?>
							   </div>
							<?php } ?>

							
						</div><!-- /.page-header -->
                    <form method="post" action="<?php echo base_url(); ?>Admin/add_subcat_opening" enctype="multipart/form-data">
                        <div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Select Marketplace</label>
									<select class="form-control" name="select_main_cat" required="">
										<option value="">Select Marketplace</option>
										<?php foreach ($category_list as  $value) { ?>
											<option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									<label>Category Name</label>
									<input type="text" id="" name="sub_cat_name_opening" placeholder="Category Name" class="form-control" required="">
								</div>
							</div>
							
							 <div class="col-sm-4">
								<div class="form-group">
									<label> Category Image</label>  </br>
									<span style="color: #969191;">(Note:Images should be at least 1500px by 400px.</span>
									
									<input type="file" id="userfile" name="userfile"  required="">
								</div>
							</div> 
							

							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btnDefault">Submit</button>
								</div>
							</div>
						</div>
                    </form>

						<div class="clearfix"></div>
							<div class="row">
									<div class="col-xs-12">							
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Project Category Management	
										</div>
									
									<div>
											<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>Sr.No</th>
							<th>Image</th>
							<th>Marketplace</th>
							<th>Project Category</th>
					        <th>Status</th>
							<th>Actions</th>							
						</tr>
					</thead>
					
				<tbody>
					<?php $cnt=1; foreach ($subcat_list_opening as  $value) { ?>
						<tr>
							<td><?php echo $cnt++; ?></td>
							<td>
								<?php if($value['sub_cat_image_opening'] !=""){ ?>
									<img height="50px" width="75px" src="<?php echo base_url();?>uploads/sub_category/<?php echo $value['sub_cat_image_opening']; ?>">
								<?php }else{ ?>
									<img height="50px" width="75px" src="<?php echo base_url();?>assets/img/logo.png">
								<?php }?>
							</td>
							<td><?php echo $value['category_name'];  ?></td>
							<td><?php echo $value['sub_cat_name_opening'];  ?></td>
					        <td>
					        	<label class="switch"><input type="checkbox" id="togBtn" value="<?php echo  $value['status'] ?>" <?php if($value['status']==0){ echo 'checked'; } ?> onclick="changestatus('<?php echo  $value['id']; ?>','<?php echo  $value['status']; ?>'); " ><div class="sliderTog round "></div></label>
					        </td>		
	                        <td>
	                        	<span title="Edit"><a href="<?php echo base_url(); ?>Admin/editcategoary_opening/<?php echo $value['id'];  ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button><a></span>

	                        	<span title="Delete"><a href="<?php echo base_url(); ?>Admin/delete_sub_cat_opening/<?php echo $value['id'];  ?>" onclick="return confirm('Are you sure you would like to delete this sub category?');"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></a></span>
	                        </td>
						</tr>
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
	function changestatus(sub_cat_id,status){
		//alert(id);
		//alert(status);
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Admin/change_subcat_status_opening',
			data:{'sub_cat_id':sub_cat_id,'status':status},
			success: function(html){
				
				return true();
				
			}
		});
	}

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
	