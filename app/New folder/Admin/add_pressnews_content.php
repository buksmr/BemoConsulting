<?php include ("header.php"); ?>
<style>
	.errmsg{color:red;}
</style>
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php include ("sidebar.php"); ?> 
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>Admin/dashboard">Home</a>
							</li>														
							<li class="active">Press & News</li>

						</ul><!-- /.breadcrumb -->
					</div>
					<p><?php if($this->session->flashdata('message'))
						{
						echo '<h5 style="color:green">'.$this->session->flashdata('message').'</h5>';
						}				  
						?> 
					</p>
						<?php //print_r($aboutus);
						//echo $aboutus->content;
						//echo $profiledata->mobile;
						?>
					<div class="page-content">
						<div class="page-header">
							<h1>
								Press & News						
							</h1>
						</div>
						<!-- /.page-header -->
						
						
						<!-- Update profile data -->						
						<form id="" action="<?php echo base_url();?>Admin/add_pressnews" method="post">
						<div class="container">	
						<div class="row">					 					
						<div class="clearfix"></div>
							<div class="col-sm-12">
								<label>Press & News content<span style="color:red">*</span></label>
										  <textarea id="content" name="content" style="width:600px;" required>
												<?php 
												if($aboutus->content){
													echo $aboutus->content;
													/* if(isset($_GET['page'])){
													  get_content($_GET['page']);
													
													} */
												}
												?>
											</textarea>
											<script>
												CKEDITOR.replace( 'content', {
													fullPage: true,
													allowedContent: true,
													extraPlugins: 'wysiwygarea',
													width: '950px'
												});
											</script> 
							</div>
							
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-sm btn-primary" style="width:10%;margin-top:26px;" >Submit </button>
									
								</div>
							</div>
						</div>
						</div>						
						</form>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	
<div class="footer">
      <div class="footer-inner">
         <div class="footer-content">
            <span class="bigger-120">
			<span class="blue bolder">Copyrights &copy; 2020</span>
				Freelancebit All rights reserved.
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

<script type="text/javascript">
      $(document).ready(function() {
    $('#example_category').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          
           
        ]
    } );
} );
</script>
<script>
	function changestatus(id,status){
		//alert(id);
		//alert(status);
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>Admin/change_cat_tatus',
			data:{'cat_id':id,'status':status},
			success: function(html){
				return true();
			}
		});
	}

</script>

<script type="text/javascript">
   if('ontouchstart' in document.documentElement) document.write("<script src='admin_assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
   
</script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.sparkline.index.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.resize.min.js"></script>
<!-- ace scripts -->
<script src="<?php echo base_url(); ?>admin_assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/ace.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   
   $('#datatable').dataTable();
   
   
   
    $("[data-toggle=tooltip]").tooltip();
   
   
   
   });
   
   
   
</script>