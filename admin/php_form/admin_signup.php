<?php

    include("config.php");

    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['admin_email_id']) && isset($_POST['contact_no']) && isset($_POST['admin_password'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $admin_email = $_POST['admin_email_id'];
        $contact = $_POST['contact_no'];
        $password = $_POST['admin_password'];
        $accept = $_POST['accept'];

        $password_in_db = password_hash($password, PASSWORD_DEFAULT); 

        //echo "accept: ".$accept;
        // echo $fname, $lname, $admin_email, $contact, $password;0    
        if($accept == 'on'){
            $sql = "INSERT INTO admin_details (first_name, last_name, admin_email_id, admin_password, contact_no) VALUES ('".$fname."', '".$lname."', '".$admin_email."', '".$password_in_db."', '".$contact."')";
            mysqli_query($conn,$sql);
            header("location:../login.php?x=Success");
        } else {
            header("location:../signup.php?x=*Accept Terms and Condition in order to Signup");
        }
    }

?>