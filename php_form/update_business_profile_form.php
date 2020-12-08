<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['submit_button'])){

        $business_id = $_POST['business_id'];
        $business_email = $_POST['business_email'];
        $personal_name = $_POST['personal_name'];
        $personal_number = $_POST['personal_number'];
        $personal_email_id = $_POST['personal_email_id'];
        $personal_address_line_1 = $_POST['personal_address_line_1'];
        $personal_address_line_2 = $_POST['personal_address_line_2'];
        $personal_profile_image = $_FILES['personal_profile_image'];

        echo $business_email;
        echo '<br>';
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
        // $business_password = $_POST['business_password'];
        // $confirm_password = $_POST['business_password'];
        $address_line_1 = $_POST['address_line_1'];
        $address_street = $_POST['address_street'];
        $address_city = $_POST['address_city'];
        $address_state = $_POST['address_state'];
        $postal_zip = $_POST['postal_zip'];
        $country = $_POST['country'];
        // $business_category_1 = $_POST['business_category_1'];
        $business_category = $_POST['business_category1'];
        // $pan_no = $_POST['pan_no'];
        // $gst_no = $_POST['gst_no'];
        // $file = $_FILES['bank_details'];

        $business_description = $_POST['business_description'];
        // print_r($business_description);
        $cover_image = $_FILES['cover_image'];
        // print_r($cover_image);

        
        // echo  "select".$business_category;
        // echo  "input".$business_category_1;

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


        // if($business_password != $confirm_password && $pan_no == $gst_no){
        //     header("location:../add-listing.php?x=*Password does not match");
        // }

        // $password_in_db = password_hash($business_password, PASSWORD_DEFAULT); 

        // profile picture UPLOAD
        $profile_picture_name       = $_FILES['personal_profile_image']['name'];  
        $profile_picture_temp_name  = $_FILES['personal_profile_image']['tmp_name'];
        $uploadOk_1 = 1;
        $profile_picture_file_type = strtolower(pathinfo($profile_picture_name,PATHINFO_EXTENSION));
        if(isset($profile_picture_name) and !empty($profile_picture_name)){
            $location = '../uploads/business_details/personal_profile_image/';
            $location_1 = './uploads/business_details/personal_profile_image/';

            if($uploadOk_1 == 0){
                echo "Unable to upload file";
            } else{    
                // echo 'test1';            
                if(move_uploaded_file($profile_picture_temp_name, $location.$legal_name.'_'.time().'.'.$profile_picture_file_type)){
                    $profile_picture = ''.$location_1.''.$legal_name.'_'.time().'.'.$profile_picture_file_type.'';
                }
                else{
                    echo 'Error Uploading the file';
                }
                // echo $profile_picture;
            }
        }
        else {
            echo 'You should select a file to upload !!';
        }

        //cover image upload
        $cover_image_name       = $_FILES['cover_image']['name'];  
        $cover_image_temp_name  = $_FILES['cover_image']['tmp_name'];
        $uploadOk_2 = 1;
        $cover_image_file_type = strtolower(pathinfo($cover_image_name,PATHINFO_EXTENSION));
        if(isset($cover_image_name) and !empty($cover_image_name)){
            $location_c = '../uploads/business_details/cover_image/';
            $location_c_1 = './uploads/business_details/cover_image/';

            if($uploadOk_2 == 0){
                echo "Unable to upload file";
            } else{    
                // echo 'test1';            
                if(move_uploaded_file($cover_image_temp_name, $location_c.$legal_name.'_'.time().'.'.$cover_image_file_type)){
                    $cover_image = ''.$location_c_1.''.$legal_name.'_'.time().'.'.$cover_image_file_type.'';
                }
                else{
                    echo 'Error Uploading the file';
                }
                // echo $profile_picture;
            }
        }
        else {
            echo 'You should select a file to upload !!';
        }

        
        // echo "File: ", $file_dest_2;

        $query_get_category_id = "SELECT category_id FROM category_table WHERE category_name = '$business_category'  ";
        $result_get_category_id = mysqli_query($conn,$query_get_category_id);

        // echo '<br>';
        // echo  "select ".$query_get_category_id;
        // echo '<br>';

        // echo $query_get_category_id;

        $row = mysqli_fetch_assoc($result_get_category_id);
        $product_category_id = $row['category_id'];

        if($_FILES['personal_profile_image']['size'] != 0 && $_FILES['cover_image']['size'] != 0){

            $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='$product_category_id',
            contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
            personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
            personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."', personal_profile_image='".$profile_picture."', 
            cover_image='".$cover_image."', business_description='".$business_description."' WHERE business_email_id = '".$business_email."' ";

        }

        elseif($_FILES['personal_profile_image']['size'] != 0 && $_FILES['cover_image']['size'] == 0){

            $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='$product_category_id',
            contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
            personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
            personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."', personal_profile_image='".$profile_picture."', 
            business_description='".$business_description."' WHERE business_email_id = '".$business_email."' ";

        }

        elseif($_FILES['personal_profile_image']['size'] == 0 && $_FILES['cover_image']['size'] != 0){

            $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='$product_category_id',
            contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
            personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
            personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."', cover_image='".$cover_image."', business_description='".$business_description."' 
            WHERE business_email_id = '".$business_email."' ";

        }

        elseif($_FILES['personal_profile_image']['size'] == 0 && $_FILES['cover_image']['size'] == 0){

            $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='$product_category_id',
            contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
            personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
            personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."', business_description='".$business_description."' 
            WHERE business_email_id = '".$business_email."' ";            

        }


        // if($_FILES['personal_profile_image']['size'] != 0){
        //     $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='".$product_category_id."',
        //     contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
        //     business_password='".$password_in_db."',personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
        //     personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."', personal_profile_image='".$file_dest_1."' WHERE business_email_id = '".$business_email."' ";
            
        //     // $result_update_business = mysqli_query($conn, $query_update_business);
        //     // echo "1";

        // }elseif($_FILES['personal_profile_image']['size'] == 0){
        //     $query_update_business = " UPDATE business_details SET legal_name='".$legal_name."',business_email_id='".$business_email_id."',business_category='".$product_category_id."',
        //     contact_no='".$contact_no."',business_tagline='".$listing_tagline."',
        //     business_password='".$password_in_db."',personal_name='".$personal_name."',personal_number='".$personal_number."',personal_email_id='".$personal_email_id."',
        //     personal_address_line_1='".$personal_address_line_1."',personal_address_line_2='".$personal_address_line_2."' WHERE business_email_id = '".$business_email."' ";
            
        //     // $result_update_business = mysqli_query($conn, $query_update_business);
        //     // echo "3";

        // }
        

        echo $query_update_business;

        $result_update_business = mysqli_query($conn, $query_update_business);
        
        $query_update_business_address = "UPDATE business_details_business_address SET address_line_1='".$address_line_1."', address_street='".$address_street."', 
        address_city='".$address_city."', address_state='".$address_state."', postal_zip='".$postal_zip."',
        country='".$country."', WHERE business_id = '".$business_id."' ";
        
        $result_update_business_address = mysqli_query($conn, $query_update_business_address);

        echo  $query_update_business_address;
        
        if($query_update_business && $query_update_business_address){
            echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
            header("location:../dynamic-dashboard.php");
        }
        else{
            echo "ISSUE IN QUERY";
        }
    }

?>

