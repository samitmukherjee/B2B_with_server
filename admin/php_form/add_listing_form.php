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
        
        // echo  $business_category;

        // echo $legal_name;
        // echo '<br>';
        // echo $listing_tagline ;
        // echo '<br>';
        // echo $contact_no;
        // echo '<br>';
        // echo $business_email_id;
        // echo '<br>';
        // echo $business_password;
        // echo '<br>';
        // echo $confirm_password;
        // echo '<br>';
        // echo $address_line_1;
        // echo '<br>';
        // echo $address_street;
        // echo '<br>';
        // echo $address_city;
        // echo '<br>';
        // echo $address_state;
        // echo '<br>';
        // echo $postal_zip;
        // echo '<br>';
        // echo $country;
        // echo '<br>';
        // echo $business_category;
        // echo '<br>';
        // echo $pan_no;
        // echo '<br>';
        // echo $gst_no;
        // echo '<br>';
        // echo $accept;
        // echo '<br>';
        // print_r ($file);
        // echo '<br>';


        if($business_password != $confirm_password && $pan_no == $gst_no){
            header("location:../add-listing.php?x=*Password does not match");
        }

        // echo 'they dont match';

        $password_in_db = password_hash($business_password, PASSWORD_DEFAULT); 

        // $file_name = $_FILES['bank_details']['name'];
        // $file_temp_name = $_FILES['bank_details']['tmp_name'];
        // $file_size = $_FILES['bank_details']['size'];
        // $file_error = $_FILES['bank_details']['error'];
        // $file_type = $_FILES['bank_details']['type'];

        // $file_ext = explode('.', $file_name);
        // $file_actual_extension = strtolower(end($file_ext));

        // $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
        
        // if(in_array($file_actual_extension, $allowed)){
        //     if($file_error === 0){
        //         if($file_size < 1000000){
        //             $file_name_new = $legal_name.".".uniqid('', true).".".$file_actual_extension;
        //             $file_dest_1 = '../../uploads/business_details/bank_statement/'.$file_name_new;
        //             $file_dest_2 = './uploads/business_details/bank_statement/'.$file_name_new;
        //             move_uploaded_file($file_temp_name, $file_dest);
        //         }else {
        //             echo "Your file is too big";
        //         }
        //     } else {
        //         echo "There was an error uploading your file";
        //     }
        // } else {
        //     echo "You cannot upload file of this type";
        // }

        // BANK DETAILS UPLOAD
        $bank_details_name       = $_FILES['bank_details']['name'];  
        $bank_details_temp_name  = $_FILES['bank_details']['tmp_name'];
        $uploadOk_1 = 1;
        $bank_details_file_type = strtolower(pathinfo($bank_details_name,PATHINFO_EXTENSION));
        if(isset($bank_details_name) and !empty($bank_details_name)){
            $location_1 = '../../uploads/business_details/bank_statement/';
            $location_2 = './uploads/business_details/bank_statement/';

            if($uploadOk_1 == 0){
                echo "Unable to upload file";
            } else{    
                // echo 'test1';            
                if(move_uploaded_file($bank_details_temp_name, $location_1.$legal_name.'_'.time().'.'.$bank_details_file_type)){
                    $bank_details = ''.$location_2.''.$legal_name.'_'.time().'.'.$bank_details_file_type.'';
                }
                else{
                    echo 'Error Uploading the file';
                    //echo $bank_details_name;
                    //echo $bank_details_temp_name;
                }
            }
        }
        else {
            echo 'You should select a file to upload !!';
        }


        // Personal Profile UPLOAD
        // $file_name_1 = $_FILES['personal_profile_image']['name'];
        // $file_temp_name_1 = $_FILES['personal_profile_image']['tmp_name'];
        // $file_size_1 = $_FILES['personal_profile_image']['size'];
        // $file_error_1 = $_FILES['personal_profile_image']['error'];
        // $file_type_1 = $_FILES['personal_profile_image']['type'];

        // $file_ext_1 = explode('.', $file_name);
        // $file_actual_extension_1 = strtolower(end($file_ext));

        // $allowed_1 = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
        
        // if(in_array($file_actual_extension_1, $allowed_1)){
        //     if($file_error_1 === 0){
        //         if($file_size_1 < 1000000){
        //             $file_name_new_1 = $legal_name.".".uniqid('', true).".".$file_actual_extension_1;
        //             $file_dest_1_1 = '../../uploads/business_details/personal_profile_image/'.$file_name_new_1;
        //             $file_dest_1_2 = './uploads/business_details/personal_profile_image/'.$file_name_new_1;
        //             move_uploaded_file($file_temp_name_1, $file_dest_1);
        //         }else {
        //             echo "Your file is too big";
        //         }
        //     } else {
        //         echo "There was an error uploading your file";
        //     }
        // } else {
        //     echo "You cannot upload file of this type";
        // }

        // PERSONAL PROFILE IMAGE
        $personal_profile_image_name       = $_FILES['personal_profile_image']['name'];  
        $personal_profile_image_temp_name  = $_FILES['personal_profile_image']['tmp_name'];
        $uploadOk_1 = 1;
        $personal_profile_image_file_type = strtolower(pathinfo($personal_profile_image_name,PATHINFO_EXTENSION));
        if(isset($personal_profile_image_name) and !empty($personal_profile_image_name)){
            $location_1_1 = '../../uploads/business_details/personal_profile_image/';
            $location_1_2 = './uploads/business_details/personal_profile_image/';

            if($uploadOk_1 == 0){
                echo "Unable to upload file";
            } else{    
                // echo 'test1';
                if(move_uploaded_file($personal_profile_image_temp_name, $location_1_1.$legal_name.'_'.time().'.'.$personal_profile_image_file_type)){
                    $personal_profile_image = ''.$location_1_2.''.$legal_name.'_'.time().'.'.$personal_profile_image_file_type.'';
                }
                else{
                    echo 'Error Uploading the file';
                }
            }
        }
        else {
            echo 'You should select a file to upload !!';
        }
        // echo $bank_details;
        // echo '<br>';
        // echo $personal_profile_image;

        $query_get_category_id = "SELECT category_id FROM category_table WHERE category_name = '$business_category'  ";
        $result_get_category_id = mysqli_query($conn,$query_get_category_id);

        echo '<br>';
        echo  "select ".$query_get_category_id;
        echo '<br>';

        // echo $query_get_category_id;

        $row = mysqli_fetch_assoc($result_get_category_id);
        $product_category_id = $row['category_id'];

        echo '<br>';
        echo  "select ".$product_category_id;
        echo '<br>';


        $query_add_business = "INSERT INTO business_details (legal_name, business_tagline, contact_no, business_email_id, business_password, business_category, pan_no, 
        gst_no, bank_details, personal_name, personal_number, personal_email_id, personal_address_line_1, personal_address_line_2, personal_profile_image) 
        VALUES  ('".$legal_name."','".$listing_tagline."', '".$contact_no."', '".$business_email_id."', '".$password_in_db."', '".$product_category_id."',
        '".$pan_no."','".$gst_no."','".$bank_details."','".$personal_name."','".$personal_number."','".$personal_email_id."','".$personal_address_line_1."',
        '".$personal_address_line_2."','".$personal_profile_image."')";
            
        echo $query_add_business; 
        
        $result_add_business = mysqli_query($conn, $query_add_business);
        $get_bid = mysqli_insert_id($conn);
        
        $query_add_business_address = "INSERT INTO business_details_business_address
            (address_line_1, address_street, address_city, address_state, postal_zip,
            country, business_id)
            VALUES ('".$address_line_1."', '".$address_street."','".$address_city."',
            '".$address_state."','".$postal_zip."','".$country."', '".$get_bid."')";
        
        $result_add_business_address = mysqli_query($conn, $query_add_business_address);
        
        echo $query_add_business_address;
        
        if($query_add_business && $query_add_business_address){
            echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
            header("location:../dynamic-admin.php");
        }
        else{
            echo "ISSUE IN QUERY";
        }
    }


?>

