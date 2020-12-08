<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['category_btn'])){

        $category = $_POST['category'];

        $query_add_category = "INSERT INTO category_table (category_name) VALUES ('".$category."')";
        
        $result_add_category = mysqli_query($conn, $query_add_category);
        //echo '<script>alert("Successfully uploaded category.")</script>';
        
        header("location:../dynamic-admin.php");
        
    }
?>