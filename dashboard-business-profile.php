<?php

    session_start();
    if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')){
        header("location: ./business-login.php");
    }

    include ("php_form/config.php");

    $email_id = $_SESSION['business_user'];

	$query_business_details = "SELECT * FROM business_details,business_details_business_address 
			WHERE business_details.business_id = business_details_business_address.business_id 
            AND business_details.business_email_id = '$email_id' ";
            
    // echo $query_business_details;
	
	$result_business_details = mysqli_query($conn, $query_business_details);

	$row_business_details = mysqli_fetch_assoc($result_business_details);


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
    <div class="add-listing-wrap" style="margin-left: 10%; margin-top: 40px; margin-bottom: 20px;">
        <div class="container">
            <form id="add_listing_form" method="POST" class="form-common add-listing-form" action="./php_form/update_business_profile_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align:center;">
                <!-- Personal Information -->
                <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                    <h4>Personal Information</h4>

                    <?php
                        
                    ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="businessinfo-left-block">
                                <!-- <div class="form-group">
                                    
                                </div> -->
                                <div class="form-group">
                                    <input type="hidden" name="business_email" value="<?php echo $_SESSION['business_user'];?>">
                                    <input type="hidden" name="business_id" value="<?php echo $row_business_details['business_id'];?>">
                                    <label for="personal_name">Full Name</label>
                                    <input id="personal_name" name="personal_name" type="text" class="form-control form-single-element" value="<?php echo $row_business_details['personal_name'] ?>" placeholder="Ex: Manas Singh" required>
                                </div>
                                <div class="form-group">
                                    <label for="personal_number">Contact Number</label>
                                    <input id="personal_number" name="personal_number" type="text" class="form-control" value="<?php echo $row_business_details['personal_number'] ?>" placeholder="Ex: +91-000-000-0000" required>
                                </div>
                                <div class="form-group">
                                    <label for="personal_email_id">Email ID</label>
                                    <input id="personal_email_id" name="personal_email_id" type="email" class="form-control" value="<?php echo $row_business_details['personal_email_id'] ?>" placeholder="Ex: info@example.com" required>
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
                                    <input id="personal_address_line_1" name="personal_address_line_1" type="text" class="form-control" value="<?php echo $row_business_details['personal_address_line_1'] ?>" placeholder="Ex: 92, West Lane" required>
                                </div>
                                <div class="form-group">
                                    <input id="personal_address_line_2" name="personal_address_line_2" type="text" class="form-control" value="<?php echo $row_business_details['personal_address_line_2'] ?>" placeholder="Ex: Harvard Street, Los Angles" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                    <h4>Business Registration</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="businessinfo-left-block">
                                <div class="form-group">
                                    <label for="legal_name">Legal Business Name</label>
                                    <input id="legal_name" name="legal_name" type="text" class="form-control form-single-element" value="<?php echo $row_business_details['legal_name'] ?>" placeholder="Ex: ABC travel agency" required>
                                    <input id="listing_tagline" name="listing_tagline" type="text" class="form-control" value="<?php echo $row_business_details['business_tagline'] ?>" placeholder="Business Tagline goes here" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_no">Contact Number</label>
                                    <input id="contact_no" name="contact_no" type="text" class="form-control" value="<?php echo $row_business_details['contact_no'] ?>" placeholder="Ex: +91-000-000-0000" required>
                                </div>
                                <div class="form-group">
                                    <label for="business_email_id">Email ID</label>
                                    <input id="business_email_id" name="business_email_id" type="email" class="form-control" value="<?php echo $row_business_details['business_email_id'] ?>" placeholder="Ex: info@example.com" required>
                                </div>
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
                                            <td width=550><input id="address_line_1" name="address_line_1" type="text" class="form-control" value="<?php echo $row_business_details['address_line_1'] ?>" placeholder="Line 1" required></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td width= 275><input id="address_street" name="address_street" type="text" class="form-control" value="<?php echo $row_business_details['address_street'] ?>" placeholder="Street" required style="margin-bottom: 5px;"></td>
                                            <td width= 275><input id="address_city" name="address_city" type="text" class="form-control" value="<?php echo $row_business_details['address_city'] ?>" placeholder="City" aria-required="true" style="margin-bottom: 5px;"></td>
                                        </tr>
                                        <tr>
                                            <td><input id="address_state" name="address_state" type="text" class="form-control" value="<?php echo $row_business_details['address_state'] ?>" placeholder="State" required style="margin-bottom: 5px;"></td>
                                            <td><input id="postal_zip" name="postal_zip" type="text" class="form-control" value="<?php echo $row_business_details['postal_zip'] ?>" placeholder="Postal ZIP" required style="margin-bottom: 5px;"></td>
                                        </tr>
                                        <tr>
                                            <td><input id="country" name="country" type="text" class="form-control" value="<?php echo $row_business_details['country'] ?>" placeholder="Country" required></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="business_category">Business Domain</label>
                                    <table>
                                        <tr>
                                            <td width=275>
                                                <?php $query_get_category_name = "SELECT category_name FROM category_table WHERE category_id = '$row_business_details[business_category]'  ";
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
                                <div class="form-group">
                                    <div>
                                        <img src="<?php echo $row_business_details['personal_profile_image'] ?>" style="width:100px; height:100px;">
                                    </div>
                                    <div>
                                        <label for="personal_profile_image">Company Logo</label>
                                        <input type="file" class="form-control-file" id="personal_profile_image" name="personal_profile_image" required style="opacity: 1;">
                                        <span>File Format .pdf or .doc</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- details-listing -->
                <div class="listing-block attach-document-listing" style="margin-bottom: 20px; padding: 40px; text-align: left;">
                    <h4>Attach Legal bsuiness Documents</h4>
                        <div class="form-group form-group-file-type">
                            <label for="pan_no">PAN Number</label>
                            <!-- <input type="file" class="form-control-file" id="pan_no"> -->
                            <input id="pan_no" name="pan_no" type="text" class="form-control-file" value="<?php echo $row_business_details['pan_no'] ?>" placeholder="Ex: XXXXXXXXXX" readonly>
                            <!-- <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
                        </div>
                        <div class="form-group form-group-file-type">
                            <!-- <label for="gst_no">Company Brochure</label>
                            <input type="file" class="form-control-file" id="gst_no">
                            <span>File Format .pdf, .doc, .docx, .ppt, .pptx, .jpeg, .png</span> -->
                            <label for="gst_no">GST Number</label>
                            <input id="gst_no" name="gst_no" type="text" class="form-control-file" value="<?php echo $row_business_details['gst_no'] ?>" placeholder="Ex: XXXXXXXXXXXXXXX" readonly>
                        </div>
                        <div class="form-group form-group-file-type">
                            <div>
                                <label for="bank_details">Bank Account Statement</label>
                            </div>
                            <div>
                                <embed src="<?php echo $row_business_details['bank_details'] ?>" style="width:300px; height:200px;">
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
                
                <div class="listing-block attach-document-listing" style="margin-bottom: 20px; padding: 40px; text-align: left;">
                    <h4 class="form-control-file">Customize Business Profile</h4>
                    <div class="form-group form-group-file-type">
                            <h5>Cover Image</h5>
                            <div>
                                <img id="cover_image_1" src="<?php echo $row_business_details['cover_image'] ?>" style="width:576px; height:324px;">
                            </div>
                            <div>
                                <br><input type="file" class="form-control-file" id="cover_image" name="cover_image" required style="opacity: 1;">
                                <span>File Format .pdf or .doc</span>
                            </div>
                        </div>
                        <div class="form-group form-group-file-type">
                            <label for="business_description">Business Description</label>
                            <textarea id="business_description" name='business_description' placeholder="<?php echo $row_business_details['business_description'] ?>" class="form-control" style="min-height: 200px;"></textarea>
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