<?php
session_start();

header('Cache-Control: max-age=900');
if(empty($_SESSION['user'])){
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    header("location: ./login.php? x= Please Login First");
}

    include ("php_form/config.php");
    
    if(!empty($_POST['product_id'])){
        $product_id = $_POST['product_id'];
    }else{
        $product_id = $_SESSION['product_id'];
    }
    

    if(isset($product_id)){

        $query_enquiry = "SELECT * FROM product_details,business_details, business_executive 
            WHERE product_details.business_id = business_details.business_id 
            AND product_details.product_id = '$product_id'";

        $result_enquiry = mysqli_query($conn, $query_enquiry);

    }

    // echo $query_enquiry;
    $row_product_details = mysqli_fetch_assoc($result_enquiry);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themerail.com/html/listingGeo/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:09 GMT -->
<head>
    <meta charset="UTF-8">
    <title>B2B Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- include socket io and jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="js/socket.io.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js" integrity="sha256-yr4fRk/GU1ehYJPAs8P4JlTgu0Hdsp4ZKrx8bDEDC3I=" crossorigin="anonymous"></script>
    
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="main-wrap">
        <!-- Main Navigation -->
        <div class="main-nav-section">
            <!-- <div class="user-panel">
                <?php if(isset($_SESSION['user'])): ?>
                <a class="user-login-btn border-btn" href="./php_form/logout.php">
                <i class="fa fa-user-o" aria-hidden="true"></i> logout</a>
                <?php else: ?>
                <a class="uses-login-btn border-btn" href="login.php">
                <i class="fa fa-user-o" aria-hidden="true"></i>login</a>
                <?php endif; ?>
                <a href="add-listing.php" class="user-addlisting-btn">
                    <i class="fa fa-plus" aria-hidden="true"></i> Business
                </a>
            </div> -->
            <nav class="navbar navbar-toggleable-md fixed-top">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
				</button>
                <a class="navbar-brand" href="home-two.php">
                    <img src="images/logox.png" alt="img" class="img-responsive">
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="listing-map-left.php" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Categories
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">

                                <li><a class="dropdown-item" href="listing-map-left.php">Category 1</a></li>
                                <li><a class="dropdown-item" href="listing-map-right.php">Category 2</a></li>
                                <li><a class="dropdown-item" href="listing-map-full.php">Category 3</a></li>
                                <li><a class="dropdown-item" href="single-listing.php">Categpry 4</a></li>

                            </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="home-two.php" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="working-process.php">How It Works</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <?php if(isset($_SESSION['user']) && $_SESSION['buyer'] =='buyer'): ?>
                                <a class="user-login-btn" href="./php_form/logout.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
                                <i class="fa fa-user-o" aria-hidden="true"></i> Logout</a>
                            <?php else: ?>
                                <a class="uses-login-btn" href="login.php" style="border: 1px solid #e7e7e7; text-align: center; line-height: 31px; color: #fff; padding: 2px 31px !important; margin-top: 3px;">
                                <i class="fa fa-user-o" aria-hidden="true"></i>Login</a>
                            <?php endif; ?>
						</li>
						<li class="nav-item dropdown">
                            <a href="add-listing.php" class="user-addlisting-btn" style="color: #fff;">
                                <i class="fa fa-plus" aria-hidden="true"></i> Business
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- main nav section -->
        <div class="subheader">
            <h2>Contact seller</h2>
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home-two.php">Home</a></li>
                    <li class="breadcrumb-item active">Contact Seller</li>
                </ol>
                <div class="breadcrumb-call-to-action">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
                </div>
            </div>
        </div>
        <div class="add-listing-wrap">
            <div class="container">
                <!-- <div class="add-listing-tost-block">
                    <p>
                        <strong>Existing User? Please </strong><a href="login.php">Sign in.</a> <strong>New here? </strong>Please <strong>continue</strong> and enter your <strong>Name</strong> & <strong>Email</strong> Address along with listing information at the bottom.
                    </p>
                </div> -->
                <!-- add-listing-tost-block -->
                <form id="inquiry_form" method="POST" class="form-common add-listing-form" action="./php_form/inquiry_form.php" enctype="multipart/form-data">
                    <div class="listing-block businessinfo-listing">
                        <h4>Contact Seller</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="businessinfo-left-block">
                                    <h4 id="business_name" name="business_name"><?php echo $row_product_details['legal_name'] ?></h4><br>
                                    <div class="form-group">
                                        
                                        <embed src="<?php echo $row_product_details['product_image_1'] ?>" style="height: 200px; width: 200px; vertical-align: middle;"></embed>
                                        <span style="font-size: 18px; vertical-align: middle;"><?php echo $row_product_details['product_name'] ?></span>
                                        <table>
                                            <tr>
                                                <td width=275>
                                                    <label for="quantity">Quantity</label>
                                                    <input id="quantity" type="number" name="quantity" min="0" class="form-control-file" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width=275>
                                                    <label for="unit" style="vertical-align: middle; margin-top: 5px;">Unit</label>
                                                    <select id="unit" name="unit" style="width: 250px; height: 30px; border-radius: 3px; background-color: white !important;" required>
                                                        <!-- <option value="none" selected disabled hidden>Select Unit</option>
                                                        <option>Box(s)</option>
                                                        <option>Carton(s)</option>
                                                        <option>Case(s)</option>
                                                        <option>Dozen(s)</option>
                                                        <option>Gallon(s)</option>
                                                        <option>Gram(s)</option>
                                                        <option>Inch(s)</option>
                                                        <option>Litre(s)</option>
                                                        <option>Pack(s)</option>
                                                        <option>Pair(s)</option>
                                                        <option>Parcel(s)</option>
                                                        <option>Peice(s)</option>
                                                        <option>Pint(s)</option>
                                                        <option>Unit(s)</option> -->
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
                                    <!-- <div id="add_listing_map" class="add-listing-map"></div> -->
                                    <h4>Enter Details</h4>
                                    <div class="form-group">
                                        <label for="message_body">Message *</label>
                                        <textarea id="message_body" name="message_body" style="vertical-align: middle; height: 200px; width: 100%;" placeholder="Enter your message here!" required></textarea>
                                        
                                        <div class="form-group form-group-file-type">
                                            <label for="attachments" style="margin-top: 20px;">Add Attachment</label>
                                            <input type="file" class="form-control-file" id="attachments" name="attachments"  accept=".pdf, .doc, .png, .jpg, .jpeg">

                                            <input type="hidden" id="executive_email_id" name="executive_email_id" value="<?php echo $row_product_details['executive_email_id']?>">
                                            <input type="hidden" id="productName" name="productName" value="<?php echo $row_product_details['product_name']?>">
                                            <input type="hidden" id="business_email_id" name="business_email_id" value="<?php echo $row_product_details['business_email_id']?>">
                                            <input type="hidden" id="business_id" name="business_id"  value ="<?php echo $row_product_details['business_id'] ?>" >
                                            <input type="hidden" id="product_id" name="product_id" value = "<?php echo $row_product_details['product_id'] ?>">
                                            <input type="hidden" id="user_email" name="user_email" value= "<?php echo $_SESSION['user'] ?>">
                                            
                                            <span>File Format .doc, .pdf, .png, .jpg</span><br>
                                            <button style="margin-top: 20px;" type='submit' name="enquire" class="search-btn" id="send">Send Inquiry</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer-top-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                        </div>
                        <div class="col-lg-2 col-sm-6" style="text-align: center; border: 1px solid white; border-radius: 4px;">
                            <div class="footer-logo-block">
                                <a href="home-two.php">
                                    <img src="images/logox.png" alt="img" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                        </div>  
                        <div class="col-lg-3 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <p class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Suite # 25/B, Green Street California, CA78542
                                </p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</p>
                                <div class="footer-social-block">
                                    <span>
										Folow us:
									</span>
                                    <ul class="social">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- footer-social-block -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Links</h4>
                                <ul class="footer-content-list">
                                    <li>
                                        <a href="about.php">
											About B2B Marketplace
										</a>
                                    </li>
                                    <li>
                                        <a href="working-process.php">
											How it Works
										</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
											Contact us
										</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Listing Account</h4>
                                <ul class="footer-content-list">
                                <?php if($_SESSION['buyer'] !='buyer'): ?>
                                    <li>
                                        <a href="business-login.php">
											Business Log in
										</a>
                                    </li>
                                <?php endif; ?>
                                    <li>
                                        <a href="add-listing.php">
											Business Registration
										</a>
                                    </li>
                                    <!-- <li>
                                        <a href="add-listing.php">
											Add Listing
										</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" style="margin-top: 25px;">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Latest Listings</h4>
                                <?php

                                    $query_popular_category_1 = "SELECT business_id, AVG(ratings) FROM review_details GROUP BY business_id ORDER BY AVG(ratings) DESC LIMIT 2";
                                    $result_popular_category_1 = mysqli_query($conn, $query_popular_category_1);
                                    
                                    while($row_popular_category_1 = mysqli_fetch_assoc($result_popular_category_1)){
                                        $business_id_1 = $row_popular_category_1['business_id'];

                                        $query_business_details = "SELECT * FROM business_details, category_table 
                                                    WHERE business_details.business_category = category_table.category_id 
                                                    AND business_details.business_id = '$business_id_1' ";

                                        $result_business_details = mysqli_query($conn, $query_business_details);

                                        $row_business_details = mysqli_fetch_assoc($result_business_details);

                                        $category_business = $row_business_details['category_name'];
                                        $category_business = ucwords($category_business);

                                ?>
                                <article class="latest-post">
                                    <div class="post-thumb">
                                        <a href="javascript:void(0)" style="cursor: none;">
                                            <img src="<?php echo $row_business_details['personal_profile_image'] ?>" alt="img" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="post-wrapper">
                                        <h6 class="title">
                                            <a href="javascript:void(0)"  style="cursor: none;">
                                                <?php echo $row_business_details['legal_name'] ?>
                                            </a>
                                        </h6>
                                        <p class="post-entry">
                                            <?php echo $category_business ?>
                                        </p>
                                        <div class="post-meta">
                                        <form action="./single-listing.php" method="POST">
                                            <input type="hidden" name= "product_seller_name" value="<?php echo $row_business_details['legal_name'] ?>">
                                            <button type="submit" id="business_button" style="background: transparent; border:none;">                                            
                                                <a class="post-tag" style="cursor: pointer;">
                                                    View Seller
                                                </a>
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                </article>
                                    <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 push-md-6">
                            <ul class="footer-nav">
                                <li>
                                    <a href="javascript:void(0)">
										Legal 
									</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
										Privacy Policy  
									</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
										Terms of Use
									</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 pull-md-6">
                            <p class="copyright-text">Copyright 2018, <a href="javascript:void(0)">ListingGEO</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // creating io instance
        //var io = io("http://localhost:3000");
        

        // function sendEnquiry(){
        //     var quantity = document.getElementById('quantity').value;
        //     var unit = document.getElementById('unit').value;
        //     var productName = document.getElementById('productName').value;
            
        //     var receiver1 = document.getElementById('business_email_id').value;
        //     var receiver2 = document.getElementById('executive_email_id').value;
        //     var sender = document.getElementById('user_email').value;   
        //     var message = sender+"has sent you an enquiry for "+quantity +" "+unit+" "+productName;
            // var message = sender+"has sent you an enquiry for "+quantity +" "+unit+" "+productName;

            // alert(sender);
            // alert(receiver1);
            // alert(receiver2);
            // io.emit("message_new_user", {
            //     sender : sender,
            //     receiver : receiver1,
            //     message : message
            // });
            // io.emit("message_new_user", {
            //     sender : sender,
            //     receiver : receiver2,
            //     message : message
            // });
            

        //}
        $(document).ready(function(){
            $("#unit").load('./php_form/load_unit.php')
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

<!-- Mirrored from themerail.com/html/listingGeo/add-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 13:44:09 GMT -->
</html>
