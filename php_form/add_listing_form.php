<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['submit_button'])){

        $personal_name = $_POST['personal_name'];
        $personal_number = $_POST['personal_number'];
        $personal_email_id = $_POST['personal_email_id'];
        $personal_address_line_1 = $_POST['personal_address_line_1'];
        $personal_address_line_2 = $_POST['personal_address_line_2'];
        $personal_profile_image = $_FILES['personal_profile_image'];

        // echo $personal_name;
        // echo '<br>';
        // echo $personal_number;
        // echo '<br>';
        // echo $personal_email_id;
        // echo '<br>';
        // echo $personal_address_line_1;
        // echo '<br>';
        // echo $personal_address_line_2;
        // echo '<br>';
        // print_r($personal_profile_image);

        $legal_name = $_POST['legal_name'];
        $listing_tagline = $_POST['listing_tagline'];
        $contact_no = $_POST['contact_no'];
        $business_email_id = $_POST['business_email_id'];
        $business_password = $_POST['business_password'];
        $confirm_password = $_POST['business_password_1'];
        $address_line_1 = $_POST['address_line_1'];
        $address_street = $_POST['address_street'];
        $address_city = $_POST['address_city'];
        $address_state = $_POST['address_state'];
        $postal_zip = $_POST['postal_zip'];
        $country = $_POST['country'];
        $business_category = $_POST['business_category'];
        $pan_no = $_POST['pan_no'];
        $gst_no = $_POST['gst_no'];
        $accept = $_POST['accept'];
        $file = $_FILES['bank_details'];



        if($business_password != $confirm_password && $pan_no == $gst_no){
            header("location:../add-listing.php?x=*Password does not match");
        }

        $password_in_db = password_hash($business_password, PASSWORD_DEFAULT); 

        $file_name = $_FILES['bank_details']['name'];
        $file_temp_name = $_FILES['bank_details']['tmp_name'];
        $file_size = $_FILES['bank_details']['size'];
        $file_error = $_FILES['bank_details']['error'];
        $file_type = $_FILES['bank_details']['type'];

        $file_ext = explode('.', $file_name);
        $file_actual_extension = strtolower(end($file_ext));

        $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
        
        if(in_array($file_actual_extension, $allowed)){
            if($file_error === 0){
                if($file_size < 1000000){
                    $file_name_new = $legal_name.".".uniqid('', true).".".$file_actual_extension;
                    $file_dest = '../uploads/business_details/bank_statement/'.$file_name_new;
                    move_uploaded_file($file_temp_name, $file_dest);
                    // echo "file uploaded";
                    // echo "<br>";
                    // echo $file_dest;
                }else {
                    echo "Your file is too big";
                }
            } else {
                echo "There was an error uploading your file";
            }
        } else {
            echo "You cannot upload file of this type";
        }

        // Personal Profile UPLOAD
        $file_name_1 = $_FILES['personal_profile_image']['name'];
        $file_temp_name_1 = $_FILES['personal_profile_image']['tmp_name'];
        $file_size_1 = $_FILES['personal_profile_image']['size'];
        $file_error_1 = $_FILES['personal_profile_image']['error'];
        $file_type_1 = $_FILES['personal_profile_image']['type'];

        $file_ext_1 = explode('.', $file_name);
        $file_actual_extension_1 = strtolower(end($file_ext));

        $allowed_1 = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
        
        if(in_array($file_actual_extension_1, $allowed_1)){
            if($file_error_1 === 0){
                if($file_size_1 < 1000000){
                    $file_name_new_1 = $legal_name.".".uniqid('', true).".".$file_actual_extension_1;
                    $file_dest_1 = '../uploads/business_details/personal_profile_image/'.$file_name_new_1;
                    move_uploaded_file($file_temp_name_1, $file_dest_1);
                }else {
                    echo "Your file is too big";
                }
            } else {
                echo "There was an error uploading your file";
            }
        } else {
            echo "You cannot upload file of this type";
        }

        // PERSONAL PROFILE IMAGE
        $personal_profile_image_name       = $_FILES['personal_profile_image']['name'];  
        $personal_profile_image_temp_name  = $_FILES['personal_profile_image']['tmp_name'];
        $uploadOk_1 = 1;
        $personal_profile_image_file_type = strtolower(pathinfo($personal_profile_image_name,PATHINFO_EXTENSION));
        if(isset($personal_profile_image_name) and !empty($personal_profile_image_name)){
            $location = '../uploads/business_details/personal_profile_image/';

            if($uploadOk_1 == 0){
                echo "Unable to upload file";
            } else{    
                // echo 'test1';            
                if(move_uploaded_file($personal_profile_image_temp_name, $location.$legal_name.'_'.time().'.'.$personal_profile_image_file_type)){
                    $personal_profile_image = ''.$location.''.$legal_name.'_'.time().'.'.$personal_profile_image_file_type.'';
                }
                else{
                    echo 'Error Uploading the file';
                }
            }
        }
        else {
            echo 'You should select a file to upload !!';
        }

            if($accept == 'on'){

                $query_get_category_id = "SELECT category_id FROM category_table WHERE category_name = '$business_category' ";
                $result_get_category_id = mysqli_query($conn, $query_get_category_id);

                $row_get_category_id = mysqli_fetch_assoc($result_get_category_id);

                $business_category_id = $row_get_category_id['category_id'];

                $query_add_business = "INSERT INTO business_details (legal_name, business_tagline, contact_no, business_email_id, business_password, business_category, pan_no, 
                gst_no, bank_details, personal_name, personal_number, personal_email_id, personal_address_line_1, personal_address_line_2, personal_profile_image) 
                VALUES  ('".$legal_name."','".$listing_tagline."', '".$contact_no."', '".$business_email_id."', '".$password_in_db."', '".$business_category_id."',
                '".$pan_no."','".$gst_no."','".$file_dest."','".$personal_name."','".$personal_number."','".$personal_email_id."','".$personal_address_line_1."',
                '".$personal_address_line_2."','".$file_dest_1."')";
                    
                // echo $query_add_business; 
                
                $result_add_business = mysqli_query($conn, $query_add_business);
                $get_bid = mysqli_insert_id($conn);
                
                $query_add_business_address = "INSERT INTO business_details_business_address
                    (address_line_1, address_street, address_city, address_state, postal_zip,
                    country, business_id)
                    VALUES ('".$address_line_1."', '".$address_street."','".$address_city."',
                    '".$address_state."','".$postal_zip."','".$country."', '".$get_bid."')";
                
                $result_add_business_address = mysqli_query($conn, $query_add_business_address);
                
                if($query_add_business && $query_add_business_address){
                    echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
                    header("location:../business-login.php");
                }
                else{
                    echo "ISSUE IN QUERY";
                }
            }
            else{
                header("location:../add-listing.php?x=*Accept Terms and Conditions");
            }

            echo $query_add_business;
    }
    else{
        echo "<br><br> <h1>YOU NEED TO FILL UP ALL THE DETAILS</h1>";
        //header("location:../home-two.php");
        echo '<meta http-equiv="refresh" content="1; URL=../add-listing.php" />';
    }


?>