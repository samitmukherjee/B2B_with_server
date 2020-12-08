<?php

    include("config.php");

    $category_name = $_POST['product_name'];

    $query_category = "SELECT category_id FROM category_table, product_details 
            WHERE product_details.product_category = category_table.category_id 
            AND product_details.product_name = '$category_name' ";
    $result1 = mysqli_query($conn, $query_category);

    echo $query_category;

    $row1 = mysqli_fetch_assoc($result1);

    $category_id = $row1['category_id'];

    $sql = "SELECT subcategory_name FROM subcategory_table WHERE status = 1 AND category_id = '$category_id' ";
    // echo $sql;
    $result = mysqli_query($conn,$sql);

    echo $sql;

    if(mysqli_num_rows($result) > 0){ 
        ?>
        <option value="none" selected disabled hidden>Select an Option</option>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <option><?php echo $row['subcategory_name'] ?></option>
        <?php
        }
    } else{
        echo 'no category avilable';
    }

?>