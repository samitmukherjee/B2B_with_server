<?php
session_start();
error_reporting(0);
// if(empty($_SESSION['user']) && $_SESSION['buyer'] != 'buyer') {
// 	header("location: ./business-login.php");
// }

// header('Cache-Control: max-age=0');

// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");

include ("php_form/config.php");

date_default_timezone_set('Asia/Kolkata');

$query_four_tabs = "SELECT business_id, AVG(ratings) FROM review_details GROUP BY business_id LIMIT 4";

$result_four_tabs = mysqli_query($conn, $query_four_tabs);                

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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                <?php if(isset($_SESSION['user']) && $_SESSION['buyer'] =='buyer'): ?>
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

        <?php
            $query_homepage_image = "SELECT banner_image FROM homepage_image WHERE customize_id = '1' ";
            $result_homepage_image = mysqli_query($conn, $query_homepage_image);

            $row_homepage_image = mysqli_fetch_assoc($result_homepage_image);
            $homepage_image = $row_homepage_image['banner_image'];
        ?>
        <!-- main nav section -->
        <div class="main-header-section main-header-section-two" style="padding: 220px 0 80px 0; position: relative; background: url(<?php echo $homepage_image ?>) center center no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="header-content-block">
                            <div class="header-title-block">
                                <h2>B2B Marketplace</h2>
                                <p>Discover facilities near you.</p>
                            </div>
                            <form class="form-common filter-form filter-header-form" id="product_seller_form" name="product_seller_form" method="POST" enctype="mutipart/form-data">
                                <div class="input-group mb-3" style="width: 100%; margin-bottom: 0px !important;">
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" name="product_seller" id="product_seller" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="background-color: #fff; border: #000 solid 1px; color: #000; border-right: 0px; border-radius: 4px 0 0 4px;
                                            height: 40px; font-weight: 400;">Search</button>
                                            <option class="dropdown-item" value="product">Products</option>
                                            <option class="dropdown-item" value="seller" selected="selected">Sellers</option>     
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" name ="product_seller_name" id="product_seller_name" aria-label="Text input with dropdown button" placeholder="Ex. iPhone, Gada Electronics" required autocomplete="off" style="background-color: #fff; border: #000 solid 1px; color: #000;    ">
                                </div>
                                <div id="selection_list" class="form-control" style="background-color: white !important; border: 1px solid #858585; border-radius: 4px 4px 4px 4px;"></div>
                                <div style="text-align: center; margin-top: 20px;">
                                    <button type="submit" class="danger-btn" id="search_product_seller" style="width: 150px; height: 45px; border-radius: 4px; margin-left:0px !important; background-color: #3768D6; position: relative; cursor: pointer;">
										<i class="ti-search" aria-hidden="true"></i>
										Search
									</button>
                                </div>
                            </form>
                        </div>
                        <!-- header-content-block -->
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div> 

        <h4 class="listing-promote-text" style="color: #000; margin-top: 5%">
            Add & Promote your own products and services.
        </h4>
        <div class="listing-promote-steps" style="margin-top: 40px; margin-bottom: 1%">
            <div class="listing-promote-block">
                <span class="ti-user"></span>
                <p>Register</p>
            </div>
            <div class="listing-promote-block">
                <span class="ti-pencil-alt"></span>
                <p>Create Listing</p>
            </div>
            <div class="listing-promote-block">
                <span class="ti-announcement"></span>
                <p>Publish</p>
            </div>
        </div>

        <div class="popular-cities-section">
            <div class="container">
                <div class="section-title">
                    <h2>Category wise Sellers</h2>
                    <!-- <p>Uncover your favorite places to travel, shop, eat or anything what happening around you.</p> -->
                </div>
                <div class="row">
                <?php 
        
                while($row_four_bid = mysqli_fetch_assoc($result_four_tabs)){

                    $business_id = $row_four_bid['business_id'];
                
                    $query_business_category = "SELECT * FROM business_details, category_table 
                            WHERE business_details.business_category = category_table.category_id 
                            AND business_details.business_id = '$business_id' ";

                    $result_business_category = mysqli_query($conn, $query_business_category);
                    
                    $row_business_category = mysqli_fetch_assoc($result_business_category);
                    $business_category = $row_business_category['category_id'];

                    $query_sellers = "SELECT business_details.legal_name FROM business_details, category_table 
                            WHERE business_details.business_category = category_table.category_id AND category_table.category_id = '$business_category' ";
                    $result_sellers = mysqli_query($conn, $query_sellers);

                    $seller_number = mysqli_num_rows($result_sellers);

                    $business_category_four_tabs = $row_business_category['category_name'];
                    $business_category_four_tabs = ucwords($business_category_four_tabs);

                    // echo $query_business_category;

                ?>
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/5.jpg" alt="img" class="img-responsive">
                            <form action="seller-categories.php" method = "POST">
                            <input type="hidden" name = "category_id" id = "category_id" value = "<?php // echo $row_business_category['category_id'] ?>" >
                                <h4>
                                    <button id="category_button_4" style="background: transparent; color: white; border: none; font-size: 16px;"><?php // echo $business_category_four_tabs ?></button>
                                </h4>
                            </form>
                            <div class="popular-cities-info-block">
                                <p><?php // echo $seller_number ?> Sellers</p>
                                
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div> -->

                    <div class="col-sm-3">
                        <div class="seller-card">
                            <form action="seller-categories.php" method="POST">
                                <input type="hidden" name = "category_id" id = "category_id" value = "<?php echo $row_business_category['category_id'] ?>" >
                                <button type="submit" id="business_button" style="background: transparent; border:none; width: 100%;  height: 120px;"> 
                                    <div class="seller-details" style="text-align: center;">
                                        <div style="height: 50px;">
                                            <h4><?php echo $business_category_four_tabs ?></h4>
                                        </div>                                    
                                        <div class="seller-rating" style="text-align: center;">
                                            <label style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $seller_number ?> Sellers</label>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>

                    

                <?php } ?>

                    

                </div>
            </div>
        </div>



        

        <div class="popular_products">
            <div class="container">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="container text-center my-3">
                                <a>
                                    <h2>New arrivals</h2>
                                </a>
                                <p>Discover new and exclusive products!</p>
                                <div class="row mx-auto my-auto">
                                    <div id="recipeCarousel2" class="carousel slide w-100 " data-ride="carousel">
                                        <div class="carousel-inner w-100 vv-3" role="listbox">
                                        <?php
                                            $query_new_arrivals = "SELECT * FROM product_details, business_details WHERE new_arrival_status = 1
                                                    AND business_details.business_id = product_details.business_id";
                                            // echo $query_new_arrivals;
                                            $result_new_arrivals = mysqli_query($conn, $query_new_arrivals);
                                            $row_new_arrivals = mysqli_fetch_assoc($result_new_arrivals)
                                        ?>
                                        <div class="carousel-item active" style="max-height: 100px">
                                            <div class="col-2"> 
                                                <form action="./product_page.php" method="POST">
                                                    <input type="hidden" name="product_name" value="<?php echo $row_new_arrivals['product_name'] ?>">
                                                    <input type="hidden" name= "business_name" value="<?php echo $row_new_arrivals['legal_name'] ?>">
                                                    <button type="submit" style="background: transparent; border:none;">
                                                        <img class="d-block img-fluid" src="<?php echo $row_new_arrivals['product_image_1'] ?>">
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <?php while($row_new_arrivals = mysqli_fetch_assoc($result_new_arrivals)){ ?>
                                        <div class="carousel-item" style="max-height: 100px">
                                            <div class="col-2">
                                            <form action="./product_page.php" method="POST">
                                                <input type="hidden" name="product_name" value="<?php echo $row_new_arrivals['product_name'] ?>">
                                                <input type="hidden" name= "business_name" value="<?php echo $row_new_arrivals['legal_name'] ?>">
                                                    <button type="submit" style="background: transparent; border:none;">
                                                        <img class="d-block img-fluid" src="<?php echo $row_new_arrivals['product_image_1'] ?>" >
                                                    </button>
                                            </form>
                                            </div>
                                        </div>
                                        <?php } ?>

                                        </div>
                                        <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 

            $query_popular_category = "SELECT business_id, AVG(ratings) FROM review_details GROUP BY business_id LIMIT 4";

            $result_popular_category = mysqli_query($conn, $query_popular_category);


            while($row_bid = mysqli_fetch_assoc($result_popular_category)){

                $business_id = $row_bid['business_id'] ;

                $query_business_category = "SELECT * FROM business_details, category_table 
                        WHERE business_details.business_id = '$business_id' 
                        AND business_details.business_category = category_table.category_id";
                $result_business_category = mysqli_query($conn, $query_business_category);
                
                $row_business_category = mysqli_fetch_assoc($result_business_category);
                $business_category = $row_business_category['business_category'];

                $query_products = "SELECT DISTINCT * FROM product_details, business_details, category_table 
                        WHERE product_details.business_id = business_details.business_id 
                        AND business_details.business_category = category_table.category_id
                        AND business_details.business_category ='$business_category' AND product_details.product_status = 1  LIMIT 4";

                $result_products = mysqli_query($conn, $query_products);

                $products_number = mysqli_num_rows($result_products);
                // $row_products = mysqli_fetch_assoc($result_products);

                $category_name = $row_business_category['category_name'];
                $category_name = ucwords($category_name);

        ?>
        

        <div class="popular-cities-section" style="margin-bottom: 3%;">
            <div class="container" style="margin-bottom: 2%;">
                <div class="section-title">
                    <form action="./categories.php" method="POST">
                        <input type="hidden" name="category_name" id="category_button" value="<?php echo $row_business_category['category_id']; ?>">
                        <button type="submit" style="background: transparent; border:none;">
                            <h3><?php echo $category_name ?></h3>
                        </button>
                    </form>
                </div>
                <div class="row">
                    <?php while($row_products = mysqli_fetch_assoc($result_products)){ ?>
                        <div class="col-sm-3">
                            <div class="product-card">
                                <div class="product-tumb">
                                    <img src="<?php echo $row_products['product_image_1'] ?>" alt="<?php echo $row_products['product_name'] ?>" style="height: 100%">
                                </div>
                                <div class="product-details" style="height: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">
                                    <form action="./product_page.php" method="POST">
                                        <input type="hidden" name= "product_name" value="<?php echo $row_products['product_name'] ?>">
                                        <input type="hidden" name= "business_name" value="<?php echo $row_products['legal_name'] ?>">
                                        <button type="submit" style="background: transparent; border:none; text-align:center; width:100%; height: 50px">   
                                            <h4><?php echo $row_products['product_name'] ?></h4>
                                        </button>
                                    </form>
                                    <div class="product-bottom-details">
                                        <div class="product-price" style="padding-top: 5px;"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row_products['product_price'] ?></div>
                                        <div class="product-links">
                                            <form action="./inquiry.php" method="POST">
                                                <input type="hidden" name= "product_id" value="<?php echo $row_products['product_id'] ?>">
                                                <a href="">
                                                <button type="submit" id="product_button" style="background: transparent; border:none; color: #fff; border-radius: 4px;">
                                                    Enquiry
                                                </button>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    <?php } ?>
                </div>                
            </div>
            <?php } ?>
        </div>

        <?php

            $query_popular_category_1 = "SELECT business_id, AVG(ratings) FROM review_details GROUP BY business_id LIMIT 4";
            $result_popular_category_1 = mysqli_query($conn, $query_popular_category_1);
            
            while($row_popular_category_1 = mysqli_fetch_assoc($result_popular_category_1)){
                $business_id_1 = $row_popular_category_1['business_id'];

                $query_business_details = "SELECT * FROM business_details WHERE business_id = '$business_id_1' ";
                $result_business_details = mysqli_query($conn, $query_business_details);

            }



        ?>

        <div class="popular-cities-section" style="margin-bottom: 7%;">
            <div class="container" style="margin-bottom: 2%;">

                <div class="section-title">
                    <h3><a href="#">Best Sellers</a></h3>
                </div>

                <div class="row">

                <?php

                    $query_popular_category_1 = "SELECT review_details.business_id, AVG(review_details.ratings) FROM review_details, business_details WHERE business_details.business_id = review_details.business_id AND business_details.verification_status = '1' GROUP BY review_details.business_id ORDER BY AVG(review_details.ratings) DESC LIMIT 4";
                    $result_popular_category_1 = mysqli_query($conn, $query_popular_category_1);
                    
                    while($row_popular_category_1 = mysqli_fetch_assoc($result_popular_category_1)){
                        $business_id_1 = $row_popular_category_1['business_id'];

                        $query_business_details = "SELECT * FROM business_details, category_table 
                                    WHERE business_details.business_category = category_table.category_id 
                                    AND business_details.business_id = '$business_id_1'";

                        $result_business_details = mysqli_query($conn, $query_business_details);

                        $row_business_details = mysqli_fetch_assoc($result_business_details);

                        $category_business = $row_business_details['category_name'];
                        $category_business = ucwords($category_business);

                ?>
                    <div class="col-sm-3">
                        <div class="seller-card">
                            <div class="seller-tumb">
                                <img src="<?php echo $row_business_details['personal_profile_image'] ?>" style="min-height: 100%;"/>
                            </div>
                            <div class="seller-details" style="text-align: center; height: 170px">
                                <form action="./single-listing.php" method="POST">
                                    <input type="hidden" name= "product_seller_name" value="<?php echo $row_business_details['legal_name'] ?>">
                                    <button type="submit" id="business_button" style="background: transparent; border:none;"> 
                                        <h4><?php echo $row_business_details['legal_name'] ?></h4>
                                    </button>
                                </form>
                                <label style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $category_business ?></label>
                                <div class="seller-rating" style="text-align: center;">
                                    
                                    <?php

                                        $query_rating = "SELECT ROUND(AVG(ratings)) FROM review_details, business_details 
                                                        WHERE review_details.business_id = business_details.business_id 
                                                        AND business_details.business_id = '$business_id_1' ";

                                        $result_rating = mysqli_query($conn,$query_rating);
                                        $row_rating = mysqli_fetch_assoc($result_rating);

                                        for($n=0; $n<$row_rating['ROUND(AVG(ratings))']; $n++) {
                                    ?>

                                    <div class="fa fa-star"></div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                </div>

            </div>
        </div>
        

        <div class="working-process-section">
            <div class="overlay1"></div>
            <div class="container">
                <div class="section-title">
                    <h2>How it Works</h2>
                    <p>Expose your business to your community and others in a right way.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-user"></span>
                            <h4>Signup</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-pencil-alt"></span>
                            <h4>Add/Review Listing</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-stats-up"></span>
                            <h4>Grow Your Business</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="call-to-action-section">
            <div class="container">
                <h2>
                    Join today to get more exposure and <br> grow your business
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <!-- Search -->
    <script>
        $(document).ready(function(){

            $('#selection_list').hide();

            $('#search_product_seller').attr("disabled", true);

            $('#selection_list').click(function(){
                $('#search_product_seller').attr("disabled", false);
                li
                $('#product_seller_name').prop("readonly", true);
            });

            $('#product_seller_name').dblclick(function(){
                $('#product_seller_name').prop("readonly", false);
            });


            var xyz = document.getElementById('product_seller').value;
            // console.log(xyz);

            if(xyz == "seller"){
                // console.log(xyz);
                // console.log("SELLER CLICKED");
                document.getElementById("product_seller_form").action = "./single-listing.php";
                // console.log("SELLERS");

                $('#product_seller_name').keyup(function(){
                    var query = $(this).val();
                    if(query != ''){

                        $('#selection_list').load('./php_form/search_seller.php', {query:query}, function(data){
                            $('#selection_list').fadeIn();
                            $('#selection_list').html(data);
                        });
                    } 
                    else{
                        $('#selection_list').fadeOut();
                        $('#selection_list').html("");
                    }
                });
            }
           

            $('select').change(function(){
                var selection = $(this).val();
                // console.log(selection);

                if(selection == "product"){
                    // console.log(selection);
                    // console.log("PRODUCT CLICKED");

                    document.getElementById("product_seller_form").action = "./categories.php";
                    // console.log("PRODUCT");

                    // document.getElementById("product_seller_name").placeholder = "Ex. iPhone";

                    $('#product_seller_name').keyup(function(){
                        var query = $(this).val();
                        if(query != ''){
                            $('#selection_list').load('./php_form/search_product.php', {query:query}, function(data){
                                $('#selection_list').fadeIn();
                                $('#selection_list').html(data);
                            });
                        } 
                        else{
                            $('#selection_list').fadeOut();                            
                            $('#selection_list').html("");
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#product_seller_name').val($(this).text());                
                $('#selection_list').fadeOut();
                
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
            
            // $('li').click(function(){
            //     $('#product_seller_name').val($(this).text());                
            //     $('#selection_list').fadeOut();
            // });


        });
    </script>
<!-- 
    <script>
        document.getElementById("category_list_dropdown").onclick = function() {
            // document.getElementById("form_category_dropdown").submit();
            console.log("Category Clicked");
        }

    </script> -->



    <!-- Tinymce-JS -->
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <!-- Google-map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="js/custom.js"></script>
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
    </script>
    <script>
        $('.carousel .carousel-item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 4; i++) {
            next = next.next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
        });
    </script>
    <!-- <script>
        var where_to_go = document.getElementById("product_seller");
        if(where_to_go == "product"){
            document.getElementById("product_by_category").action = "/categories.php";
            console.log("PRODUCT");
        }
        elseif (where_to_go == "seller"){
            document.getElementById("product_by_category").action = "/single-listing.php";
            console.log("SELLERS");
        }
    </script> -->

</body>

<!-- Mirrored from themerail.com/html/listingGeo/home-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:21 GMT -->
</html>
