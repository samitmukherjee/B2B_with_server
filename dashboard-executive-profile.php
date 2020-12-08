<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] == 'executive')) {
	header("location: ./business-login.php");
}

    include ("php_form/config.php");

    $email_id = $_SESSION['business_user'];
    // echo $email_id;

    $query_executive_details = "SELECT * FROM business_executive WHERE executive_email_id = '$email_id' ";    
    // echo $query_executive_details;
    $result_executive_details = mysqli_query($conn, $query_executive_details);
    $row_executive_details = mysqli_fetch_assoc($result_executive_details);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
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

    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="dashboard">
    <div class="main-wrap" style="width: 100%;">
        <!-- Slide Menu Section -->
		<!--<div class="page-container-wrap"> -->
        <div class="add-listing-wrap" style="margin-bottom: 20px; margin-left:100px; margin-top: 100px;">
			<div class="container">
				<form id="update_profile_form" method="POST" class="form-common add-listing-form" action="./php_form/update_executive_profile_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align:center;">
					<!-- Personal Information -->
					<div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Edit Profile Details</h4>
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group" style="max-width: 100%; max-height: 100%; display: block;">
									<div>
										<img src="<?php echo $row_executive_details['profile_picture']?>" style="width: 125px; height:125px;">
									</div>
								</div>
							</div>
							<div class="col-lg-10">
								<div class="form-group" style="width: 100%; height: 100%;">
									<div>
										<label>Profile Picture</label>
										<input type="file" class="form-control-file" id="profile_picture" name="profile_picture" required style="opacity: 1;">
										<span>File Format .pdf or .doc</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
										<input name="executive_id" value="<?php echo $row_executive_details['executive_id']?>" type="hidden">
										<label>First Name</label>
										<input id="first_name" name="first_name" type="text" class="form-control form-single-element" value="<?=$row_executive_details['executive_first_name'] ?>" placeholder="Ex: Manas" required>
									</div>
									<div class="form-group">
										<label>Contact Number</label>
										<input id="contact_no"  name="contact_no" type="text" class="form-control" value="<?=$row_executive_details['executive_contact_no'] ?>" placeholder="Ex: +91-000-000-0000" required>
									</div>
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
								<div class="form-group">
										<label>Last Name</label>
										<input id="last_name"  name="last_name" type="text" class="form-control form-single-element" value="<?=$row_executive_details['executive_last_name'] ?>" placeholder="Ex: Singh" required>
									</div>
									<div class="form-group">
										<label>Email ID</label>
										<input id="email_id" name="email_id" type="email" class="form-control" value="<?=$row_executive_details['executive_email_id'] ?>" placeholder="Ex: info@example.com" required>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button type="submit" class="danger-btn" id="submit_button" name="submit_button" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
						<i class="fa fa-plus" aria-hidden="true"></i>
						Update
					</button>
				</form>
			</div>
		</div>
		<!-- </div> -->
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