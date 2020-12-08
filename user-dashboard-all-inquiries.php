<?php
session_start();
if(empty($_SESSION['user'])){
	header("location: ./login.php");
}

include ("php_form/config.php");

$email_id = $_SESSION['user'];

$query_load_enquiries = "SELECT * FROM enquiry_details,business_details,user_details, product_details, unit_table 
					WHERE enquiry_details.business_id = business_details.business_id 
					AND enquiry_details.user_id = user_details.user_id 
					AND enquiry_details.product_id = product_details.product_id 
					AND enquiry_details.product_unit = unit_table.unit_id
					AND user_details.user_email_id = '$email_id' ";

// echo $query_load_reviews;

$result_load_enquiries = mysqli_query($conn, $query_load_enquiries);


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-message.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:29 GMT -->
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
    	<div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
			<div class="container">
				<div class="row">
				<div class="col-lg-10 offset-lg-1">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading" style="padding-left: 20px; padding-top: 15px;">
									<div class="panel-title" style="height: 30px">
										<h4 style = "align-items: center;">Enquiries</h4>
									</div>
								</div>

								<div class="panel-body">
									<div class="listing-reviews">
										<ul>
										<?php
										if(mysqli_num_rows($result_load_enquiries) > 0){
											while($row = mysqli_fetch_assoc($result_load_enquiries)){
										?>
											<li>
												<div class="avatar-block">
													<img src="<?php echo $row['personal_profile_image'] ?>" alt="img" class="img-responsive">
												</div>
												<div class="review-content">
													<a style="font-size: 16px; font-weight: bold;"><?php echo $row['product_quantity'] . " " . $row['unit_name'] . " x " . $row['product_name'] . " @ " . $row['legal_name'] ?></a>
													<div class="meta">
														<span>
															<?php echo $row['enquiry_message'] ?>
														</span>
													</div>
													<div class="review-entry">
														
													</div>
													<div class="replay-btn">
														<img src="<?php echo $row['product_image_1']?>" style="height:100px; width:100px;"/>
													</div>
												</div>
											</li>

											<?php
											}
										}else{
											echo "No enquiry";
										}
										?>

										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){

			var enquiry_count = 0;
			displaycount();
			function displaycount(){
				var user_id = $('#displaydata').attr('value');
				console.log("count", user_id);
				$('#count').load('./php_form/pending_user_enquiry_count.php', {user_id: user_id}, function(){
				console.log("count received");
				});
			}

			$('#displaydata').click(function(){
				enquiry_count = enquiry_count + 2;
				var user_id = $('#displaydata').attr('value');
				console.log(user_id);
				$('#response').load('./php_form/load_user_pending_enquiry.php', {enquiry_new_count: enquiry_count, user_id: user_id}, function(){
					console.log('data load was successs');
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
    
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-all-message.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:30 GMT -->
</html>