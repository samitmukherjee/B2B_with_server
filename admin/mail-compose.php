<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

include('./php_form/config.php');
$get_guest_id = $_POST['get_guest_id'];
// echo $get_guest_id;
// echo "<br>";
$sql = "SELECT * FROM contact_us WHERE contact_id = $get_guest_id";
// echo $sql;
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-compose.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:32 GMT -->
<head>
    <meta charset="UTF-8">
	 
	<!-- <title>ListingGEO - Directory Listing Template</title> -->
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
<body class="menu-collapsed">
	
	<div class="apps-container-wrap page-container">
		<div class="page-content">
			<div class="container-fluid">
				<div class="inbox-wrap">
					<div class="row">
						<div class="inbox-view-wrap col-lg-12">
							<div class="inbox-body">
								<div class="inbox-content">
									<div class="inbox-compose-block">
										<div class="compose-title">
											<h5>Compose Message</h5>
										</div>
										<?php
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_assoc($result)){

										?>
										<div class="compose-form-area">
											<form class="form-common" action="./php_form/send_mail.php" method="POST">
												<div class="row">							
													<div class="form-group col-lg-4">
														<input type="email" class="form-control" name="mail_to" id="input-to-mail" placeholder="To" value="<?php echo $row['guest_email'] ?>">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-lg-4">
														<input type="text" name="subject" class="form-control" id="formGroupExampleInput" placeholder="Subject">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-lg-8">
														<textarea name="message" class="compose-box" rows="8"></textarea>
													</div>
												</div>
												
												<div class="form-btn-block text-right">
													<button type="submit" name="send_email" class="btn btn-raised btn-primary waves-effect waves-light">
														<i class="fa fa-paper-plane-o"></i>
														Send
													</button>
												</div>
											</form>
											<!-- <div class="drag-and-drope-block">
												<h6>Attachments</h6>
												<div id="fileuploader" class="file-upload">Upload</div>
											</div> -->
										</div>
										<?php
												}
											}
										?>
									</div><!-- Inbox-compose-block -->
								</div>
							</div>
						</div>
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
	<!-- <script src="assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="assets/js/jquery-tree-view.js"></script>
	<script src="assets/js/jquery.uploadfile.min.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<script src="assets/js/jquery.simpleWeather.min.js"></script> -->
	<!-- <script src="assets/js/tinymce/tinymce.min.js"></script> -->
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
	
	<!-- <script>
		
	</script> -->
</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-compose.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:32 GMT -->
</html>