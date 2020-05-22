<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/home-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:21 GMT -->
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
                <?php if(isset($_COOKIE['b2b'])): ?>
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
                    <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
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
                            <a class="nav-link dropdown-toggle" href="listing-map-left.php" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Categories
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="listing-map-left.php">Category 1</a></li>
                                <li><a class="dropdown-item" href="listing-map-right.php">Category 2</a></li>
                                <li><a class="dropdown-item" href="listing-map-full.php">Category 3</a></li>
                                <li><a class="dropdown-item" href="single-listing.php">Category 4</a></li>
                                <!-- <li><a class="dropdown-item" href="add-listing.php">Add Listing</a></li>
                                <li><a class="dropdown-item" href="favorite-listing.php">Favorite Listings</a></li>
								<li><a class="dropdown-item" href="single.php">Single</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="home-two.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <!-- <li><a class="dropdown-item" href="home-two.php">Home One</a></li>
                                <li><a class="dropdown-item" href="home-two.php">Home Two</a></li> -->
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="working-process.php">How It Works</a></li>
                                <!-- <li><a class="dropdown-item" href="packages.php">Listing Package</a></li>
                                <li><a class="dropdown-item" href="gallery.php">Photo Gallery</a></li> -->
                                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
								<!-- <li><a class="dropdown-item" href="404.php">404</a></li> -->
                            </ul>
                        </li>
						 <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="dshboard.php" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="dashboard-all-listing.php">All listings</a></li>
                                <!-- <li><a class="dropdown-item" href="dashboard-new-listing.php">Add new listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-active-listing.php">Active Listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-expired-listing.php">Expired Listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-favorites-listing.php">My Favorites</a></li> -->
                                <li><a class="dropdown-item" href="dashboard-all-review.php">All Reviews</a></li>
                                <!-- <li><a class="dropdown-item" href="dashboard-my-review.php">My Reviews</a></li> -->
                                <li><a class="dropdown-item" href="dashboard-all-message.php">All Messages</a></li>
                                <!-- <li><a class="dropdown-item" href="dashboard-unread-message.php">Unread Messages</a></li>
								<li><a class="dropdown-item" href="dashboard-checkout.php">Checkout</a></li>
								<li><a class="dropdown-item" href="dashboard-package-plan.php">Package Plan</a></li>
								<li><a class="dropdown-item" href="dashboard-invoices.php">Invoices</a></li>
								<li><a class="dropdown-item" href="dashboard-add-campaign.php">Add Campaign</a></li>
								<li><a class="dropdown-item" href="dashboard-claim-refund.php">Claim & Refund</a></li> -->
								<li><a class="dropdown-item" href="dashboard-profile.php">User Profile</a></li>
								<li><a class="dropdown-item" href="dashboard-business-profile.php">Business Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- main nav section -->
        <div class="main-header-section main-header-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-content-block">
                            <div class="header-title-block">
                                <h2>B2B Marketplace</h2>
                                <p>Discover what makes feel better nearest you.</p>
                            </div>
                            <form class="form-common filter-form filter-header-form">
                                <div class="form-group outer-select-field">
                                    <a class="input-dropedown-btn catagory-btn" href="javascript:void(0)">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Categories
                                    </a>
                                    <input type="text" class="outer-select-input-box" id="listing_catagory_list" placeholder="Ex: Travel Agency">
                                </div>
                                <div class="form-group outer-select-field">
                                    <a class="input-dropedown-btn location-btn" href="javascript:void(0)">
                                        <i class="fa fa-crosshairs" aria-hidden="true"></i> Location
                                    </a>
                                    <input type="text" class="outer-select-input-box" id="listing_location_list" placeholder="Ex: Vijay Nagar">
                                </div>
                                <div class="btn-group">
                                    <button type="submit" class="danger-btn">
										<i class="ti-search" aria-hidden="true"></i>
										Search
									</button>
                                </div>
                            </form>
                        </div>
                        <!-- header-content-block -->
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="listing-catagory-block">
                            <div class="catagory-image">
                                <img src="images/catagory/1.jpg" alt="img" class="img-responsive">
                                <div class="catagory-text">
                                    <h4>
                                        <a href="javascript:void(0)">Restaurant</a>
                                    </h4>
                                    <p class="hide-text">125 Listings</p>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="listing-catagory-block">
                            <div class="catagory-image">
                                <img src="images/catagory/2.jpg" alt="img" class="img-responsive">
                                <div class="catagory-text">
                                    <h4>
                                        <a href="javascript:void(0)">Health & Medical</a>
                                    </h4>
                                    <p class="hide-text">125 Listings</p>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="listing-catagory-block">
                            <div class="catagory-image">
                                <img src="images/catagory/3.jpg" alt="img" class="img-responsive">
                                <div class="catagory-text">
                                    <h4>
                                        <a href="javascript:void(0)">Hotel</a>
                                    </h4>
                                    <p class="hide-text">125 Listings</p>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="listing-catagory-block">
                            <div class="catagory-image">
                                <img src="images/catagory/4.jpg" alt="img" class="img-responsive">
                                <div class="catagory-text">
                                    <h4>
                                        <a href="javascript:void(0)">Real Estate</a>
                                    </h4>
                                    <p class="hide-text">125 Listings</p>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
        <!-- main-header section -->
        <!-- <div class="listing-catagory-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="images/catagory/1.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Restaurant</a>
                                        </h4>
                                        <p class="hide-text">125 Listings</p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="images/catagory/2.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Health & Medical</a>
                                        </h4>
                                        <p class="hide-text">125 Listings</p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="images/catagory/3.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Hotel</a>
                                        </h4>
                                        <p class="hide-text">125 Listings</p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="images/catagory/4.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Real Estate</a>
                                        </h4>
                                        <p class="hide-text">125 Listings</p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="images/catagory/5.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Shopping</a>
                                        </h4>
                                        <p class="hide-text">125 Listings</p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- listing catagory section -->

        <p class="listing-promote-text">
            Or Add & Promote your own products and services.
        </p>
        <div class="listing-promote-steps">
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

        <div class="popular_products">
            <div class="container">
                <div class="section-title">
                    <h2>Most Popular Product Categories</h2>
                    <p>Discover all of our users favoraites!</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/1.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Toys & games</a></h4>
                            <div class="popular-cities-info-block">
                                <p>18 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/2.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Electronic Accessories and Gadgets</a></h4>
                            <div class="popular-cities-info-block">
                                <p>22 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/3.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Beauty & Personal Care</a></h4>
                            <div class="popular-cities-info-block">
                                <p>15 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/4.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Books</a></h4>
                            <div class="popular-cities-info-block">
                                <p>9 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/5.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Clothing & Accessories</a></h4>
                            <div class="popular-cities-info-block">
                                <p>22 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="popular-cities-block">
                            <img src="images/cities/6.jpg" alt="img" class="img-responsive">
                            <h4><a href="javascript:void(0)">Footwear</a></h4>
                            <div class="popular-cities-info-block">
                                <p>20 Sellers</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular-cities section -->
        <div class="popular-listing-section">
            <div class="container">
                <div class="section-title">
                    <h2>Most Popular Services</h2>
                    <p>Discover all of our users favoraites!</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="popular-listing-post">
                            <div class="post-thumb">
                                <img src="images/post/9.jpg" alt="img" class="img-responsive">
                                <div class="listing-info">
                                    <h4><a href="javascript:void(0)">Yoga</a></h4>
                                    <p><i class="fa fa-bed" aria-hidden="true"></i> Health & Fitness</p>
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
                                        <li>
                                            <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_one">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
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
                                        <h5><a href="javascript:void(0)">Indore</a></h5>
                                    </div>
                                    <div class="tag">
                                        <span>Ad</span>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="post-entry-block">
                                    <div class="post-author">
                                        <img src="images/post/author/1.jpg" alt="img" class="img-responsive">
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
                                        <h5>Open</h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="popular-listing-post">
                            <div class="post-thumb">
                                <img src="images/post/10.jpg" alt="img" class="img-responsive">
                                <div class="listing-info">
                                    <h4><a href="javascript:void(0)">Salon</a></h4>
                                    <p><i class="fa fa-bed" aria-hidden="true"></i> Beauty & Makeup</p>
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
                                        <li>
                                            <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_two">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
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
                                        <h5><a href="javascript:void(0)">Bhopal</a></h5>
                                    </div>
                                    <div class="tag">
                                        <span>Ad</span>
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="post-entry-block">
                                    <div class="post-author">
                                        <img src="images/post/author/2.jpg" alt="img" class="img-responsive">
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
                                        <h5>Open</h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>      
                    <div class="col-lg-4 col-md-6">
                        <article class="popular-listing-post">
                            <div class="post-thumb">
                                <img src="images/post/11.jpg" alt="img" class="img-responsive">
                                <div class="listing-info">
                                    <h4><a href="javascript:void(0)">Wedding Photographers</a></h4>
                                    <p><i class="fa fa-bed" aria-hidden="true"></i> Digital Media</p>
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
                                        <li>
                                            <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_three">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
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
                                        <h5><a href="javascript:void(0)">Indore</a></h5>
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
            </div>
        </div>
        <!-- popular-listing section -->
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
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-pencil-alt"></span>
                            <h4>Add/Review Listing</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-stats-up"></span>
                            <h4>Grow Your Business</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- working-process section -->
        <!-- <div class="article-section">
            <div class="container">
                <div class="section-title">
                    <h2>Articles & Tips</h2>
                    <p>Get knowledge from our latest blog and articles. Its time for exploring.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-post">
                            <div class="post-thumb">
                                <img src="images/post/4.jpg" alt="img" class="img-responsive">
                                <div class="post-meta">
                                    <span class="post-date">23 Dec 2018</span>
                                    <div class="social-share-block">
                                        <button class="social-trigger-btn">
											<i class="fa fa-share-alt" aria-hidden="true"></i>
										</button>
                                        <ul class="social-list">
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
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gradient"></div>
                            </div>
                            <div class="post-wrapper">
                                <h4 class="post-title">
                                    <a href="javascript:vaoid(0)">
										Most Popular Hotel in CA
									</a>
                                </h4>
                                <p class="post-entry">
                                    listingGEO  is a limited digital marketing company specializing listingGEO  listingGEO  is a limited digit al marketing
                                </p>
                                <div class="blog-footer">
                                    <div class="author-thumb-block">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5><a href="javascript:void(0)">Ketty</a></h5>
                                    </div>
                                    <div class="post-tags">
                                        <a href="javascript:void(0)">Hotel</a>,
                                        <a href="javascript:void(0)">Tips</a>,
                                        <a href="javascript:void(0)">California</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-post">
                            <div class="post-thumb">
                                <img src="images/post/5.jpg" alt="img" class="img-responsive">
                                <div class="post-meta">
                                    <span class="post-date">23 Dec 2018</span>
                                    <div class="social-share-block">
                                        <button class="social-trigger-btn">
											<i class="fa fa-share-alt" aria-hidden="true"></i>
										</button>
                                        <ul class="social-list">
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
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gradient"></div>
                            </div>
                            <div class="post-wrapper">
                                <h4 class="post-title">
                                    <a href="javascript:vaoid(0)">
										Most Popular Hotel in CA
									</a>
                                </h4>
                                <p class="post-entry">
                                    listingGEO  is a limited digital marketing company specializing listingGEO  listingGEO  is a limited digit al marketing
                                </p>
                                <div class="blog-footer">
                                    <div class="author-thumb-block">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5><a href="javascript:void(0)">Ketty</a></h5>
                                    </div>
                                    <div class="post-tags">
                                        <a href="javascript:void(0)">Hotel</a>,
                                        <a href="javascript:void(0)">Tips</a>,
                                        <a href="javascript:void(0)">California</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-post">
                            <div class="post-thumb">
                                <img src="images/post/6.jpg" alt="img" class="img-responsive">
                                <div class="post-meta">
                                    <span class="post-date">23 Dec 2018</span>
                                    <div class="social-share-block">
                                        <button class="social-trigger-btn">
											<i class="fa fa-share-alt" aria-hidden="true"></i>
										</button>
                                        <ul class="social-list">
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
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gradient"></div>
                            </div>
                            <div class="post-wrapper">
                                <h4 class="post-title">
                                    <a href="javascript:vaoid(0)">
										Most Popular Hotel in CA
									</a>
                                </h4>
                                <p class="post-entry">
                                    listingGEO  is a limited digital marketing company specializing listingGEO  listingGEO  is a limited digit al marketing
                                </p>
                                <div class="blog-footer">
                                    <div class="author-thumb-block">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h5><a href="javascript:void(0)">Ketty</a></h5>
                                    </div>
                                    <div class="post-tags">
                                        <a href="javascript:void(0)">Hotel</a>,
                                        <a href="javascript:void(0)">Tips</a>,
                                        <a href="javascript:void(0)">California</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- article section-->
        <!-- <div class="testimonial-section">
            <div class="container">
                <div class="section-title">
                    <h2>Testimonial</h2>
                    <p>What people say about ListingGEO Directory</p>
                </div>
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12">
                        <div id="testimonial" class="testimonial-slider">
                            <div class="item">
                                <h4>“ListingGEO helps to grow my Business”</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                                </p>
                                <div class="quetoe-author-block">
                                    <h4>Tomas Alva Edison</h4>
                                    <p>CEO, Edison Group, CA</p>
                                </div>
                            </div>
                            <div class="item">
                                <h4>“ListingGEO helps to grow my Firm”</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                                </p>
                                <div class="quetoe-author-block">
                                    <h4>Jhon Enistine</h4>
                                    <p>CEO, Enistine Group, CA</p>
                                </div>
                            </div>
                            <div class="item">
                                <h4>“ListingGEO helps to grow my Business”</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                                </p>
                                <div class="quetoe-author-block">
                                    <h4>Theory Hocking</h4>
                                    <p>CEO, Hocking Group, CA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonial section-->
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
                    <a href="single-listing.php" class="icon-btn explore-listing-btn">
                        <i class="fa fa-search" aria-hidden="true"></i> Explore Listing
                    </a>
                </div>
            </div>
        </div>
        <!-- call-to-action section-->
		<div class="listing-modal-content-section">
			<div class="container">
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
				</div><!-- listing-modal -->
				<div class="modal fade listing-modal" id="post_listing_modal_two" tabindex="-1" role="dialog" aria-hidden="true">
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
										<div id="listing_post_map_two" class="listing-post-map"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- listing-modal -->
				<div class="modal fade listing-modal" id="post_listing_modal_three" tabindex="-1" role="dialog" aria-hidden="true">
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
										<div id="listing_post_map_three" class="listing-post-map"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- listing-modal -->
			</div>
		</div><!-- listing-modal-content section -->
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
</body>

<!-- Mirrored from themerail.com/html/listingGeo/home-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:21 GMT -->
</html>
