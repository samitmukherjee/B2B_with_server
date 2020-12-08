<?php
	session_start();
	if(empty($_SESSION['user'])){
		header("location: ./login.php");
	}

	include ("php_form/config.php");

	$email = $_SESSION['user'];

	$sql = "SELECT * FROM user_Details where user_email_id = '$email'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	$user_id = $row['user_id'];

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:27 GMT -->
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
	<?php 

		$query_order_count = "SELECT enquiry_id FROM enquiry_details WHERE user_id = $user_id AND enquiry_status = '1'";
		$result_order_count = mysqli_query($conn, $query_order_count);
		$row_order_count = mysqli_num_rows($result_order_count);

		$query_review_count = "SELECT review_id FROM review_details WHERE user_id = $user_id";
		$result_review_count = mysqli_query($conn, $query_review_count);
		$row_review_count = mysqli_num_rows($result_review_count);

		$query_enquiry_count = "SELECT enquiry_id FROM enquiry_details WHERE user_id = $user_id";
		$result_enquiry_count = mysqli_query($conn, $query_enquiry_count);
		$row_enquiry_count = mysqli_num_rows($result_enquiry_count);
	?>

	<div class="main-wrap" style="width: 100%;">
    	<div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
			<div class="container">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row">
						
						<div class="col-lg-4 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info" style="left: 40%;">
										<span class="number"><?php echo $row_order_count ?></span>
										<span class="a-meta-title">Orders</span>
									</div>
									<span class="nmbr-statistic-icon ti-package"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info" style="left: 40%;">
										<span class="number"><?php echo $row_review_count ?></span>
										<span class="a-meta-title">Reviews</span>
									</div>
									<span class="nmbr-statistic-icon ti-comment-alt"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info" style="left: 40%;">
										<span class="number"><?php echo $row_enquiry_count ?></span>
										<span class="a-meta-title">Enquiries</span>
									</div>
									<span class="nmbr-statistic-icon ti-email"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

					</div>
				</div><!-- nmbr-statistic-area -->
			</div>
			<!-- call-to-action section-->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="assets/js/gmap3.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
</html>