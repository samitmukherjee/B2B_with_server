<?php
error_reporting(0);
session_start();

header('Cache-Control: max-age=900');

include ("php_form/config.php");

date_default_timezone_set('Asia/Kolkata');

$product_name = $_POST['product_name'];
$business_name = $_POST['business_name'];

// $product_name = "iPhone";
// $business_name = "Gada Electronics";
	
	// if(isset($_POST['product_seller_name'])){

		$query_show_product = "SELECT * FROM product_details, business_details 
				WHERE product_details.business_id = business_details.business_id
				AND product_details.product_name = '$product_name' 
				AND business_details.legal_name ='$business_name' AND product_details.product_status = 1 ";

		$result_show_product = mysqli_query($conn,$query_show_product);
	// }

	// echo $query_show_product;
	
	$product_row = mysqli_fetch_assoc($result_show_product);

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

	<style>
	
		/*****************globals*************/
		body {
		overflow-x: hidden;
		font-family: "Poppins", sans-serif;
		}

		img {
		max-width: 100%; }

		.preview {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
			-ms-flex-direction: column;
				flex-direction: column; }
		@media screen and (max-width: 996px) {
			.preview {
			margin-bottom: 20px; } }

		.preview-pic {
		-webkit-box-flex: 1;
		-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
				flex-grow: 1; }

		.preview-thumbnail.nav-tabs {
		border: none;
		margin-top: 15px; }
		.preview-thumbnail.nav-tabs li {
			width: 18%;
			margin-right: 2.5%; }
			.preview-thumbnail.nav-tabs li img {
			max-width: 100%;
			display: block; }
			.preview-thumbnail.nav-tabs li a {
			padding: 0;
			margin: 0; }
			.preview-thumbnail.nav-tabs li:last-of-type {
			margin-right: 0; }

		.tab-content {
		overflow: hidden; }
		.tab-content img {
			width: 100%;
			-webkit-animation-name: opacity;
					animation-name: opacity;
			-webkit-animation-duration: .3s;
					animation-duration: .3s; }

		.card {
		margin-top: 50px;
		/* background: rgba(0, 0, 0, 0.33); */
		padding: 3em;
		line-height: 1.5em; }

		@media screen and (min-width: 997px) {
		.wrapper {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex; } }

		.details {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
			-ms-flex-direction: column;
				flex-direction: column; }

		.colors {
		-webkit-box-flex: 1;
		-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
				flex-grow: 1; }



		.checked, .price span {
		color: #3867D6; }

		.product-title, .rating, .product-description, .price, .vote, .sizes {
		margin-bottom: 15px; }

		.product-title {
		margin-top: 0; }

		.size {
		margin-right: 10px; }
		.size:first-of-type {
			margin-left: 40px; }

		.color {
		display: inline-block;
		vertical-align: middle;
		margin-right: 10px;
		height: 2em;
		width: 2em;
		border-radius: 2px; }
		.color:first-of-type {
			margin-left: 20px; }

		.add-to-cart, .like {
		background: #ff9f1a;
		padding: 1.2em 1.5em;
		border: none;
		text-transform: UPPERCASE;
		font-weight: bold;
		color: #fff;
		-webkit-transition: background .3s ease;
				transition: background .3s ease; }
		.add-to-cart:hover, .like:hover {
			background: #b36800;
			color: #fff; }

		.not-available {
		text-align: center;
		line-height: 2em; }
		.not-available:before {
			font-family: fontawesome;
			content: "\f00d";
			color: #fff; }

		.orange {
		background: #ff9f1a; }

		.green {
		background: #85ad00; }

		.blue {
		background: #0076ad; }

		.tooltip-inner {
		padding: 1.3em; }

		@-webkit-keyframes opacity {
		0% {
			opacity: 0;
			-webkit-transform: scale(3);
					transform: scale(3); }
		100% {
			opacity: 1;
			-webkit-transform: scale(1);
					transform: scale(1); } }

		@keyframes opacity {
		0% {
			opacity: 0;
			-webkit-transform: scale(3);
					transform: scale(3); }
		100% {
			opacity: 1;
			-webkit-transform: scale(1);
					transform: scale(1); } }

		/*# sourceMappingURL=style.css.map */
	</style>
</head>

<body>
	<div class="main-wrap">
		<!-- Main Navigation -->
		<div class="main-nav-section">
			<!-- <div class="user-panel">
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
			</div> -->
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
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="home-two.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Categories
                            </a>
                            <?php
                                $query_categories = "SELECT * FROM category_table  WHERE status = '1' ORDER BY category_name ASC";
                                $result_categories = mysqli_query($conn, $query_categories);
                            ?>
                            <ul class="dropdown-menu" style="width: 200%" aria-labelledby="navbarDropdownMenuLink2">
                                <form id="form_category_dropdown" action="./categories.php" method="POST">
                                <input type="hidden" id="category_dropdown_hidden_input" name="category_name">
                                    <?php while($row_categories_dropdown = mysqli_fetch_assoc($result_categories)){
                                        $category_name_dropdown = $row_categories_dropdown['category_name'];
                                        $category_name_dropdown = ucwords($category_name_dropdown); ?>
                                    <li value="<?php echo $row_categories_dropdown['category_id']?>">
                                        <a id="category_list_dropdown" value="<?php echo $row_categories_dropdown['category_id']?>" class="dropdown-item" style="width: 100%;">
                                        
                                            <?php echo $category_name_dropdown ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </form>
                            </ul>
						</li>
						<li class="nav-item dropdown">
                            <?php if(isset($_SESSION['user']) && $_SESSION['buyer'] =='buyer'): ?>
                                <a class="user-login-btn" href="./php_form/logout.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
                                <i class="fa fa-user-o" aria-hidden="true"></i> Logout</a>
                            <?php else: ?>
                                <a class="uses-login-btn" href="login.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
                                <i class="fa fa-user-o" aria-hidden="true"></i>Login</a>
                            <?php endif; ?>
						</li>
						<li class="nav-item dropdown">
                            <a href="add-listing.php" class="user-addlisting-btn" style="color: #fff;">
                                <i class="fa fa-plus" aria-hidden="true"></i> Business
                            </a>
                        </li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="listing-map-block-fullwrap">
            <div class="listing-map-section full-width">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="listing-map-filter-block">
								<div class="outer-select-field" style="margin-top: 20px;">
                                    <form action="categories.php" method="POST" enctype="mutipart/form-data">
                                        <input type="text" name ="product_seller_name" id="product" class="outer-select-input-box "  placeholder="Ex: Apple iPhone" autocomplete="off">
                                            <a class="input-dropedown-btn catagory-btn" href="javascript:void(0)">
                                                <i class="fa fa-bars" aria-hidden="true"></i> Search
                                            </a>
									
									<div id="product_list" class="" style="background-color: white !important; border-radius: 10px 10px 10px 10px; width: 80%;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-2" style="text-align: right;">
							<div class="listing-map-filter-block">
								<div class="outer-select-field" style="margin-top: 20px;">
									<div class="btn-group">
										<button type="submit" id="search_prod" class="search-btn" style="height: 45px;">
											<i class="ti-search" aria-hidden="true"></i>
											Search
										</button>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="container">
			<div class="listing-block businessinfo-listing" style="margin-top: 5%; margin-bottom: 5%">
				<div class="container-fliud">
					<div class="wrapper row">
						<div class="preview col-md-6">
							
							<div class="preview-pic tab-content">
							<div class="tab-pane active" id="pic-1"><img src="<?php echo $product_row['product_image_1'] ?>" /></div>
							<div class="tab-pane" id="pic-2"><img src="<?php echo $product_row['product_image_2'] ?>" /></div>
							<div class="tab-pane" id="pic-3"><img src="<?php echo $product_row['product_image_3'] ?>" /></div>
							</div>
							<ul class="preview-thumbnail nav nav-tabs">
							<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo $product_row['product_image_1'] ?>" /></a></li>
							<li><a data-target="#pic-2" data-toggle="tab"><img src="<?php echo $product_row['product_image_2'] ?>" /></a></li>
							<li><a data-target="#pic-3" data-toggle="tab"><img src="<?php echo $product_row['product_image_3'] ?>" /></a></li>
							</ul>
							
						</div>
						<div class="details col-md-6">
							<h3 class="product-title"><?php echo $product_row['product_name'] ?></h3>
								<div>
								<!-- <img src="<?php // echo $product_row['company_logo'] ?>" alt="Brand Name" width="35" height="35" style="margin-left: 5%"> -->
								<p class="vote"><strong>By </strong><?php echo $product_row['brand_name'] ?>
									<?php if($product_row['verification_status'] == 1) {?>
									<i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i>
									<?php }
									else{ ?>
										<i class="fa fa-info-circle" aria-hidden="true" style="color: grey"></i>
									<?php } ?>
								</p>
								</div>

							<?php
								$category_id = $product_row['product_category'];

								$query_get_category_name = "SELECT subcategory_name FROM subcategory_table, product_details 
										WHERE subcategory_table.subcategory_id = product_details.product_category
										AND product_details.product_category = '$category_id' ";
								$result_get_category_id = mysqli_query($conn, $query_get_category_name);

								$row_category_table = mysqli_fetch_assoc($result_get_category_id);
								$category_name = $row_category_table['subcategory_name'];
							?>
							<p class="vote"><strong>Category: </strong><?php echo $category_name ?></p>
							<p class="vote"><strong>Seller: </strong><?php echo $product_row['legal_name'] ?></p>
							<p class="product-description"><?php echo $product_row['product_description'] ?></p>							
							
							<!-- <h5 class="colors">colors:
								<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
								<span class="color green"></span>
								<span class="color blue"></span>
							</h5> -->
							<h4 class="price">MRP : <span>
								<i class="fa fa-inr" aria-hidden="true"></i>
								<?php echo $product_row['product_price'] ?>
							</span>							
							</h4>
							<?php 
								$discount = $product_row['discount'];
								if($discount > 0){							
							?>
							<p><?php echo $discount ?>% Discount</p>
							<?php
								}
							?>
							<div class="action" style="margin-top: 5%;">
								<form action="./inquiry.php" method="POST">
									<input type="hidden" name="product_id" value= "<?php echo $product_row['product_id'] ?>">
									<button class="search-btn" type="submit">Enquire</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-bottom: 2%;">
			<div class="section-title">
				<h3><a href="">Similar Products</a></h3>
			</div>
			<div class="row">
				<?php
					$query_similar_products_1 = "SELECT DISTINCT category_id FROM subcategory_table, product_details 
								WHERE product_details.product_category = subcategory_table.subcategory_id 
								AND product_details.product_name = '$product_name' ";
					$result_similar_products_1 = mysqli_query($conn, $query_similar_products_1);

					$row_similar_products_1 = mysqli_fetch_assoc($result_similar_products_1);
					$category_id = $row_similar_products_1['category_id'];

					$query_similar_products_2 = "SELECT * FROM subcategory_table, product_details, business_details 
												WHERE business_details.business_id = product_details.business_id 
												AND product_details.product_category = subcategory_table.subcategory_id 
												AND subcategory_table.category_id =  '$category_id' ORDER BY product_name ASC LIMIT 4";

					$result_similar_products_2 = mysqli_query($conn, $query_similar_products_2);

					while($row_similar_products_2 = mysqli_fetch_assoc($result_similar_products_2)){			
				?>
				<div class="col-sm-3">
					<div class="product-card">
						<form action="./product_page.php" method="POST">
							<input type="hidden" name= "product_name" value="<?php echo $row_similar_products_2['product_name'] ?>">
							<input type="hidden" name= "business_name" value="<?php echo $row_similar_products_2['legal_name'] ?>">
							<button type="submit" style="background: transparent; border:none;">
								<div class="product-tumb" style="background: transparent !important">							
									<img src="<?php echo $row_similar_products_2['product_image_1'] ?>" alt="<?php echo $row_similar_products_2['product_name'] ?>" style="height: 80%">
								</div>
							</button>
						</form>
						<div class="product-details" style="height: 150px;  white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
							<h4><?php echo $row_similar_products_2['product_name'] ?></h4>
							<label><?php echo $row_similar_products_2['brand_name'] ?></label>
							<div class="product-bottom-details">
								<div class="product-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row_similar_products_2['product_price'] ?></div>
								<!-- <div class="product-links">
									<a href="">Enquiry</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
		

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
		<footer>
            <div class="footer-top-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                        </div>
                        <div class="col-lg-2 col-sm-6" style="text-align: center; border: 1px solid white; border-radius: 4px;">
                            <div class="footer-logo-block">
                                <a href="home-two.php">
                                    <img src="images/logox.png" alt="img" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                        </div>  
                        <div class="col-lg-3 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
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
                        <div class="col-lg-3 col-sm-6" style="margin-top: 25px;">
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
                        <div class="col-lg-2 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Listing Account</h4>
                                <ul class="footer-content-list">
                                <?php if($_SESSION['buyer'] !='buyer'): ?>
                                    <li>
                                        <a href="business-login.php">
											Business Log in
										</a>
                                    </li>
                                <?php endif; ?>
                                    <li>
                                        <a href="add-listing.php">
											Business Registration
										</a>
                                    </li>
                                    <!-- <li>
                                        <a href="add-listing.php">
											Add Listing
										</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Latest Listings</h4>
                                <?php

                                    $query_popular_category_1 = "SELECT business_id, AVG(ratings) FROM review_details GROUP BY business_id ORDER BY AVG(ratings) DESC LIMIT 2";
                                    $result_popular_category_1 = mysqli_query($conn, $query_popular_category_1);
                                    
                                    while($row_popular_category_1 = mysqli_fetch_assoc($result_popular_category_1)){
                                        $business_id_1 = $row_popular_category_1['business_id'];

                                        $query_business_details = "SELECT * FROM business_details, category_table 
                                                    WHERE business_details.business_category = category_table.category_id 
                                                    AND business_details.business_id = '$business_id_1' ";

                                        $result_business_details = mysqli_query($conn, $query_business_details);

                                        $row_business_details = mysqli_fetch_assoc($result_business_details);

                                        $category_business = $row_business_details['category_name'];
                                        $category_business = ucwords($category_business);

                                ?>
                                <article class="latest-post">
                                    <div class="post-thumb">
                                        <a href="javascript:void(0)" style="cursor: none;">
                                            <img src="<?php echo $row_business_details['personal_profile_image'] ?>" alt="img" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="post-wrapper">
                                        <h6 class="title">
                                            <a href="javascript:void(0)"  style="cursor: none;">
                                                <?php echo $row_business_details['legal_name'] ?>
                                            </a>
                                        </h6>
                                        <p class="post-entry">
                                            <?php echo $category_business ?>
                                        </p>
                                        <div class="post-meta">
                                        <form action="./single-listing.php" method="POST">
                                            <input type="hidden" name= "product_seller_name" value="<?php echo $row_business_details['legal_name'] ?>">
                                            <button type="submit" id="business_button" style="background: transparent; border:none;">                                            
                                                <a class="post-tag" style="cursor: pointer;">
                                                    View Seller
                                                </a>
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                </article>
                                    <?php } ?>

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


			$('#load_more').click(function(){
				counter+=3;
				var product_name = $('#product').val();
				var product_per_page = counter;

				var sort_filter = $('#sort_filter').val();
				$('#appended_products').load('./php_form/product_filter.php',{product_name: product_name, product_per_page: product_per_page, sort_filter: sort_filter},function(){
					console.log('More data loaded');
				});
			});

			$('li #category_list_dropdown').click(function(){
                var id = $(this).attr('value');
                console.log(id);
                var abc = $('#category_dropdown_hidden_input').val(id);
                
                // var cat_id =  $('#category_dropdown_hidden_input').val();
                // console.log(cat_id);
                // console.log(abc);

                $('#form_category_dropdown').submit();
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
		document.getElementById("product").defaultValue = "<?php echo $product_name ?>"; 
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