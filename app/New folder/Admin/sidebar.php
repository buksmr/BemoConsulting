<div id="sidebar" class="sidebar responsive ace-save-state">

				<script type="text/javascript">

					try{ace.settings.loadState('sidebar')}catch(e){}

				</script>

<?php 
	$admin_id= $_SESSION['admin_login'] ;
	$admindata=$this->db->query("SELECT * FROM tbl_admin where id=$admin_id")->row();
	
	$role=$admindata->role;
	if($role ==2){
		$permission=$this->db->query("SELECT * FROM tbl_admin_permission where admin_id=$admin_id")->row();
	 
?>


				<ul class="nav nav-list">
					<?php if ($permission->dashboard ==1){ ?>
					<li class="">
						<a href="<?php echo base_url(); ?>Admin/dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>
					<?php } ?>
					
					
					<?php if ($permission->subadmin ==1){ ?>
					<li class="">
						<a href="<?php echo base_url(); ?>Admin/add_subadmin">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Administrator Management </span>
						</a>
						<b class="arrow"></b>
					</li>
					<?php } ?>
					
					<?php if ($permission->user ==1){ ?>
					<li class="<?php if(isset($first_part)){ if($first_part == 'manage_user') { echo 'active'; } else{ echo ''; } } ?>">

						<a href="<?php echo base_url(); ?>Admin/manageuser">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">User Management </span>
						</a>
						<b class="arrow"></b>
					</li>
					<?php } ?>
					
					
					<?php if ($permission->project ==1){ ?>
					<!--<li class="<?php if(isset($first_part)){ if($first_part == 'project') { echo 'active'; } else{ echo ''; } } ?>">

						<a href="<?php echo base_url(); ?>Admin/project_admin_mgt">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">Project Management</span>
						</a>
						<b class="arrow"></b>
					</li>-->
					
					
					
					<li class="<?php if(isset($first_part)){ if($first_part == 'project') { echo 'active'; } else{ echo ''; } } ?>">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">User-generated Content</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/project_admin_mgt">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload Gigs
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_admin_mgt_opening">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload Projects
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>

					</li>
					<?php } ?>


					<?php if ($permission->slider ==1){ ?>
                    <li class="">
						<a href="<?php echo base_url(); ?>Admin/slider_mgt">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">Slider Management</span>
						</a>
						<b class="arrow"></b>
					</li>
					<?php } ?>
					
					<?php if ($permission->content ==1){ ?>
					<li class="">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-user-plus"></i>
							<span class="menu-text">Content Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
  
						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/aboutus_mgmt"> <!--aboutus_content -->
									<i class="menu-icon fa fa-caret-right"></i>
									About Us
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/terms_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Terms And Conditions
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/privacypolicy_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Privacy And Policy
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="<?php echo base_url();?>Admin/pressnews_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Press And News
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

					</li>
					<?php } ?>

					
					<?php if ($permission->category ==1){ ?>
					
					
					<li class="<?php if(isset($first_part)){ if($first_part == 'category') { echo 'active'; } else{ echo ''; } } ?>">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-user-plus"></i>
							<span class="menu-text">Marketplace Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
  
						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/main_categoary_mgt"> <!--aboutus_content -->
									<i class="menu-icon fa fa-caret-right"></i>
									Marketplace Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/gig_category_management">
									<i class="menu-icon fa fa-caret-right"></i>
									Category Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_category_management">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload Project Category Management

								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>

					</li>
					
					
					<?php } ?>

					

					<?php if ($permission->review ==1){ ?>
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/reviews_mgt">

						

							<i class="menu-icon fa fa-comments"></i>

							<span class="menu-text">Review Management</span>

						</a>

						<b class="arrow"></b>

					</li>
					<?php } ?>


					<?php if ($permission->payment ==1){ ?>
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/payment">

							<i class="menu-icon fa fa-cc-paypal"></i>

							<span class="menu-text">Order/Payment Mgmt</span>

						</a>

						<b class="arrow"></b>

					</li>
					<?php } ?>
					<?php if ($permission->donation ==1){ ?>
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/donation_management">

							<i class="menu-icon fa fa-file"></i>

							<span class="menu-text">Donation Management</span>

						</a>

						<b class="arrow"></b>

					</li>
					<?php } if ($permission->report ==1){ ?>
					<li class="">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-file"></i>
							<span class="menu-text">Report Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="<?php echo base_url();?>Admin/user_report">
									<i class="menu-icon fa fa-caret-right"></i>
									User Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_report">
									<i class="menu-icon fa fa-caret-right"></i>
									Gig Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_admin_mgt_opening">
									<i class="menu-icon fa fa-caret-right"></i>
									Project Report 
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="<?php echo base_url(); ?>Admin/payment_report">

							     <i class="menu-icon fa fa-caret-right"></i>

							      <span class="menu-text">Order Report</span>

						           </a>


								<b class="arrow"></b>
							</li>

						</ul>

					</li>
					<?php } ?>

					<!--<li class="">

						<a href="<?php echo base_url(); ?>Admin/report_generation">

							<i class="menu-icon fa fa-file"></i>

							<span class="menu-text">Report Management</span>

						</a>

						<b class="arrow"></b>

					</li>-->

				</ul><!-- /.nav-list -->
	 <?php } else{ ?>
			<ul class="nav nav-list">
					
					<li class="">
						<a href="<?php echo base_url(); ?>Admin/dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="<?php echo base_url(); ?>Admin/add_subadmin">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Administrator Management </span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="<?php if(isset($first_part)){ if($first_part == 'manage_user') { echo 'active'; } else{ echo ''; } } ?>">

						<a href="<?php echo base_url(); ?>Admin/manageuser">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">User Management</span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="<?php if(isset($first_part)){ if($first_part == 'project') { echo 'active'; } else{ echo ''; } } ?>">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text">User-generated Content</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/project_admin_mgt">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload Gigs
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_admin_mgt_opening">
									<i class="menu-icon fa fa-caret-right"></i>
									Upload Projects
								</a>

								<b class="arrow"></b>
							</li>
							
							
						</ul>

					</li>
					
                    <li class="">
						<a href="<?php echo base_url(); ?>Admin/slider_mgt">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">Slider Management</span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-user-plus"></i>
							<span class="menu-text">Content Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/aboutus_mgmt">
									<i class="menu-icon fa fa-caret-right"></i>
									About Us
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/terms_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Terms And Conditions
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/privacypolicy_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Privacy And Policy
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="<?php echo base_url();?>Admin/pressnews_content">
									<i class="menu-icon fa fa-caret-right"></i>
									Press And News
								</a>

								<b class="arrow"></b>
							</li>

						</ul>

					</li>
					
					<li class="<?php if(isset($first_part)){ if($first_part == 'category') { echo 'active'; } else{ echo ''; } } ?>">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-user-plus"></i>
							<span class="menu-text">Marketplace Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
  
						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>Admin/main_categoary_mgt"> <!--aboutus_content -->
									<i class="menu-icon fa fa-caret-right"></i>
									Marketplace Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/gig_category_management">
									<i class="menu-icon fa fa-caret-right"></i>
									Gig to Category Management
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_category_management">
									<i class="menu-icon fa fa-caret-right"></i>
									Project Category Management
								</a>
								<b class="arrow"></b>
							</li>



						</ul>

					</li>
					
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/reviews_mgt">

						

							<i class="menu-icon fa fa-comments"></i>

							<span class="menu-text">Reviews Management</span>

						</a>

						<b class="arrow"></b>

					</li>
					
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/payment">

							<i class="menu-icon fa fa-cc-paypal"></i>

							<span class="menu-text">Order/Payment Mgmt</span>

						</a>

						<b class="arrow"></b>

					</li>
					
					
					<li class="">

						<a href="<?php echo base_url(); ?>Admin/donation_management">

							<i class="menu-icon fa fa-file"></i>

							<span class="menu-text">Donation Management</span>

						</a>

						<b class="arrow"></b>

					</li>

					<li class="">

						<a href="<?php echo base_url(); ?>Admin/contact_us">

							<i class="menu-icon fa fa-file"></i>

							<span class="menu-text">Contact Us</span>

						</a>

						<b class="arrow"></b>

					</li>
					
					<li class="">
						<a href="#"	class="dropdown-toggle">
							<i class="menu-icon fa fa-file"></i>
							<span class="menu-text">Report Management</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="<?php echo base_url();?>Admin/user_report">
									<i class="menu-icon fa fa-caret-right"></i>
									User Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_report">
									<i class="menu-icon fa fa-caret-right"></i>
									Gig Report 
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url();?>Admin/project_opening_report">
									<i class="menu-icon fa fa-caret-right"></i>
									Project Report
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="<?php echo base_url(); ?>Admin/payment_report">

							     <i class="menu-icon fa fa-caret-right"></i>

							      <span class="menu-text">Order Report</span>

						           </a>

								<b class="arrow"></b>
							</li>

						</ul>

					</li>

				</ul><!-- /.nav-list -->
	 <?php } ?>


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">

					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>

				</div>





			</div>