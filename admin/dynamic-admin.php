<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

 include ("php_form/config.php");
 $admin_id = $_SESSION['user_id'];

 $query = "SELECT * FROM admin_details WHERE admin_id = '$admin_id' ";
 $res = mysqli_query($conn,$query);

 $row_get_admin = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:38 GMT -->
<head>
    <meta charset="UTF-8">
	 
	<title>B2B Marketplace - Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="AxilBoard Bootstrap 4 Admin Template">
	<meta name="author" content="CodePassenger">
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=css?family=Robot%7cMaterial+Icons" rel="stylesheet" type='text/css'>
	
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
<body class="menu-expanded">
	<div class="apps-header navbar">
		<div class="apps-logo-block">
			<a href="dynamic-admin.php">
				<img src="images/logox.png" alt="img" class="img-responsive">
			</a>
		</div>
		<div class="top-menu">
			<ul class="nav navbar-nav" style="margin-top: 1%;">
				<li style="margin-left: 20px; display: inline;">
					<a id="admin-profile" style="margin-top: 10px; list-style-position:inside; height: 35px; padding: 10px; border-radius: 4px; background-color:#3767D6; color: #fff;">
						Profile
					</a>
				</li>
				<li style="margin-left: 20px; display: inline;">
					<a href="./php_form/admin_logout.php" style="margin-top: 10px; list-style-position:inside; height: 35px; padding: 10px; border-radius: 4px; background-color:#3767D6; color: #fff;">
						Logout
					</a>
				</li>
			</ul>
		</div>
	</div><!-- apps-header -->
	<div class="slide-menu-wrap">
		<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left active">
			<div class="user-profile-block" style="margin: auto;  padding-top: 15%; padding-bottom:0% !important">
				<div>
					<div class="user-thumb" style="padding-right: 0% !important;">
						<!-- <img src="images/profile/user-thumb.jpg" alt="img" class="img-responsive"> -->
						<img src="./.<?php echo $row_get_admin['admin_profile_picture'] ?>" alt="img" class="img-responsive">
					</div>
				</div>
				<!-- <a href="javascript:void(0)" class="btn btn-raised btn-primary waves-effect waves-light">Update Profile</a> -->
			</div>
			<div class="user-info" style="text-align: center;">
				<h5>
					<?php echo $row_get_admin['first_name']; echo" ".$row_get_admin['last_name']?>
				</h5>
				<span>Admin</span>
			</div>
			<div class="accordion-menu responsive-menu" data-accordion-group style="height: 100;">
				
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-user"></span>
							<span class="menu-title">Manage Sellers</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-email"></span>
								<span class="menu-title" id="load-pending-verifications">Pending Verification</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="load-sellers-list">Seller List</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-user"></span>
								<span class="menu-title" id="add-new-seller">Add New Seller</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-user"></span>
								<span class="menu-title" id="add-executive">Add Executive</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-executives">All Executives</span>
							</a>
						</div>
					</div>
				</div>

				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-list"></span>
							<span class="menu-title">Manage Categories</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layers"></span>
								<span class="menu-title" id="add-category">Add Category</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-categories">All Categories</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layers-alt"></span>
								<span class="menu-title" id="add-subcat">Add Sub-category</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-subcat">All Sub-categories</span>
							</a>
						</div>
					</div>
				</div>

				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-package"></span>
							<span class="menu-title">Manage Products</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layout-grid3"></span>
								<span class="menu-title" id="add-product">Add Product</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-products">All Products</span>
							</a>
						</div>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-new-arrivals">All New Arrivals</span>
							</a>
						</div>
					</div>
				</div>

				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-user"></span>
							<span class="menu-title">Manage Buyers</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-buyers">All Buyers</span>
							</a>
						</div>
					</div>
				</div>

				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-comment"></span>
							<span class="menu-title">Orders, Enquiries & Reviews</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-orders">All Orders</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-enquiries">All Enquiries</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-reviews">All Reviews</span>
							</a>
						</div>
					</div>
				</div>

				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-more"></span>
							<span class="menu-title">Others</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layers"></span>
								<span class="menu-title" id="add-unit">Add Product Unit</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-units">All Units</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-layers"></span>
								<span class="menu-title" id="add-designation">Add Executive Designation</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="all-designations">All Designations</span>
							</a>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a>
								<span class="menu-icon-wrap ti-view-list-alt"></span>
								<span class="menu-title" id="customize_homepage">Customize Homepage</span>
							</a>
						</div>
					</div>
				</div>

				<div class="menu-content" data-accordion>
					<div class="nav-item">
						<a>
							<span class="menu-icon-wrap icon ti-settings"></span>
							<span class="menu-title" id="change-password">Change Password</span>
						</a>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<?php 
	
		$query_user_count = "SELECT user_id FROM user_details";
		$result_user_count = mysqli_query($conn, $query_user_count);
		$row_user_count = mysqli_num_rows($result_user_count);

		$query_business_count = "SELECT business_id FROM business_details";
		$result_business_count = mysqli_query($conn, $query_business_count);
		$row_business_count = mysqli_num_rows($result_business_count);

		$query_executive_count = "SELECT executive_id FROM business_executive";
		$result_executive_count = mysqli_query($conn, $query_executive_count);
		$row_executive_count = mysqli_num_rows($result_executive_count);

		$query_enquiry_count = "SELECT enquiry_id FROM enquiry_details";
		$result_enquiry_count = mysqli_query($conn, $query_enquiry_count);
		$row_enquiry_count = mysqli_num_rows($result_enquiry_count);

		$query_unit_count = "SELECT unit_id FROM unit_table";
		$result_unit_count = mysqli_query($conn, $query_unit_count);
		$row_unit_count = mysqli_num_rows($result_unit_count);

		$query_category_count = "SELECT category_id FROM category_table";
		$result_category_count = mysqli_query($conn, $query_category_count);
		$row_category_count = mysqli_num_rows($result_category_count);

		$query_subcategory_count = "SELECT subcategory_id FROM subcategory_table";
		$result_subcategory_count = mysqli_query($conn, $query_subcategory_count);
		$row_subcategory_count = mysqli_num_rows($result_subcategory_count);
		
		$query_review_count = "SELECT review_id FROM review_details";
		$result_review_count = mysqli_query($conn, $query_review_count);
		$row_review_count = mysqli_num_rows($result_review_count);

		$query_designation_count = "SELECT designation_id FROM designation_table";
		$result_designation_count = mysqli_query($conn, $query_designation_count);
		$row_designation_count = mysqli_num_rows($result_designation_count);
	
	?>


	<div class="apps-container-wrap page-container">
		<div class="page-content" id="container_1">
			
		</div><!-- page-content -->
	</div><!-- page-container -->

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
    	$(document).ready(function(){

			$('#container_1').load('index.php', function(){
				console.log("Loaded!!!");
			});

    		$('#load-pending-verifications').click(function(){
				console.log("Test");
    			$('#container_1').load('mail-inbox.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#load-sellers-list').click(function(){
    			$('#container_1').load('seller.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#add-new-seller').click(function(){
    			$('#container_1').load('add-seller.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-executive').click(function(){
    			$('#container_1').load('add-executive.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-executives').click(function(){
    			$('#container_1').load('all-executives.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-category').click(function(){
    			$('#container_1').load('add-category.php', function(){
    				console.log("Loaded!!!");
    			});
    		});

    		$('#all-categories').click(function(){
    			$('#container_1').load('all-categories.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-subcat').click(function(){
    			$('#container_1').load('add-subcategory.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-subcat').click(function(){
    			$('#container_1').load('all-subcategories.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-product').click(function(){
    			$('#container_1').load('add-product.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-products').click(function(){
    			$('#container_1').load('all-products.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-buyers').click(function(){
    			$('#container_1').load('all-buyers.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-orders').click(function(){
    			$('#container_1').load('all-orders.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-enquiries').click(function(){
    			$('#container_1').load('all-enquiries.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-reviews').click(function(){
    			$('#container_1').load('all-reviews.php', function(){
    				console.log("Loaded!!!");
    			});
			});
			
			$('#all-new-arrivals').click(function(){
    			$('#container_1').load('all-new-arrivals.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#admin-profile').click(function(){
    			$('#container_1').load('update-profile.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-executive').click(function(){
    			$('#container_1').load('add-executive.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-executives').click(function(){
    			$('#container_1').load('all-executives.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-unit').click(function(){
    			$('#container_1').load('add-unit.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#all-units').click(function(){
    			$('#container_1').load('all-units.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#add-designation').click(function(){
    			$('#container_1').load('add-designation.php', function(){
    				console.log("Loaded!!!");
    			});
			});
			
			$('#all-designations').click(function(){
    			$('#container_1').load('all-designations.php', function(){
    				console.log("Loaded!!!");
    			});
			});

			$('#customize_homepage').click(function(){
    			$('#container_1').load('customize-homepage.php', function(){
    				console.log("Loaded!!!");
    			});
			});
			// $('#update-profile').click(function(){
    		// 	$('#container_1').load('update-profile.php', function(){
    		// 		console.log("Loaded!!!");
    		// 	});
			// });

			$(document).on('click','button[data-role=update]',function(){
			var get_bid = this.id;
			// console.log(get_bid);
			$('#container_1').load('./update-seller.php',{"get_bid":get_bid}, function(){
			// 	window.open('./update-seller.php');
				});
			});

			// $('#admin_submit_button').click(function(){
    		// 	$('#container_1').load('update-profile.php', function(){
    		// 		console.log("Loaded!!!");
    		// 	});
			// });

			$('#change-password').click(function(){
    			$('#container_1').load('change-admin-password.php', function(){
    				console.log("Loaded!!!");
    			});
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
	
	<!-- Data-Table-JS -->
	<!-- <script src="assets/js/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/datatable/dataTables.select.min.js"></script>
	<script src="assets/js/datatable/dataTables.buttons.min.js"></script>
	<script src="assets/js/datatable/buttons.flash.min.js"></script>
	<script src="assets/js/datatable/jszip.min.js"></script>
	<script src="assets/js/datatable/vfs_fonts.js"></script>
	
	<script src="js/datatable-custom.js"></script> -->
	<!-- <script src="assets/js/datatable/buttons.php5.min.js"></script> -->
	
	<!-- Chart-JS -->
    <!-- <script src="assets/js/chart/Chart.bundle.min.js"></script>
	<script src="js/chart-custom.js"></script> -->
	
	<!-- Counter-Up-JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	
	<!-- Emoji-JS -->
	<script src="assets/js/emoji/config.js"></script>
	<script src="assets/js/emoji/util.js"></script>
	<script src="assets/js/emoji/jquery.emojiarea.js"></script>
	<script src="assets/js/emoji/emoji-picker.js"></script>

	<!-- Data-Table-JS -->
	<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatable/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/datatable/dataTables.select.min.js"></script>
	<script src="assets/js/datatable/dataTables.buttons.min.js"></script>
	<script src="assets/js/datatable/buttons.flash.min.js"></script>
	<script src="assets/js/datatable/jszip.min.js"></script>
	<script src="assets/js/datatable/vfs_fonts.js"></script>
	<!-- <script src="assets/js/datatable/buttons.php5.min.js"></script> -->
	<script src="assets/js/datatable/buttons.print.min.js"></script>
	<script src="js/datatable-custom.js"></script>
	
	<!-- Vector-Map-Ammap-JS -->
	<script src="assets/js/ammap/ammap.js"></script>
	<script src="assets/js/ammap/worldLow.js"></script>
	<script src="assets/js/ammap/black.js"></script>
	
    <script src="js/custom.js"></script>
	<script>
		AmCharts.theme = AmCharts.themes.black;
		AmCharts.ready(function(){
			var map = new AmCharts.AmMap();
			var dataProvider = {
				mapVar: AmCharts.maps.worldLow,
				getAreasFromMap:true,
				areas:[
					{ "id": "AU", "color": "#ff7979" },
					{ "id": "US", "color": "#83e9d2" },
					{ "id": "RS", "color": "#83e9d2" },
					{ "id": "RU", "color": "#83e9d2" },
					{ "id": "CA", "color": "#ff7979" },
					{ "id": "BR", "color": "#ffce2e" },
					{ "id": "MX", "color": "#ffce2e" },
					{ "id": "AR", "color": "#ffce2e" },
					{ "id": "CO", "color": "#ffce2e" },
					{ "id": "PE", "color": "#ffce2e" },
					{ "id": "EC", "color": "#ffce2e" },
					{ "id": "CU", "color": "#ffce2e" },
					{ "id": "HA", "color": "#ffce2e" },
					{ "id": "CL", "color": "#ffce2e" },
					{ "id": "PY", "color": "#ffce2e" },
					{ "id": "UY", "color": "#ffce2e" },
					{ "id": "BO", "color": "#ffce2e" },
					{ "id": "FK", "color": "#ffce2e" },
					{ "id": "VE", "color": "#ffce2e" },
					{ "id": "GT", "color": "#ffce2e" },
					{ "id": "HN", "color": "#ffce2e" },
					{ "id": "MX", "color": "#ffce2e" },
					{ "id": "GY", "color": "#ffce2e" },
					{ "id": "HT", "color": "#ffce2e" },
					{ "id": "SR", "color": "#ffce2e" },
					{ "id": "GF", "color": "#ffce2e" },
					{ "id": "DO", "color": "#ffce2e" },
					{ "id": "JM", "color": "#ffce2e" },
					{ "id": "CR", "color": "#ffce2e" },
					{ "id": "NI", "color": "#ffce2e" },
					{ "id": "SV", "color": "#ffce2e" },
					{ "id": "PA", "color": "#ffce2e" },
					{ "id": "BZ", "color": "#ffce2e" },
					{ "id": "SJ", "color": "#ffce2e" },
					{ "id": "NO", "color": "#ffce2e" },
					{ "id": "SE", "color": "#ffce2e" },
					{ "id": "FI", "color": "#ffce2e" },
				 ]
			};
			map.dataProvider = dataProvider;
			map.areasSettings ={
				autoZoom: true,
				rollOverBrightness:10,
				selectedBrightness:20,
				selectedColor: "#5eb7ff"
			};
			map.write("vectorWorldMap");
		});
	</script>
</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:09 GMT -->
</html>
