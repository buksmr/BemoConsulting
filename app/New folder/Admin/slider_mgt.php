
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
							<li class="<?php echo base_url();?>Admin/slider_mgt">Slider Management</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Slider Management				
							</h1>

							
						</div><!-- /.page-header -->


						
						<?php if($this->session->flashdata('message'))
							{ ?>
						 <div class="alert alert-success">
							<?php echo $this->session->flashdata('message'); ?>
						 </div>
						 <?php } ?>
                        <div class="row">	
															
							
							<form action="<?php echo base_url();?>Admin/add_slider" method="post" enctype="multipart/form-data">
							<div class="col-sm-6">	
								<div class="form-group">
										<label>Upload Slider Image</label>
										<input type="file" class="form-control" name="userfile[]" id="id-input-file-2" required>
								</div>		
							</div>	
						
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Submit</button>
								</div>
							</div>
							</form>
						</div>


						<div class="clearfix"></div>
							<div class="row">
									<div class="col-xs-12">							
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Slider Management			
										</div>

										<br>
									
									<div>
											<table id="examples" 
											class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>Sr.No</th>
							<th>Image</th>
							<th>Set Status</th>
							
							<th>Actions</th>							
						</tr>
					</thead>
					
	
						

			
				<tbody>
				
				<?php if(count($sliderlist) > 0){ 

					$i=1;
				foreach ($sliderlist as $list){ ?>
				
					<tr>
						<td><?php echo $i; ?></td>
						<td><img height="100px" width="150px" src="<?php echo base_url(); ?>uploads/slider/<?php echo $list['image_url'];?>"></td>
						
						<td>
					<label class="switch"><input type="checkbox" id="togBtn" value="<?php echo  $list['status'] ?>" <?php if($list['status']){ echo 'checked'; } ?> onclick="changestatus('<?php echo  $list['id']; ?>','<?php echo  $list['status']; ?>'); " ><div class="sliderTog round "></div></label>
				</td> 
							
                        <td>
                        	<a href="<?php echo base_url();?>Admin/slider_delete/<?php echo $list['id'];?>"><span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span></a>
                        </td>
					</tr>
					
				<?php  $i++; } } ?>
					
				
				</tbody>
				
				</table>
										</div>
									</div>
								</div>

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
   		
   	} );
   } );
   
</script>

<script>
	function changestatus(id,status){
		//alert(id);
		//alert(status);
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Admin/change_slider_tatus',
			data:{'id':id,'status':status},
			success: function(html){
				
				return true();
				
			}
		});
	}

</script>