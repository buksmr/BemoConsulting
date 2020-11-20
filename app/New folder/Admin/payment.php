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
					<a href="<?php echo base_url();?>Admin/payment">Order/Payment Management</a>
				</li>							
				

			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					Order/Payment Management						
				</h1>
			</div><!-- /.page-header -->
			
			<?php if($this->session->flashdata('success'))
				{ ?>
				   <div class="alert alert-success">
					 <?php echo $this->session->flashdata('success'); ?>
				   </div>
				<?php } ?>	

			<div class="row">
			<form action="<?php echo base_url();?>Admin/payment" method="post">			
				<h3 style="margin-left: 9px;">Total Order/Payment</h3>
				<div class="col-sm-3">
					<div class="form-group">
						<label>Filter </label>
						<select class="form-control font-mark-form" id="sel1" name="filter">
							<option value="">All</option>
							<option value="1" <?php if($filter == 1){echo 'selected="selected"';}?> >Daily</option>
							<option value="2" <?php if($filter == 2){echo 'selected="selected"';}?> >Weekely</option>
							<option value="3" <?php if($filter == 3){echo 'selected="selected"';}?> >Monthly</option>					 		
					   </select>
					</div>
				</div>

				<!--<div class="col-sm-3">
					<div class="form-group">
						<label>Weekly</label>
						<select class="form-control font-mark-form" id="sel1" name="sellist1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
					   </select>
					</div>
				</div>-->

				<div class="col-sm-3">
						<button class="btn btnDefault" type="submit" style="margin-top: 25px;">Submit</button>					
				</div>			
				</form>
			</div>	
			
<?php //print_r($payment_list[0]);?>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-xs-12">							
					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Total Payment (client/freelancer)
					</div>
						
					<br>	
					<div>
						<table id="examples" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>

									<th>Sr.No</th>
									<th>Client</th>
									<th>Freelancer</th>
									<th>Gig Name</th>
									<th>Payment Date</th>
									<th>Total Payment</th>
									<th>Charge Id</th>
									<th>Status</th>
									<th>Action</th>							
								</tr>
							</thead>

							<tbody>


							<?php if(count($payment_list) > 0){

								$i=1;

								foreach($payment_list as $list){
									$project_id =$list['project_id'];
									$seller_id =$list['seller_id'];
									$buyer_id =$list['user_id'];
									$buyer_status =$list['buyer_status'];
									if($buyer_status ==0){$status ="In-Progress";}else{$status ="Completed";}
									
									$query=$this->db->query("SELECT first_name as seller_fname,last_name as seller_lname FROM `tbl_user` where id =".$seller_id);
									$result=$query->result_array();
									
									if($result){
										$seller =$result[0]['seller_fname']." ".$result[0]['seller_lname'] ;
									}else{
										$seller = '';
									} 
									
								?>
								<tr>

									
									<td><?php echo $i; ?></td>

									<td>
<?php if($list['display_name'] !='')
{
	$name_user = str_replace(' ', '_', $list['display_name']);
	$user_nam_on_url=$name_user;
}
else{ 
	$name_user = str_replace(' ', '_', $list['username']);
	$user_nam_on_url=$name_user;
}?>

                                    <a href="<?php echo base_url();?>freelancebit_profile_new/<?php echo base64_encode($buyer_id);?>/<?php echo $user_nam_on_url; ?>" ><?php echo $list['buyer_fname'] .' '.$list['buyer_lname'];?></a> </td>
									<td><a href="<?php echo base_url();?>freelancebit_profile_new/<?php echo base64_encode($seller_id);?>/<?php echo $user_nam_on_url; ?>" ><?php echo $seller ; ?></a></td>
									
									<td><?php echo $list['project_title'];?></td>
									<td><?php echo $list['created_date'];?></td>
									<td><?php echo $list['total_price'];?></td>
									<td><?php echo $list['charge_id'];?></td>
									<td><?php echo $status;?></td>
									<td>
									<span title="View"><a href="<?php echo base_url(); ?>Admin/view_projectpayment/<?php echo $list['order_id'];?>"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></a></span>

									<!--<span title="Edit"><a href="<?php echo base_url(); ?>Admin/edit_projectpayment/<?php echo $list['order_id'];?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></span>-->
									
									<span title="Delete"><a href="<?php echo base_url(); ?>Admin/delete_order/<?php echo $list['order_id'];?>"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></a></span>
								   </td>
								   
								   
								</tr>

							<?php  $i++; } }?>
							
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
   		dom: 'Bfrtip',
   		buttons: [
   		]
   	} );
   } );
   
</script>
