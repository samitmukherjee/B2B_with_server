<?php
session_start();
header('Cache-Control: max-age=900');
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

	include("php_form/config.php");
	// echo $_SESSION['get_bid'];
	// $bid_update = $_POST['get_bid'];

	// echo "bid is:".$bid_update;

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-inbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
<head>
    <meta charset="UTF-8">
	 
	<title>B2B Marketplace - Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="AxilBoard Bootstrap 4 Admin Template">
	<meta name="author" content="CodePassenger">
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=css?family=Robot%7cMaterial+Icons" rel="stylesheet" type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="assets/css/uploadfile.css">
    <link rel="stylesheet" href="assets/css/emoji.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/css/lobipanel.min.css">
	
	<!-- Jquery datatable -->
	<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
    <!-- <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
	<!-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->



    <!-- PDF in a Modal -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	
	<!-- Material Design CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" href="assets/css/ripples.min.css">
	<link rel="stylesheet" href="assets/css/mdb.min.css">
	
	<!-- Responsive Mobile Menu -->
	<link rel="stylesheet" href="assets/css/responsive-menu/jquery.accordion.css">
	<link rel="stylesheet" href="css/vertical-menu.css">
	
    <link rel="stylesheet" href="css/app.css">
	
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="menu-collapsed">
	
	<div class="apps-container-wrap page-container">
		<div class="page-content" >
			<div class="container-fluid">
				<div class="row">
					<div class="page-title-block">
						<h4>Manage Seller</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<!-- <li class="breadcrumb-item"><a href="#">MailBox</a></li> -->
							<li class="breadcrumb-item active">Add Seller</li>
						</ol>
					</div>
				</div>

				<?php 
					$bid_update = $_POST['get_bid'];

					// echo "bid is: ".$bid_update;
					$sql = "SELECT * FROM business_details b1, business_details_business_address b2 WHERE b1.business_id = $bid_update AND b2.business_id = $bid_update ";
					//echo $sql;
					$result = mysqli_query($conn, $sql);
					
					$row = mysqli_fetch_array($result);
						
				?>
                
				<div class="add-listing-wrap" style="border:1px solid black; margin-bottom: 20px; padding: 40px;">
				<div class="container">
				<form id="add_listing_form" method="POST" class="form-common add-listing-form" action="./php_form/update_seller_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align:center;">
					<!-- Personal Information -->
					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Personal Information</h4>

						<?php
							
						?>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<!-- <div class="form-group">
										
									</div> -->
									<div class="form-group">
										<input type="hidden" name="business_id" value="<?=$bid_update?>">
										<label for="personal_name">Full Name</label>
										<input id="personal_name" name="personal_name" type="text" class="form-control form-single-element" value="<?=$row['personal_name'] ?>" placeholder="Ex: Manas Singh" required>
									</div>
									<div class="form-group">
										<label for="personal_number">Contact Number</label>
										<input id="personal_number" name="personal_number" type="text" class="form-control" value="<?=$row['personal_number'] ?>" placeholder="Ex: +91-000-000-0000" required>
									</div>
									<div class="form-group">
										<label for="personal_email_id">Email ID</label>
										<input id="personal_email_id" name="personal_email_id" type="email" class="form-control" value="<?=$row['personal_email_id'] ?>" placeholder="Ex: info@example.com" required>
									</div>
								</div>
							</div>
							<?php
								// 	}	
								// }
							?>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
									<div class="form-group">
										<label for="personal_address_line_1">Address</label>
										<input id="personal_address_line_1" name="personal_address_line_1" type="text" class="form-control" value="<?=$row['personal_address_line_1'] ?>" placeholder="Ex: 92, West Lane" required>
									</div>
									<div class="form-group">
										<input id="personal_address_line_2" name="personal_address_line_2" type="text" class="form-control" value="<?=$row['personal_address_line_2'] ?>" placeholder="Ex: Harvard Street, Los Angles" required>
									</div>
									<div class="form-group">
										<div>
											<label for="personal_profile_image">Profile Picture</label>
											<input type="file" class="form-control-file" id="personal_profile_image" name="personal_profile_image" required style="opacity: 1; padding-top: 30px;">
											<br><br><br><span>File Format .pdf or .doc</span>
										</div>
									</div>
									<!-- ./uploads/
									./../uploads/ -->
									<div class="form-group ">
										<div>
											<img src=".<?=$row['personal_profile_image'] ?>" style="width:100px; height:100px;">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Business Registration</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="businessinfo-left-block">
									<div class="form-group">
										<label for="legal_name">Legal Business Name</label>
										<input id="legal_name" name="legal_name" type="text" class="form-control form-single-element" value="<?=$row['legal_name'] ?>" placeholder="Ex: ABC travel agency" required>
										<input id="listing_tagline" name="listing_tagline" type="text" class="form-control" value="<?=$row['business_tagline'] ?>" placeholder="Business Tagline goes here" required>
									</div>
									<div class="form-group">
										<label for="contact_no">Contact Number</label>
										<input id="contact_no" name="contact_no" type="text" class="form-control" value="<?=$row['contact_no'] ?>" placeholder="Ex: +91-000-000-0000" required>
									</div>
									<div class="form-group">
										<label for="business_email_id">Email ID</label>
										<input id="business_email_id" name="business_email_id" type="email" class="form-control" value="<?=$row['business_email_id'] ?>" placeholder="Ex: info@example.com" required>
									</div>
									<!-- <div class="form-group">
										<label for="business_password">Password</label>
										<input id="business_password" name="business_password" type="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input id="business_password_1" name="business_password_1" type="password" class="form-control" placeholder="Confirm Password" required>
									</div> -->
								</div>
							</div>
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
									<!-- <div id="add_listing_map" class="add-listing-map"></div> -->
									<div class="form-group">
										<label for="address_line_1">Address</label>
										<table>
											<tr>
												<td width=550><input id="address_line_1" name="address_line_1" type="text" class="form-control" value="<?=$row['address_line_1'] ?>" placeholder="Line 1" required></td>
											</tr>
										</table>
									</div>
									<div class="form-group">
										<table>
											<tr>
												<td width= 275><input id="address_street" name="address_street" type="text" class="form-control" value="<?=$row['address_street'] ?>" placeholder="Street" required style="margin-bottom: 5px;"></td>
												<td width= 275><input id="address_city" name="address_city" type="text" class="form-control" value="<?=$row['address_city'] ?>" placeholder="City" aria-required="true" style="margin-bottom: 5px;"></td>
											</tr>
											<tr>
												<td><input id="address_state" name="address_state" type="text" class="form-control" value="<?=$row['address_state'] ?>" placeholder="State" required style="margin-bottom: 5px;"></td>
												<td><input id="postal_zip" name="postal_zip" type="text" class="form-control" value="<?=$row['postal_zip'] ?>" placeholder="Postal ZIP" required style="margin-bottom: 5px;"></td>
											</tr>
											<tr>
												<td><input id="country" name="country" type="text" class="form-control" value="<?=$row['country'] ?>" placeholder="Country" required></td>
											</tr>
										</table>
									</div>
									<div class="form-group">
                                    <label for="business_category">Business Domain</label>
                                    <table>
                                        <tr>
                                            <td width=275>
												<?php $query_get_category_name = "SELECT category_name FROM category_table WHERE category_id = '$row[business_category]'  ";
													// echo $query_get_category_name;
													$result_get_category_name = mysqli_query($conn,$query_get_category_name);
													$rowname = mysqli_fetch_assoc($result_get_category_name);
													$c_name = $rowname['category_name']?>
                                                <input  id="business_category1" name="business_category1" value="<?php echo $c_name ?>" readonly>
                                                <select id="business_category" style="width: 250px; height: 30px; border-radius: 3px; background-color: white !important;" required>
                                                    
                                                </select>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
								</div>
							</div>
						</div>
					</div>

					<!-- details-listing -->
					<div class="listing-block attach-document-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align: left;">
						<h4>Attach Legal bsuiness Documents</h4>
							<div class="form-group form-group-file-type">
								<label for="pan_no">PAN Number</label>
								<!-- <input type="file" class="form-control-file" id="pan_no"> -->
								<input id="pan_no" name="pan_no" type="text" class="form-control-file" value="<?=$row['pan_no'] ?>" placeholder="Ex: XXXXXXXXXX" required>
								<!-- <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
							</div>
							<div class="form-group form-group-file-type">
								<!-- <label for="gst_no">Company Brochure</label>
								<input type="file" class="form-control-file" id="gst_no">
								<span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
								<label for="gst_no">GST Number</label>
								<input id="gst_no" name="gst_no" type="text" class="form-control-file" value="<?=$row['gst_no'] ?>" placeholder="Ex: XXXXXXXXXXXXXXX" required>
							</div>
							<div class="form-group form-group-file-type">
								<div>
									<label for="bank_details">Bank Account Statement</label>
								</div>
								<div>
									<input type="file" class="form-control-file" id="bank_details" name="bank_details" required style="opacity: 1; margin-top: 30px;">
									<br><br><span>File Format .pdf or .doc</span>
								</div>
							</div>
							<div class="form-group ">
								<div>
									<embed src=".<?=$row['bank_details'] ?>" style="width:300px; height:150px;">
								</div>
							</div>
							<span>
							<?php 
								if (isset($_GET['x'])) {
									$result = $_GET['x'];
									echo $result;
								}
							?>
							</span>
					</div>	
					<button type="submit" class="danger-btn" id="submit_button" name="submit_button" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
						<i class="fa fa-plus" aria-hidden="true"></i>
						Update
					</button>
				</form>
				</div>
				</div>
        	</div>	
		</div>
	</div>

	<script>
        $(document).ready(function(){
            $("#business_category").load('./php_form/load_category.php')
			// document.getElementById("business_category").

            // var category = document.getElementById("business_category").value;
            // document.getElementById("business_category1").value = category;

            $('#business_category').click(function(){
                var category = $(this).val();
                console.log(category);
                $('#business_category1').val(category);
            });

        });
    </script>
	<!-- <script src="assets/js/jquery-3.2.1.min.js"></script> -->
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-toggle.min.js"></script>
    <script src="assets/js/bootstrap-formhelpers.min.js"></script>
    <script src="assets/js/bootstrap-formhelpers-languages.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="assets/js/validator.min.js"></script>
	<script src="assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="assets/js/jquery-tree-view.js"></script>
	<script src="assets/js/jquery.uploadfile.min.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<script src="assets/js/jquery.simpleWeather.min.js"></script>
	<script src="assets/js/tinymce/tinymce.min.js"></script>
	<script src="assets/js/fullcalendar/moment.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/lobipanel.min.js"></script>
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/jquery.steps.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	
	<!-- Material-JS -->
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/ripples.min.js"></script>
	
	<!-- Responsive Mobile Menu -->
	<script src="assets/js/responsive-menu/jquery.accordion.js"></script>
	
	<!-- Counter-Up-JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	
	<!-- Emoji-JS -->
	<script src="assets/js/emoji/config.js"></script>
	<script src="assets/js/emoji/util.js"></script>
	<script src="assets/js/emoji/jquery.emojiarea.js"></script>
	<script src="assets/js/emoji/emoji-picker.js"></script>
	
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-inbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
</html>
