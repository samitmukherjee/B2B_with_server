<?php
    error_reporting(0);
    session_start();
    include ("php_form/config.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/working-process.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:23 GMT -->
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
            <!-- <div class="user-panel">
                <a href="login.php" class="user-login-btn border-btn">
                    <i class="fa fa-user-o" aria-hidden="true"></i> Log in
                </a>
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
                            <a class="nav-link" href="dynamic-user-dashboard.php" id="navbarDropdownMenuLink1"
                                aria-haspopup="true" aria-expanded="false">
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
        <!-- main nav section -->
        <div class="subheader">
            <h2>How it Works</h2>
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-two.php">Home</a></li>
                    <li class="breadcrumb-item active">Working Process</li>
                </ol>
                <div class="breadcrumb-call-to-action">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
                    <a href="contact.php" class="contact-btn">
					Contact Us
				</a>
                </div>
            </div>
        </div>
        <div class="working-map-section">
            <div class="container">
                <div class="working-map-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="working-map-information">
                                <h2>01. Create Account</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="working-map-thumb">
                                <img src="images/misc/1.png" alt="img" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="working-map-block">
                    <div class="row">
                        <div class="col-md-6 push-md-6">
                            <div class="working-map-information">
                                <h2>02. Submit Your Listing</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 pull-md-6">
                            <div class="working-map-thumb">
                                <img src="images/misc/2.png" alt="img" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="working-map-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="working-map-information">
                                <h2>03. Get Approval</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="working-map-thumb">
                                <img src="images/misc/3.png" alt="img" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- working-map section -->
        <div class="visitors-menual-section">
            <div class="container">
                <div class="section-title">
                    <h2>For Visitors</h2>
                    <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-search"></span>
                            </a>
                            <p>
                                <a href="javascript:void(0)">
								Search your favorite <br> products & sevices
							</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-arrow-right"></span>
                            </a>
                            <p>
                                <a href="javascript:void(0)">
								See sellers <br> near you
							</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-check-box"></span>
                            </a>
                            <p>
                                <a href="javascript:void(0)">
								Contact with sellers <br> as per choice
							</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- visitors-menual section -->
        <div class="owners-menual-section">
            <div class="container">
                <div class="section-title">
                    <h2>For Business Owners</h2>
                    <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-user"></span>
                            </a>

                            <p>
                                <a href="javascript:void(0)">
								Create <br> Your Account
							</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-check"></span>
                            </a>
                            <p>
                                <a href="javascript:void(0)">
								Register <br> Your Business
							</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menual-block">
                            <a href="javascript:void(0)">
                                <span class="ti-check-box"></span>
                            </a>
                            <p>
                                <a href="javascript:void(0)">
								Add <br> Products
							</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Owners-menual section -->
        <div class="call-to-action-section">
            <div class="container">
                <h2>
                    Start today to get more exposure and <br> grow your business
                </h2>
                <p>
                    There are many consumers & business owners, who find this directory is helpful.
                </p>
                <div class="btn-group">
                    <a href="add-listing.php" class="icon-btn adining-listing-btn">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
                    </a>
                </div>
            </div>
        </div>
        <!-- call-to-action section-->
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
    <script src="assets/js/gmap3.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/working-process.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:23 GMT -->
</html>