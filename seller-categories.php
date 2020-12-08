<?php
	// error_reporting(0);
    session_start();
    
    header('Cache-Control: max-age=900');
	
    include ("php_form/config.php");

	date_default_timezone_set('Asia/Kolkata');

    $category_id = $_POST['category_id'];
    // $category_name = "Education Industry";
		
		// if(isset($_POST['category_name'])){
			$query_show_business = "SELECT * FROM business_details,business_details_business_address, category_table 
            WHERE business_details.business_id = business_details_business_address.business_id AND category_table.category_id = business_details.business_category
            AND category_table.category_id = '$category_id' ORDER BY legal_name LIMIT 3 ";

			$result_show_business = mysqli_query($conn,$query_show_business);
		// }
		
        $business_count = mysqli_num_rows($result_show_business);


        
        // echo $query_show_business;

	?>
<!DOCTYPE html>
<html lang="en">

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
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle" href="home-two.php" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <form action="./single-listing.php" method="POST" enctype="mutipart/form-data">
                                        <input type="text" name ="product_seller_name" id="product" class="outer-select-input-box "  placeholder="Ex: Gada Elctronics" autocomplete="off">
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

            <div class="serach-result-section">
                <div class="serach-result-section-inner">
                    <div class="container">
                        <div class="row">

                            <!-- <div class="col-md-9">
                                <div class="serach-result-section-title">
                                    <h4><?php // echo "<b>".$business_count."</b>" ?> Seller<?php
                                        // if($business_count > 1){
                                        //     echo "s";
                                        // }
                                        // $query_category_name = "SELECT * FROM category_table WHERE category_id = '$category_id' ";
                                        // $result_category_name = mysqli_query($conn,$query_category_name);
                                        // $row_category_name = mysqli_fetch_assoc($result_category_name);
                                        // $category_visible = $row_category_name['category_name'];
                                        // $category_visible = ucwords($category_visible);
                                    
                                    ?>
                                     under category <?php // echo "<b>".$category_visible."</b>" ?> </h4>
                                </div>
                            </div> -->
                        </div>
                        <div id="appended_products" class="row product-list-group">
                            <?php 
							while($business = mysqli_fetch_assoc($result_show_business)){ ?>
                            <div class="item col-lg-4 col-md-6" id="append_card">

                                <article class="popular-listing-post">

                                    <div class="post-thumb">
                                        <img src="<?php echo $business['cover_image'] ?>" class="img-responsive" style="width: 100%; height: 200px">
                                    
                                        <?php
                                            $business_name = $business['legal_name'];

                                            $query_rating = "SELECT ROUND(AVG(ratings)) FROM review_details, business_details 
                                            WHERE review_details.business_id = business_details.business_id 
                                            AND business_details.legal_name = '$business_name' ";

                                            $result_rating = mysqli_query($conn,$query_rating);
                                            $row_rating = mysqli_fetch_assoc($result_rating);

                                            // $rating = $row_rating['ROUND(AVG(ratings))'];
                                        ?>
                                        <div class="rating-area">
                                            <ul>
                                                <?php for($n=0; $n<$row_rating['ROUND(AVG(ratings))']; $n++) {?>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <?php } 
                                                
                                                for($n=0; $n<(5 - $row_rating['ROUND(AVG(ratings))']); $n++) {?>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                <?php } ?>
                                            </ul>
                                            <span>
                                            <?php
                                                $query_rating_count = "SELECT ROUND(AVG(ratings),1) FROM review_details, business_details 
                                                WHERE review_details.business_id = business_details.business_id 
                                                AND business_details.legal_name = '$business_name' ";
    
                                                $result_rating_count = mysqli_query($conn,$query_rating_count);
                                                $row_rating_count = mysqli_fetch_assoc($result_rating_count);

                                            ?>
                                                (<?php echo $row_rating_count['ROUND(AVG(ratings),1)'] ?>/5)
                                            </span>
                                        </div>
                                        <!-- <div class="overlay"></div> -->
                                    </div>
                                    <div class="post-details">                                        
                                        <div class="post-meta">
                                            <div class="location tag">
                                                <?php
                                                    if($business['verification_status'] == 1){
                                                        echo "<i class='fa fa-check-circle' aria-hidden='true'></i>";
                                                        echo "Verified Seller";
                                                    }
                                                    else{
                                                        echo "<i class='fa fa-info-circle' aria-hidden='true' style='color:grey'></i>";
                                                        echo "Seller under Verification";
                                                    }

                                                ?>
                                            </div>                                            
                                        </div>
                                        
                                        <div class="post-entry-block" style="margin-bottom: 20%">
                                            <p class="post-entry" style="height: 30px">
                                                <?php  
                                                    echo "<strong>".$business['legal_name']."</strong><br>".$business['business_tagline'];
                                                ?>
                                            </p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="contact-no">
                                                <form action="./single-listing.php" method="POST">
                                                    <input type="hidden" name="product_seller_name"
                                                        value="<?php echo $business['legal_name'] ?>">
                                                    <button type="submit" id="<?php echo $business['legal_name'] ?>"
                                                        style="width: 170px; background: transparent; border:none; margin-left:40%" value="Contact Dealer">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>View Seller</button>
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
                <!-- <nav class="navigation pagination pagination-primary">
						<div class="nav-links">
							<a class="page-numbers" href="#">1</a>
							<span class="page-numbers current">2</span>
							<a class="page-numbers" href="#">3</a>
							<a class="page-numbers" href="#">4</a>
							<a class="next page-numbers" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</nav> -->

            </div>
            <!-- serach-result section -->
            <!-- </div> -->

            <!-- <div class="container">
                <div class="btn-group">
                    <button id="load_more" class="success-btn icon-btn"><i class="fa fa-chevron-circle-down"
                            aria-hidden="true"></i> Load More</button>
                </div>
            </div> -->

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
                    <div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog"
                        aria-hidden="true">
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
                                                        <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel &
                                                            Restaurent</p>
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
                                                            <img src="images/post/author/3.jpg" alt="img"
                                                                class="img-responsive">
                                                        </div>
                                                        <p class="post-entry">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt
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

        $(document).ready(function() {

            $('#search_prod').attr("disabled", true);

            $('#product_list').click(function(){
                $('#search_prod').attr("disabled", false);
            });


            $('#product').keyup(function() {
                var query = $(this).val();
                if (query != '') {
                    $.ajax({
                        url: "./php_form/search_seller.php",
                        method: "POST",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#product_list').fadeIn();
                            $('#product_list').html(data);
                        }
                    });
                } else {
                    $('#product_list').fadeOut();
                    $('#product_list').html("");
                }
            });
            $(document).on('click', 'li', function() {
                $('#product').val($(this).text());
                $('#product_list').fadeOut();
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

            // $('#search_prod').click(function() {
            //     var product_per_page = 3;
            //     var product_name = $('#product').val();
            //     var prev_product_per_page = product_per_page;

            //     var sort_filter = $('#sort_filter').val();

            //     // 	alert(product_per_page);
            //     $('#appended_products').load('./php_form/product_filter.php', {
            //         product_name: product_name,
            //         product_per_page: product_per_page,
            //         sort_filter: sort_filter
            //     }, function() {
            //         console.log('Data Loaded');
            //     });
            // });

            // $('#sort_filter').click(function() {
            //     var sort_filter = $('#sort_filter').val();
            //     // console.log(sort_filter);
            //     var product_per_page = 3;
            //     var product_name = $('#product').val();
            //     var prev_product_per_page = product_per_page;

            //     $('#appended_products').load('./php_form/product_filter.php', {
            //         product_name: product_name,
            //         product_per_page: product_per_page,
            //         sort_filter: sort_filter
            //     }, function() {
            //         console.log('Data Loaded');
            //     });
            // });


            // $('#load_more').click(function() {
            //     counter += 3;
            //     var product_name = $('#product').val();
            //     var product_per_page = counter;

            //     var sort_filter = $('#sort_filter').val();
            //     $('#appended_products').load('./php_form/product_filter.php', {
            //         product_name: product_name,
            //         product_per_page: product_per_page,
            //         sort_filter: sort_filter
            //     }, function() {
            //         console.log('More data loaded');
            //     });
            // });

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

        <script type='text/javascript'>
        var element = $(this);
        var map;

        function initialize(myCenter, selector) {
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
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_one"));
            google.maps.event.trigger(map, 'resize');
        });
        $('#post_listing_modal_two').on('shown.bs.modal', function(e) {
            var element = $(e.relatedTarget);
            var data = element.data("lat").split(',')
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_two"));
            google.maps.event.trigger(map, 'resize');
        });
        $('#post_listing_modal_three').on('shown.bs.modal', function(e) {
            var element = $(e.relatedTarget);
            var data = element.data("lat").split(',')
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_three"));
            google.maps.event.trigger(map, 'resize');
        });
        $('#post_listing_modal_four').on('shown.bs.modal', function(e) {
            var element = $(e.relatedTarget);
            var data = element.data("lat").split(',')
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_four"));
            google.maps.event.trigger(map, 'resize');
        });
        $('#post_listing_modal_five').on('shown.bs.modal', function(e) {
            var element = $(e.relatedTarget);
            var data = element.data("lat").split(',')
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_five"));
            google.maps.event.trigger(map, 'resize');
        });
        $('#post_listing_modal_six').on('shown.bs.modal', function(e) {
            var element = $(e.relatedTarget);
            var data = element.data("lat").split(',')
            initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById(
                "listing_post_map_six"));
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