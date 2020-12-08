<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['designation_btn'])){

        $designation = $_POST['designation'];

        $query_add_designation = "INSERT INTO designation_table (designation_name) VALUES ('".$designation."')";
        
        $result_add_designation = mysqli_query($conn, $query_add_designation);
        //echo '<script>alert("Successfully uploaded designation.")</script>';
        
        header("location:../dynamic-admin.php");
        
    }
?>