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

	$query_load_products = "SELECT * FROM product_details, business_details, subcategory_table, unit_table 
							WHERE business_details.business_id = '$business_id'
					 		AND business_details.business_id = product_details.business_id
							AND unit_table.unit_id = product_details.product_unit
							AND product_details.product_category = subcategory_table.subcategory_id
					 		AND product_details.product_status = 1";

	$result_load_products = mysqli_query($conn, $query_load_products);

?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
<head>
    <meta charset="UTF-8">
    <title>B2B MarketPlace</title>
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
    <div class="main-wrap">

				</div>
			</nav>
		</div>
        <!-- Slide Menu Section -->
		<div class="page-container-wrap">
			
			<div class="container-fluid">
				 <div class="row" >
				 <?php while($row_products = mysqli_fetch_assoc($result_load_products)){ ?>
                    <div class="col-lg-4 col-md-6" >
                        <article class="popular-listing-post">
                            <div class="post-thumb">
                                <img src="<?php echo $row_products['product_image_1'] ?>" alt="img" class="img-responsive" style="height: 250px">
                                <div class="listing-info">
                                    <h4><a href="javascript:void(0)"><?php echo $row_products['product_name'] ?></a></h4>
                                    <p><?php echo $row_products['brand_name'] ?></p>
                                </div>
                                <div class="overlay"></div>
                            </div>
                            <div class="post-details">
                                <div class="post-meta">
                                    <div class="location">
                                        <i class="fa fa-inr" aria-hidden="true"></i>
                                        <h5><a href="javascript:void(0)"><?php echo $row_products['product_price'] ." / ". $row_products['unit_name'] ?></a></h5>
                                    </div>
                                    <!-- <div class="tag">
                                        <h5><b>Product Unit: </b> <?php echo $row_products['product_unit'] ?></h5>
                                    </div> -->
                                </div>
                                <div class="post-entry-block" style = "height: 60px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 90%">
                                    <p class="post-entry">
									<?php echo $row_products['product_description'] ?>
                                    </p>
                                </div>
                                <div class="post-footer">
                                    <div class="contact-no" style="width: 100% !important">
                                        <h5><b>Category: </b><?php echo $row_products['subcategory_name'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
					<?php } ?>
				</div>
			</div>
			
		</div>

		<!-- <div class="listing-modal-content-section">
			<div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog post-model">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="modal-content">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<article class="popular-listing-post">
										<div class="post-thumb">
											<img src="images/post/14.jpg" alt="img" class="img-responsive">
											<div class="listing-info">
												<h4><a href="javascript:void(0)">Hotel California</a></h4>
												<p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
											</div>
											<div class="rating-area">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span>
													(5.0/4)
												</span>
											</div>
											<div class="option-block">
												<ul>
													<li>
														<a href="javascript:void(0)" class="bookmark">

														</a>
													</li>
												</ul>
											</div>
											<div class="overlay"></div>
										</div>
										<div class="post-details">
											<div class="post-meta">
												<div class="location">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
													<h5><a href="javascript:void(0)">California</a></h5>
												</div>
												<div class="tag">
													<span>Ad</span>
													<i class="fa fa-check-circle" aria-hidden="true"></i>
												</div>
											</div>
											<div class="post-entry-block">
												<div class="post-author">
													<img src="images/post/author/3.jpg" alt="img" class="img-responsive">
												</div>
												<p class="post-entry">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
												</p>
											</div>
											<div class="post-footer">
												<div class="contact-no">
													<i class="fa fa-phone" aria-hidden="true"></i>
													<h5> +1-0000-000-000</h5>
												</div>
												<div class="schedule-info closed">
													<i class="fa fa-clock-o" aria-hidden="true"></i>
													<h5>Closed Now</h5>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div id="listing_post_map_one" class="listing-post-map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>listing-modal -->
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

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
</html>