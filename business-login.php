<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:07 GMT -->
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

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.php">
    <link rel="stylesheet" href="assets/css/owl.theme.php">

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
                            <a class="nav-link dropdown-toggle" href="home-one.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About us
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="working-process.php">How It Works</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="add-listing.php" class="user-addlisting-btn" style="text-align: center; line-height: 31px; color: #fff; padding: 3px 31px !important; margin-top: 3px;">
                                <i class="fa fa-plus" aria-hidden="true"></i> Business
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- main nav section -->
        <div class="subheader">
            <h2>Business Login</h2>
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-two.php">Home</a></li>
                    <li class="breadcrumb-item active">Business Log in / Registration</li>
                </ol>
                <div class="breadcrumb-call-to-action">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
                    <a href="contact.php" class="contact-btn">
					Contact Us
				</a>
                </div>
            </div>
        </div>
        <div class="user-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12">
                        <div class="registration-form-block">
                            <div class="registration-form-title">
                                <h4>Sign in</h4>
                            </div>
                            <div class="form-block">
                                <form class="form-common" action="php_form/business_login_form.php" method="POST">
                                    <div class="form-group">
                                        <label for="business_category">Sign-in as:</label>
                                        <table>
                                            <tr>
                                                <td width=275>
                                                    <select id="sign_in_as" name="sign_in_as" style="width: 250px; height: 30px; border-radius: 3px; background-color: white !important;" required>
                                                        <option value="none" selected disabled hidden>Select User Profile</option>
                                                        <option>Business Owner</option>
                                                        <option>Business Executive</option>
                                                      </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Email Address *</label>
                                        <input type="text" class="form-control" id="userName" name="business_email_id" placeholder="Enter registered email id" value="<?php if(isset($_COOKIE["user_name"])) { echo $_COOKIE["user_name"]; } ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="business_password" placeholder="Enter your password" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
                                    </div>
                                    <div class="form-group row form-check-row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-check">
                                                    <label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="remember">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Remember Me</span>
												</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="forgot-link-block">
                                                    <a href="#" class="forgot-link">Forget Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-btn-block">
                                            <button type="submit" class="form-btn">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="signin-others-option-block">
                                    <h5>Not registered? <a href="add-listing.php">Sign up</a></h5>
                                    <span>
                                    <?php 
                                        if (isset($_GET['x'])) {
                                            $result = $_GET['x'];
                                            echo $result;
                                        }
                                    ?>
                                    </span>
                                    <!-- <p>Connect with your social media network</p>
                                    <div class="social-icon-btn-group-detail">
                                        <a href="javascript:void(0)" class="icon-btn-fb">
                                            <i class="fa fa-facebook"></i> Facebook
                                        </a>
                                        <a href="javascript:void(0)" class="icon-btn-tw">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </a>
                                        <a href="javascript:void(0)" class="icon-btn-gplus">
                                            <i class="fa fa-google-plus"></i> Google +
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- panel -->
                    </div>
                </div>
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
    <script src="assets/js/owl.carousel.min.php"></script>
    <script src="assets/js/jquery.bxslider.js"></script>
    <script src="assets/js/isotope.pkgd.php"></script>
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

<!-- Mirrored from themerail.com/html/listingGeo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:09 GMT -->
</html>

<!--  -->