<?php

    include("config.php");

    $code = $_POST['code'];
    $u_id = $_POST['id']; 

    echo $code;
    echo $u_id;
    
    if($code == 0){
        $sql = "UPDATE unit_table SET status = $code WHERE unit_id = $u_id";
        $result = mysqli_query($conn,$sql);
        echo $sql;
    }else{
        $sql = "UPDATE unit_table SET status = $code WHERE unit_id = $u_id";
        $result = mysqli_query($conn,$sql);
        echo "1: ".$sql;
    }
 
?>