<?php

    include("./config.php");
    if(isset($_POST['change_password'])){
        if($_POST['new_password'] == $_POST['confirm_password'] && !empty($_POST['new_password']) && !empty($_POST['confirm_password'])){
            $admin_id = $_POST['admin_id'];

            $password_in_db = $_POST['confirm_password'];
            $password_in_db = password_hash($password_in_db, PASSWORD_DEFAULT);

            $sql = "UPDATE admin_details SET admin_password= '$password_in_db' WHERE admin_id = '$admin_id'";
            $result = mysqli_query($conn,$sql);
            
           
            header("location:../dynamic-admin.php");
            echo '<script>alert("Password change successfull")</script>';
        }else{
            header("location:../dynamic-admin.php?");
            echo '<script>alert("Password do not match or cannot be empty")</script>';
        }
    }
?>