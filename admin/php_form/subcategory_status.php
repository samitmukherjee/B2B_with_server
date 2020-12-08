<?php

    include("config.php");

    $code = $_POST['code'];
    $c_id = $_POST['subcategory_id']; 

    // echo $code;
    // echo $c_id;
    
    if($code == 0){
        $sql = "UPDATE subcategory_table SET status = $code WHERE subcategory_id = $c_id";
        $result = mysqli_query($conn,$sql);
        echo "0: ".$sql;
    }else{
        $sql = "UPDATE subcategory_table SET status = $code WHERE subcategory_id = $c_id";
        $result = mysqli_query($conn,$sql);
        echo "1: ".$sql;
    }
 
?>