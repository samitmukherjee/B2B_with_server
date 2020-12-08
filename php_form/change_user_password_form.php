<?php

    include("./config.php");
    if(isset($_POST['change_password'])){
        if($_POST['new_password'] == $_POST['confirm_password'] && !empty($_POST['new_password']) && !empty($_POST['confirm_password'])){
            $user_id = $_POST['user_id']; 
            
            $password_in_db = $_POST['confirm_password'];
            $password_in_db = password_hash($password_in_db, PASSWORD_DEFAULT);

            $sql = "UPDATE user_details SET user_password= '$password_in_db' WHERE  user_id = '$user_id'";
            $result = mysqli_query($conn,$sql);

            header("location:../dynamic-user-dashboard.php");
            echo '<script>alert("Password change successfull")</script>';

        }else{
            header("location:../dynamic-user-dashboard.php?");
            echo '<script>alert("Password do not match")</script>';
        }
    }
?>