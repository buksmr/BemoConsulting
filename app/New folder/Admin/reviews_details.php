<?php include ("header.php"); ?>
<!--============ HEader End Here============-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />

<style>
.checked {
  color: orange;
}
</style>

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
							<li class="#">Reviews Management</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Reviews Management				
							</h1>
						</div><!-- /.page-header -->

						<?php if($this->session->flashdata('success'))
							{ ?>
							   <div class="alert alert-success">
								 <?php echo $this->session->flashdata('success'); ?>
							   </div>
							<?php } ?>	
						<?php //print_r($review_list); ?>

						<div class="clearfix"></div>
							<div class="row">
									<div class="col-xs-12">							
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
										Reviews Management	
										</div>
									
									<div>
										<br>
											<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>Sr No</th>
							<th>Comments</th>
							<th>Project owner</th>
							<th>Rating</th>							
							<th>Review</th>
							<th>Actions</th>							
						</tr>
					</thead>
					
					
					
	
						

			
				<tbody>
				
				<?php if(count($review_list) > 0){
					$i = 1;
					foreach($review_list as $list){ ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $list['title'];?></td>
						<td><?php echo $list['firstname'] ."  ". $list['lastname'];?></td>
						<td style="width:75px;"><?php  $rat = round(($list['qua_rating'] + $list['qua_rating'] + $list['qua_rating'])/3);?> 
								<span class="fa fa-star <?php if($rat >= 1){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rat >= 2){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rat >= 3){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rat >= 4){echo "checked";}?>"></span>
								<span class="fa fa-star <?php if($rat >= 5){echo "checked";}?>"></span></td>
					
						<td>
							<?php echo $list['review'];?>
						</td>					
                        <td>                        	
                        	<span title="Delete"><a href="<?php echo base_url();?>Admin/delete_review/<?php echo $list['id']?>/<?php echo $list['project_id']?>"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></a></span>							
                        </td>
					</tr>
					
				<?php $i++; } } ?>


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
   	$('#datatable').DataTable( {
   		dom: 'Bfrtip',
   		buttons: [
   			'excel', 'pdf'
   		]
   	} );
   } );
   
</script>
	
