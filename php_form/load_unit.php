<?php

    include("config.php");

    $sql = "SELECT * FROM unit_table";
    // echo $sql;
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){ 
        ?>
        <option value="none" selected disabled hidden>Select an Option</option>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <option><?php echo $row['unit_name'] ?></option>
        <?php
        }
    } else{
        echo 'no category avilable';
    }

?>