<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')) {
	header("location: ./business-login.php");
}
	$user_email = $_SESSION['business_user'];

	include ("php_form/config.php");
	
	if($_SESSION['business'] == 'owner'){

		$query_business_details = "SELECT * FROM business_details WHERE business_email_id = '$user_email'";

		//echo $query_business_details;

		$result_business_details = mysqli_query($conn, $query_business_details);

		$row_business = mysqli_fetch_assoc($result_business_details);
	
	} elseif ($_SESSION['business'] == 'executive') {
		
		$query_business_details = "SELECT * FROM business_executive WHERE executive_email_id = '$user_email'";

		//echo $query_business_details;

		$result_business_details = mysqli_query($conn, $query_business_details);

		$row_business = mysqli_fetch_assoc($result_business_details);
	
	}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:27 GMT -->
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
    <link rel="stylesheet" href="assets/css/lobipanel.min.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/chat.css">

    <link rel="stylesheet" href="css/responsive.css">

	<!-- include jquery and socket IO -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="js/socket.io.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js" integrity="sha256-yr4fRk/GU1ehYJPAs8P4JlTgu0Hdsp4ZKrx8bDEDC3I=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="dashboard">
    <div class="main-wrap">
		<!-- Main Navigation -->
        <div class="main-nav-section">
            <!-- <div class="user-panel">
				<?php if(isset($_SESSION['business_user']) && ($_SESSION['business'] == 'owner' || $_SESSION['business'] == 'executive')): ?>
                <a class="user-login-btn border-btn" href="./php_form/logout.php">
                <i class="fa fa-user-o" aria-hidden="true"></i> logout</a>
                <?php else: ?>
                <a class="uses-login-btn border-btn" href="login.php">
                <i class="fa fa-user-o" aria-hidden="true"></i>login</a>
                <?php endif; ?>
            </div> -->
            <nav class="navbar navbar-toggleable-md fixed-top">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
				</button>
                <a class="navbar-brand" href="dynamic-dashboard.php">
                    <img src="images/logox.png" alt="img" class="img-responsive">
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse" style="width: 88%">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" style="margin-right: 30px;">
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
							<?php if(isset($_SESSION['business_user']) && ($_SESSION['business'] == 'owner' || $_SESSION['business'] == 'executive')): ?>
								<a class="user-login-btn" href="./php_form/logout.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
								<i class="fa fa-user-o" aria-hidden="true"></i> logout</a>
							<?php else: ?>
								<a class="uses-login-btn" href="login.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
								<i class="fa fa-user-o" aria-hidden="true"></i>login</a>
							<?php endif; ?>
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
		<input type="hidden" id="user_email" name="user_email" value = "<?php echo $user_email ?>">
		<div class="slide-menu-wrap">
			<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
				<div class="user-profile-block" style="margin: auto; padding-bottom: 0%">
					<div>

						<?php if(isset($_SESSION['business']) && $_SESSION['business'] == "owner"): ?>
						<div class="user-thumb">
							<!-- <img src="images/misc/9.jpg" alt="img" class="img-responsive"> -->
							<img src="<?php echo $row_business['personal_profile_image'] ?>" alt="img" class="img-responsive">
						</div>
						<?php endif; ?>

						<?php if(isset($_SESSION['business']) && $_SESSION['business'] == "executive"): ?>
						<div class="user-thumb">
							<!-- <img src="images/misc/9.jpg" alt="img" class="img-responsive"> -->
							<img src="<?php echo $row_business['profile_picture'] ?>" alt="img" class="img-responsive">
						</div>
						<?php endif; ?>

						<!-- <div class="user-info">
							<h5>
								<?php // echo $_SESSION['business_user']; ?>
							</h5>
						</div> -->
					</div>
				
					<!-- <a href="#" class="listing-btn-cmn">Update Profile</a> -->
				</div>
				<div class="user-info" style="text-align: center;">
					<h5>
						<?php echo $_SESSION['business_user']; ?>
					</h5>
				</div>
				<div class="accordion-menu responsive-menu" data-accordion-group>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="load-all-products">All Products</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layout-grid3"></span>
								<span class="menu-title" id="add-products">Add Products</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="load-all-reviews">All Reviews</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="load-all-orders">All Orders</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="load-all-enquiry">All Enquiries</span>
							</a>
						</div>
					</div>

					<?php // if($_SESSION['business'] != "owner"): ?>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-comment-alt"></span>
								<span value="<?php echo $_SESSION['business_user'] ?>" class="menu-title" id="load-all-chat">Chat Center</span>
							</a>
						</div>
					</div>
					<?php // endif; ?>

					<?php if(isset($_SESSION['business']) && $_SESSION['business'] == "owner"): ?>
                    <div class="slide-navigation-wrap">
                        <div class="nav-item">
                            <a>
                                <span class="menu-icon-wrap icon ti-user"></span>
                                <span class="menu-title" id="add-business-executive">Add Business Executive</span>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>

					<?php if(isset($_SESSION['business']) && $_SESSION['business'] == "owner"): ?>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap icon ti-user"></span>
								<span class="menu-title" id="load-business-profile">My Business Profile</span>
							</a>
						</div>
					</div>
					<?php endif; ?>

					<?php if($_SESSION['business'] != "owner"): ?>
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap icon ti-user"></span>
								<span value="<?php echo $_SESSION['business_user'] ?>" class="menu-title" id="load-executive-profile">My Profile</span>
							</a>
						</div>
					</div>
					<?php endif; ?>	

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap icon ti-settings"></span>
								<span value="<?php echo $_SESSION['business_user'] ?>" class="menu-title" id="change-password">Change Password</span>
							</a>
						</div>
					</div>

				</div>
			</nav>
		</div>
        <!-- Slide Menu Section -->
		<div class="page-container-wrap">
			<div class="container-fluid">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row" id="container_1">

					</div>
				</div><!-- nmbr-statistic-area -->
			</div>
			<!-- call-to-action section-->
			<div class="col-md-12">
			</div>
		</div>
	</div>


	<script>
    	$(document).ready(function(){

    		// $('#load-dashboard').click(function(){
    		// 	$('#container_1').load('dashboard.php', function(){
    		// 		console.log("Loaded!!!");
			// 	});
			// });

			$('#container_1').load('dashboard.php', function(){
    			console.log("Loaded!!!");
			});

    		$('#load-all-products').click(function(){
    			$('#container_1').load('dashboard-all-listing.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#add-products').click(function(){
    			$('#container_1').load('dashboard-add-products.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#load-all-reviews').click(function(){
    			$('#container_1').load('dashboard-all-review.php', function(){
    				console.log("Loaded!!!");
    			});
			});
			
			$('#load-all-orders').click(function(){
    			$('#container_1').load('dashboard-all-order.php', function(){
    				console.log("Loaded!!!");
    			});
    		});
			
			$('#add-business-executive').click(function(){
                $('#container_1').load('dashboard-add-executive.php', function(){
                    console.log("Loaded!!!");
                });
			});
			
			$('#load-all-enquiry').click(function(){
                $('#container_1').load('dashboard-all-enquiry.php', function(){
                    console.log("Loaded!!!");
                });
            });

    		$('#load-business-profile').click(function(){
				$('#container_1').load('dashboard-business-profile.php',function(){
    				console.log("Loaded!!!");
    			});
			});
			
			$('#load-all-chat').click(function(){
				var chatUser = $(this).attr("value");
				// console.log(chatUser);
				$('#container_1').load('dashboard-chat-1.php',{chatBusiness: chatUser},function(){
					// console.log("Loaded!!!");
				});
				$('#loadChat').submit(function(){
					return enterName();
				});
			});

			$('#load-executive-profile').click(function(){
				$('#container_1').load('dashboard-executive-profile.php',function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#change-password').click(function(){
				$('#container_1').load('dashboard-change-password.php',function(){
    				console.log("Loaded!!!");
    			});
			});

    	});
	</script>

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
    <!-- <script src="assets/js/jquery.slimscroll.min.js"></script> -->
	
    <!-- Tinymce-JS -->
    <script src="assets/js/tinymce/tinymce.min.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
</html>