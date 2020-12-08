<?php
session_start();
if(empty($_SESSION['user']) && $_SESSION['user_type'] != 'admin'){
	header("location: ./login.php");
}

	include("php_form/config.php");
	$sql = "SELECT * FROM enquiry_details e1, user_details u1, business_details b1, product_details p1, unit_table unit1 
			WHERE e1.user_id = u1.user_id
			AND e1.business_id = b1.business_id
			AND e1.product_id = p1.product_id
			AND e1.product_unit = unit1.unit_id
			AND enquiry_status = '0'";
	$result = mysqli_query($conn, $sql);

	// $sql1 = "SELECT * FROM enquiry_details";
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
						<h4>Orders, Enquiries, Reviews</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<!-- <li class="breadcrumb-item"><a href="#">MailBox</a></li> -->
							<li class="breadcrumb-item active">Enquiries</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="box-widget widget-module">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Enquiries</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="basic-datatable-block table-responsive">
										<table id="basic_datatable" class="display table table-bordered basic-data-table">
											<thead>
												<tr>
													<th class="view-message">Buyer Name</th>
													<th class="view-message">Buyer Email</th>
													<th class="view-message">Seller Name</th>
													<th class="view-message">Product Name</th>
													<th class="view-message">Product Quantity</th>
													<th class="view-message">Attachment</th>
													<th class="view-message">Message</th>
												</tr>
											</thead>
											<tbody>

											<?php
												if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result)){
													?>
													<tr id="<?php $row["business_id"] ?>">
													<td><?php echo $row["first_name"] . " " . $row["last_name"] ?></td>
													<td><?php echo $row["user_email_id"] ?></td>
													<td><?php echo $row["legal_name"] ?></td>
													<td><?php echo $row["product_name"] ?></td>
													<td><?php echo $row["product_quantity"] . " " . $row["unit_name"] ?></td>
													<td style="height:100px; width:100px;"><img src="<?php echo $row["enquiry_attachment"]?>"/></td>
													<td><?php echo $row["enquiry_message"]?></td>
													<input type="hidden" id="business_id" value=<?php $row["business_id"]?>></input>
											
													<!-- <td><button id=<?php  echo $row["business_id"] ?> href="#" data-role="disable" data-is=<?php  echo $row["business_id"] ?> >Disable</button></td>
													</tr> -->
											<?php		
												}
												} else{
													echo "No active enquiries";
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
