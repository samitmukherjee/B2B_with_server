<?php

    include("./config.php");

    // echo "heloo";
    if(isset($_POST['change_password']) && (!empty($_POST['new_password']) && !empty($_POST['confirm_password']))){
        if($_POST['new_password'] == $_POST['confirm_password']){
            $password_in_db = $_POST['confirm_password'];
            $password_in_db = password_hash($password_in_db, PASSWORD_DEFAULT);

            if($_POST['user_type'] == 'owner'){
                echo "owner";
                $business_id = $_POST['business_id'];
                $sql = "UPDATE business_details SET business_password= '$password_in_db' WHERE  business_id = '$business_id'";
                echo $sql;
                $result = mysqli_query($conn,$sql);
                echo '<script>alert("Password change successfull")</script>';
                header("location:../dynamic-dashboard.php");
            }else{
                echo 'executive';
                $executive_id = $_POST['business_id'];
                $sql = "UPDATE business_executive SET executive_password= '$password_in_db' WHERE  executive_id = '$executive_id'";
                echo $sql;
                $result = mysqli_query($conn,$sql);
                echo '<script>alert("Password change successfull")</script>';
                header("location:../dynamic-dashboard.php");
            }
        }else{
            header("location:../dynamic-dashboard.php?Password do not match");
        }       
    }else{
        header("location:../dynamic-dashboard.php?Password cannot be empty");
    }


?>