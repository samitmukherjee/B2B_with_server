<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['unit_btn'])){

        $unit = $_POST['unit'];

        $query_add_unit = "INSERT INTO unit_table (unit_name) VALUES ('".$unit."')";
        
        $result_add_unit = mysqli_query($conn, $query_add_unit);
        //echo '<script>alert("Successfully uploaded unit.")</script>';
        
        header("location:../dynamic-admin.php");
        
    }
?>