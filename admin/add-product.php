<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

	// include("php_form/config.php");
	// $sql = "SELECT * FROM business_details WHERE verification_status = '1'";
	// $result = mysqli_query($conn, $sql);

	// $sql1 = "SELECT category_name FROM category_table WHERE verification_status = '1'";
	// $result1 = mysqli_query($conn, $sql1);

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
						<h4>Manage Products</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<!-- <li class="breadcrumb-item"><a href="#">MailBox</a></li> -->
							<li class="breadcrumb-item active">Add Product</li>
						</ol>
					</div>
				</div>
                
				<div class="add-listing-wrap" style="border:1px solid black; margin-bottom: 20px; padding: 40px;">
				<div class="container">
				<form id="add_listing_form" method="POST" class="form-common add-listing-form" action="./php_form/product_listing_form.php" enctype="multipart/form-data" novalidate="novalidate" style="padding: 20px; text-align: center;">
					<!-- Primary Information -->
					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Primary Information</h4>
						<div class="row">
							<!-- col-lg-6 -->
							<!-- col-lg-6 -->
							<div class="col-lg-6">
								<div class="businessinfo-right-block">
									<div class="form-group">
										<label for="name">Product Name</label>
										<input id="product_name" name="product_name" type="text" class="form-control form-single-element" placeholder="Ex: iPhone" required>
									</div>
									<div class="form-group">
										<label for="brand">Brand</label>
										<input id="brand_name" name="brand_name" type="text" class="form-control form-single-element" placeholder="Ex: Apple" required>
									</div>
									<div class="form-group">
										<label for="category">Product Category</label>
										<table>
											<tr>
												<td width=275>
													<select id="category" name="product_category" style="width: 100%; height: 45px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
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
										<label for="price">Price</label>
										<input id="price" name="price" type="number" class="form-control" placeholder="Ex. 59999/-" required>
									</div>
									<div class="form-group">
										<label for="seller">Seller</label>
										<table>
											<tr>
												<td width=275>
													<select id="seller" name="seller" style="width: 100%; height: 45px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
														<!-- <option value="none" selected disabled hidden>Select an Option</option>
														<option>Gada Electronics</option>
														<option>Bhide Tution Classes</option>
														<option>SS Hardware</option>
														<option>Sharma Medical</option> -->
													</select>
												</td>
											</tr>
										</table>
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
													<select id="unit" name="unit" style="width: 100%; height: 45px; border-radius: 3px; background-color: white !important; padding-left: 15px;" required>
														<!-- <option value="none" selected disabled hidden>Select an Option</option>
														<option>Pieces</option>
														<option>Boxes</option>
														<option>Cartons</option> -->
													</select>
												</td>
											</tr>
										</table>
									</div>
									<div class="form-group">
										<label for="sku">Stock Keeping Unit</label>
										<input id="sku" name="sku" type="text" class="form-control" placeholder="Ex: A_iphoneXS" required>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Secondary Information -->
					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
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

					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
						<h4>Upload Required Images</h4>
						<div class="row" style="margin-top: 30px;">
							<div class="col-lg-6">
								<div class="businessinfo-left-block" style="width: 100%;">
									<div class="form-group form-group-file-type">
										<div class="form-group form-group-file-type">
											<h5 for="brand_logo">Brand Logo</h5>
											<input type="file" class="form-control-file" id="brand_logo" name="brand_logo" accept="image/png, image/jpeg, image/jpg" required style="opacity: 1; margin-top: 30px; height: 45px;">
											<br><br><br><span>Maximum file size: 2 MB.</span>
										</div>
									</div>
										
									<div class="form-group form-group-file-type">
										<div>
											<h5 for="bank_details">Upload Product Image 1</h5>
										</div>
										<div>
											<input type="file" class="form-control-file" id="product_image_1" name="product_image_1" required style="opacity: 1; margin-top: 30px; height: 45px;">
											<br><br><span>File Format .pdf or .doc</span>
										</div>
									</div>

									<div class="form-group form-group-file-type">
										<div>
											<h5 for="bank_details">Upload Product Image 2</h5h5>
										</div>
										<div>
											<input type="file" class="form-control-file" id="product_image_2" name="product_image_2" required style="opacity: 1; margin-top: 30px; height: 45px;">
											<br><br><span>File Format .pdf or .doc</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="businessinfo-left-block" style="width: 100%;">
									<div class="form-group form-group-file-type">
										<div>
											<h5 for="bank_details">Upload Product Image 3</h5>
										</div>
										<div>
											<input type="file" class="form-control-file" id="product_image_3" name="product_image_3" required style="opacity: 1; margin-top: 30px; height: 45px;">
											<br><br><span>File Format .pdf or .doc</span>
										</div>
									</div>

									<div class="listing-block attach-document-listing">
										<div class="form-group form-group-file-type">
											<h5 for="product_brochure">Product Brochure</h5>
											<input type="file" class="form-control-file" id="product_brochure" name="product_brochure" accept="image/png, image/jpeg, image/jpg, .pdf" required  style="opacity: 1; margin-top: 30px; height: 45px;">
											<br><br><br><span>File Format .pdf, .jpeg, .png</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="listing-block businessinfo-listing" style="border:1px solid black; margin-bottom: 20px; padding: 40px; text-align:left;">
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
			$("#seller").load('./php_form/load_seller.php');
			$("#unit").load('./php_form/load_unit.php');
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
