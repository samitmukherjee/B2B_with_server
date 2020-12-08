<?php

    include("config.php");

    $code = $_POST['code'];
    $c_id = $_POST['id']; 

    // echo $code;
    // echo $c_id;
    
    if($code == 0){
        $sql = "UPDATE product_details SET product_status = $code WHERE product_id = $c_id";
        $result = mysqli_query($conn,$sql);
        // echo $sql;
    }else{
        $sql = "UPDATE product_details SET product_status = $code WHERE product_id = $c_id";
        $result = mysqli_query($conn,$sql);
    }
 
?>