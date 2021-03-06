<?php
session_start();
if(empty($_SESSION['user'])){
    header("location: ./login.php");
}

include ("php_form/config.php");

$email_id = $_SESSION['user'];

$query_load_reviews = "SELECT * FROM review_details, business_details, user_details
			 WHERE business_details.business_id = review_details.business_id
			 AND review_details.user_id = user_details.user_id
			 AND user_email_id = '$email_id' ";

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
									<div class="listing-reviews" style="width: 100%">
										<ul>
										
											<li>
											<?php while($row_reviews = mysqli_fetch_assoc($result_load_reviews)) { ?>
												<div class="avatar-block" style="text-align:center">
													<?php
														$business_image = $row_reviews['personal_profile_image'];
														if($business_image != NULL){
													?>
													<img src="<?php echo $row_reviews['personal_profile_image'] ?>" alt="img" class="img-responsive">
														<?php }else{ ?>
													<img src="images/default_user.png" alt="img" class="img-responsive">
														<?php } ?>
												</div>
												<div class="review-content" style="margin-left: 14px">
													<h4><?php echo $row_reviews['review_heading'] . " @ " . $row_reviews['legal_name'] ?></h4>
													<div class="review-entry">
														<p>
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
												<?php } ?>
											</li>				
										</ul>
									</div>
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