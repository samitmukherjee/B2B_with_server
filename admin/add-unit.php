<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

	include("php_form/config.php");
	
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-inbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
<head>
    <meta charset="UTF-8">
	 
	<title>B2B Marketplace - Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="AxilBoard Bootstrap 4 Admin Template">
	<meta name="author" content="CodePassenger">
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=css?family=Robot%7cMaterial+Icons" rel="stylesheet" type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
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
	
	<!-- Jquery datatable -->
	<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<!-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->



    <!-- PDF in a Modal -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	
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
<body class="menu-collapsed">
	
	<div class="apps-container-wrap page-container">
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="page-title-block">
						<h4>Others</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<!-- <li class="breadcrumb-item"><a href="#">MailBox</a></li> -->
							<li class="breadcrumb-item active">Add Unit</li>
						</ol>
					</div>
				</div>
                
                
				<div class="add-listing-wrap">
				<div class="container">
				<form id="add_category_form" method="POST" class="form-common add-listing-form" action="./php_form/add_unit_form.php" enctype="multipart/form-data" novalidate="novalidate" style="border: 1px solid black; padding: 20px;">
					<div class="listing-block businessinfo-listing">
						<h4>Add Unit</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
										<label for="unit">Unit Name</label>
										<input id="unit" name="unit" type="text" class="form-control form-single-element" placeholder="Ex: Box(s), Carton(s)" required>
									</div>
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<button type="submit" class="danger-btn" id="unit_btn" name="unit_btn" style="margin-top: 6%;width: 20%;height: 44%; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
									<i class="fa fa-plus" aria-hidden="true"></i>
									Add
								</button>
							</div>
						</div>
					</div>
				</form>
				</div>
				</div>
        	</div>	
		</div>
	</div>

	
	<!-- <script src="assets/js/jquery-3.2.1.min.js"></script> -->
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

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-inbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
</html>
