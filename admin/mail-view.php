<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:31 GMT -->
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
						<h4>Email View</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">MailBox</a></li>
							<li class="breadcrumb-item active">Email View</li>
						</ol>
					</div>
				</div>
				<div class="inbox-wrap inbox-view-mail-wrap">
					<div class="row">
						<div class="col-lg-2">
							<div class="inbox-sidebar">
								<a href="javascript:void(0)" class="btn btn-raised btn-primary waves-effect waves-light compose-btn">Compose Email</a>
								<ul class="inbox-nav">
									<li>
										<a href="javascript:void(0)" class="active"><i class="ti-harddrive"></i> Inbox <span class="badge warning">10</span></a>
									</li>
									<li>
										<a href="javascript:void(0)"><i class="ti-email"></i>Sent Mail</a>
									</li>
									<li>
										<a href="javascript:void(0)"><i class="ti-star"></i>Starred</a>
									</li>
									<li>
										<a href="javascript:void(0)"><i class="ti-trash"></i>Trash</a>
									</li>
									<li>
										<a href="javascript:void(0)"><i class="ti-file"></i>Draft</a>
									</li>
									<li>
										<a href="javascript:void(0)"><i class="ti-clip"></i>Attachments</a>
									</li>
								</ul>
								<p class="inbox-label-text">Labels</p>
								<ul class="inbox-label">
									<li>
										<a href="javascript:void(0)" class="label-privete">Private</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="label-friend">Friends</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="label-corporate">Corporate</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="border-left inbox-view-wrap col-lg-10">
							<div class="inbox-body">
								<div class="inbox-content">
									<div class="inbox-view-block">
										<div class="inbox-view-header border-bottom">
											<div class="inbox-author-block">
												<img src="images/misc/1.jpg" alt="img" class="img-responsive">
												<div>
													<h5>Maricela Mortensen</h5>
													<p>fumaecilela145@domain.com</p>
												</div>
											</div>
											<div class="inbox-info-block">
												<span>March 15, 12:18</span>
												<a href="javascript:void(0)" class="info-star">
													<i class="fa fa-star-o" aria-hidden="true"></i>
												</a>
												<div class="btn-group dropdown-large">
													<a href="javascript:void(0)" class="btn btn-outline-default btn-raised waves-effect waves-light  btn-icon"><i class="fa fa-reply" aria-hidden="true"></i></a>
													<a href="#" class="btn btn-outline-default btn-raised dropdown-toggle waves-effect waves-light" data-toggle="dropdown"><span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0)"><i class="fa fa-reply" aria-hidden="true"></i></a></li>
														<li><a href="javascript:void(0)"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
														<li><a href="javascript:void(0)"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="btn-group right">
													<a href="javascript:void(0)" class="btn btn-outline-default btn-raised waves-effect btn-icon">
														<i class="ti-angle-left"></i>
													</a>
													<a href="javascript:void(0)" class="btn btn-outline-default btn-raised waves-effect btn-icon">
														<i class="ti-angle-right"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="inbox-view">
											<h5 class="inbox-title">Your message title goes here</h5>
											<p class="text-highlight-one">Hello Don,</p>
											<p>
												Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
												roots in a piece of classical Latin literature from 45 BC, 
												making it over 2000 years old. Richard McClintock, 
												a Latin professor at Hampden-Sydney College in 
												Virginia, looked up one of the more obscure 
												Latin words, consectetur, from a Lorem 
												Ipsum passage, and going through the 
												cites of the word in classical 
												literature, discovered the 
												undoubtable source. 
												Lorem Ipsum comes 
												from sections 
												1.10.32 and 1.10.33 of "de Finibus 
												Bonorum et Malorum" (The Extremes of Good and Evil)
												by Cicero, written in 45 BC. This book is a treatise on 
												the theory of ethics, very popular during the Renaissance.
												The first line of Lorem Ipsum

											</p>
											<p>
												There are many variations of passages of Lorem Ipsum available,
												but the majority have suffered alteration in some form,
												by injected humour, or randomised words which don't 
												look even slightly believable. If you are going to
												use a passage of Lorem Ipsum, you need to be sure 
												there isn't anything embarrassing hidden in the 
												middle of text. All the Lorem Ipsum generators
												on the Internet tend to repeat predefined 
												chunks as necessary, 
											</p>
											<div class="regards-block">
												<h6>Regards,</h6>
												<h6>Tanjil Ahmed</h6>
											</div>
											<div class="attachment-area">
												<h5 class="attachment-title">Attachments <span>(3 files, 10.63 mb)</span>   <a href="javascript:void(0)">Download All</a></h5>
												<div>
													<div class="attachment-block">
														<div class="thumb">
															<img src="images/misc/attachment-1.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>Profile Pic  <span>( 1.69 mb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div>
													<div class="attachment-block extra-view">
														<div class="thumb">
															<img src="images/misc/attachment-2.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>WP Theme  <span>( 2.5 mb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div>
													<div class="attachment-block">
														<div class="thumb">
															<img src="images/misc/attachment-3.jpg" alt="img" class="img-responsive">
														</div>
														<div class="attachment-info">
															<h6>Preview  <span>( 555 kb )</span></h6>
															<ul>
																<li><a href="javascript:void(0)">Download</a></li>
																<li><a href="javascript:void(0)">View</a></li>
															</ul>
														</div>
													</div><!-- attachment-block -->
												</div>
											</div><!-- attachment-area -->
											<div class="inbox-replay-block">
												<h5>Click here to <a href="javascript:void(0)"> Reply</a> or <a href="javascript:void(0)">Forward</a></h5>
											</div>
										</div><!-- inbox-view -->
									</div>
								</div>
							</div>
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

<!-- Mirrored from themerail.com/html/listingGeo/admin/mail-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:45:32 GMT -->
</html>
