<?php

    include("config.php");

    $code = $_POST['code'];
    $d_id = $_POST['designation_id']; 

    echo $code;
    echo'<br>';
    echo $d_id;
    
    if($code == 0){
        $sql = "UPDATE designation_table SET status = $code WHERE designation_id = $d_id";
        $result = mysqli_query($conn,$sql);
        echo "1: ".$sql;
    }else{
        $sql = "UPDATE designation_table SET status = $code WHERE designation_id = $d_id";
        $result = mysqli_query($conn,$sql);
        echo "2: ".$sql;
    }
 
?>