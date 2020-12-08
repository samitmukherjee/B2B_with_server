<?php

	session_start();
	if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')){
		header("location: ./business-login.php");
	}

	include ("php_form/config.php");

	if($_SESSION['business'] == 'owner'){

		$email = $_SESSION['business_user'];
	
		$sql = "SELECT business_id FROM business_details WHERE business_email_id = '$email'";
		// echo "owner".$sql;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$business_id = $row['business_id'];
	
	} elseif ($_SESSION['business'] == 'executive') {
		
		$email = $_SESSION['business_user'];
	
		$sql = "SELECT business_id FROM business_executive WHERE executive_email_id = '$email'";
		// echo "executive".$sql;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$business_id = $row['business_id'];
	
	}

	$query_load_reviews = "SELECT * FROM review_details, business_details, user_details
				WHERE business_details.business_id = '$business_id'
				AND review_details.user_id = user_details.user_id
				AND business_details.business_id =  review_details.business_id";

	// echo $query_load_reviews;

	$result_load_reviews = mysqli_query($conn, $query_load_reviews);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-review.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
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
        <!-- Slide Menu Section -->
		<div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
			<div class="container">
				<div class="row">
				
					<div class="col-lg-10 offset-lg-1">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title" style="height: 30px">
										<h4 style = "align-items: center;">Reviews</h4>
									</div>
								</div>
								
								<div class="panel-body">
									<div class="listing-reviews">
										<ul>
											<li>
											<?php while($row_reviews = mysqli_fetch_assoc($result_load_reviews)) { ?>
												<div>
													<div class="avatar-block">
														<img src="images/post/author/8.jpg" alt="img" class="img-responsive">
													</div>
													<div class="review-content">
														<a style="font-size: 16px; font-weight: bold;"><?php echo $row_reviews['review_heading']." - ".$row_reviews['first_name']." ".$row_reviews['last_name']."" ?></a>
														<div class="review-entry">
															<p style="font-size: 14px;">
															<?php echo $row_reviews['review'] ?>
															</p>
														</div>
														<a href="javascript:void(0)" class="replay-btn" style="color: #000;">
															<span class="date">
																<i class="fa fa-calendar" aria-hidden="true"></i>
																<?php echo $row_reviews['review_time'] ?>
															</span>
														</a>
													</div>
												</div>
											<?php } ?>
											</li>						
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo $row_reviews['review'] ?>
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
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-review.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:29 GMT -->
</html>