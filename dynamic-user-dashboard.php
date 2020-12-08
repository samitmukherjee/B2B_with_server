<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['buyer'] != 'buyer'){
	header("location: ./login.php");
}

include ("php_form/config.php");

$email_id = $_SESSION['user'];

$query_user_details = "SELECT * FROM user_details WHERE user_email_id = '$email_id' ";

// echo $query_load_reviews;

$result_user_details = mysqli_query($conn, $query_user_details);

$row_user = mysqli_fetch_assoc($result_user_details)


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
            
            <nav class="navbar navbar-toggleable-md fixed-top">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
				</button>
                <a class="navbar-brand" href="home-two.php">
                    <img src="images/logox.png" alt="img" class="img-responsive">
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse" style="width: 88% !important;">
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
					<div class="">
						<?php if(isset($_SESSION['user']) && $_SESSION['buyer'] == 'buyer'): ?>
						<a class="user-login-btn border-btn" href="./php_form/logout.php" style="color: #e7e7e7; margin-left: 45%; margin-top: 5%">
						<i class="fa fa-user-o" aria-hidden="true"></i> logout</a>
						<?php else: ?>
						<a class="uses-login-btn border-btn" href="login.php">
						<i class="fa fa-user-o" aria-hidden="true"></i>login</a>
						<?php endif; ?>
					</div>
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
				<div class="user-profile-block" style="margin: auto; padding-bottom:0% !important;">
					<div>
						<div class="user-thumb" style="padding-right: 0% !important;">
							<img src="<?php echo $row_user['user_profile_picture'] ?>" alt="img" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="user-info" style="text-align: center;">
					<h5>
						<?php echo $row_user['first_name'] ?> <?php echo $row_user['last_name'] ?>
					</h5>
					<!-- <span><?php //echo $row_user['last_name'] ?></span> -->
				</div>
				<div class="accordion-menu responsive-menu" data-accordion-group>
					
					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-orders">All Orders</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-reviews">All Reviews</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-inquiries">All Enquirues</span>
							</a>
						</div>
					</div>

                    <div class="slide-navigation-wrap">
                        <div class="nav-item">
                            <a>
                                <span class="menu-icon-wrap icon ti-comment-alt"></span>
								<span class="menu-title" id="load-all-chat">Chat Center</span>
								<input type="hidden" id="user_email" name="user_email" value= "<?php echo $_SESSION['user'] ?>">
                            </a>
                        </div>
                    </div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap icon ti-user"></span>
								<span class="menu-title" id="my-profile">My Profile</span>
							</a>
						</div>
					</div>

					<div class="slide-navigation-wrap">
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap icon ti-settings"></span>
								<span value="<?php echo $_SESSION['user'] ?>" class="menu-title" id="change-password">Change Password</span>
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
		</div>
	</div>


	<script>
    	$(document).ready(function(){
    		// $('#load-dashboard').click(function(){
    		// 	$('#container_1').load('user-dashboard.php', function(){
    		// 		console.log("Loaded!!!");
    		// 	});
    		// });

			$('#container_1').load('user-dashboard.php', function(){
    			console.log("Loaded!!!");
			});

    		$('#all-orders').click(function(){
    			$('#container_1').load('user-dashboard-all-orders.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#all-reviews').click(function(){
    			$('#container_1').load('user-dashboard-all-reviews.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#all-inquiries').click(function(){
    			$('#container_1').load('user-dashboard-all-inquiries.php', function(){
    				console.log("Loaded!!!");
    			});
    		});
            $('#chat-center').click(function(){
                $('#container_1').load('user-dashboard-chat-center.php', function(){
                    console.log("Loaded!!!");
                });
            });

    		$('#my-profile').click(function(){
    			$('#container_1').load('user-dashboard-my-profile.php', function(){
    				console.log("Loaded!!!");
    			});
			});
			

			$('#load-all-chat').click(function(){
				var chatUser = $('#user_email').attr("value");
				//console.log(chatUser);
				$('#container_1').load('dashboard-chat-1.php',{chatUser: chatUser},function(){
					// console.log("Loaded!!!");
				});
				$('#loadChat').submit(function(){
					return enterName();
				});
			});

			$('#change-password').click(function(){
				$('#container_1').load('user-dashboard-change-password.php',function(){
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
    <script src="assets/js/jquery.slimscroll.min.js"></script>
	
    <!-- Tinymce-JS -->
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <!-- Google-map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="assets/js/gmap3.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:28 GMT -->
</html>