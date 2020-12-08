<?php
include("config.php");
$business_id = $_POST['business_id'];

$enquiry_new_count = $_POST['enquiry_new_count'];

$sql = "SELECT enquiry_id, e1.enquiry_message, e1.enquiry_attachment, e1.enquiry_status, e1.product_unit, e1.product_quantity, e1.product_id, product_name, product_image_1 
        FROM enquiry_details e1, product_details p1 WHERE e1.product_id = p1.product_id AND e1.enquiry_status = '0' AND e1.business_id = '$business_id' LIMIT $enquiry_new_count";
echo $sql;
// echo $business_id;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['enquiry_attachment'];
        ?>
        <tr id="<?php $row['enquiry_id'] ?>"></tr>
        <td><?php echo $row['enquiry_id'] ?></td>
        <td><?php echo $row['product_name'] ?></td>
        <td>
            <img src="<?php echo $row['product_image_1']?>" style="height:200px; width:200px;"/>
        </td>
        <td><?php echo $row['product_quantity']?></td>
        <td><?php echo $row['product_unit']?></td>
        <td><?php echo $row['enquiry_message']?></td>
        <td style="height:200px; width:200px;">
        <img src="<?php echo $row['enquiry_attachment']?>" style="height:200px; width:200px;"/>
        </td>
    </tr>
    <?php
    }
}else{
    echo "No enquiry to reply";
}
?>