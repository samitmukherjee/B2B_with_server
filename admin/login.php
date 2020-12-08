<?php

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:35 GMT -->
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
	</div><!-- apps-header -->
	<div class="apps-container-wrap page-container widget-page">
		<div class="page-content">
			<div class="container-fluid">
				<div class="widget-form-block">
					<div class="box-widget">
						<div class="panel-default">
							<div class="widget-block-title">
								<h3>Login to Admin</h3>
								<p>Please enter your credentials to login.</p>
							</div>
							<div class="form-block">
								<form class="form-common" action="./php_form/admin_login.php" method="POST">
									<div class="form-group row">
										<div class="col-md-12">
											<input type="text" class="form-control" id="inputUserNamel3" placeholder="Email or phone no" name="email_or_phone" required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="admin_password" required>
										</div>
									</div>
									<div class="form-group row form-check-row">
										<div class="col-md-6">
											<div class="form-check">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="remember">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Remember Me</span>
												</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="forgot-link-block">
												<a href="#" class="forgot-link">Forget Password?</a>
											</div>
										</div>
									</div>
									<div class="form-group row last">
										<div class="col-md-12">
											<div class="form-btn-block">
												<button type="submit" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Login</button>
											</div>
										</div>
									</div>
									<span>
										
									<?php 
                                        if (isset($_GET['x'])) {
                                            $result = $_GET['x'];
                                            echo $result;
                                        }
                                    ?>
									</span>
								</form>
							</div>
						</div><!-- panel -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
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
	<script src="assets/js/jquery.steps.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	
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

<!-- Mirrored from themerail.com/html/listingGeo/admin/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:35 GMT -->
</html>
