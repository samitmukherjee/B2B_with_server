<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

	include("php_form/config.php");
	$sql = "SELECT * FROM product_details, unit_table, category_table
			WHERE product_details.product_unit = unit_table.unit_id
			AND product_details.product_category = category_table.category_id ";
	$result = mysqli_query($conn, $sql);

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

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	
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
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="page-title-block">
						<h4>Manage Products</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<!-- <li class="breadcrumb-item"><a href="#">MailBox</a></li> -->
							<li class="breadcrumb-item active">All Products</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="box-widget widget-module">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Products</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="basic-datatable-block table-responsive">
										<table id="basic_datatable" class="display table table-bordered basic-data-table">
											<thead>
												<tr>
													<th class="view-message">Product name</th>
													<th class="view-message">Product image</th>
													<th class="view-message">Product description</th>
													<th class="view-message">Product category</th>
													<th class="view-message">Brand name</th>
													<th class="view-message">Product unit</th>
													<th class="view-message">Product status</th>
												</tr>
											</thead>
											<tbody>

											<?php
												if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													?>
													<tr id="<?php $row["product_id"] ?>">
													<td><?php echo $row["product_name"] ?></td>
													<td><img src=".<?php echo $row["product_image_1"]?>" style="height:100px; width:100px;"></td>
													<td style="width: 200px; white-space: initial; overflow-y: scroll;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4; /* number of lines to show */-webkit-box-orient: vertical;"><?php echo $row["product_description"]?></td>
													<td><?php echo $row["category_name"]?></td>
													<td><?php echo $row["brand_name"]?></td>
													<td><?php echo $row["unit_name"]?></td>
													<input type="hidden" id="business_id" value=<?php $row["business_id"]?>></input>
											
													<!-- <td><button id=<?php  echo $row["business_id"] ?> href="#" data-role="disable" data-is=<?php  echo $row["business_id"] ?> >Disable</button></td>
													</tr> -->

													<?php 
													if($row["product_status"] == '1'){
													?>
													<td><button id=<?php  echo $row["product_id"] ?> href="#" data-role="product_off" data-is=<?php  echo $row["product_id"] ?> >Active</button></td>
													</tr>

													<?php 
														}else{
															?>
															<td><button id=<?php  echo $row["product_id"] ?> href="#" data-role="product_on" data-is=<?php  echo $row["product_id"] ?> >In-active</button></td>
															</tr>
													<?php
														}
													?>

											<?php		
												}
												} else{
													echo "No active products";
												}
											?>
												
											</tbody>
										</table>
									</div><!-- basic-table-block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){


			// $('#mytable').load('./php_form/seller_list.php',function(){
            //     console.log('loaded');
			// });


			$('#basic_datatable').DataTable();

			$(document).on('click','button[data-role=product_off]',function(){
				// 	displaycount();
				var product_id = this.id;
				var code = 0;
				//console.log("Disable",category_id);

				$.post('./php_form/product_status.php',{"id": product_id, "code": code});
				location.reload();

			});

			$(document).on('click','button[data-role=product_on]',function(){
				// 	displaycount();
				var product_id = this.id;
				var code = 1;
		    	//console.log("Enable", category_id);

				$.post('./php_form/product_status.php',{"id": product_id, "code": code});
				location.reload();
			});

			$('button[data-role=product_off]').css({"background-color" : "#0be881", "border" : "0", "color" : "#fff", "width" : "60px"});
			$('button[data-role=product_on]').css({"background-color" : "#ff3f34", "border" : "0", "color" : "#fff", "width" : "60px"});

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

	<!-- Data-Table-JS -->
	<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/datatable/dataTables.select.min.js"></script>
	<script src="assets/js/datatable/dataTables.buttons.min.js"></script>
	<script src="assets/js/datatable/buttons.flash.min.js"></script>
	<script src="assets/js/datatable/jszip.min.js"></script>
	<script src="assets/js/datatable/vfs_fonts.js"></script>
	<script src="assets/js/datatable/buttons.php5.min.js"></script>
	<script src="js/datatable-custom.js"></script>
	
	<!-- Emoji-JS -->
	<script src="assets/js/emoji/config.js"></script>
	<script src="assets/js/emoji/util.js"></script>
	<script src="assets/js/emoji/jquery.emojiarea.js"></script>
	<script src="assets/js/emoji/emoji-picker.js"></script>
	
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-inbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
</html>
