<?php

    include("config.php");

    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['contact_no']) && isset($_POST['user_email_id']) && isset($_POST['user_password_1'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_no = $_POST['contact_no'];
        $user_email_id = $_POST['user_email_id'];
        $user_password = $_POST['user_password_1'];
        $accept = $_POST['accept'];

        $password_in_db = password_hash($user_password, PASSWORD_DEFAULT); 

        if($accept == 'on'){
            $sql = "INSERT INTO user_details (first_name, last_name, phone_no,
                user_email_id, user_password) VALUES ('".$first_name."', '".$last_name."', '".$contact_no."', '".$user_email_id."', '".$password_in_db."')";
            mysqli_query($conn,$sql);
            header("location:../login.php?x=Success");
        } else {
            header("location:../signup.php?x=*Accept Terms and Condition in order to Signup");
        }
    }

?>