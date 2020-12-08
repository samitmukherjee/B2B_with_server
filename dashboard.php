<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')) {
	header("location: ./business-login.php");
}

include ("php_form/config.php");

if($_SESSION['business'] == 'owner'){

	$email = $_SESSION['business_user'];

	$sql = "SELECT business_id FROM business_details WHERE business_email_id = '$email'";
	// echo "owner".$sql;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

} elseif ($_SESSION['business'] == 'executive') {
	
	$email = $_SESSION['business_user'];

	$sql = "SELECT business_id FROM business_executive WHERE executive_email_id = '$email'";
	// echo "executive".$sql;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

}

$business_id = $row['business_id'];

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
	
		$query_product_count = "SELECT product_id FROM product_details WHERE business_id = $business_id";
		$result_product_count = mysqli_query($conn, $query_product_count);
		$row_product_count = mysqli_num_rows($result_product_count);

		$query_executive_count = "SELECT executive_id FROM business_executive WHERE business_id = $business_id";
		$result_executive_count = mysqli_query($conn, $query_executive_count);
		$row_executive_count = mysqli_num_rows($result_executive_count);

		$query_review_count = "SELECT review_id FROM review_details WHERE business_id = $business_id";
		$result_review_count = mysqli_query($conn, $query_review_count);
		$row_review_count = mysqli_num_rows($result_review_count);

		$query_enquiry_count = "SELECT enquiry_id FROM enquiry_details WHERE business_id = $business_id";
		$result_enquiry_count = mysqli_query($conn, $query_enquiry_count);
		$row_enquiry_count = mysqli_num_rows($result_enquiry_count);
	?>

	<div class="main-wrap" style="width: 100%;">
        <div class="add-listing-wrap" style="margin-left: 10%; margin-top: 120px; margin-bottom: 20px;">
			<div class="container">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row">

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info" style="left: 40%;">
										<span class="number"><?php echo $row_product_count ?></span>
										<span class="a-meta-title">Products</span>
									</div>
									<span class="nmbr-statistic-icon ti-package"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info" style="left: 40%;">
										<span class="number"><?php echo $row_executive_count ?></span>
										<span class="a-meta-title">Executives</span>
									</div>
									<span class="nmbr-statistic-icon ti-user"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
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

						<div class="col-lg-3 col-sm-6">
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
				</div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="assets/js/gmap3.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
</html>