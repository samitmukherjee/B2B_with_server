<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/form-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
<head>
    <meta charset="UTF-8">
	 
	<title>ListingGEO - Directory Listing Template</title>
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
<body class="menu-collapsed">
	<div class="apps-header navbar">
		<div class="apps-logo-block">
			<a href="index.php">
				<img src="images/logo.png" alt="img" class="img-responsive">
				<div class="logo-text-block">
					<h3 class="logo-text">AxilBoard</h3>
				</div>
			</a>
		</div>
		<div class="top-menu">
			<ul class="top-controller-icons pull-left">
				<li>
					<a id="showLeftPush" href="javascript:void(0)" class="toggolebtn">
						<span class="ti-view-grid"></span>
					</a>
				</li>
				<li>
					<form class="searchbox">
						<input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
						<input type="submit" class="searchbox-submit" value="">
						<span class="searchbox-icon ti-search"></span>
					</form>
				</li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="images/misc/lan1.png" alt="img">
						English
						<span class="ti-angle-down"></span>
						<div class="ripple-container"></div>
					</a>
					<ul class="dropdown-menu">
					  <li>
						<a href="javascript:void(0)">
							<img src="images/misc/lan4.png" alt="img">
							UK
						</a>
					  </li>
					   <li>
						<a href="javascript:void(0)">
							<img src="images/misc/lan2.png" alt="img">
							German
						</a>
					  </li>
					   <li>
						<a href="javascript:void(0)">
							<img src="images/misc/lan3.png" alt="img">
							Italy
						</a>
					  </li>
					</ul>
				</li>
				<li class="dropdown icon-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span class="badge badge-default warning-two-bg">8</span>
						<div class="ripple-container"></div>
					</a>
					<ul class="dropdown-menu card-dropdown left">
					  <li><div class="drop-title">You have 4 new messages</div></li>
					  <li>
						<div class="card-inner-block">
							<a href="javascript:void(0)">
								<div class="user-img">
									<img src="images/misc/avatar1.jpg" alt="user">
									<span class="profile-status"></span>
								</div>
								<div class="mail-contnet">
									<h5>Steven Smith</h5>
									<span class="mail-desc">Congratulation you win th</span>
									<span class="time">9:30 AM</span> 
								</div>
							</a>
							<a href="javascript:void(0)">
								<div class="user-img">
									<img src="images/misc/avatar2.jpg" alt="user" class="img-circle">
									<span class="profile-status"></span>
								</div>
								<div class="mail-contnet">
									<h5>Robart John</h5>
									<span class="mail-desc">Hello! sir,we are glade to</span>
									<span class="time">9:30 AM</span> 
								</div>
							</a>
							<a href="javascript:void(0)">
								<div class="user-img">
									<img src="images/misc/avatar2.jpg" alt="user" class="img-circle">
									<span class="profile-status"></span>
								</div>
								<div class="mail-contnet">
									<h5>Mike Danny</h5>
									<span class="mail-desc">There is no marcy form th</span>
									<span class="time">9:30 AM</span> 
								</div>
							</a>
							<a href="javascript:void(0)">
								<div class="user-img">
									<img src="images/misc/avatar1.jpg" alt="user">
									<span class="profile-status"></span>
								</div>
								<div class="mail-contnet">
									<h5>Steven Smith</h5>
									<span class="mail-desc">Congratulation you win th</span>
									<span class="time">9:30 AM</span> 
								</div>
							</a>
						</div>
					  </li>
					  <li><div class="drop-footer"><a href="mail-inbox.php">Check all mail</a></div></li>
					</ul>
				</li>
				<li class="dropdown icon-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="badge badge-default primary-bg">7</span>
						<i class="fa fa-bell-o" aria-hidden="true"></i>
					</a>
					<ul class="dropdown-menu card-dropdown right">
					  <li><div class="drop-title">Notification</div></li>
					  <li>
						<div class="card-inner-block notification-block">
							<a href="javascript:void(0)">
								<i class="notification-icon fa fa-clock-o info-bg"></i>
								<div class="notification-details">
									<h5>Events</h5>
									<span class="mail-desc">Todayes 5 events still Remaning</span>
									<span class="time">9:30 AM</span>
								</div>
								<span class="time"></span>
							</a>
							<a href="javascript:void(0)">
								<i class="notification-icon fa fa-users primary-bg"></i>
								<div class="notification-details">
									<h5>Meetings</h5>
									<span class="mail-desc">Todayes Meeting were cancle</span>
									<span class="time">10:30 AM</span>
								</div>
								<span class="time"></span>
							</a>
							<a href="javascript:void(0)">
								<i class="notification-icon fa fa-plane warning-two-bg"></i>
								<div class="notification-details">
									<h5>Travel</h5>
									<span class="mail-desc">US Airline Departure time</span>
									<span class="time">5:30 PM</span>
								</div>
								<span class="time"></span>
							</a>
							<a href="javascript:void(0)">
								<i class="notification-icon fa fa-pie-chart warning-bg"></i>
								<div class="notification-details">
									<h5>Revenue</h5>
									<span class="mail-desc">Todayes Revenue Cross 2 crore</span>
									<span class="time">11:20 PM</span>
								</div>
								<span class="time"></span>
							</a>
						</div>
					  </li>
					  <li><div class="drop-footer"><a href="mail-inbox.php">Check all notification</a></div></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div><!-- apps-header -->
	<div class="slide-menu-wrap">
		<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
			<div class="user-profile-block">
				<div>
					<div class="user-thumb">
						<img src="images/profile/user-thumb.jpg" alt="img" class="img-responsive">
					</div>
					<div class="user-info">
						<h5>
							Robert Smith
						</h5>
						<span>UI Designer</span>
					</div>
				</div>
				<a href="javascript:void(0)" class="btn btn-raised btn-primary waves-effect waves-light">Update Profile</a>
			</div>
			<div class="accordion-menu responsive-menu" data-accordion-group>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="#">
							<span class="menu-icon-wrap icon ti-home"></span>
							<span class="menu-title">Dashboard</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="index.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Dashboard 1</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="index.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Dashboard 2</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="index.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Dashboard 3</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-direction"></span>
							<span class="menu-title">UI Elements</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="buttons.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Buttons</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="accordian.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Accordions</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="progress.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Progress bar</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="alerts.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Alerts</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="tab.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Tab</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-pencil-alt"></span>
							<span class="menu-title">Forms</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="form-elements.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Form Elements</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="form-validation.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Form Validation</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="input-mask.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Input Mask</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="form-wizard.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Form Wizard </span>
							</a>
						</div>
						<div class="nav-item">
							<a href="file-upload.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">File Upload</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-layout"></span>
							<span class="menu-title">Tables</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="basic-table.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Basic Table</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="data-table.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Data Table</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-pie-chart"></span>
							<span class="menu-title">Charts</span>
						</a>
						<div class="menu-badge-wrap">
							<span class="menu-badge">5</span>
						</div>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="chart.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Chart</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-map-alt"></span>
							<span class="menu-title">Maps</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="vector-map.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Vector Map</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="google-map.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Google Map</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-email"></span>
							<span class="menu-title">Mail Box</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="mail-inbox.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Mail Inbox</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="mail-view.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Mail View</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="mail-compose.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Mail Compose</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-wheelchair"></span>
							<span class="menu-title">Icon</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="buttons.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Buttons</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="alerts.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Alerts</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-server"></span>
							<span class="menu-title">Widgets</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="tree-view.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Tree View</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="profile.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Profile</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="tab.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Tab</span>
							</a>
						</div>
					</div>
				</div>
				<div class="slide-navigation-wrap" data-accordion>
					<div class="nav-item has-sub" data-control>
						<a href="javascript:void(0)">
							<span class="menu-icon-wrap icon ti-package"></span>
							<span class="menu-title">Pages</span>
						</a>
					</div>
					<div class="menu-content" data-content>
						<div class="nav-item">
							<a href="signup.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Sign Up</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="login.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Login</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="forget-password.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Password Recovery</span>
							</a>
						</div>
						<div class="nav-item">
							<a href="lock-screen.php">
								<span class="menu-icon-wrap bullet"></span>
								<span class="menu-title">Lock Screen</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="apps-container-wrap page-container">
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="page-title-block">
						<h4>Elements</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Form</a></li>
							<li class="breadcrumb-item active">Elements</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="box-widget">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<h4>Basic Form</h4>
										</div>
									</div>
									<div class="panel-body">
										<div class="form-block">
											<form class="form-common">
												<div class="form-group">
													<label for="formGroupExampleInput">Email address</label>
													<input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Email">
												</div>
												<div class="form-group">
													<label for="formGroupExampleInput2">Password</label>
													<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Passwoed">
												</div>
												<div class="form-btn-block">
													<button type="button" class="btn btn-raised btn-primary waves-effect waves-light">Submit</button>
													<button type="button" class="btn btn-outline-default btn-xs btn-raised waves-effect">Cancel</button>
												</div>
											</form>
										</div>
									</div><!--panel Body -->
								</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Horizontal Form</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="form-block">
										<form class="form-common">
											<div class="form-group row">
												<label for="inputEmail3" class="col-md-2 col-form-label">Email</label>
												<div class="col-md-10">
													<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-md-2 col-form-label">Password</label>
												<div class="col-md-10">
													<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
												</div>
											</div>
											<div class="form-group row form-check-row">
												<div class="col-md-10 offset-md-2">
													<div class="form-check">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description">Remember Me</span>
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row last">
												<div class="col-md-10 offset-md-2">
													<div class="form-btn-block">
														<button type="button" class="btn btn-raised btn-primary waves-effect waves-light">Submit</button>
														<button type="button" class="btn btn-outline-default btn-xs btn-raised waves-effect">Cancel</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default" data-sortable="true">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Basic Elements</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="form-block">
										<form class="form-common ">
											<div class="form-group row">
												<label for="inputText1" class="col-md-3 col-form-label">Input Text</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputText1">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-md-3 col-form-label">Input Password</label>
												<div class="col-md-9">
													<input type="password" class="form-control" id="inputPassword33">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputText2" class="col-md-3 col-form-label">Placeholder Input</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputText2" placeholder="Placeholder Text">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputText3" class="col-md-3 col-form-label">Disabled Input</label>
												<div class="col-md-9">
													<input type="text" class="disabled-field form-control" id="inputText3" placeholder="Disabled Input Text" disabled>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputText4" class="col-md-3 col-form-label">Readonly Input</label>
												<div class="col-md-9">
													<input type="text" class="disabled-field form-control" id="inputText4" placeholder="Readonly Input Text" readonly>
												</div>
											</div>
											<div class="form-group row last">
												<label for="inputText5" class="col-md-3 col-form-label">Textarea</label>
												<div class="col-md-9">
													<textarea></textarea>
												</div>
											</div>
										</form>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default" data-sortable="true">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Input Sizing</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="form-block">
										<form class="form-common ">
											<div class="form-group row">
												<label for="inputText5" class="col-md-3 col-form-label">Input Text</label>
												<div class="col-md-9">
													<input type="text" class="form-control large" id="inputText5" placeholder="Large input">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputText6" class="col-md-3 col-form-label">Default</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputText6" placeholder="Default input">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputText7" class="col-md-3 col-form-label">Small</label>
												<div class="col-md-9">
													<input type="text" class="form-control small" id="inputText7" placeholder="Small input">
												</div>
											</div>
											<div class="form-group row last">
												<label for="inputText8" class="col-md-3 col-form-label">Extra Small</label>
												<div class="col-md-9">
													<input type="text" class="form-control extra-small" id="inputText8" placeholder="Extra Small input">
												</div>
											</div>
										</form>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
						<div class="box-widget input-file-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Input File</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="form-block">
										<form class="form-common">
											<div class="form-group row">
												<div class="col-lg-6 r-mrg-b-20">
													<label for="inputFile1" class="col-md-5 col-form-label left-align">Button File Input</label>
													<div class="col-md-7 btn btn-outline-default waves-effect waves-light">
														<span><i class="fa fa-cloud-upload" aria-hidden="true"></i> Browse file..</span>
														<input type="file" id="inputFile1">
													</div>
												</div>
												<div class="col-lg-6">
													<label for="inputFile2" class="col-md-6 col-form-label left-align">Custom File Input</label>
													<div class="col-lg-6 btn btn-primary waves-effect waves-light">
														<span><i class="fa fa-cloud-upload" aria-hidden="true"></i> Browse file..</span>
														<input type="file" id="inputFile2">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-md-12">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Select & Option Elements</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="elements-block">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Checkbox</label>
																<div class="col-md-8">
																	<div class="form-check">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- block-checkbox block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Inline Checkbox</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- inlne-checkbox block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Full Color</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- fill-colord-checkbox block -->
														</div>
													</td>
													<td>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Radio</label>
																<div class="col-md-8">
																	<div class="form-check">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- block-radio block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Inline Radio</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked11" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked22" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio">
																			<input id="radioStacked33" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- inline-radio block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Full Color</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord">
																			<input id="radioStacked1111" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord">
																			<input id="radioStacked222" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord">
																			<input id="radioStacked3333" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- fill-colord-radio block -->
														</div>
													</td>
													<td>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-5 col-form-label left-align">Basic Select</label>
																<div class="col-md-7">
																	<div class="form-check">
																		<select class="custom-select">
																			<option selected>Open this select menu</option>
																			<option value="1">One</option>
																			<option value="2">Two</option>
																			<option value="3">Three</option>
																		</select>
																	</div>
																</div>
															</div><!-- basic-select block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-5 col-form-label left-align">Multiple Select</label>
																<div class="col-md-7">
																	<div class="form-check custom-select-option">
																		<select multiple class="form-control">
																			<option>1</option>
																			<option>2</option>
																			<option>3</option>
																			<option>4</option>
																			<option>5</option>
																		</select>
																	</div>
																</div>
															</div><!-- basic-select block -->
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div>
					</div>
					<div class="col-md-12">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Select & Option Elements</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="elements-block">
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td>
														<div class="form-common">
															<div class="form-group">
																<div class="form-group row colord-form-group has-success">
																	<label for="inputHorizontalSuccess" class="col-md-4 col-form-label">Success</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-success" id="inputHorizontalSuccess">
																	</div>
																</div>
																<div class="form-group row colord-form-group has-warning">
																	<label for="inputHorizontalWarning" class="col-md-4 col-form-label">Warning</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-warning" id="inputHorizontalWarning">
																	</div>
																</div>
																<div class="form-group row colord-form-group has-danger">
																	<label for="inputHorizontalDanger" class="col-md-4 col-form-label">Danger</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-danger" id="inputHorizontalDanger">
																	</div>
																</div>
																<div class="form-group row colord-form-group has-success">
																	<label for="inputHorizontalSuccess2" class="col-md-4 col-form-label">Input Success</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-success icon" id="inputHorizontalSuccess2">
																	</div>
																</div>
																<div class="form-group row colord-form-group has-warning">
																	<label for="inputHorizontalWarning2" class="col-md-4 col-form-label">Input Warning</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-warning icon" id="inputHorizontalWarning2">
																	</div>
																</div>
																<div class="form-group row colord-form-group has-danger">
																	<label for="inputHorizontalDanger2" class="col-md-4 col-form-label">Input Danger</label>
																	<div class="col-md-8">
																		<input type="text" class="form-control form-control-danger icon" id="inputHorizontalDanger2">
																	</div>
																</div>
															</div><!-- colord-form-group block -->
														</div>
													</td>
													<td>
														<div class="form-common">
															<div class="form-group row element-row">
																<label class="col-md-4 col-form-label left-align">Checkbox</label>
																<div class="col-md-8">
																	<div class="form-check">
																		<label class="custom-control custom-checkbox has-success">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-checkbox has-warning">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-checkbox has-danger">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- block-checkbox block -->
														</div>
														<div class="form-common">
															<div class="form-group row element-row">
																<label class="col-md-4 col-form-label left-align">Inline Checkbox</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox has-success">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox has-warning">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox has-danger">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- inlne-checkbox block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Full Color</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord has-success">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord has-warning">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-checkbox fill-colord has-danger">
																			<input type="checkbox" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 3</span>
																		</label>
																	</div>
																</div>
															</div><!-- fill-colord-checkbox block -->
														</div>
													</td>
													<td>
														<div class="form-common">
															<div class="form-group row element-row">
																<label class="col-md-4 col-form-label left-align">Radio</label>
																<div class="col-md-8">
																	<div class="form-check">
																		<label class="custom-control custom-radio has-success">
																			<input id="radioStacked_1111" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-radio has-warning">
																			<input id="radioStacked2222" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="custom-control custom-radio has-danger">
																			<input id="radioStacked_3333" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- block-radio block -->
														</div>
														<div class="form-common">
															<div class="form-group row element-row">
																<label class="col-md-4 col-form-label left-align">Inline Radio</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio has-success">
																			<input id="radioStacked_11" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio has-warning">
																			<input id="radioStacked_232" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio has-danger">
																			<input id="radioStacked_332" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- inline-radio block -->
														</div>
														<div class="form-common">
															<div class="form-group row">
																<label class="col-md-4 col-form-label left-align">Full Color</label>
																<div class="col-md-8">
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord has-success">
																			<input id="radioStacked_14" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 1</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord has-warning">
																			<input id="radioStacked_282" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<label class="custom-control custom-radio fill-colord has-danger">
																			<input id="radioStacked_13" name="radio-stacked" type="radio" class="custom-control-input">
																			<span class="custom-control-indicator"></span>
																			<span class="custom-control-description">Option 2</span>
																		</label>
																	</div>
																</div>
															</div><!-- fill-colord-radio block -->
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Input Groups</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="form-common">
										<div class="form-group row">
											<label for="inputText1" class="col-md-3 col-form-label">Input Text</label>
											<div class="col-md-9">
												<div class="input-group has-addon">
													<span class="input-group-addon left-rads" id="basic-addon1">@</span>
													<input type="text" class="form-control left-rect" placeholder="Username" aria-describedby="basic-addon1">
												</div>
												<div class="input-group has-addon">
													<input type="text" class="form-control right-rect" aria-describedby="basic-addon2">
													<span class="input-group-addon right-rads" id="basic-addon2">.00</span>
												</div>
												<div class="input-group">
													<span class="input-group-addon left-rads">$</span>
													<input type="text" class="form-control both-rect" aria-label="Amount (to the nearest dollar)">
													<span class="input-group-addon right-rads">.00</span>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputText1" class="col-md-3 col-form-label">Input Icon</label>
											<div class="col-md-9">
												<div class="input-group has-addon">
													<span class="input-group-addon left-rads" id="basic-addon3"><i class="fa fa-user" aria-hidden="true"></i></span>
													<input type="text" class="form-control left-rect" placeholder="Username" aria-describedby="basic-addon3">
												</div>
												<div class="input-group has-addon">
													<input type="email" class="form-control right-rect" placeholder="Email" aria-describedby="basic-addon4">
													<span class="input-group-addon right-rads" id="basic-addon4"><i class="fa fa-envelope" aria-hidden="true"></i></span>
												</div>
												<div class="input-group">
													<span class="input-group-addon left-rads"><i class="fa fa-envelope" aria-hidden="true"></i></span>
													<input type="text" class="form-control both-rect" aria-label="Amount (to the nearest dollar)">
													<span class="input-group-addon right-rads"><i class="fa fa-user" aria-hidden="true"></i></span>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputText1" class="col-md-3 col-form-label">Checkbox</label>
											<div class="col-md-9">
												<div class="input-group has-addon">
													<div class="input-group-addon left-rads" id="basic-addon5">
														<div class="form-check">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description"></span>
															</label>
														</div>
													</div>
													<input type="text" class="form-control left-rect" placeholder="Username" aria-describedby="basic-addon5">
												</div>
												<div class="input-group has-addon">
													<div class="input-group-addon left-rads" id="basic-addon55">
														<div class="form-check">
															<label class="custom-control custom-radio">
																<input id="radioStacked_111" name="radio-stacked" type="radio" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description"></span>
															</label>
														</div>
													</div>
													<input type="text" class="form-control left-rect" placeholder="Username" aria-describedby="basic-addon5">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputText1" class="col-md-3 col-form-label">Button Addons</label>
											<div class="col-md-9">
												<div class="input-group has-addon-button">
													<input type="text" class="form-control right-rect" placeholder="Search for...">
													<span class="input-group-btn">
														<button class="btn btn-xs btn-primary btn-raised" type="button">Go!</button>
													</span>
												</div>
												<div class="input-group has-addon-button has-options">
													<input type="text" class="form-control right-rect" aria-label="Text input with dropdown button">
													<div class="input-group-btn">
														<button type="button" class="btn btn-primary btn-raised dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Action
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
															<div role="separator" class="dropdown-divider"></div>
															<a class="dropdown-item" href="#">Separated link</a>
														</div>
													</div>
												</div>
												<div class="input-group has-addon-button has-options">
													<input type="text" class="form-control right-rect" aria-label="Text input with dropdown button">
													<div class="btn-group dropdown-large">
														<button class="btn btn-primary btn-raised">Action</button>
														<button class="btn btn-primary btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
														<ul class="dropdown-menu">
															<li><a href="javascript:void(0)">Action</a></li>
															<li><a href="javascript:void(0)">Another action</a></li>
															<li><a href="javascript:void(0)">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="javascript:void(0)">Separated link</a></li>
														</ul>
													</div>		
												</div>
											</div>
										</div>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Switch Component</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="switch-block form-common">
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Size</label>
											<div class="col-md-9">
												<div class="inline-toggole-block toggle-switch-block">
													<label class="checkbox-inline toggle-switch-small">
														<input type="checkbox" checked data-toggle="toggle" data-style="ios">
													</label>
													<label class="checkbox-inline">
														<input type="checkbox" checked data-toggle="toggle" data-style="ios">
													</label>
													<label class="checkbox-inline toggle-switch-large">
														<input type="checkbox" checked data-toggle="toggle" data-style="ios">
													</label>
													<label class="checkbox-inline toggle-switch-extra-large">
														<input type="checkbox" checked data-toggle="toggle" data-style="ios">
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Success</label>
											<div class="col-md-9">
												<label class="has-success">
													<input type="checkbox" checked data-toggle="toggle" data-style="ios">
												</label>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Warning</label>
											<div class="col-md-9">
												<label class="has-warning">
													<input type="checkbox" checked data-toggle="toggle" data-style="ios">
												</label>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Danger</label>
											<div class="col-md-9">
												<label class="has-danger">
													<input type="checkbox" checked data-toggle="toggle" data-style="ios">
												</label>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Yes/No</label>
											<div class="col-md-9">
												<label class="has-info">
													<input type="checkbox" checked data-toggle="toggle" data-style="ios">
												</label>
											</div>
										</div>
									</div><!-- switch-block -->
								</div><!--panel Body -->
							</div><!--panel -->	
						</div>
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Advanced Controls</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="advanced-slider-contorl-block form-common">
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Slider</label>
											<div class="col-md-9">
												<div class="slider-controller-cmn">
													<input id="ex12a" type="text"/>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Range Slider</label>
											<div class="col-md-9">
												<div class="slider-controller-cmn">
													<input id="ex16b" type="text"/>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Vertical Slider</label>
											<div class="col-md-9">
												<div class="slider-controller-cmn vertical-align">
													<input id="ex17b" type="text"/>
													<input id="ex18b" type="text"/>
													<input id="ex19b" type="text"/>
													<input id="ex20b" type="text"/>
													<input id="ex21b" type="text"/>
													<input id="ex22b" type="text"/>
												</div>
											</div>
										</div>
									</div>
								</div><!--panel Body -->
							</div><!--panel -->
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="footer">
						<p>© 2018 AxilBoard by <a href="#">codepassenger</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
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

<!-- Mirrored from themerail.com/html/listingGeo/admin/form-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
</html>
