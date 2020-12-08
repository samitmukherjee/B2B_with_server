<?php

    include ("config.php");

    //$check_product = 0;
    date_default_timezone_set('Asia/Kolkata');

    // global $check_product;

    if(isset($_POST['product_catogory'])){

        $query_show_products = "SELECT * FROM product_details";
        $result_show_products = mysqli_query($conn,$query_show_products);

        $check_product = "YES";
        while($product=mysqli_fetch_assoc($result_show_products)){
            $check_product = 1;
        }
    }




?>