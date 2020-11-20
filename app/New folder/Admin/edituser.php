<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Freelancebit</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="admin_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="admin_assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="admin_assets/css/fonts.googleapis.com.css" />

	
		<!-- ace styles -->
		<link rel="stylesheet" href="admin_assets/css/custom.css"/>

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="admin_assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="admin_assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="admin_assets/css/ace-part2l.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="admin_assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="admin_assets/js/ace-extra.min.js"></script>
	<!--[if !IE]> -->
		<script src="admin_assets/js/jquery-2.1.4.min.js"></script>
		<script src="admin_assets/js/bootstrap.min.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="admin_assets/js/html5shiv.min.js"></script>
		<script src="admin_assets/js/respond.min.js"></script>
		<![endif]-->

		<!--============TOP HEader End Here============-->
		<!--============ HEader Start Here============-->
	</head>
	<body class="no-skin">
	<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<img src="admin_assets/images/avatars/ps_logo.png" class="logo">
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">				
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="admin_assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									John
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
<!--============ HEader End Here============-->


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!--============ Sidebar Satrt Here============-->
			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

			

				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="subadmin.html">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Add Sub Admin </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="active">
						<a href="manageuser.html">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Manage Users </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="managequestion.html">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Manage Questionnaire </span>
						</a>

						<b class="arrow"></b>
					</li>					
					<li class="">
						<a href="payment.html">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text">Payment Management </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="setprofile.html">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Set Default Profile  </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="emailtemp.html">
							<i class="menu-icon fa fa-envelope"></i>
							<span class="menu-text">Email Template  </span>
						</a>
						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
<!--============ Sidebar END Here============-->


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.html">Home</a>
							</li>
							<li class="">
								<a href="manageuser.html">Manage User</a>
							</li>
							<li class="active">User View</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								USER VIEW
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" id="" placeholder="Mark"  class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="" placeholder="Doe"  class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>User Name</label>
									<input type="text" id="" placeholder="markdoe@mail.com"  class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Phone</label>
									<input type="number" id="" placeholder="213456879"  class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Residential Address</label>
									<input type="text" id="" placeholder="s-502 Glean Rock, France"  class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Region</label>
									<input type="number" id="" placeholder="Region" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="" placeholder="markdoe@mail.com" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Number Of Children</label>
									<input type="text" id="" placeholder="01" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>How Do You Know Parenthsaring</label>
									<input type="text" id="" placeholder="How Do You Know Parenthsaring" class="form-control">
								</div>
							</div>

							<div class="clearfix"></div>
							<div class="page-header">
							<h1>
								Application Form
							</h1>
						</div><!-- /.page-header -->

							<div class="col-sm-3">
								<div class="form-group">
									<label> Name</label>
									<input type="text" id="" placeholder="Mark" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Nick Name</label>
									<input type="text" id="" placeholder="mar" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Special diet</label><br/>
									 <label class="middle">
								        <input class="ace" type="checkbox" disabled="" checked="" id="">
								        <span class="lbl"> vegan‎</span>
								    </label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Education</label>
									<textarea class="form-control" disabled="">The Authoritarian Style (Strict parents, many rules, high expectations, reward and punishment characterize this style of education.)</textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Dealing with media</label>
									<input type="number" id="" placeholder="1-fussy" disabled="" class="form-control">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Security Needs</label>
									<input type="number" id="" placeholder="1-strong need for security" disabled="" class="form-control">
								</div>
							</div>
							
							<div class="col-sm-3">
								<div class="form-group">
									<label>Activity</label>
									<input type="text" id="" placeholder="1-We are often at home" disabled="" class="form-control">
								</div>
							</div>
							
							

							<div class="col-sm-12">
								<div class="form-group">
									<button class="btn btnDefault">Edit</button>
								</div>
							</div>
						</div>
				



						<div class="clearfix"></div>

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

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

	

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='admin_assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="admin_assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="admin_assets/js/jquery.dataTables.min.js"></script>
		<script src="admin_assets/js/jquery-ui.custom.min.js"></script>
		<script src="admin_assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="admin_assets/js/jquery.easypiechart.min.js"></script>
		<script src="admin_assets/js/jquery.sparkline.index.min.js"></script>
		<script src="admin_assets/js/jquery.flot.min.js"></script>
		<script src="admin_assets/js/jquery.flot.pie.min.js"></script>
		<script src="admin_assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="admin_assets/js/ace-elements.min.js"></script>
		<script src="admin_assets/js/ace.min.js"></script>
<script type="text/javascript">

$(function() {
  $('#tagSelectore').change(function(){
    $('.tags').hide();
    $('#' + $(this).val()).show();
  });
});
</script>

	</body>
</html>
