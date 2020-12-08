<?php
include("config.php");

$business_new_count = $_POST['business_new_count'];

$sql = "SELECT * FROM business_details INNER JOIN business_details_business_address ON business_details.business_id = business_details_business_address.business_id WHERE verification_status = '0' LIMIT ".$business_new_count." ";
//echo $sql;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr id="<?php $row['business_id'] ?>"></tr>
        <!-- $business_id = $row['business_id']; -->
        <td><?php echo $row['legal_name'] ?></td>
        <td><?php echo $row['address_line_1'], $row['address_street'], $row['address_city'], $row['address_state'], $row['country'], $row['postal_zip']?></td>
        <td><?php echo $row['contact_no']?></td>
        <td><?php echo $row['business_email_id']?></td>
        <td><?php echo $row['pan_no']?></td>
        <td><?php echo $row['gst_no']?></td>
        <input type='hidden' id='business_id' value=<?php $row['business_id']?>></input>
        <!-- $image_path = $row['bank_details']; -->

        <td style="height:200px; width:200px;">
            <embed src="./.<?php echo $row['bank_details']?>"/>
        </td>

        <td><button id=<?php  echo $row['business_id'] ?> href="#" data-role="update" data-is=<?php  echo $row['business_id'] ?> >Verify</button></td>														
    </tr>
    <?php
    }
}else{
    echo "No business to verify";
}
?>