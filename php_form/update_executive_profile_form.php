<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['submit_button'])){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $email_id = $_POST['email_id'];
        $profile_picture = $_FILES['profile_picture'];
        $executive_id = $_POST['executive_id'];

        // echo $business_id;
        // echo $profile_picture;
        echo $first_name;
        echo '<br>';
        echo $last_name;
        echo '<br>';
        echo $contact_no;
        echo '<br>';
        echo $email_id;
        echo '<br>';
        print_r ($profile_picture);

        if($_FILES['profile_picture']['size'] != 0){

            $file_name = $_FILES['profile_picture']['name'];
            $file_temp_name = $_FILES['profile_picture']['tmp_name'];
            $file_size = $_FILES['profile_picture']['size'];
            $file_error = $_FILES['profile_picture']['error'];
            $file_type = $_FILES['profile_picture']['type'];

            $file_ext = explode('.', $file_name);
            $file_actual_extension = strtolower(end($file_ext));

            $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
            
            if(in_array($file_actual_extension, $allowed)){
                if($file_error === 0){
                    if($file_size < 1000000){
                        $file_name_new = $first_name.".".uniqid('', true).".".$file_actual_extension;
                        $file_dest = '../uploads/business_details/business_executive_profile/'.$file_name_new;
                        $file_dest_1 = './uploads/business_details/business_executive_profile/'.$file_name_new;
                        move_uploaded_file($file_temp_name, $file_dest);
                    }else {
                        echo "Your file is too big";
                    }
                } else {
                    echo "There was an error uploading your file";
                }
            } else {
                echo "You cannot upload file of this type";
            }

            // BANK DETAILS UPLOAD
            $profile_picture_name       = $_FILES['profile_picture']['name'];  
            $profile_picture_temp_name  = $_FILES['profile_picture']['tmp_name'];
            $uploadOk_1 = 1;
            $profile_picture_file_type = strtolower(pathinfo($profile_picture_name,PATHINFO_EXTENSION));
            if(isset($profile_picture_name) and !empty($profile_picture_name)){
                $location = '../uploads/business_details/business_executive_profile/';
                $location_1 = './uploads/business_details/business_executive_profile/';

                if($uploadOk_1 == 0){
                    echo "Unable to upload file";
                } else{    
                    if(move_uploaded_file($profile_picture_temp_name, $location.$first_name.'_'.time().'.'.$profile_picture_file_type)){
                        $profile_picture = ''.$location_1.''.$first_name.'_'.time().'.'.$profile_picture_file_type.'';
                    }
                    else{
                        echo 'Error Uploading the file';
                    }
                }
            }
            else {
                echo 'You should select a file to upload !!';
            }
        }
        
         
        // if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['contact_no']) || isset($_POST['email_id'])){
        //     // echo "TEST";
        //     $query_update_executive_profile = " UPDATE business_executive SET executive_first_name='".$first_name."', executive_last_name='".$last_name."',
        //                                         executive_contact_no='".$contact_no."', executive_email_id='".$email_id."' WHERE executive_id = '".$executive_id."' ";
        //     echo $query_update_executive_profile;
        // } 

        if($_FILES['profile_picture']['size'] != 0){

            $query_update_executive_profile = " UPDATE business_executive SET executive_first_name='".$first_name."', executive_last_name='".$last_name."',
                                                executive_contact_no='".$contact_no."', executive_email_id='".$email_id."', profile_picture='".$file_dest_1."'
                                                WHERE executive_id = '".$executive_id."' ";
            echo $query_update_executive_profile;

        }elseif($_FILES['profile_picture']['size'] == 0){

            $query_update_executive_profile = " UPDATE business_executive SET executive_first_name='".$first_name."', executive_last_name='".$last_name."',
                                                executive_contact_no='".$contact_no."', executive_email_id='".$email_id."'
                                                WHERE executive_id = '".$executive_id."' ";
            echo $query_update_executive_profile;

        }

            $result_update_executive_profile = mysqli_query($conn, $query_update_executive_profile);
            
            if($query_update_executive_profile){
                echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
                header("location:../dynamic-dashboard.php");
            }
            else{
                echo "ISSUE IN QUERY";
            }

    }

?>

