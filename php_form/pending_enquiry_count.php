<?php
    include("config.php");
    $business_id = $_POST['business_id'];
    // echo $business_id;
    $sql1 = "SELECT COUNT(enquiry_id) FROM enquiry_details WHERE enquiry_status = '0' AND business_id = $business_id";
    // echo $sql1;
    $result1 = mysqli_query($conn, $sql1);
    $count_ids = mysqli_fetch_assoc($result1);
    $count = implode($count_ids);
    echo $count;
?>