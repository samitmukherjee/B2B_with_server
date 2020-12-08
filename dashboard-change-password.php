<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] == 'executive')) {
	header("location: ./business-login.php");
}

    include ("php_form/config.php");
    // $email_id = $_SESSION['business_user'];
    $user_type = "";
    $email = $_SESSION['business_user'];
    if($_SESSION['business'] == 'owner'){
        echo $user_type = 'owner';
        $sql = "SELECT business_id FROM business_details WHERE business_email_id = '$email' ";
        //echo $sql;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $business_id = $row['business_id'];
        // echo '1';
    }else{
        // echo $user_type ='executive';
        $sql = "SELECT executive_id FROM business_executive WHERE executive_email_id = '$email' ";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $business_id = $row['executive_id'];
        // echo "2";
    }

    // echo $business_id;
    

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
				<form id="update_profile_form" method="POST" class="form-common add-listing-form" action="./php_form/change_password_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align:center;">
					<!-- Personal Information -->
					<div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Change Password</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
                                        <input type="hidden" name="user_type" value="<?php echo $user_type ?>">
										<input type="hidden" name="business_id" value="<?php echo $business_id ?>">
										<label>New Password</label>
										<input id="new_password" name="new_password" type="password" class="form-control form-single-element" required>
									</div>
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
								<div class="form-group">
										<label>Confirm Password</label>
										<input id="confirm_password" name="confirm_password" type="password" class="form-control form-single-element" required>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button type="submit" class="danger-btn" id="submit_button" name="change_password" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
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
    
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
</html>