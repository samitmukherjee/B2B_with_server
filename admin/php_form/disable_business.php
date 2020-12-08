<?php
    include("config.php");
    // Takes raw data from the request
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    var_dump($data);
    //echo $json['id'];
    // Converts it into a PHP object    
    // $data = json_encode($json);
    // echo $data;
        $business_id = $data['id'];
        //echo $business_id; 
        $disable = 0;
        $sql = "UPDATE business_details SET verification_status = ".$disable." WHERE business_id = ".$business_id." ";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result){
            return 'data updated';
        } else{
            return 'Error';
        }
?>