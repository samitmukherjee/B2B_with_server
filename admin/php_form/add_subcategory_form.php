<?php

    include("config.php");

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['category_btn'])){

        $subcategory = $_POST['subcategory'];
        $category = $_POST['category'];

        $query_category = "SELECT category_id FROM category_table WHERE category_name = '$category'";
        $result_category = mysqli_query($conn, $query_category);
        $row = mysqli_fetch_assoc($result_category);
        $category_id = $row['category_id'];

        // echo $query_category;
        // echo $category_id;
        // echo $subcategory;
        // echo $category;


        $query_add_subcategory = "INSERT INTO subcategory_table (category_id, subcategory_name) VALUES ('".$category_id."', '".$subcategory."')";
        
        $result_add_subcategory = mysqli_query($conn, $query_add_subcategory);
        //echo '<script>alert("Successfully uploaded category.")</script>';
        
        header("location:../dynamic-admin.php");
        
    }
?>