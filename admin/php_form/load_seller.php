<?php

    include("config.php");

    $sql = "SELECT * FROM business_details WHERE verification_status = 1";
    // echo $sql;
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){ 
        ?>
        <option value="none" selected disabled hidden>Select an Option</option>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <option><?php echo $row['legal_name'] ?></option>
        <?php
        }
    } else{
        echo 'no category avilable';
    }

?>