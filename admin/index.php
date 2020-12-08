<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

include ("php_form/config.php");

$sql = "SELECT * FROM contact_us";
$result = mysqli_query($conn,$sql);

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
	<link href="https://fonts.googleapis.com/css?family=css?family=Poppins%7cMaterial+Icons" rel="stylesheet" type='text/css'>
	
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
	
	<!-- Data Table CSS -->
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="assets/css/select.dataTables.min.css">
	
	<!-- Vector-ammap CSS -->
	<link rel="stylesheet" href="assets/css/ammap.css">
	
    <link rel="stylesheet" href="css/app.css">
	
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="menu-collapsed">
	
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

	$query_product_count = "SELECT product_id FROM product_details";
	$result_product_count = mysqli_query($conn, $query_product_count);
	$row_product_count = mysqli_num_rows($result_product_count);
	
	
	?>


	<div class="apps-container-wrap page-container">
		<div class="page-content" id="">
			<div class="container-fluid">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row">
						
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_user_count ?></span>
										<span class="a-meta-title">Buyers</span>
									</div>
									<span class="nmbr-statistic-icon ti-user"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block visitors-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_business_count ?></span>
										<span class="a-meta-title">Sellers</span>
									</div>
									<span class="nmbr-statistic-icon ti-user"></span>
								</div>
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block sales-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_executive_count ?></span>
										<span class="a-meta-title">Executives</span>
									</div>
									<span class="nmbr-statistic-icon ti-user"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_product_count ?></span>
										<span class="a-meta-title">Products</span>
									</div>
									<span class="nmbr-statistic-icon ti-package"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_enquiry_count ?></span>
										<span class="a-meta-title">Enquiries</span>
									</div>
									<span class="nmbr-statistic-icon ti-email"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_review_count ?></span>
										<span class="a-meta-title">Reviews</span>
									</div>
									<span class="nmbr-statistic-icon ti-comment-alt"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_designation_count ?></span>
										<span class="a-meta-title">Designations</span>
									</div>
									<span class="nmbr-statistic-icon ti-medall-alt"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_category_count ?></span>
										<span class="a-meta-title">Categories</span>
									</div>
									<span class="nmbr-statistic-icon ti-layers"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_subcategory_count ?></span>
										<span class="a-meta-title">Sub-categories</span>
									</div>
									<span class="nmbr-statistic-icon ti-layers-alt"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block Subscribers-statistic">
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $row_unit_count ?></span>
										<span class="a-meta-title">Units</span>
									</div>
									<span class="nmbr-statistic-icon ti-tag"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
					</div>
				</div>
				<div class="panel-body">
									<div class="basic-datatable-block table-responsive">
										<table id="basic_datatable" class="display table table-bordered basic-data-table">
											<thead>
												<tr>
													<th class="view-message">Name</th>
													<th class="view-message">Email</th>
													<th class="view-message">Phone number</th>
													<th class="view-message">Message</th>
													<th class="view-message">Time</th>
													<th class="view-message">compose mail</th>
												</tr>
											</thead>
											<tbody>

											<?php
												if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													?>
													<tr id="<?php $row["contact_id"] ?>">
													<td><?php echo $row["guest_name"] . " " . $row["last_name"] ?></td>
													<td><?php echo $row["guest_email"] ?></td>
													<td><?php echo $row["guest_phone"] ?></td>
													<td><?php echo $row["guest_message"] ?></td>
													<td><?php echo $row["date_time"] . " " . $row["product_unit"] ?></td>
													<!-- <td style="height:100px; width:100px;"><img src="<?php echo $row["enquiry_attachment"]?>"/></td> -->
													<!-- <td><?php echo $row["enquiry_message"]?></td> -->
													<!-- <input type="hidden" id="contact_id" value=<?php $row["contact_id"]?>></input> -->
											
													<td><button id=<?php  echo $row["contact_id"] ?> href="#" data-role="contact-guest" data-is=<?php  echo $row["contact_id"] ?>>Reply</button></td>
													</tr>
											<?php		
												}
												} else{
													echo "NO messages";
												}
											?>
												
											</tbody>
										</table>
									</div><!-- basic-table-block -->
								</div><!--panel Body --><!-- nmbr-statistic-area -->
			</div>
		</div><!-- page-content -->
	</div><!-- page-container -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
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
	<script src="assets/js/jquery.steps.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	
	<!-- Material-JS -->
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/ripples.min.js"></script>
	
	<!-- Responsive Mobile Menu -->
	<script src="assets/js/responsive-menu/jquery.accordion.js"></script>
	
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
	
	<!-- Chart-JS -->
    <script src="assets/js/chart/Chart.bundle.min.js"></script>
	<script src="js/chart-custom.js"></script>
	
	<!-- Counter-Up-JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	
	<!-- Emoji-JS -->
	<script src="assets/js/emoji/config.js"></script>
	<script src="assets/js/emoji/util.js"></script>
	<script src="assets/js/emoji/jquery.emojiarea.js"></script>
	<script src="assets/js/emoji/emoji-picker.js"></script>
	
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
<script>
	$(document).on('click','button[data-role=contact-guest]',function(){
		console.log('contact-guest clicked');
		var get_guest_id = this.id;
		console.log(get_guest_id);
		$('#container_1').load('mail-compose.php',{"get_guest_id":get_guest_id}, function(){
		});
	});
</script>

</body>

<!-- Mirrored from themerail.com/html/listingGeo/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:09 GMT -->
</html>
