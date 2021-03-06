<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
<head>
    <meta charset="UTF-8">
    <title>ListingGEO - Directory Listing Template</title>
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
        <!-- Main Navigation -->
        <div class="main-nav-section">
            <div class="user-panel">
                <a href="login.php" class="user-login-btn border-btn">
                    <i class="fa fa-user-o" aria-hidden="true"></i> Log in
                </a>
                <a href="add-listing.php" class="user-addlisting-btn">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
                </a>
            </div>
            <nav class="navbar navbar-toggleable-md fixed-top">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
				</button>
                <a class="navbar-brand" href="home-one.php">
                    <img src="images/logo.png" alt="img" class="img-responsive">
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="listing-map-left.php" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Explore
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="listing-map-left.php">Map Left</a></li>
                                <li><a class="dropdown-item" href="listing-map-right.php">Map Right</a></li>
                                <li><a class="dropdown-item" href="listing-map-full.php">Map Fullwidth</a></li>
                                <li><a class="dropdown-item" href="single-listing.php">Listing Details</a></li>
                                <li><a class="dropdown-item" href="add-listing.php">Add Listing</a></li>
                                <li><a class="dropdown-item" href="favorite-listing.php">Favorite Listings</a></li>
								<li><a class="dropdown-item" href="single.php">Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="home-one.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a class="dropdown-item" href="home-one.php">Home One</a></li>
                                <li><a class="dropdown-item" href="home-two.php">Home Two</a></li>
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="working-process.php">How It Works</a></li>
                                <li><a class="dropdown-item" href="packages.php">Listing Package</a></li>
                                <li><a class="dropdown-item" href="gallery.php">Photo Gallery</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
								<li><a class="dropdown-item" href="404.php">404</a></li>
                            </ul>
                        </li>
						 <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="dshboard.php" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="dashboard-all-listing.php">All listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-new-listing.php">Add new listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-active-listing.php">Active Listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-expired-listing.php">Expired Listings</a></li>
                                <li><a class="dropdown-item" href="dashboard-favorites-listing.php">My Favorites</a></li>
                                <li><a class="dropdown-item" href="dashboard-all-review.php">All Reviews</a></li>
                                <li><a class="dropdown-item" href="dashboard-my-review.php">My Reviews</a></li>
                                <li><a class="dropdown-item" href="dashboard-all-message.php">All Messages</a></li>
                                <li><a class="dropdown-item" href="dashboard-unread-message.php">Unread Messages</a></li>
								<li><a class="dropdown-item" href="dashboard-checkout.php">Checkout</a></li>
								<li><a class="dropdown-item" href="dashboard-package-plan.php">Package Plan</a></li>
								<li><a class="dropdown-item" href="dashboard-invoices.php">Invoices</a></li>
								<li><a class="dropdown-item" href="dashboard-add-campaign.php">Add Campaign</a></li>
								<li><a class="dropdown-item" href="dashboard-claim-refund.php">Claim & Refund</a></li>
								<li><a class="dropdown-item" href="dashboard-settings.php">Settings</a></li>
								<li><a class="dropdown-item" href="dashboard-profile.php">My Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- main nav section -->
		<a href="#" id="slide-nav-trigger" class="slide-nav-trigger">
			<i class="fa fa-bars" aria-hidden="true"></i>
			Dashboard Navigation
		</a>
		<div class="slide-menu-wrap">
			<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
				<div class="user-profile-block">
					<div>
						<div class="user-thumb">
							<img src="images/misc/9.jpg" alt="img" class="img-responsive">
						</div>
						<div class="user-info">
							<h5>
								Robert Smith
							</h5>
							<span>UI Designer</span>
						</div>
					</div>
					<a href="#" class="listing-btn-cmn">Update Profile</a>
				</div>
				<div class="accordion-menu responsive-menu" data-accordion-group>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard.php">
								<span class="menu-icon-wrap icon ti-layers-alt"></span>
								<span class="menu-title">Dashboard</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap icon ti-location-pin"></span>
								<span class="menu-title">My Listing</span>
							</a>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="dashboard-all-listing.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">All listings</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="dashboard-new-listing.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Add new listings</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="dashboard-active-listing.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Active Listings</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="dashboard-expired-listing.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Expired Listings</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-favorites-listing.php">
								<span class="menu-icon-wrap icon ti-heart"></span>
								<span class="menu-title">My Favorites</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap icon ti-comment-alt"></span>
								<span class="menu-title">Reviews</span>
							</a>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="dashboard-all-review.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">All Reviews</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="dashboard-my-review.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">My Reviews</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap icon ti-email"></span>
								<span class="menu-title">Messages</span>
							</a>
							<div class="menu-badge-wrap">
								<span class="menu-badge">5</span>
							</div>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="dashboard-all-message.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">All Messages</span>
								</a>
							</div>
							<div class="nav-item">
								<a href="dashboard-unread-message.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Unread Messages</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap" data-accordion>
						<div class="nav-item has-sub" data-control>
							<a href="javascript:void(0)">
								<span class="menu-icon-wrap icon ti-gift"></span>
								<span class="menu-title">Packages</span>
							</a>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="dashboard-checkout.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Checkout</span>
								</a>
							</div>
						</div>
						<div class="menu-content" data-content>
							<div class="nav-item">
								<a href="dashboard-package-plan.php">
									<span class="menu-icon-wrap bullet"></span>
									<span class="menu-title">Package Plan</span>
								</a>
							</div>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-invoices.php">
								<span class="menu-icon-wrap icon ti-clipboard"></span>
								<span class="menu-title">Invoices</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-add-campaign.php">
								<span class="menu-icon-wrap icon ti-check-box "></span>
								<span class="menu-title">Add Campaign</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-claim-refund.php">
								<span class="menu-icon-wrap icon ti-pencil-alt"></span>
								<span class="menu-title">Claim & Refund</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-settings.php">
								<span class="menu-icon-wrap icon ti-settings"></span>
								<span class="menu-title">Settings</span>
							</a>
						</div>
					</div>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a href="dashboard-profile.php">
								<span class="menu-icon-wrap icon ti-user"></span>
								<span class="menu-title">My Profile</span>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
        <!-- Slide Menu Section -->
		<div class="page-container-wrap">
			<div class="container-fluid">
				 <div class="add-listing-tost-block">
                    <p>
                        <strong>Existing User? Please </strong><a href="login.php">Sign in.</a> <strong>New here? </strong>Please <strong>continue</strong> and enter your <strong>Name</strong> & <strong>Email</strong> Address along with listing information at the bottom.
                    </p>
                </div>
                <!-- add-listing-tost-block -->
                <form id="add_listing_form" class="form-common add-listing-form" action="#" novalidate="novalidate">
                    <div class="listing-block businessinfo-listing">
                        <h4>Business Information</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="businessinfo-left-block">
                                    <div class="form-group">
                                        <label for="listing_name">Listing Name</label>
                                        <input id="listing_name" type="text" class="form-control form-single-element" placeholder="Ex: Anderson Hotel" aria-required="true">
                                        <input id="listing_tagline" type="text" class="form-control" placeholder="Business Tagline goes here" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_email">Contact Email</label>
                                        <input id="listing_email" type="email" class="form-control" placeholder="Ex: info@example.com" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_phone_no">Contact Phone</label>
                                        <input id="listing_phone_no" type="text" class="form-control" placeholder="Ex: +1-0000-000-000" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_website">Website</label>
                                        <input id="listing_website" type="text" class="form-control" placeholder="Ex: www.example.com" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <!-- col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="businessinfo-right-block">
                                    <div id="add_listing_map" class="add-listing-map"></div>
                                    <div class="form-group">
                                        <label for="listing_address">Location (Full Address)</label>
                                        <input id="listing_address" type="text" class="form-control" placeholder="Find your place in gogle map" aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="listing_region">Listing Region</label>
                                        <input id="listing_region" type="text" class="form-control" placeholder="Select your listing region" aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- businessinfo-listing -->
                    <div class="listing-block Others-Information-listing">
                        <h4>Others Information</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="listing_category">Category</label>
                                    <select id="listing_category" class="form-control">
										<option>Default select</option>
										<option>First select</option>
										<option>Second select</option>
										<option>Third select</option>
									</select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="listing_price">Price</label>
                                    <select id="listing_price" class="form-control">
										<option>Default select</option>
										<option>Price One</option>
										<option>Price Two</option>
										<option>Price Three</option>
									</select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group listing-price">
                                    <input id="listing_price_from" type="text" class="form-control" placeholder="Price From" aria-required="true">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group listing-price">
                                    <input id="listing_price_to" type="text" class="form-control" placeholder="Price To" aria-required="true">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="listing-features-block">
                                    <h5>Select listing features</h5>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <!-- block-checkbox block -->
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <!-- block-checkbox block -->
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <!-- block-checkbox block -->
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Air Conditioned</span>
															</label>
                                                        </div>
                                                    </div>
                                                    <!-- block-checkbox block -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- listing-features-block -->
                                <div class="listing-additionalinfo-block">
                                    <h5>Aditional info</h5>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group additionalinfo-toggle-switch">
                                                        <input type="checkbox" checked id="aditionalInfo1">
                                                        <label for="aditionalInfo1">Pet Friendly</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group additionalinfo-toggle-switch">
                                                        <input type="checkbox" checked id="aditionalInfo2">
                                                        <label for="aditionalInfo2">Wheel Accessible</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group additionalinfo-toggle-switch">
                                                        <input type="checkbox" id="aditionalInfo3">
                                                        <label for="aditionalInfo3">Child Friendly</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group additionalinfo-toggle-switch">
                                                        <input type="checkbox" checked id="aditionalInfo4">
                                                        <label for="aditionalInfo4">First Aid Service</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group additionalinfo-toggle-switch">
                                                        <input type="checkbox" checked id="aditionalInfo5">
                                                        <label for="aditionalInfo5">Fire Safety</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- listing-additionalinfo-block -->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="listing_others" type="text" class="form-control" placeholder="Others" aria-required="true">
                                </div>
                                <div class="listing-businesshour-block">
                                    <h5>Business Hours</h5>
                                    <div class="form-check">
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Monday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Tuesday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Wednesday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Thursday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Frinday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Saturday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                        <div class="multiple-label-checkbox-block">
                                            <p><strong>Sunday [+]</strong> 08:00 <b>-</b> 10:00</p>
                                            <label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">Closed</span>
											</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- listing-businesshour-block -->
                                <div class="form-group time-zone-block">
                                    <label for="listing_timezone">Time Zone</label>
                                    <select id="listing_timezone" class="form-control">
										<option>Select your business time zone.. Ex: UTC +0</option>
										<option>Select your business time zone.. Ex: UTC +10</option>
										<option>Select your business time zone.. Ex: UTC +20</option>
										<option>Select your business time zone.. Ex: UTC +30</option>
									</select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Others-Information-listing -->
                    <div class="listing-block details-listing">
                        <h4>Listing Details</h4>
                        <div class="form-group listing-compose-block">
                            <label for="listing_descreption">Description</label>
                            <textarea rows="5" cols="50" id="listing_descreption" class="form-control compose-box" placeholder="Comma Seperated Ex:  Real Estate, Construction"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group textarea-form-group">
                                    <label for="listing_kewords">Keywords</label>
                                    <textarea rows="5" cols="50" id="listing_kewords" class="form-control" placeholder="Comma Seperated Ex:  Real Estate, Construction"></textarea>
                                </div>
                                <div class="promotional-video-block form-group">
                                    <label for="listing_youtube_video_1">Promotional Video</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="listing_youtube_video_1" type="text" class="form-control" placeholder="YouTube Video URL Here" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_youtube_video_2" type="text" class="form-control" placeholder="YouTube Video URL Here" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="listing_youtube_video_3" type="text" class="form-control" placeholder="YouTube Video URL Here" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_youtube_video_4" type="text" class="form-control" placeholder="YouTube Video URL Here" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="listing_faq">FAQ</label>
                                    <input id="listing_faq" type="text" class="form-control" placeholder="Question" aria-required="true">
                                </div>
                                <div class="form-group textarea-form-group">
                                    <textarea rows="5" cols="50" id="listing_answer" class="form-control" placeholder="Answer"></textarea>
                                </div>
                                <button type="button" class="listing-btn-large">+ Add New</button>
                            </div>
                            <div class="col-lg-6">
                                <div class="social-profile-block form-group">
                                    <label for="listing_facebook_url">Social Profile</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="listing_facebook_url" type="text" class="form-control" placeholder="Facebook URL" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_twitter_url" type="text" class="form-control" placeholder="Twitter URL" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_instagram_url" type="text" class="form-control" placeholder="Instagram URL" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input id="listing_googleplus_url" type="text" class="form-control" placeholder="Google Plus URL" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_youtube_url" type="text" class="form-control" placeholder="YouTube URL" aria-required="true">
                                            </div>
                                            <div class="form-group">
                                                <input id="listing_linkedin_url" type="text" class="form-control" placeholder="Linkedin URL" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uload-images-block">
                                    <h5>Upload Images</h5>
                                    <div class="form-group form-group-file-type">
                                        <label for="listing_company_logo">Company Logo</label>
                                        <input type="file" class="form-control-file" id="listing_company_logo">
                                        <span>Maximum file size: 20 MB.</span>
                                    </div>
                                    <div class="form-group form-group-file-type">
                                        <label for="listing_company_cover_photo">Cover Image</label>
                                        <input type="file" class="form-control-file" id="listing_company_cover_photo">
                                        <span>Maximum file size: 20 MB.</span>
                                    </div>
                                    <div class="form-group form-group-file-type">
                                        <label for="listing_company_slide_photo">Slide Show Images</label>
                                        <input type="file" class="form-control-file" id="listing_company_slide_photo">
                                        <span>Maximum file size: 90 MB.</span>
                                    </div>
                                    <div class="form-group form-group-file-type">
                                        <label for="listing_company_gallary_photo">Gallery Images (optional)</label>
                                        <input type="file" class="form-control-file" id="listing_company_gallary_photo">
                                        <span>Maximum file size: 90 MB.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- details-listing -->
                    <div class="listing-block attach-document-listing">
                        <h4>Attach Documents</h4>
                        <div class="form-group form-group-file-type">
                            <label for="listing_company_profile">Company Profile</label>
                            <input type="file" class="form-control-file" id="listing_company_profile">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span>
                        </div>
                        <div class="form-group form-group-file-type">
                            <label for="listing_company_brochure">Company Brochure</label>
                            <input type="file" class="form-control-file" id="listing_company_brochure">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span>
                        </div>
                        <div class="form-group form-group-file-type">
                            <label for="listing_company_resturant">Food Menu (Restaurant)</label>
                            <input type="file" class="form-control-file" id="listing_company_resturant">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span>
                        </div>
                        <div class="form-group form-group-file-type">
                            <label for="listing_company_document">Others Document</label>
                            <input type="file" class="form-control-file" id="listing_company_document">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span>
                        </div>
                    </div>
                    <!-- attach-document-listing -->
                    <div class="listing-block prview-listing">
                        <h4>Enter your information to Sign up & get approval notification</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="listing_user_name">Your Name</label>
                                    <input id="listing_user_name" type="text" class="form-control" placeholder="Enter your full name here" aria-required="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="listing_user_email">Email</label>
                                    <input id="listing_user_email" type="email" class="form-control" placeholder="Enter your email here" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center">To Review your listing click the button below</h4>
                        <button type="submit" class="listing-btn-large">Save & Preview</button>
                    </div>
                    <!-- prview-listing -->
                </form>
			</div>
			<div class="col-md-12">
				<footer>
					<div class="footer-top-block">
						<div class="container">
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="footer-widget">
										<div class="footer-logo-block">
											<a href="javascript:void(0)">
												<img src="images/logo.png" alt="img" class="img-responsive">
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
												<a href="javascript:void(0)">
													About ListingGEO
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													How it Works
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													Exclusive Listings
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													Popular Locations
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
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
												<a href="javascript:void(0)">
													User Log in
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													User Registration
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													Add Listing
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													Favorite Lisitings
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													Pricing Plans
												</a>
											</li>
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
		</div>
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
    </script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
</html>