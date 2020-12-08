<?php
	include("config.php");
    $sql1 = "SELECT COUNT(business_id) FROM business_details WHERE verification_status = '0'";
    $result1 = mysqli_query($conn, $sql1);
    $count_ids = mysqli_fetch_assoc($result1);
    $count = implode($count_ids);
    echo $count;
?>