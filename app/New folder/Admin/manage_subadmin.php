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
							
							<li class="active">Manage Subadmin</li>
							
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Manage Subadmin							
							</h1>
						</div><!-- /.page-header -->

						
				

					<div class="page-header">
							<h1>
								Assign Roll								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
								<label class="middle">
									<input class="ace" type="checkbox" id="id-disable-check">
									<span class="lbl">View subadmin</span>
								</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
								<label class="middle">
									<input class="ace" type="checkbox" id="id-disable-check">
									<span class="lbl">Delete subadmin</span>
								</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
								<label class="middle">
									<input class="ace" type="checkbox" id="id-disable-check">
									<span class="lbl">Edit subadmin</span>
								</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
								<label class="middle">
									<input class="ace" type="checkbox" id="id-disable-check">
									<span class="lbl">Reset subadmin</span>
								</label>
								</div>
							</div>
						
							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Assign Roll</button>
								</div>
							</div>
						</div><!-- ROW -->

						<div class="clearfix"></div>
							<div class="row">
									<div class="col-xs-12">							
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Sub Admin List			
										</div>
									
									<div>
											<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Actions</th>							
						</tr>
					</thead>
					


			
				<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
					<tr>
						<td>Tiger Nixon</td>
						<td>tiger@gmail.com</td>
						<td>xxx xx xx</td>				
                        <td>
                        	<a href="view_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></span></a>
                        	<a href="edit_addsubadmin.html">
                        	<span title="Edit"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></span></a>
                        	<span title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span>
                        </td>
					</tr>
				</tbody>
				
				</table>
										</div>
									</div>
								</div>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include ("footer.php"); ?>
