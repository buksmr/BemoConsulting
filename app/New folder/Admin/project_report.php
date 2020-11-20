<?php include ("header.php"); ?>

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
	
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
								<a href="<?php echo base_url();?>Admin/project_admin_mgt">Gig Report</a>
							</li>							
							

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Gig Report				
							</h1>
						</div><!-- /.page-header -->
					<?php if($this->session->flashdata('success'))
					{ ?>
					   <div class="alert alert-success">
						 <?php echo $this->session->flashdata('success'); ?>
					   </div>
					<?php } ?>
                      
                 <div class="box">
               <?php //print_r($proj_upload_list[0]);?>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                       <tr>
                       	<th>Sr.No</th>
                        <th>Gig Title</th> 	
						<th>Freelancers</th>
						<th>Marketplace</th>
						<th>Category</th>
						<th>Created Date</th>
                      </tr>
                    </thead>

                    <tbody>
                    	<?php $cnt=1; foreach ($proj_upload_list as  $value) { ?>
                      <tr>
                      	<td><?php echo $cnt++; ?></td>
						<td><?php echo $value['title']; ?></td>
						<td><?php echo $value['first_name'].' '.$value['last_name']; ?></td>
						<td><?php echo $value['catname']; ?></td>
						<td><?php echo $value['subcatname']; ?></td>
						
						<td><?php echo $value['created_date_time']; ?></td>
						
                      </tr>
					 <?php } ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


						
				


				


					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
			<?php include ("footer.php"); ?>

<!--<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Freelancebit</span>
							 &copy; 2019-2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div> 

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>-->
		</div><!-- /.main-container -->

		

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
		
				
<script type="text/javascript">
	
/* 
$(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      }); */

</script>

<script>
   $(document).ready(function() {
   	$('#example1').DataTable( {
   		dom: 'Bfrtip',
   	    //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
   	   // "iDisplayLength" : 10, 

   	    
   		 buttons: [
   			'excel', 'pdf'
   		]

   		

   	} );
	
	$('#example2').DataTable( {
   		dom: 'Bfrtip',
   		 "lengthMenu": [[5,10, 25, 50, -1], [10, 25, 50, "All"]],
   		buttons: [
   			'excel', 'pdf'
   		]
   	} );
	
	
   } );
   
</script>

 <script type="text/javascript">
	$(document).ready(function() {
    	alert($('#example1 tr').length);
        /*if ($('#example1 tr').length < 4) {
            $('#example1_paginate').hide();
        }*/
    
});​


</script>
 

	   
		
   
	
	