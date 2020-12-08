<?php
    /*session_start();
    if(empty($_SESSION['user'])){
        header("location: ./business-login.php");
    }*/
    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['add_button'])){

        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $email_id = $_POST['email_id'];
        $designation = $_POST['designation'];
        $file = $_FILES['profile_picture'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        $business_id = $_POST['business_id'];

        if($password_1 != $password_2){
            header("location:../dynamic-dashboard.php?x=*Password does not match");
        }

        $password_in_db = password_hash($password_1, PASSWORD_DEFAULT); 

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
                    // echo 'test1';            
                    if(move_uploaded_file($profile_picture_temp_name, $location.$first_name.'_'.time().'.'.$profile_picture_file_type)){
                        $file_dest_1 = ''.$location_1.''.$first_name.'_'.time().'.'.$profile_picture_file_type.'';
                    }
                    else{
                        echo 'Error Uploading the file';
                        echo $location.$first_name.'_'.time().'.'.$profile_picture_file_type;
                    }
                }
            }
            else {
                echo 'You should select a file to upload !!';
            }


        $query_get_designation_id = "SELECT designation_id FROM designation_table WHERE designation_name = '$designation' ";
        $result_get_designation_id = mysqli_query($conn, $query_get_designation_id);
        $row_get_designation_id = mysqli_fetch_assoc($result_get_designation_id);

        $designation = $row_get_designation_id['designation_id'];

        $query_add_executive = "INSERT INTO business_executive 
            (business_id, executive_first_name, executive_last_name, executive_contact_no, executive_email_id,
            executive_password, executive_designation, profile_picture) 
            VALUES  ('".$business_id."', '".$first_name."', '".$last_name."', '".$contact_no."',
            '".$email_id."', '".$password_in_db."', '".$designation."', '".$file_dest_1."')";
        
        // echo $query_add_executive;
        $result_add_executive = mysqli_query($conn, $query_add_executive);
        // echo $result_add_executive;

        header("location:../dynamic-dashboard.php");

    }
    else{
        echo "<br><br> <h1>YOU NEED TO FILL UP ALL THE DETAILS</h1>";
        //header("location:../home-two.php");
        echo '<meta http-equiv="refresh" content="1; URL=../dynamic-dashboard.php" />';
    }


?>