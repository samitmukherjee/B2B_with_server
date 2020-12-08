<?php

    include("config.php");

    $code = $_POST['code'];
    $d_id = $_POST['executive_id']; 

    // echo $code;
    // echo $d_id;
    
    if($code == 0){
        $sql = "UPDATE business_executive SET executive_status = $code WHERE executive_id = $d_id";
        $result = mysqli_query($conn,$sql);
        // echo $sql;
    }else{
        $sql = "UPDATE business_executive SET executive_status = $code WHERE executive_id = $d_id";
        $result = mysqli_query($conn,$sql);
    }
 
?>