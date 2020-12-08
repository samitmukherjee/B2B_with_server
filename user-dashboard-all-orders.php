<?php
	session_start();
	include ("php_form/config.php");
	if(empty($_SESSION['user'])){
		header("location: ./login.php");
	}
	$user = $_SESSION['user'];
	

	$query_show_orders = "SELECT * FROM enquiry_details, business_details, user_details,product_details, unit_table 
			WHERE enquiry_details.business_id = business_details.business_id
			AND enquiry_details.user_id = user_details.user_id 
			AND enquiry_details.product_id = product_details.product_id
			AND enquiry_details.product_unit = unit_table.unit_id
			AND enquiry_details.enquiry_status = 1
			AND user_details.user_email_id = '$user' ";

	$result_show_orders = mysqli_query($conn, $query_show_orders);

	// echo $query_show_orders;

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
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title" style="height: 30px">
										<h4 style = "align-items: center;">Orders</h4>
									</div>
								</div>
					
								<div class="panel-body">
									<div class="listing-reviews listing-message">
										<ul>
											<?php while($row_show_orders = mysqli_fetch_assoc($result_show_orders)){ ?>
											<li>
												<div class="avatar-block">
													<img src="<?php echo $row_show_orders['personal_profile_image'] ?>" alt="img" class="img-responsive">
												</div>
												<div class="review-content">
													<a style="font-size: 16px; font-weight:bold;"><b><?php echo $row_show_orders['product_name'] ?></b> x <?php echo "".$row_show_orders['product_quantity']." ".$row_show_orders['unit_name']."" ?></a>
													<div class="review-entry">
														<p>
															<?php echo $row_show_orders['legal_name'] ?>
														</p>
													</div>
													<div class="replay-btn">
														<img src="<?php echo $row_show_orders['enquiry_attachment']?>" style="height:100px; width:100px;"/>
													</div>
													<!-- <span class="message-post-duration">19 Minutes Ago</span> -->
												</div>
											</li>
											<?php } ?>

										</ul>
									</div>
								</div><!--panel Body -->
							<!--panel -->
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

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-message.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:30 GMT -->
</html>