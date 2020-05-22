<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/buttons.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
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
						<h4>Buttons</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
							<li class="breadcrumb-item active">Buttons</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Default Buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<a href="javascript:void(0)" class="btn btn-raised btn-default">Default</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-primary">Primary</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-success">Success</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-info">Info</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-warning">Warning</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-danger">Danger</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-link">Link</a>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default" >
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Rounded buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<a href="javascript:void(0)" class="btn btn-raised btn-default btn-rounded">Default</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-primary btn-rounded">Primary</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-success btn-rounded">Success</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-info btn-rounded">Info</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-warning btn-rounded">Warning</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-danger btn-rounded">Danger</a>
										<a href="javascript:void(0)" class="btn btn-raised btn-link btn-rounded">Link</a>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Outline Buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<button type="button" class="btn btn-outline-default btn-raised waves-effect">Default</button>
										<button type="button" class="btn btn-outline-primary btn-raised waves-effect">Primary</button>
										<button type="button" class="btn btn-outline-success btn-raised waves-effect">Success</button>
										<button type="button" class="btn btn-outline-info btn-raised waves-effect">Info</button>
										<button type="button" class="btn btn-outline-danger btn-raised  btn-raised waves-effect">Danger</button>
										<button type="button" class="btn btn-outline-warning btn-raised waves-effect">Warning</button>
										<button type="button" class="btn btn-outline-dsable btn-raised waves-effect" disabled>Disabled</button>
										<button type="button" class="btn btn-link btn-raised waves-effect">Link</button>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Rounded buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<button type="button" class="btn btn-outline-default btn-raised btn-rounded waves-effect">Default</button>
										<button type="button" class="btn btn-outline-primary btn-raised btn-rounded waves-effect">Primary</button>
										<button type="button" class="btn btn-outline-success btn-raised btn-rounded waves-effect">Success</button>
										<button type="button" class="btn btn-outline-info btn-raised btn-rounded waves-effect">Info</button>
										<button type="button" class="btn btn-outline-danger btn-raised btn-rounded btn-raised waves-effect">Danger</button>
										<button type="button" class="btn btn-outline-warning btn-raised btn-rounded waves-effect">Warning</button>
										<button type="button" class="btn btn-outline-dsable btn-raised btn-rounded waves-effect" disabled>Disabled</button>
										<button type="button" class="btn btn-link btn-raised btn-rounded waves-effect">Link</button>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Button-Width</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<button type="button" class="btn btn-xs btn-primary btn-raised waves-effect">Xs</button>
										<button type="button" class="btn btn-sm btn-success btn-raised waves-effect">Small</button>
										<button type="button" class="btn btn-md btn-ex-one btn-raised waves-effect">Middle</button>
										<button type="button" class="btn btn-lg btn-warning btn-raised waves-effect">Large</button>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Button-Sizes</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-block">
										<button type="button" class="btn btn-h-lg btn-primary btn-raised waves-effect">Large</button>
										<button type="button" class="btn btn-h-md btn-success btn-raised waves-effect">Normal</button>
										<button type="button" class="btn btn-h-sm btn-ex-one btn-raised waves-effect">Small</button>
										<button type="button" class="btn btn-h-xs btn-warning btn-raised waves-effect">Extra Small</button>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Button dropdowns</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-group dropdown-large">
										<a href="javascript:void(0)" class="btn btn-primary btn-raised">Action</a>
										<a href="#" class="btn btn-primary btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
										<ul class="dropdown-menu">
										<li><a href="javascript:void(0)">Action</a></li>
										<li><a href="javascript:void(0)">Another action</a></li>
										<li><a href="javascript:void(0)">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="javascript:void(0)">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group dropdown-large">
										<a href="javascript:void(0)" class="btn btn-outline-primary btn-raised">Action</a>
										<a href="#" class="btn btn-outline-primary btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
										<ul class="dropdown-menu">
										<li><a href="javascript:void(0)">Action</a></li>
										<li><a href="javascript:void(0)">Another action</a></li>
										<li><a href="javascript:void(0)">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="javascript:void(0)">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group open">
										<a href="#" class="btn btn-warning btn-raised dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											Dropdown
											<span class="caret"></span>
											<div class="ripple-container"></div>
										</a>
										<ul class="dropdown-menu">
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										</ul>
									</div>
									<div class="btn-group open">
										<a href="#" class="btn btn-outline-warning btn-raised dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											Dropdown
											<span class="caret"></span>
											<div class="ripple-container"></div>
										</a>
										<ul class="dropdown-menu">
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										<li><a href="javascript:void(0)">Dropdown link</a></li>
										</ul>
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
										<h4>Block buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="bs-component">
										<a href="javascript:void(0)" class="btn btn-block btn-ex-one btn-raised">Block level button<div class="ripple-container"></div></a>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Block buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="bs-component">
										<a href="javascript:void(0)" class="btn btn-h-sm btn-default btn-fab"><i class="fa fa-briefcase" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-sm btn-primary btn-fab"><i class="fa fa-bolt" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-sm btn-success btn-fab"><i class="fa fa-book" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-sm btn-ex-one btn-fab"><i class="fa fa-external-link-square" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-sm btn-warning btn-fab"><i class="fa fa-cog" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-sm btn-danger btn-fab"><i class="fa fa-dashcube" aria-hidden="true"></i><div class="ripple-container"></div></a>
									</div><!-- btn block -->
									<div class="bs-component">
										<a href="javascript:void(0)" class="btn btn-h-md btn-default btn-fab"><i class="fa fa-briefcase" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-md btn-primary btn-fab"><i class="fa fa-bolt" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-md btn-success btn-fab"><i class="fa fa-book" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-md btn-ex-one btn-fab"><i class="fa fa-external-link-square" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-md btn-warning btn-fab"><i class="fa fa-cog" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-md btn-danger btn-fab"><i class="fa fa-dashcube" aria-hidden="true"></i><div class="ripple-container"></div></a>
									</div><!-- btn block -->
									<div class="bs-component">
										<a href="javascript:void(0)" class="btn btn-h-lg btn-default btn-fab"><i class="fa fa-briefcase" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-lg btn-primary btn-fab"><i class="fa fa-bolt" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-lg btn-success btn-fab"><i class="fa fa-book" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-lg btn-ex-one btn-fab"><i class="fa fa-external-link-square" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-lg btn-warning btn-fab"><i class="fa fa-cog" aria-hidden="true"></i><div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-h-lg btn-danger btn-fab"><i class="fa fa-dashcube" aria-hidden="true"></i><div class="ripple-container"></div></a>
									</div><!-- btn block -->
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
					</div>
					<div class="col-lg-6">
						<div class="box-widget">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Block buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="btn-group">
										<a href="javascript:void(0)" class="btn btn-xs btn-outline-default btn-raised">5<div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-xs btn-outline-default btn-raised">6</a>
										<a href="javascript:void(0)" class="btn btn-xs btn-outline-default btn-raised">7</a>
									</div>
									<div class="btn-group btn-group-justified btn-group-raised btn-one-third-group">
										<a href="javascript:void(0)" class="btn btn-primary btn-one-third">Left<div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-warning btn-one-third">Middle</a>
										<a href="javascript:void(0)" class="btn btn-ex-one btn-one-third">Right</a>
									</div>
									<div class="btn-group-vertical">
										<a href="javascript:void(0)" class="btn btn-md btn-outline-default btn-raised">5<div class="ripple-container"></div></a>
										<a href="javascript:void(0)" class="btn btn-md btn-outline-default btn-raised">6</a>
										<a href="javascript:void(0)" class="btn btn-md btn-outline-default btn-raised">7</a>
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
										<h4>Block buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="social-btn-group">
										<div class="social-icon-btn-group-square">
											<!--Facebook-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-fb waves-effect waves-light">
												<i class="fa fa-facebook"></i>
											</a>
											<!--Twitter-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-tw waves-effect waves-light">
												<i class="fa fa-twitter"></i>
											</a>
											<!--Google +-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-gplus waves-effect waves-light">
												<i class="fa fa-google-plus"></i>
											</a>
											<!--Pinterest-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-pin waves-effect waves-light">
												<i class="fa fa-pinterest"></i>
											</a>
											<!--Linkedin-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-linkedin waves-effect waves-light">
												<i class="fa fa-linkedin"></i>
											</a>
											<!--Instagram-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-ins waves-effect waves-light">
												<i class="fa fa-instagram"></i>
											</a>
											<!--Dribbble-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-dribbble waves-effect waves-light">
												<i class="fa fa-dribbble"></i>
											</a>
											<!--Behance-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-bhnc waves-effect waves-light">
												<i class="fa fa-behance"></i>
											</a>
											<!--Youtube-->
											<a href="javascript:void(0)" class="btn icon-btn-sqr-yt waves-effect waves-light">
												<i class="fa fa-youtube"></i>
											</a>
										</div><!-- Social-icon-btn-square-group -->
										<div class="social-icon-btn-group-round">
											<!--Facebook-->
											<a href="javascript:void(0)" class="btn icon-btn-round-fb waves-effect waves-light">
												<i class="fa fa-facebook"></i>
											</a>
											<!--Twitter-->
											<a href="javascript:void(0)" class="btn icon-btn-round-tw waves-effect waves-light">
												<i class="fa fa-twitter"></i>
											</a>
											<!--Google +-->
											<a href="javascript:void(0)" class="btn icon-btn-round-gplus waves-effect waves-light">
												<i class="fa fa-google-plus"></i>
											</a>
											<!--Pinterest-->
											<a href="javascript:void(0)" class="btn icon-btn-round-pin waves-effect waves-light">
												<i class="fa fa-pinterest"></i>
											</a>
											<!--Linkedin-->
											<a href="javascript:void(0)" class="btn icon-btn-round-linkedin waves-effect waves-light">
												<i class="fa fa-linkedin"></i>
											</a>
											<!--Instagram-->
											<a href="javascript:void(0)" class="btn icon-btn-round-ins waves-effect waves-light">
												<i class="fa fa-instagram"></i>
											</a>
											<!--Dribbble-->
											<a href="javascript:void(0)" class="btn icon-btn-round-dribbble waves-effect waves-light">
												<i class="fa fa-dribbble"></i>
											</a>
											<!--Behance-->
											<a href="javascript:void(0)" class="btn icon-btn-round-bhnc waves-effect waves-light">
												<i class="fa fa-behance"></i>
											</a>
											<!--Youtube-->
											<a href="javascript:void(0)" class="btn icon-btn-round-yt waves-effect waves-light">
												<i class="fa fa-youtube"></i>
											</a>
										</div><!-- Social-icon-btn-round-group -->
										<div class="social-icon-btn-group-detail">
											<!--Facebook-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-fb btn-rounded waves-effect waves-light">
												<i class="fa fa-facebook left"></i>
												Facebook
											</a>
											<!--Twitter-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-tw btn-rounded waves-effect waves-light">
												<i class="fa fa-twitter left"></i>
												Twitter
											</a>
											<!--Google +-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-gplus btn-rounded waves-effect waves-light">
												<i class="fa fa-google-plus left"></i>
												Google +
											</a>
											<!--Pinterest-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-pin btn-rounded waves-effect waves-light">
												<i class="fa fa-pinterest left"></i>
												Pinterest
											</a>
											<!--Linkedin-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-linkedin btn-rounded waves-effect waves-light">
												<i class="fa fa-linkedin left"></i>
												Linkedin
											</a>
											<!--Instagram-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-ins btn-rounded waves-effect waves-light">
												<i class="fa fa-instagram left"></i>
												Instagram
											</a>
											<!--Dribbble-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-dribbble btn-rounded waves-effect waves-light">
												<i class="fa fa-dribbble left"></i>
												Dribbble
											</a>
											<!--Behance-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-bhnc btn-rounded waves-effect waves-light">
												<i class="fa fa-behance left"></i>
												Behance
											</a>
											<!--Youtube-->
											<a href="javascript:void(0)" class="btn icon-btn-detail-yt btn-rounded waves-effect waves-light">
												<i class="fa fa-youtube left"></i>
												Youtube
											</a>
										</div><!-- Social-icon-btn-detail-group -->
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
										<h4>Block buttons</h4>
									</div>
								</div>
								<div class="panel-body">
									<nav>
										<ul class="pagination">
											<!--Arrow left-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
												</a>
											</li>

											<!--Numbers-->
											<li class="page-item"><a class="page-link waves-effect waves-effect">1</a></li>
											<li class="page-item active"><a class="page-link waves-effect waves-effect">2</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

											<!--Arrow right-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
										<ul class="pagination">
											<!--Arrow left-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
												</a>
											</li>

											<!--Arrow left-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
												</a>
											</li>

											<!--Numbers-->
											<li class="page-item"><a class="page-link waves-effect waves-effect">1</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
											<li class="page-item active"><a class="page-link waves-effect waves-effect">3</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

											<!--Arrow right-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
												</a>
											</li>
											<!--Arrow right-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
										<ul class="pagination pg-round">
											<!--Arrow left-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
												</a>
											</li>
											<!--Arrow left-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
												<span class="sr-only">Previous</span>
												</a>
											</li>

											<!--Numbers-->
											<li class="page-item"><a class="page-link waves-effect waves-effect">1</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
											<li class="page-item active"><a class="page-link waves-effect waves-effect">4</a></li>
											<li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

											<!--Arrow right-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
												</a>
											</li>
											<!--Arrow right-->
											<li class="page-item">
												<a class="page-link waves-effect waves-effect" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												<span class="sr-only">Next</span>
												</a>
											</li>
										</ul>
									</nav>
								</div><!--panel Body -->
							</div><!--panel -->
						</div><!-- widget-module -->
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

<!-- Mirrored from themerail.com/html/listingGeo/admin/buttons.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:28 GMT -->
</html>
