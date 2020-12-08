<?php
session_start();
if(empty($_SESSION['business_user']) && ($_SESSION['business'] != 'owner' || $_SESSION['business'] != 'executive')) {
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
				<div class="add-listing-wrap" style="margin-bottom: 20px; padding: 40px;">
                    <div class="container">
                        <form id="add_listing_form" method="POST" class="form-common add-listing-form" action="./php_form/product_listing_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align: center;">
                            <!-- Primary Information -->
                            <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                                <h4>Primary Information</h4>
                                <div class="row">
                                    <!-- col-lg-6 -->
                                    <!-- col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="businessinfo-right-block">
                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input id="business" name="business" type="text" value="<?php echo($_SESSION['business_user']); ?>" hidden>
                                                <input id="product_name" name="product_name" type="text" class="form-control form-single-element" placeholder="Ex: iPhone" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="brand">Brand</label>
                                                <input id="brand_name" name="brand_name" type="text" class="form-control form-single-element" placeholder="Ex: Apple" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input id="price" name="price" type="text" class="form-control" placeholder="Ex. 59999/-" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Product Category</label>
                                                <table>
                                                    <tr>
                                                        <td width=275>
                                                            <select id="category" name="product_category" style="width: 100%; height: 40px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
                                                                <!-- <option value="none" selected disabled hidden>Select an Option</option>
                                                                <option>Mobile Phones</option>
                                                                <option>Mobile Phone Accessories</option>
                                                                <option>Electronic Appliance</option> -->
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div> 
                                            <div class="form-group">
                                                <label for="sku">Stock Keeping Unit</label>
                                                <input id="sku" name="sku" type="text" class="form-control" placeholder="Ex: A_iphoneXS">
                                            </div>                                           
                                        </div>
                                    </div>

                                    <!-- col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="businessinfo-right-block">
                                            <div class="form-group">
                                                <label for="name">Color</label>
                                                <input id="color" name="color" type="text" class="form-control form-single-element" placeholder="Ex: Blue" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="discount">Discount % - If Any</label>
                                                <input id="discount" name="discount" type="text" class="form-control form-single-element" placeholder="Ex: 30">
                                            </div>
                                            <div class="form-group">
                                                <label for="quantity">Quantity</label>
                                                <input id="quantity" name="quantity" type="text" class="form-control form-single-element" placeholder="Ex: 30">
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Unit</label>
                                                <table>
                                                    <tr>
                                                        <td width=275>
                                                            <select id="unit" name="unit" style="width: 100%; height: 40px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
                                                                <!-- <option value="none" selected disabled hidden>Select an Option</option>
                                                                <option>Pieces</option>
                                                                <option>Boxes</option>
                                                                <option>Cartons</option> -->
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Secondary Information -->
                            <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                                <h4>Secondary Information</h4>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="businessinfo-right-block">
                                            <div class="form-group">
                                                <label for="size">Weight (Kg)</label>
                                                <input id="weight" name="weight" type="text" class="form-control form-single-element" placeholder="Ex: 0.3" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="length">Length</label>
                                                <input id="length" name="length" type="text" class="form-control" placeholder="Ex: 10 cm." required>
                                            </div>	
                                            <div class="form-group">
                                                <label for="size">Size</label>
                                                <table>
                                                    <tr>
                                                        <td width=275>
                                                            <select id="size" name="size" style="width: 100%; height: 45px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
                                                                <option value="none" selected disabled hidden>Select an Option</option>
                                                                <option>36</option>
                                                                <option>38</option>
                                                                <option>40</option>
                                                                <option>S</option>
                                                                <option>M</option>
                                                                <option>L</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>								
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="businessinfo-right-block">
                                            <div class="form-group">
                                                <label for="width">Width</label>
                                                <input id="width" name="width" type="text" class="form-control form-single-element" placeholder="Ex: 4 cm." required>
                                            </div>
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input id="height" name="height" type="text" class="form-control form-single-element" placeholder="Ex: 30">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                                <h4>Upload Required Images</h4>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-lg-6">
                                        <div class="uload-images-block">
                                            <div class="form-group form-group-file-type" style="margin-bottom: 10px;">
                                                <label for="brand_logo">Company Logo</label>
                                                <input type="file" class="form-control-file" id="brand_logo" name="brand_logo" accept="image/png, image/jpeg, image/jpg" required>
                                                <span>Maximum file size: 2 MB.</span>
                                            </div>
                                            <div class="form-group form-group-file-type" style="margin-bottom: 10px;">
                                                <label for="product_image_1">Product Image 1</label>
                                                <input type="file" class="form-control-file" id="product_image_1" name="product_image_1" accept="image/png, image/jpeg, image/jpg" required>
                                                <span>Maximum file size: 10 MB.</span>
                                            </div>
                                            <div class="form-group form-group-file-type">
                                                <label for="product_image_2">Product Image 2</label>
                                                <input type="file" class="form-control-file" id="product_image_2" name="product_image_2" accept="image/png, image/jpeg, image/jpg" required>
                                                <span>Maximum file size: 10 MB.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="businessinfo-left-block" style="width: 100%; margin-bottom: 10px;">
                                            <div class="form-group form-group-file-type">
                                                <label for="product_image_3">Product Image 3</label>
                                                <input type="file" class="form-control-file" id="product_image_3" name="product_image_3" accept="image/png, image/jpeg, image/jpg" required>
                                                <span>Maximum file size: 10 MB.</span>
                                            </div>

                                            
                                            <div class="form-group form-group-file-type">
                                                <label for="product_brochure">Product Brochure</label>
                                                <input type="file" class="form-control-file" id="product_brochure" name="product_brochure" accept="image/png, image/jpeg, image/jpg, .pdf" required  style="opacity: 1; margin-top: 30px; height: 45px;">
                                                <span>Maximum file size: 10 MB</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-block businessinfo-listing" style="margin-bottom: 20px; padding: 40px; text-align:left;">
                                <h4>Description</h4>
                                <div class="row">
                                    <div class="businessinfo-left-block" style="width: 100%;">
                                        <div class="form-group">
                                            <label for="legal_name">Short Description (upto 100 Words)</label>
                                            <textarea name='short_description' placeholder="Short Description" max-length="100" class="form-control" spellcheck="false"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="legal_name">Full Description</label>
                                            <textarea id="area1" name='product_description' placeholder="Full Description" class="form-control" style="min-height: 200px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="danger-btn" id="submit_button" name="submit_button" style="margin-top: 3%; width: 200px; height: 40px; background-color: #3867D6; color: #fff; border-radius: 4px; border:0;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add
                            </button>
                        </form>
                    </div>
				</div>
        	</div>
		</div>
    </div>
    <script>
        $(document).ready(function(){
            $("#category").load('./php_form/load_subcategory.php');
			$("#unit").load('./php_form/load_unit.php');
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