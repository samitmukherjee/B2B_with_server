<?php
    error_reporting(0);
    include ("php_form/config.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:09 GMT -->
<head>
    <meta charset="UTF-8">
    <title>B2B Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <h2>Submit Your Lisiting</h2>
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-two.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="single-listing.php">Listing </a></li>
                    <li class="breadcrumb-item active">Add Listing</li>
                </ol>
            </div>
        </div>
        <div class="add-listing-wrap" style="margin-bottom: 20px; padding: 40px;">
            <div class="container">
                <!-- add-listing-tost-block -->
                <form id="add_listing_form" method="POST" class="form-common add-listing-form" action="./php_form/add_listing_form.php" enctype="multipart/form-data" style="padding: 20px; text-align:center;">
                    
                    <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Personal Information</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
										<label for="personal_name">Full Name</label>
										<input id="personal_name" name="personal_name" type="text" class="form-control form-single-element" placeholder="Ex: Manas Singh" required>
									</div>
									<div class="form-group">
										<label for="personal_number">Contact Number</label>
										<input id="personal_number" name="personal_number" type="text" class="form-control" placeholder="Ex: +91-000-000-0000" required>
									</div>
									<div class="form-group">
										<label for="personal_email_id">Email ID</label>
										<input id="personal_email_id" name="personal_email_id" type="email" class="form-control" placeholder="Ex: info@example.com" required>
									</div>
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
									<div class="form-group">
										<label for="personal_address_line_1">Address</label>
										<input id="personal_address_line_1" name="personal_address_line_1" type="text" class="form-control" placeholder="Ex: 92, West Lane" required>
									</div>
									<div class="form-group">
										<input id="personal_address_line_2" name="personal_address_line_2" type="text" class="form-control" placeholder="Ex: Harvard Street, Los Angles" required>
									</div>
									<!-- padding: 15% 20px; 
									padding: 60% 28.5%; -->
								</div>
							</div>
						</div>
					</div>

                    <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                        <h4>Business Registration</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="businessinfo-left-block">
                                    <div class="form-group">
                                        <label for="legal_name">Legal Business Name</label>
                                        <input id="legal_name" name="legal_name" type="text" class="form-control form-single-element" placeholder="Ex: ABC travel agency" required>
                                        <input id="listing_tagline" name="listing_tagline" type="text" class="form-control" placeholder="Business Tagline goes here" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_no">Contact Number</label>
                                        <input id="contact_no" name="contact_no" type="text" class="form-control" placeholder="Ex: +91-000-000-0000" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="business_email_id">Email ID</label>
                                        <input id="business_email_id" name="business_email_id" type="email" class="form-control" placeholder="Ex: info@example.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="business_password">Password</label>
                                        <input id="business_password" name="business_password" type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="business_password_1" name="business_password_1" type="password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="businessinfo-right-block">
                                    <!-- <div id="add_listing_map" class="add-listing-map"></div> -->
                                    <div class="form-group">
                                        <label for="address_line_1">Address</label>
                                        <table>
                                            <tr>
                                                <td width=550><input id="address_line_1" name="address_line_1" type="text" class="form-control" placeholder="Line 1" required></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td width= 275><input id="address_street" name="address_street" type="text" class="form-control" placeholder="Street" required style="margin-bottom: 5px;"></td>
                                                <td width= 275><input id="address_city" name="address_city" type="text" class="form-control" placeholder="City" aria-required="true" style="margin-bottom: 5px;"></td>
                                            </tr>
                                            <tr>
                                                <td><input id="address_state" name="address_state" type="text" class="form-control" placeholder="State" required style="margin-bottom: 5px;"></td>
                                                <td><input id="postal_zip" name="postal_zip" type="text" class="form-control" placeholder="Postal ZIP" required style="margin-bottom: 5px;"></td>
                                            </tr>
                                            <tr>
                                                <td><input id="country" name="country" type="text" class="form-control" placeholder="Country" required></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <label for="business_category">Business Domain</label>
                                        <table>
                                            <tr>
                                                <td width=275>
                                                    <select id="business_category" name="business_category" style="width: 250px; height: 30px; border-radius: 3px; background-color: white !important;" required>
                                                        <!-- <option value="none" selected disabled hidden>Select an Option</option> -->
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    
									<div class="form-group" style="width: 100%; height: 100%; margin-top: 2%;">
										<div>
											<label for="personal_profile_image">Company Logo</label>
											<input type="file" class="form-control-file" id="personal_profile_image" name="personal_profile_image" required style="opacity: 1;">
											<span>File Format .pdf or .doc</span>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- details-listing -->
                    <div class="listing-block attach-document-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                        <h4>Attach Legal bsuiness Documents</h4>
                        <div class="form-group form-group-file-type">
                            <label for="pan_no">PAN Number</label>
                            <!-- <input type="file" class="form-control-file" id="pan_no"> -->
                            <input id="pan_no" name="pan_no" type="text" class="form-control-file" placeholder="Ex: XXXXXXXXXX" required>
                            <!-- <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
                        </div>
                        <div class="form-group form-group-file-type">
                            <!-- <label for="gst_no">Company Brochure</label>
                            <input type="file" class="form-control-file" id="gst_no">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
                            <label for="gst_no">GST Number</label>
                            <input id="gst_no" name="gst_no" type="text" class="form-control-file" placeholder="Ex: XXXXXXXXXXXXXXX" required>
                        </div>
                        <div class="form-group form-group-file-type">
                            <label for="bank_details">Bank Account Statement</label>
                            <input type="file" class="form-control-file" id="bank_details" name="bank_details" required>
                            <span>File Format .pdf or .doc</span>
                        </div>
                        <div class="form-group row form-check-row">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <label class="custom-control custom-checkbox condition-text">
                                        <input type="checkbox" class="custom-control-input" name="accept">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">I accept <a href="#" style="color: blue" required>Terms and Conditions</a></span>
                                    </label>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <span>
                            <?php 
                                if (isset($_GET['x'])) {
                                    $result = $_GET['x'];
                                    echo $result;
                                }
                            ?>
                        </span>
                    </div>
                    <button type="submit" class="danger-btn" id="submit_button" name="submit_button" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
						<i class="fa fa-plus" aria-hidden="true"></i>
						Add
					</button>
                </form>
            </div>
        </div>
    </div>
        <footer>
            <div class="footer-top-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
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
                        <div class="col-lg-3 col-sm-6">
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
                        <div class="col-lg-2 col-sm-6">
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
                                    <!-- <li>
                                        <a href="add-listing.php">
											Add Listing
										</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
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

    <script>
        $(document).ready(function(){
            $("#business_category").load('./php_form/load_category.php')
        });
    </script>
    <!-- <script src="assets/js/jquery-3.2.1.min.js"></script> -->
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
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="assets/js/gmap3.min.js"></script>

    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $('#add_listing_map').gmap3({
            map: {
                options: {
                    zoom: 5,
                    center: [41.785091, -73.968285],
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
                latLng: [40.785091, -73.968285],
                options: {animation:google.maps.Animation.BOUNCE, icon: 'images/markers/small-marker.png' }
            },
            styledmaptype: {
                id: "style1",
                options: {
                    name: "Style 1"
                },
            }
        });
    </script> -->
</body>

<!-- Mirrored from themerail.com/html/listingGeo/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:09 GMT -->
</html>
