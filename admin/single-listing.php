<?php

    session_start();

    error_reporting(0);

    include("php_form/config.php");

    header('Cache-Control: max-age=900');


        $seller = $_POST['product_seller_name'];



    // echo $seller;


    $query = "SELECT * FROM business_details, business_details_business_address, category_table
            WHERE business_details.business_id = business_details_business_address.business_id 
            AND business_details.business_category = category_table.category_id
            AND business_details.legal_name = '$seller' ";

    $result = mysqli_query($conn,$query);
    
    $row = mysqli_fetch_assoc($result);

    // echo $query;

    $legal_name = $row['legal_name'];
    $business_tagline = $row['business_tagline'];
    $business_id = $row['business_id'];
    
    $address_line_1 = $row['address_line_1'];
    $address_street = $row['address_street'];
    $address_city = $row['address_city'];
    $address_state = $row['address_state'];
    $country = $row['country'];
    $postal_zip = $row['postal_zip'];
    $full_address = $row['address_line_1'].$row['address_street'].$row['address_city'].$row['address_state'].$row['country'].$row['postal_zip'];

    $contact_no = $row['contact_no'];
    $business_email_id = $row['business_email_id'];
    $verification_status = $row['verification_status'];
    $business_category = $row['category_name'];
    $business_category = ucwords($business_category);



    $query_products = "SELECT * FROM product_details, business_details 
            WHERE product_details.business_id = business_details.business_id 
            AND  product_details.business_id = '$business_id' 
            AND product_details.product_status = 1";
    $result_products = mysqli_query($conn,$query_products);

    $num_rows = mysqli_num_rows($result_products);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/single-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:12 GMT -->
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
                <!-- <a href="login.php" class="user-login-btn border-btn">
                    <i class="fa fa-user-o" aria-hidden="true"></i> Log in
                </a> -->
                
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
        <div class="subheader subheader-two">
            <div class="subheader-two-block">
                <div class="thumb">
                    <!-- <img src="images/post/author/4.jpg" alt="img" class="img-responsive"> -->
                </div>
                <h2><?php echo $legal_name; ?></h2>
                <p><?php echo $business_tagline; ?></p>
                <ul>
                    <li>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $full_address; ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $contact_no ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $business_email_id ?>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-post-meta-left">
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
                            <div class="write-review">
                                <a href="javascript:void(0)">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Write a Review
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-post-meta-right">
                            <ul class="single-post-meta-list">
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-two.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="favorite-listing.php">Business </a></li>
                    <li class="breadcrumb-item active"><?php echo $legal_name ?></li>
                </ol>
                <div class="breadcrumb-call-to-action">
                    <div class="post-tags">
                        <a href="#" class="tags verified">
                            <i class="fa fa-check" aria-hidden="true"></i> 
                            <?php
                            if($verification_status = '1'){
                                echo "Verified";
                            }else{
                                echo "Not Verified";
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 push-lg-3">
                        <article class="single-post">
                            <div class="post-thumb">
                                <img src="images/post/office.jpg" alt="img" class="img-responsive">
                            </div>
                            <p class="post-entry" align="justify">
                                Porem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            </p>

                        </article>
                        <h4>Available Products @ <strong><?php echo $legal_name ?></strong></h4>
                        <div class="container-fluid" style="margin-top: 30px;">
                            <div class="row" style="height: 500px; overflow: scroll">
                                <?php while($row_product = mysqli_fetch_assoc($result_products)) { ?>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="popular-listing-post">
                                            <div class="post-thumb">
                                            <form action="./product_page.php" method="POST">
                                                <input type="hidden" name= "product_name" value="<?php echo $row_product['product_name'] ?>">
                                                <input type="hidden" name= "business_name" value="<?php echo $row_product['legal_name'] ?>">
                                                <button type="submit" style="background: transparent; border:none;">
                                                    <img src="<?php echo $row_product['product_image_1'] ; ?>" alt="img" class="img-responsive" style="height:200px; width: 100%">                                                
                                                <!-- <div class="overlay"></div> -->
                                                </button>
                                            </form>
                                            </div>
                                            <div class="post-details">
                                                <div class="post-entry-block" style="height: 100px; width:90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                    <h4><a href="javascript:void(0)">
                                                        <?php echo $row_product['product_name'] ; ?>
                                                    </a></h4>
                                                    <p>
                                                        <?php echo $row_product['brand_name'] ; ?>
                                                    </p>
                                                </div>
                                                <div class="post-footer">
                                                    <div class="schedule-info closed" style="height:20px; width: 100px">
                                                        <i class="" aria-hidden="true"></i>
                                                        <h5>
                                                            <i class="fa fa-inr" aria-hidden="true"></i>
                                                            <?php echo $row_product['product_price'] ; ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="review-section">
                        <?php
                            
                            $query_show_reviews = "SELECT * FROM review_details, user_details WHERE review_details.user_id = user_details.user_id AND review_details.business_id = '$business_id' ";
                            $result_show_reviews = mysqli_query($conn, $query_show_reviews);

                            $review_number = mysqli_num_rows($result_show_reviews);
                        ?>
                            <div class="review-title-block">
                                <h4><?php echo $review_number ?> Reviews for <strong><?php echo $legal_name ?></strong></h4>
                            </div>
                            <div class="comments listing-reviews">
                                <ul>
                                    <li>

                                        <?php

                                            while($row_show_reviews = mysqli_fetch_assoc($result_show_reviews)){

                                        ?>
                                        <div class="avatar-block">
                                            <img src="images/post/author/5.jpg" alt="img" class="img-responsive">
                                            <div class="comment-by">
                                                <h4><a href="javascript:void(0)">Oliver liam</a></h4>
                                                <!-- <p><i class="fa fa-star" aria-hidden="true"></i> 90 Reviews</p> -->
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <h4><?php echo $row_show_reviews['review_heading'] ?></h4>
                                            <div class="meta">
                                                <span class="date">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $row_show_reviews['review_time'] ?>
                                            </span>
                                                <span class="time">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>

                                            </span>
                                            </div>
                                            <div class="review-ratting">
                                            <?php for($n=0;$n<$row_show_reviews['ratings'];$n++){ ?>
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <?php } ?>
                                                <!-- <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                                <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                                <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                                <span>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span> -->
                                            </div>
                                            <div class="review-entry">
                                                <p>
                                                <?php echo $row_show_reviews['review'] ?>
                                                </p>
                                            </div>
                                            <!-- <div class="review-images-block">
                                                <a href="images/post/review/large/1.jpg" class="review-images">
                                                    <img src="images/post/review/1.jpg" alt="img" class="img-responsive">
                                                </a>
                                                <a href="images/post/review/large/2.jpg" class="review-images">
                                                    <img src="images/post/review/2.jpg" alt="img" class="img-responsive">
                                                </a>
                                                <a href="images/post/review/large/3.jpg" class="review-images">
                                                    <img src="images/post/review/3.jpg" alt="img" class="img-responsive">
                                                </a>
                                                <a href="images/post/review/large/4.jpg" class="review-images">
                                                    <img src="images/post/review/4.jpg" alt="img" class="img-responsive">
                                                </a>
                                            </div> -->
                                            <!-- <a href="javascript:void(0)" class="replay-btn">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Replay
                                            </a> -->
                                        </div>
                                            <?php } ?>
                                    </li>                                
                                </ul>
                            </div>

                            <?php if(isset($_SESSION['user'])): ?>

                            <div class="write-review-section">
                                <div class="write-review-title">
                                    <h4>Rate & Write a Review</h4>
                                </div>
                                <div class="write-review-inner">
                                    <h4>Your review will be posted publicly on the web.</h4>
                                    <form class="form-common" method="POST" action="./php_form/single_listing_form.php" enctype="multipart/form-data">
                                        <div class="form-group ratting-area">
                                            <div class='rating-stars text-center'>
                                                <ul id='stars' name= "stars">
                                                    <li class='star' title='Poor' data-value='1' id = "star_1">
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Fair' data-value='2' id = "star_2">
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Good' data-value='3' id = "star_3">
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Excellent' data-value='4' id = "star_4">
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='WOW!!!' data-value='5' id = "star_5">
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                </ul>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="star_count" name="star_count" type="hidden" class="form-control form-single-element" aria-required="true" required>
                                        </div>
                                        <div class="form-group">
                                            <input id="userid" name="userid" type="hidden" value="<?php echo($_SESSION['usesr_id']); ?>" class="form-control form-single-element" aria-required="true" required>
                                        </div>
                                        <div class="form-group">
                                            <input id="business_id" name="business_id" type="hidden" value="<?php echo $business_id ; ?>" class="form-control form-single-element" aria-required="true" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="review-input-title">Title</label>
                                            <input type="text" class="form-control" name="review_input_title" id="review_input_title" placeholder="Write the title">
                                        </div>
                                        <div class="form-group textarea-form-group">
                                            <label for="review-input-entry">Review</label>
                                            <textarea rows="8" cols="50" id="review_input_entry" name="review_input_entry" class="form-control" placeholder="Write your review here"></textarea>
                                        </div>
                                        <!-- <div class="filetype-form-group">
                                            <label class="custom-file" for="Upload"></label>
                                            <input id="Upload" type="file" multiple="multiple" name="_photos" accept="image/*" style="visibility: hidden">
                                        </div> -->
                                        <button type="submit" name="post_review" id="post_review" class="listing-btn-large">Post Review</button>
                                    </form>
                                </div>
                            </div>
                            <?php  // else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 pull-lg-9">
                        <div class="sidebar">
                            <div id="map_widget" class="widget map-widget"></div>
                            <div class="widget contact-widget">
                                <p class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span><?php echo $row['address_line_1'].", ".$row['address_street'].", ".$row['address_city'] ?><br> <?php echo ", ".$row['address_state'].", ".$row['country'].", ".$row['postal_zip'] ?></span>
                                </p>
                                <p>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                    <?php echo $contact_no; ?>
                                    </span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span>
                                    <?php echo $business_email_id; ?>
                                    </span>
                                </p>
                                <p>
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    <a href="javascript:void(0)">
                                    Get Directions
                                </a>
                                </p>
                            </div>
                            <div class="widget othersinfo-widget">
                                <div class="widget-title">
                                    <h5>
                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Business Category
                                    </h5>
                                </div>
                                <div class="widget-body">
                                    <span class="right-info">
                                        <?php echo $business_category; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="widget contact-form-wdiget">
                                <div class="widget-title">
                                    <h5>
                                        <i class="fa fa-info-circle" aria-hidden="true"></i> B2B Contact
                                    </h5>
                                </div>
                                <div class="widget-body">
                                    <form class="form-common" action="./php_form/contact_form.php" method="POST">
                                        <div class="form-group">
                                            <input id="guest_name" name="guest_name" type="text" class="form-control" placeholder="Name" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input id="guest_email" name="guest_email" type="email" class="form-control" placeholder="Email" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input id="guest_phone" name="guest_phone" type="text" class="form-control" placeholder="Phone" required autocomplete="off">
                                        </div>
                                        <div class="form-group textarea-form-group">
                                            <textarea id="guest_message" name="guest_message" rows="5" cols="5" class="form-control" placeholder="Message" required autocomplete="off"></textarea>
                                        </div>
                                        <button type="submit" class="listing-btn-large" id="send" name="send">Send</button>
                                    </form>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-post-section -->
        <div class="call-to-action-section">
            <div class="container">
                <h2>
                    Join today to get more exposure and <br> grow your business
                </h2>
                <p>
                    There are many consumers & business owners find this directory is helpful.
                </p>
                <div class="btn-group">
                    <a href="add-listing.php" class="icon-btn adining-listing-btn">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
                    </a>
                    <!-- <a href="single-listing.php" class="icon-btn explore-listing-btn">
                        <i class="fa fa-search" aria-hidden="true"></i> Explore Listing
                    </a> -->
                </div>
            </div>
        </div>
        <div class="listing-single-modal-content-section">
            <div class="modal fade" id="claim-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Inform Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-common">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Business name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Street address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Postal Code">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Main business phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Category">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                                <div class="form-group">
                                    <label class="sca">I deliver goods and services to my customers at their location —<a href="#">Important information</a></label>
                                    <label class="custom-control custom-radio">
                                      <input name="cat" type="radio" class="custom-control-input" value="1">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description">Yes</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                      <input name="cat" type="radio" class="custom-control-input" value="0">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description">No</span>
                                    </label>
                                </div>
                                <button type="submit" class="listing-btn-large">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Text Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-common">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group textarea-form-group">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="listing-btn-large">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- listing-single-modal-content section -->
        <!-- call-to-action section-->
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
                                            About ListingGEO
                                        </a>
                                    </li>
                                    <li>
                                        <a href="working-process.php">
                                            How it Works
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)">
                                            Exclusive Listings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Popular Locations
                                        </a>
                                    </li> -->
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
                                        <a href="login.php">
                                            User Log in
                                        </a>
                                    </li>
                                    <li>
                                        <a href="signup.php">
                                            User Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-listing.php">
                                            Add Listing
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)">
                                            Favorite Lisitings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Pricing Plans
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
    <script src="assets/js/gmap3.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $('#map_widget').gmap3({
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

    </script>

    <script>
        $(document).ready(function(){

            $('#star_1').click(function(){
                $('#star_count').val('1');
                console.log("VALUE = 1");
            });

            $('#star_2').click(function(){
                $('#star_count').val('2');
                console.log("VALUE = 2");
            });

            $('#star_3').click(function(){
                $('#star_count').val('3');
                console.log("VALUE = 3");
            });

            $('#star_4').click(function(){
                $('#star_count').val('4');
                console.log("VALUE = 4");
            });

            $('#star_5').click(function(){
                $('#star_count').val('5');
                console.log("VALUE = 5");
            });

        });
    </script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/single-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:20 GMT -->
</html>