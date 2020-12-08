<?php
    include("config.php");

        $business_id = $_POST['business_id'];
        // echo $business_id;
        $verify = 1;
        $sql = "UPDATE business_details SET verification_status = ".$verify." WHERE business_id = ".$business_id." ";
        $result = mysqli_query($conn, $sql);
        if($result){
            return 'data updated';
        } else{
            return 'Error';
        }
?>