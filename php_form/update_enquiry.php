<?php

    include("config.php");
    $enquiry_id = $_POST['enquiry_id'];
    // echo $enquiry_id;

    $sql = "UPDATE enquiry_details SET enquiry_status=1 WHERE enquiry_id= $enquiry_id "; 
    echo $sql;
    $result = mysqli_query($conn,$sql);

?>