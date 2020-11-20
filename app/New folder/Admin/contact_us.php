<?php include ("header.php"); ?>
<!--============ HEader End Here============-->
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
            <li class="active">Contact Us Management</li>
         </ul>
         <!-- /.breadcrumb -->
      </div>
      <div class="page-content">
         <div class="page-header">
            <h1>
               Contact Us Management			
            </h1>
         </div>
         <!-- /.page-header -->
         <?php if($this->session->flashdata('success'))
            { ?>
         <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
         </div>
         <?php } ?>
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-xs-12">
               <div class="clearfix">
                  <div class="pull-right tableTools-container"></div>
               </div>
               <div class="table-header">
                  Contact Us User List
               </div>

               <br>
               <div>
                  <table id="examples" class="table table-striped table-bordered" cellspacing="0" width="100%">
                     <thead>
                        <tr>
                           <th>Sr.No</th>
                           <th>Name</th>
                           <th>Email ID</th>
                           <th>Telephone</th>
                           <th>Message</th>
                           <th>Department</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                  
                     <tbody>
                        <?php $cnt=1; foreach ($contact_us_list as  $value) { ?>
                        <tr>
                           <td><?php echo $cnt++; ?></td>
                           <td><?php echo $value['name']; ?></td>
                           <td><?php echo $value['email']; ?></td>
                           <td><?php echo $value['phone']; ?></td>
                           <td><?php echo $value['message']; ?></td>	
                           <td><?php echo $value['depart_name']; ?></td>
							
							<td>
                              <span title="Edit"><a href="<?php echo base_url(); ?>Admin/delete_contact_us/<?php echo base64_encode($value['id']); ?>"><button class="btn btn-primary btn-xs" onclick="return confirm('Are you sure you want to delete this record?');"><span class="glyphicon glyphicon-trash"></span></button></a></span>
							  
							  
                             
							</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- /.page-content -->
   </div>
</div>
<!-- /.main-content -->

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