<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:35 GMT -->
<head>
    <meta charset="UTF-8">
	
	<title>B2B Marketplace</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="AxilBoard Bootstrap 4 Admin Template">
	<meta name="author" content="CodePassenger">
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=css?family=Robot%7cMaterial+Icons" rel="stylesheet" type='text/css'>
	
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="assets/css/uploadfile.css">
    <link rel="stylesheet" href="assets/css/emoji.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/lobipanel.min.css">
	
	<!-- Material Design CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" href="assets/css/ripples.min.css">
	<link rel="stylesheet" href="assets/css/mdb.min.css">
	
	<!-- Responsive Mobile Menu -->
	<link rel="stylesheet" href="assets/css/responsive-menu/jquery.accordion.css">
	<link rel="stylesheet" href="css/vertical-menu.css">
	
    <link rel="stylesheet" href="css/app.css">
	
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="menu-collapsed" style="background:url(images/signup_image.png); background-repeat: no-repeat;">
	<div class="apps-header navbar">
		<div class="clearfix"></div>
	</div>
	<div class="apps-container-wrap page-container widget-page">
		<div class="page-content">
			<div class="container-fluid">
				<!-- <div class="row">
					<div class="page-banner">
						<div class="banner-logo-block">
							<a href="#">
								<img src="images/logo-large.php" alt="img">
							</a>
						</div>
					</div>
				</div> -->
				<div class="widget-form-block">
					<div class="box-widget">
						<div class="panel-default">
							<div class="widget-block-title">
								<h3>Sign up</h3>
								<p>Please enter your data to register.</p>
							</div>
							<div class="form-block">
								<form class="form-common" action='./php_form/admin_signup.php' method="POST">
									<div class="row">
										<div class="form-group col-lg-6">
											<input type="text" class="form-control" id="input-name-one" placeholder="First Name" name='first_name' required>
										</div>
										<div class="form-group col-lg-6">
											<input type="text" class="form-control renter-block" placeholder="Last Name" name='last_name' required>
										</div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name='admin_email_id' required>
									</div>
									<div class="row">
										<div class="form-group password-group col-lg-6">
											<input type="text" class="form-control" id="input-passwoed-one" placeholder="Phone Number" name='contact_no' required>
										</div>
										<div class="form-group password-group col-lg-6">
											<input type="password" class="form-control renter-block" placeholder="Password" name='admin_password' required>
										</div>
									</div>
									<div class="form-group row form-check-row">
										<div class="col-lg-12">
											<div class="form-check">
												<label class="custom-control custom-checkbox condition-text">
													<input type="checkbox" class="custom-control-input" name="accept">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">I accept <a href="#">Terms and Conditions</a></span>
												</label>
												<br>
												<span>
												<?php 
													if (isset($_GET['x'])) {
														$result = $_GET['x'];
														echo $result;
													}
												?>
												</span>
											</div>
										</div>
									</div>
									<div class="form-btn-block">
										<button type="submit" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Sign Up</button>
									</div>
								</form>
								<div class="signin-others-option-block">
									<h4>Sign in with</h4>
									<div class="social-icon-btn-group-detail">
										<a href="javascript:void(0)" class="btn icon-btn-detail-fb btn-rounded waves-effect waves-light">
											<i class="fa fa-facebook left"></i>
											Facebook
										</a>
										<a href="javascript:void(0)" class="btn icon-btn-detail-tw btn-rounded waves-effect waves-light">
											<i class="fa fa-twitter left"></i>
											Twitter
										</a>
										<a href="javascript:void(0)" class="btn icon-btn-detail-gplus btn-rounded waves-effect waves-light">
											<i class="fa fa-google-plus left"></i>
											Google +
										</a>
									</div>
									<p>Already have an account? <a href="/login.php">Sign In Here</a></p>
								</div>
							</div>
						</div><!-- panel -->
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 	<script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-toggle.min.js"></script>
    <script src="assets/js/bootstrap-formhelpers.min.js"></script>
    <script src="assets/js/bootstrap-formhelpers-languages.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="assets/js/validator.min.js"></script>
	<script src="assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="assets/js/jquery-tree-view.js"></script>
	<script src="assets/js/jquery.uploadfile.min.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<script src="assets/js/jquery.simpleWeather.min.js"></script>
	<script src="assets/js/tinymce/tinymce.min.js"></script>
	<script src="assets/js/fullcalendar/moment.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/lobipanel.min.js"></script>
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/jquery.steps.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	 -->
	<!-- Material-JS -->
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/ripples.min.js"></script>
	
	<!-- Responsive Mobile Menu -->
	<script src="assets/js/responsive-menu/jquery.accordion.js"></script>
	
	<!-- Counter-Up-JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	
	<!-- Emoji-JS -->
	<script src="assets/js/emoji/config.js"></script>
	<script src="assets/js/emoji/util.js"></script>
	<script src="assets/js/emoji/jquery.emojiarea.js"></script>
	<script src="assets/js/emoji/emoji-picker.js"></script>

    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:35 GMT -->
</html>
