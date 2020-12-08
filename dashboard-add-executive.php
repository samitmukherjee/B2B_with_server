<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')){
    header("location: ./business-login.php");
}
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
		<div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
			<div class="container">         
                <form id="add_executive_form" enctype="multipart/form-data" class="form-common add-listing-form" method="POST" action="php_form/add_executive_form.php">
                    <div class="listing-block businessinfo-listing">
                        <h4>Add Business Executive</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="businessinfo-left-block">
                                    <div class="form-group">
                                        <input id="business_id" name="business_id" type="hidden" value="<?php echo($_SESSION['usesr_id']); ?>" class="form-control form-single-element" placeholder="Enter first name of the business executive here." aria-required="true" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name *</label>
                                        <input id="first_name" name="first_name" type="text" class="form-control form-single-element" placeholder="Enter first name of the business executive here." aria-required="true" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name *</label>
                                        <input id="last_name" name="last_name" type="text" class="form-control form-single-element" placeholder="Enter last name of the business executive here." aria-required="true" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_no">Contact Number *</label>
                                        <input id="contact_no" name="contact_no" type="text" class="form-control form-single-element" placeholder="Enter contact number of the business executive here." aria-required="true" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_id">Email Id *</label>
                                        <input id="email_id" name="email_id" type="text" class="form-control form-single-element" placeholder="Enter email id of the business executive here." aria-required="true" required>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="designation">Designation *</label>
                                        <input id="designation" name="designation" type="text" class="form-control form-single-element" placeholder="Ex. Sales Exectuive, Inventory Manager, etc." aria-required="true" required>
                                    </div> -->
                                    <div class="form-group">
										<label for="designation">Designation</label>
										<table>
											<tr>
												<td width=275>
													<select id="designation" name="designation" style="width: 100%; height: 45px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
													</select>
												</td>
											</tr>
										</table>
									</div>
                                    <div class="form-group">
                                        <label for="profile_picture">Profile Picture</label>
                                        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" accept="image/png, image/jpeg, image/jpg" required>
                                        <span>Maximum file size: 10 MB.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_1">Password *</label>
                                        <input id="password_1" name="password_1" type="password" class="form-control form-single-element" placeholder="Enter password" aria-required="true" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_2">Confirm Password *</label>
                                        <input id="password_2" name="password_2" type="password" class="form-control form-single-element" placeholder="Re-Enter password" aria-required="true" required>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="breadcrumb-call-to-action-1">
                        <button type=submit name='add_button' id="add_button" class="listing-btn-large">
                            Add
                        </button>
                    </div>
                </form>
			</div>
		</div>
    </div>
    <script>
        $(document).ready(function(){
			$("#seller").load('./php_form/load_seller.php');
			$("#designation").load('./php_form/load_designation.php');
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
</body>

<!-- Mirrored from themerail.com/html/listingGeo/dashboard-add-campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:32 GMT -->
</html>