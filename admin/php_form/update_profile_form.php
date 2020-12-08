<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['admin_submit_button'])){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $email_id = $_POST['email_id'];
        $profile_picture = $_FILES['profile_picture'];
        $admin_id = $_POST['admin_id'];

        echo $admin_id;
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

        // if($_FILES['profile_picture']['size'] != 0){

        //     $file_name = $_FILES['profile_picture']['name'];
        //     $file_temp_name = $_FILES['profile_picture']['tmp_name'];
        //     $file_size = $_FILES['profile_picture']['size'];
        //     $file_error = $_FILES['profile_picture']['error'];
        //     $file_type = $_FILES['profile_picture']['type'];

        //     $file_ext = explode('.', $file_name);
        //     $file_actual_extension = strtolower(end($file_ext));

        //     $allowed = array('jpg', 'jpeg', 'pdf', 'png', 'docs');
            
        //     if(in_array($file_actual_extension, $allowed)){
        //         if($file_error === 0){
        //             if($file_size < 1000000){
        //                 $file_name_new = $first_name.".".uniqid('', true).".".$file_actual_extension;
        //                 $file_dest = '../../uploads/admin_details/admin_profile_picture/'.$file_name_new;
        //                 $file_dest_1 = './uploads/admin_details/admin_profile_picture/'.$file_name_new;
        //                 move_uploaded_file($file_temp_name, $file_dest);
        //             }else {
        //                 echo "Your file is too big";
        //             }
        //         } else {
        //             echo "There was an error uploading your file";
        //         }
        //     } else {
        //         echo "You cannot upload file of this type";
        //     }

            // BANK DETAILS UPLOAD
            $profile_picture_name       = $_FILES['profile_picture']['name'];  
            $profile_picture_temp_name  = $_FILES['profile_picture']['tmp_name'];
            $uploadOk_1 = 1;
            $profile_picture_file_type = strtolower(pathinfo($profile_picture_name,PATHINFO_EXTENSION));
            if(isset($profile_picture_name) and !empty($profile_picture_name)){
                $location = '../../uploads/admin_details/admin_profile_picture/';
                $location_1 = './uploads/admin_details/admin_profile_picture/';

                if($uploadOk_1 == 0){
                    echo "Unable to upload file";
                } else{    
                    // echo 'test1';
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
        // }
        
         
        if($_FILES['profile_picture']['size'] != 0){
            echo "TEST";
            $query_update_profile = " UPDATE admin_details SET first_name='".$first_name."', last_name='".$last_name."', contact_no='".$contact_no."', admin_email_id='".$email_id."', admin_profile_picture='".$profile_picture."' WHERE admin_id = $admin_id ";
            echo $query_update_profile;
        }else{
            // echo "TEST2";
            $query_update_profile = " UPDATE admin_details SET first_name='".$first_name."', last_name='".$last_name."', contact_no='".$contact_no."', admin_email_id='".$email_id."' WHERE admin_id = $admin_id ";
        }
            // echo $query_add_business; 

            $result_update_profile = mysqli_query($conn, $query_update_profile);
            // $get_bid = mysqli_insert_id($conn);
            
            if($query_update_profile){
                echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
                header("location:../dynamic-admin.php");
            }
            else{
                echo "ISSUE IN QUERY";
            }

    }

?>

