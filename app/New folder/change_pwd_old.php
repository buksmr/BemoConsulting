<!DOCTYPE html>
<html>
<head>
	<title>Freelancebit!Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
  
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="header">

       <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container-fluid head-main-container-fluid">
	     
        <a class="navbar-brand js-scroll-trigger col-sm-6" href="#page-top">
		  <img src="assets/img/logo.png" alt="logo" class="logo_main" style="margin-top: -14px;">
		
		</a>
		
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsiveafterlogin" aria-controls="navbarResponsiveafterlogin" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
		
        <div class="collapse navbar-collapse col-sm-6" id="navbarResponsiveafterlogin">
          <ul class="navbar-nav ml-auto navbar-upload navbar-nav-pro">
		    <li class="nav-item">
			  <a class="nav-link nav-pro" href="freelance_uploading_opening_project.html">Upload Project </a>
			</li>

			<li class="nav-item">
			  <a class="nav-link nav-pro" href="freelance_uploading_opening_project.html">Upload Project Opening</a>
			</li>
						
          </ul>
        </div>
		
      </div>
    </nav>
		
       <div class="clearfix"></div>  
	</div>  <!-- header -->

<section class="main_change">
	<div class="container-fluid">
	<div class="container">	
     <div class="row">
     	
       <div class="col-sm-6">
         <div class="top_login_change">
       	   
         <form action="/action_page.php">
		    <div class="form-group">
		      <label for="email">Current Password</label>
		      <input type="text" class="form-control" id="Username" placeholder="Current Password" name="UserName">
		    </div>

		    <div class="form-group">
		      <label for="pwd">New Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="New Password" name="pswd">
		    </div>

		     <div class="form-group">
		      <label for="pwd">Repeat Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Repeat Password" name="pswd">
		    </div>


		    <button type="submit" class="btn btn-primary btn-register-Changepwd">Change Password</button>
		    
           </form>
       </div>
    </div>
</div>
</div>
</div>

</section>



<footer>
	<div class="mainfooter">

	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="row">
					<div class="col-sm-6">
						<ul class="list-unstyled footerlink1">
							<h4 style="padding-top:42px;font-weight: bold;font-size: 18px;">CATEGORIES</h4>
							<li><a href="">Graphics & Design</a></li>
							<li><a href="">Digital Marketing</a></li>
							<li><a href="">Writing & Translation</a></li>
							<li><a href="">Video & Animation</a></li>
							


						</ul>
					</div>
					<div class="col-sm-6 footerlink">
							<ul class="list-unstyled" style="padding-top:65px;">
							<li><a href="">Music & Audio</a></li>
							<li><a href="">Programming & Tech</a></li>
							<li><a href="">Business</a></li>
							<li><a href="">Fun & Lifestyle</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<ul class="list-unstyled">
					<h4 style="padding-top:42px;font-weight: bold;font-size: 18px;">SERVICES</h4>
				<li><a href="">Upload Project</a></li>
				
				<li ><a href="" style="color:#1b5ca0;font-weight: bold;">JOIN</a></li>
				<li><a href="">Sign In</a></li>
				</ul>
			</div>

			<div class="col-sm-3 abt_footer">

				<ul class="list-unstyled">
					<h4 style="padding-top:42px;font-weight: bold;font-size: 18px;">ABOUT</h4>
				
				<li><a href="">Press & News</a></li>

				<li><a href="">Privacy Policy</a></li>
				<li><a href="">Terms of Service</a></li>
			</ul>
			</div>

		</div>
	</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 ftr_txt">
				<p>Copyrights &copy; 2019 <span style="color: #1b5ca0;font-weight: bold;">Freelancebit.</span> All rights reserved.</p>
			</div>
			<div class="col-sm-6 ftrLogo">
				<img src="assets/img/logo_footer.png" width="60" height="60" />
			</div>
		</div>
	</div>
</footer>


</div><!-- wrapper -->



<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			
		</script>
</body>
</html>