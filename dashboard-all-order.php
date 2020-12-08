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

	$query_load_orders = "SELECT * FROM enquiry_details, business_details, user_details, product_details, unit_table
	WHERE business_details.business_id = '$business_id'
	AND enquiry_details.user_id = user_details.user_id
	AND enquiry_details.product_id = product_details.product_id
	AND enquiry_details.product_unit = unit_table.unit_id
	AND business_details.business_id = enquiry_details.business_id
	AND enquiry_details.enquiry_status = '1' ";

	// echo $query_load_enquiry;
	
	$result_load_orders = mysqli_query($conn, $query_load_orders);

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
									<div class="panel-title">
										<h4>Orders</h4>
									</div>
								</div>
								
								<div class="panel-body">
									<div class="listing-reviews">
										<ul>
											<li>
											<?php while($row_orders = mysqli_fetch_assoc($result_load_orders)) { ?>
												<div class="avatar-block">
													<img src="images/post/author/8.jpg" alt="img" class="img-responsive">
												</div>
												<div class="review-content">
													<div class="comment-by">
														<a style="font-size: 16px; font-weight: bold;"><?php echo "".$row_orders['first_name']." ".$row_orders['last_name']."" ?></a>
													</div>
													<a style="font-size: 14px;"><?php echo $row_orders['product_name'] ?></a>
													<div class="review-entry">
														<p>
														<?php echo "".$row_orders['product_quantity']." x ".$row_orders['unit_name']." 	" ?>
														</p>
													</div>
													<div class="replay-btn">
														<img src="<?php echo $row['enquiry_attachment']?>" style="height:100px; width:100px;"/>
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
					<?php echo $row_orders['product_name'] ?>
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
	<script type="text/javascript">
		function listingModalMap(selector,centerLatLng,markerLatLng){
			$(selector).gmap3({
				map: {
					options: {
						zoom: 6,
						center: [centerLatLng.lat, centerLatLng.lng],
						mapTypeControl: true,
						mapTypeControlOptions: {
							style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
						},
						mapTypeId: "style1",
						mapTypeControlOptions: {
							mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style1"]
						},
						navigationControl: true,
						scrollwheel: false,
						streetViewControl: true
					}
				},
				marker: {
					latLng: [markerLatLng.lat, markerLatLng.lng],
					options: {animation:google.maps.Animation.BOUNCE, icon: 'images/markers/listing-post-pointer.png' }
				},
				styledmaptype: {
					id: "style1",
					options: {
						name: "Style 1"
					}
				}
			});
		}
		var centerLatLng = {
			lat: 44.785091,
			lng: -79.968285
		};
		var markerLatLng = {
			lat: 40.785091,
			lng: -73.968285
		};
		listingModalMap('#listing_post_map_one',centerLatLng,markerLatLng);
		listingModalMap('#listing_post_map_two',centerLatLng,markerLatLng);
		listingModalMap('#listing_post_map_three',centerLatLng,markerLatLng);
		listingModalMap('#listing_post_map_four',centerLatLng,markerLatLng);
		listingModalMap('#listing_post_map_five',centerLatLng,markerLatLng);
		listingModalMap('#listing_post_map_six',centerLatLng,markerLatLng);
    </script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-review.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:29 GMT -->
</html>