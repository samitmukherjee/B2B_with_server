<?php
error_reporting(0);
session_start();
$_SESSION['current_page'];



// ini_set('session.cache_limiter','public');
// session_cache_limiter(false);


header('Cache-Control: max-age=900');

include ("php_form/config.php");

date_default_timezone_set('Asia/Kolkata');

$product_name = $_POST['product_seller_name'];
$category_name = $_POST['category_name'];

	
	if(isset($_POST['product_seller_name'])){

		$query_show_products = "SELECT * FROM product_details, business_details 
				WHERE business_details.business_id = product_details.business_id 
				AND product_details.product_name LIKE '".$product_name."%' AND product_details.product_status = 1 ORDER BY brand_name LIMIT 3";
				
		$result_show_products = mysqli_query($conn,$query_show_products);
	}
	if(isset($_POST['category_name'])){
		$query_show_products = "SELECT * FROM product_details, business_details, category_table 
				WHERE business_details.business_id = product_details.business_id AND category_table.category_id = business_details.business_category
				AND category_table.category_id = '$category_name' AND product_details.product_status = 1 ORDER BY brand_name";
				
		$result_show_products = mysqli_query($conn,$query_show_products);
	}
	

	// $query_sub_categories = "SELECT DISTINCT subcategory_table.subcategory_name 
	// 		FROM category_table, subcategory_table, product_details, business_details 
	// 		WHERE subcategory_table.category_id = category_table.category_id 
	// 		AND category_table.category_id = business_details.business_category
	// 		AND business_details.business_id = product_details.business_id 
	// 		AND product_details.product_name LIKE '".$product_name."%' ";
	
	// $result_sub_categories = mysqli_query($conn, $query_sub_categories);
	
	// echo $query_show_products;
	
	$product_count = mysqli_num_rows($result_show_products);

	// echo $product_count;

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/listing-map-full.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:12 GMT -->
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

	<!-- BX Slider CSS -->
	<link rel="stylesheet" href="assets/css/jquery.bxslider.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<div class="main-wrap">
		<!-- Main Navigation -->
		<div class="main-nav-section">
			<div class="user-panel">
			<?php if(isset($_SESSION['user'])): ?>
			<a class="user-login-btn border-btn" href="./php_form/logout.php">
			<i class="fa fa-user-o" aria-hidden="true"></i> logout</a>
			<?php else: ?>
			<a class="uses-login-btn border-btn" href="login.php">
			<i class="fa fa-user-o" aria-hidden="true"></i>login</a>
			<?php endif; ?>
			<a href="add-listing.php" class="user-addlisting-btn">
				<i class="fa fa-plus" aria-hidden="true"></i> Business
			</a>
			</div>
			<nav class="navbar navbar-toggleable-md fixed-top">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
				</button>
				<a class="navbar-brand" href="home-two.php">
					<img src="images/logox.png" alt="img" class="img-responsive">
				</a>
				<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
					<ul class="navbar-nav">
					<li class="nav-item dropdown">
                            <?php if(isset($_SESSION['user'])): ?>
                            <a class="nav-link" href="dynamic-user-dashboard.php" id="navbarDropdownMenuLink1" aria-haspopup="true" aria-expanded="false">
								User Dashboard
                            </a>
                            <?php else: ?>
                                <?php endif; ?>
                        </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="home-two.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
								
								<li><a class="dropdown-item" href="about.php">About Us</a></li>
								<li><a class="dropdown-item" href="working-process.php">How It Works</a></li>
								<li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- main nav section -->
		<div class="listing-map-block-fullwrap">
			<div class="listing-map-section full-width">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="listing-map-filter-block">
								<div class="outer-select-field" style="margin-top: 20px;">
									<input type="text" name ="product" id="product" class="outer-select-input-box" value="<?php echo $product_name ?>"  placeholder="Ex: Apple iPhone" autocomplete="off">
									<a class="input-dropedown-btn catagory-btn" href="javascript:void(0)">
										<i class="fa fa-bars" aria-hidden="true"></i> Search
									</a>
									<div id="product_list" class="" style="background-color: white !important; border-radius: 10px 10px 10px 10px; width: 80%;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="listing-map-filter-block">
								<div class="outer-select-field" style="margin-top: 20px;">
									<div class="btn-group">
										<button type="submit" id="search_prod" class="search-btn" style="height: 45px;">
											<i class="ti-search" aria-hidden="true"></i>
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="serach-result-section">
				<div class="serach-result-section-inner">
					<div class="container">
						<div class="row">
							
							<div class="col-md-6">
								<div class="serach-result-section-title">
									<h4><?php //echo $product_count ?> Results... <strong> </strong></h4>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<select id="sort_filter" name="sort_filter" class="form-control" required style="font-size:100%">
										<option hidden>Sort by: Featured</option>
										<option>Price: Low to High</option>
										<option>Price: High to Low</option>
										<option>Popularity</option>										
									</select>
								</div>
							</div>
							<div class="col-lg-3">								
								<div class="form-group">
									<select id="sub_categories" name="sub_categories" class="form-control" required style="font-size:100%">
										<!-- <option selected hidden>Sub-Categories</option> -->
										
										<button style="background: transparent; border:none">
											<!-- <option></option> -->
										</button>									
									</select>
								</div>
							</div>
						</div>
						<div id="appended_products" class="row product-list-group">
						<?php 
						while($product=mysqli_fetch_assoc($result_show_products)){ ?>
							<div class="item col-lg-4 col-md-6" id="append_card">								
								<article class="popular-listing-post">									
									<div class="post-thumb">
										<form action="./product_page.php" method="POST">
											<input type="hidden" name= "product_name" value="<?php echo $product['product_name'] ?>">
											<input type="hidden" name= "business_name" value="<?php echo $product['legal_name'] ?>">
											<button type="submit" style="background: transparent; border:none;">
												<img src="<?php 
													echo $product['product_image_1'] 
													?> " alt="img" class="img-responsive" style = "width: 100%; height: 200px;">
												<!-- <div class="overlay"></div> -->
											</button>
										</form>
									</div>
									
									<div class="post-detail	s">
										<div class="post-meta">
											<h4 ><?php 
												echo $product['brand_name'];  ?>
											</h4>
											<p><?php 
												echo $product['product_name']; ?>
											</p>
											<div class="location">
												<i class="fa fa-inr" aria-hidden="true"></i>
												<h5><a href="javascript:void(0)"><?php 
												echo $product['product_price'] ?></a></h5>
											</div>
											<!-- <div class="tag">

												<i class="fa fa-check-circle" aria-hidden="true"></i>
											</div> -->
										</div>
										<div class="post-entry-block">

											<p class="post-entry" style = "height: 70px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
												<?php  
												echo $product['product_description']  ?>
											</p>
										</div>
										<div class="post-footer">
											<div class="contact-no">													
													<form action="./inquiry.php" method="POST">														
													<input type="hidden" name= "product_id" value="<?php echo $product['product_id']; $_SESSION['product_id'] = $product['product_id']; ?>">	
														<button type="submit" id="<?php echo $product['product_id'] ?>" style="width: 170px; background: transparent; border:none; margin-left:40%" value="Contact Dealer">
														<i class="fa fa-phone" aria-hidden="true"></i>Contact Dealer</button>
													</form>
											</div>
											<!-- <div class="schedule-info closed">
												<i class="fa fa-clock-o" aria-hidden="true"></i>
												<h5>Closed Now</h5>
											</div> -->
										</div>
									</div>
								</article>
							</div>
			<?php  
		} ?>	
								
						</div>
					
					</div>
					
				</div>				
			</div>
		<?php if($product_count > 2){ ?>
		<div class="container">
			<div class="btn-group">
				<button id="load_more" class="success-btn icon-btn"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Load More</button>
			</div>
		</div>
		<?php } ?>
		

	<div class="call-to-action-section">
			<div class="container">
				<h2>
					Start today to get more exposure and <br> grow your business
				</h2>
				<p>
					There are many consumers & business owners find this directory is helpful.
				</p>
				<div class="btn-group">
					<a href="add-listing.php" class="icon-btn adining-listing-btn">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Listing
					</a>
				</div>
			</div>
		</div>
		<div class="listing-modal-content-section" id="quick_view_modal">
			<div class="container">
				<div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog post-model">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="modal-content">
							<div class="row">
								<div class="col-lg-6">
									<div class="row" id="quick_view">
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
								<!-- <div class="col-lg-6">
									<div class="row">
										<div id="listing_post_map_one" class="listing-post-map"></div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="footer-top-block">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="footer-widget">
								<div class="footer-logo-block">
									<a href="home-two.php">
										<img src="images/logox.png" alt="img" class="img-responsive">
									</a>
								</div>
								<p class="address">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Suite # 25/B, Green Street California, CA78542
								</p>
								<p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
								<p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</p>
								<div class="footer-social-block">
									<span>
										Folow us:
									</span>
									<ul class="social">
										<li>
											<a href="javascript:void(0)">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0)">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
								<!-- footer-social-block -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget">
								<h4 class="footer-widget-title">Useful Links</h4>
								<ul class="footer-content-list">
									<li>
										<a href="about.php">
											About B2B Marketplace
										</a>
									</li>
									<li>
										<a href="working-process.php">
											How it Works
										</a>
									</li>
									<li>
										<a href="contact.php">
											Contact us
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget">
								<h4 class="footer-widget-title">Listing Account</h4>
								<ul class="footer-content-list">
									<li>
										<a href="business-login.php">
											Business Log in
										</a>
									</li>
									<li>
										<a href="add-listing.php">
											Business Registration
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-widget">
								<h4 class="footer-widget-title">Latest Listings</h4>
								<article class="latest-post">
									<div class="post-thumb">
										<a href="javascript:void(0)">
											<img src="images/post/7.jpg" alt="img" class="img-responsive">
										</a>
									</div>
									<div class="post-wrapper">
										<h6 class="title">
											<a href="javascript:void(0)">
												Grand Park Hotel
											</a>
										</h6>
										<p class="post-entry">
											175 Church Road, City Tower, California, CA785423
										</p>
										<div class="post-meta">
											<a href="javascript:void(0)" class="post-tag">
												Hotel & Resort
											</a>
										</div>
									</div>
								</article>
								<article class="latest-post">
									<div class="post-thumb">
										<a href="javascript:void(0)">
											<img src="images/post/7.jpg" alt="img" class="img-responsive">
										</a>
									</div>
									<div class="post-wrapper">
										<h6 class="title">
											<a href="javascript:void(0)">
											Grand Park Hotel
										</a>
										</h6>
										<p class="post-entry">
											175 Church Road, City Tower, California, CA785423
										</p>
										<div class="post-meta">
											<a href="javascript:void(0)" class="post-tag">
												Hotel & Resort
											</a>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-block">
				<div class="container">
					<div class="row">
						<div class="col-md-6 push-md-6">
							<ul class="footer-nav">
								<li>
									<a href="javascript:void(0)">
										Legal 
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										Privacy Policy  
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										Terms of Use
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 pull-md-6">
							<p class="copyright-text">Copyright 2018, <a href="javascript:void(0)">ListingGEO</a>. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
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
	<script src="assets/js/infobox.js"></script>
	<script src="assets/js/markerclusterer.js"></script>
	<script src="js/mapdata.json"></script>
	<script src="js/map.js"></script>
	<script src="js/custom.js"></script>

	<!-- Search -->
	<script>

		var counter = 0;

		$(document).ready(function(){
			$('#product').keyup(function(){
				var query = $(this).val();
				if(query != ''){
					$.ajax({
						url:"./php_form/search_product.php",
						method:"POST",
						data:{query:query},
						success:function(data){
							$('#product_list').fadeIn();
							$('#product_list').html(data);
						}
					});
				} 
				else{
					$('#product_list').fadeOut();
					$('#product_list').html("");
				}
			});
			$(document).on('click', 'li', function(){
				$('#product').val($(this).text());
				$('#product_list').fadeOut();
			});

			$('#search_prod').click(function(){
				var product_per_page = 3;
				var product_name = $('#product').val();
				var prev_product_per_page = product_per_page;		
				
				var sort_filter = $('#sort_filter').val();
				
				// 	alert(product_per_page);
				$('#appended_products').load('./php_form/product_filter.php',{product_name: product_name, product_per_page: product_per_page, sort_filter: sort_filter	},function(){
					console.log('Data Loaded');
				});
			});

			$('#sort_filter').click(function(){
				var sort_filter = $('#sort_filter').val();
				// console.log(sort_filter);
				var product_per_page = 3;
				var product_name = $('#product').val();
				var prev_product_per_page = product_per_page;	

				$('#appended_products').load('./php_form/product_filter.php',{product_name: product_name, product_per_page: product_per_page, sort_filter: sort_filter},function(){
					console.log('Data Loaded');
				});
			});

			$('#sub_categories').click(function(){
				var sub_categories = $('#sub_categories').val();
				console.log(sub_categories);
				var product_per_page = 3;
				// var product_name = $('#product').val();
				var prev_product_per_page = product_per_page;	

				$('#appended_products').load('./php_form/product_filter.php',{product_per_page: product_per_page, sub_categories: sub_categories},function(){
					console.log('Sub Category Applied');
				});
			});


			$('#load_more').click(function(){
				counter+=3;
				var product_name = $('#product').val();
				var product_per_page = counter;

				var sort_filter = $('#sort_filter').val();
				$('#appended_products').load('./php_form/product_filter.php',{product_name: product_name, product_per_page: product_per_page, sort_filter: sort_filter},function(){
					console.log('More data loaded');
				});
			});
			
			var product_name =  $('#product').attr("value");
			// console.log(product_name);
			$('#sub_categories').load('./php_form/load_product_wise_sub_category.php', {"product_name": product_name}, function () {

				console.log("HO GAYA");
			});
			// $('.post-footer .contact-no form button').click(function(){
			// 	var product_id = $(this).attr('id');
			// 	console.log(product_id);

			// 	$.post("inquiry.php", {product_id: product_id}, function() {
			// 		console.log("Enquiry Set up");
			// 		// window.location.href = "inquiry.php";
			// 	});

				// $.Ajax({
				// 	type : 'POST',
				// 	url: "inquiry.php",
				// 	data: { product_id: product_id }, 
				// 	complete: function() {
				// 		window.location = "inquiry.php" ;
				// 	}
				// });

			// });

			// $('.option-block a').click(function(){
			// 	var product_id = $(this).attr('id');

			// 	$('.listing-modal-content-section').load('./php_form/quick_view_modal.php', {product_id: product_id}, function(){
			// 		console.log(product_id);
			// 	});
			// });

			// $('#product_id').click(function(){  
			// 	var product_id = $(this).attr("id");  
			// 	$.ajax({  
			// 			url:"./php_form/quick_view_modal.php",  
			// 			method:"post",  
			// 			data:{product_id:product_id},  
			// 			success:function(data){  
			// 				$('#quick_view').html(data);  
			// 				$('#quick_view').modal("show");  
			// 			}  
			// 	});  
			// });

		});
	</script>

	<script>
		// document.getElementById("product").defaultValue = "<?php // echo $product_name ?>";
	</script>
	
	<script type='text/javascript'>
		var element = $(this);
		var map;
		function initialize(myCenter,selector) {
			var marker = new google.maps.Marker({
				position: myCenter
			});
			var mapProp = {
				center: myCenter,
				zoom: 8,
				draggable: false,
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(selector, mapProp);
			marker.setMap(map);
		};
		
		$('#post_listing_modal_one').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_one"));
			google.maps.event.trigger(map, 'resize');
		});
		$('#post_listing_modal_two').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_two"));
			google.maps.event.trigger(map, 'resize');
		});
		$('#post_listing_modal_three').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_three"));
			google.maps.event.trigger(map, 'resize');
		});
		$('#post_listing_modal_four').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_four"));
			google.maps.event.trigger(map, 'resize');
		});
		$('#post_listing_modal_five').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_five"));
			google.maps.event.trigger(map, 'resize');
		});
		$('#post_listing_modal_six').on('shown.bs.modal', function(e) {
			var element = $(e.relatedTarget);
			var data = element.data("lat").split(',')
			initialize(new google.maps.LatLng(data[0], data[1]),document.getElementById("listing_post_map_six"));
			google.maps.event.trigger(map, 'resize');
		});
	</script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/listing-map-full.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:12 GMT -->
</html>

<?php

	//}

	// else{
	// 	header("location:home-two.php");
	// }
?>