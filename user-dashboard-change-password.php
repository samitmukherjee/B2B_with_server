<?php
	session_start();
	if(empty($_SESSION['user'])){
		header("location: ./login.php");
	}

	include ("php_form/config.php");

	$email = $_SESSION['user'];

	$sql = "SELECT user_id FROM user_details WHERE user_email_id = '$email' ";
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$user_id = $row['user_id'];

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-message.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:29 GMT -->
<head>
    <meta charset="UTF-8">
    <title>B2B Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/lobipanel.min.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="dashboard">
	<div class="main-wrap" style="width: 100%;">
    	<div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
			<div class="container">
			<form id="update_profile_form" method="POST" class="form-common add-listing-form" action="./php_form/change_user_password_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align:center;">
					<!-- Personal Information -->
					<div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Change Password</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
										<label>New Password</label>
										<input id="new_password" name="new_password" type="password" class="form-control form-single-element" required>
									</div>
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
								<div class="form-group">
										<label>Confirm Password</label>
										<input id="confirm_password" name="confirm_password" type="password" class="form-control form-single-element" required>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button type="submit" class="danger-btn" id="submit_button" name="change_password" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
						<i class="fa fa-plus" aria-hidden="true"></i>
						Update
					</button>
				</form>
			</div>
		</div>
	</div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.bxslider.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/lobipanel.min.js"></script>
    <script src="assets/js/jquery.accordion.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
	
    <!-- Tinymce-JS -->
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <!-- Google-map -->
    
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-message.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:30 GMT -->
</html>