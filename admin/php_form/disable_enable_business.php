<?php
    include("config.php");

    $code = $_POST['code'];
    $business_id = $_POST['business_id']; 
    
    if($code == 0){
        $sql = "UPDATE business_details SET business_status = $code WHERE business_id = $business_id";
        $result = mysqli_query($conn,$sql);
        // echo $sql;
    }else{
        $sql = "UPDATE business_details SET business_status = $code WHERE business_id = $business_id";
        $result = mysqli_query($conn,$sql);
    }
?>