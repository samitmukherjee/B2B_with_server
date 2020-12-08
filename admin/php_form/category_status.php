<?php

    include("config.php");

    $code = $_POST['code'];
    $c_id = $_POST['id']; 

    // echo $code;
    // echo $c_id;
    
    if($code == 0){
        $sql = "UPDATE category_table SET status = $code WHERE category_id = $c_id";
        $result = mysqli_query($conn,$sql);
        // echo $sql;
    }else{
        $sql = "UPDATE category_table SET status = $code WHERE category_id = $c_id";
        $result = mysqli_query($conn,$sql);
    }
 
?>