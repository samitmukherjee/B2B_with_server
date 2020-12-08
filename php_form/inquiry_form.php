<?php

session_start();
error_reporting(0);
include ("config.php");

date_default_timezone_set('Asia/Kolkata');


// echo "executive: ".$executive_email;
// echo "business:  ".$business_email;

if(isset($_POST['quantity'])
&& isset($_POST['unit'])
&& isset($_POST['message_body'])
&& isset($_POST['enquire'])
&& isset($_SESSION['user'])){

    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $message_body = $_POST['message_body'];
    // $attachments = $_POST['attachments'];
    $business_id = $_POST['business_id'];
    $product_id = $_POST['product_id'];
    $user_email = $_POST['user_email'];
    $executive_email = $_POST["executive_email_id"];
    $business_email = $_POST["business_email_id"];
    $productName = $_POST['productName'];
    
    // echo "PID: ".$product_id."";
    // echo "BID: ".$business_id."";
    // echo "UEM: ".$user_email."";


    $enquiry_attachment_name = $_FILES['attachments']['name'];  
    $enquiry_attachment_temp_name  = $_FILES['attachments']['tmp_name'];
    $uploadOk = 1;
    $enquiry_attachment_name_file_type = strtolower(pathinfo($enquiry_attachment_name,PATHINFO_EXTENSION));
    if(isset($enquiry_attachment_name) and !empty($enquiry_attachment_name)){
        $location = '../uploads/enquiry/attachments/';
        $location_attachements = 'uploads/enquiry/attachments/';

        if($enquiry_attachment_name_file_type != "pdf" && $enquiry_attachment_name_file_type != "doc" && $enquiry_attachment_name_file_type != "png" && $enquiry_attachment_name_file_type != "jpg" && $enquiry_attachment_name_file_type != "jpeg") {
            echo "Sorry, only PDF,DOC, JPG, JPEG & PNG files are allowed.";
            $uploadOk = 0;
        }
        if ($_FILES["attachments"]["size"] > 10485760) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if($uploadOk == 0){
            echo "Unable to upload file";
        }
        else{                
            if(move_uploaded_file($enquiry_attachment_temp_name, $location.$product_id.'_enq_'.time().'.'.$enquiry_attachment_name_file_type)){
                echo 'File uploaded successfully<br>
                File Name: '.$location.''.$product_id.'_enq_'.time().'.'.$enquiry_attachment_name_file_type.'<br>
                File Size: '.$_FILES["attachments"]["size"].'
                Time: '.time().'<br>';
                $attachments = ''.$location_attachements.''.$product_id.'_enq_'.time().'.'.$enquiry_attachment_name_file_type.'';
            }
            else{
                echo 'Error Uploading the file';
            }
        }
    }
    else {
        // echo 'You should select a file to upload !!';
    }

    $query_get_user_id = "SELECT user_id FROM user_details WHERE user_email_id = '$user_email' ";
    $result_get_user_id = mysqli_query($conn, $query_get_user_id);

    $row_user = mysqli_fetch_assoc($result_get_user_id);
    $user_id = $row_user['user_id'];

    $query_get_unit_id = "SELECT unit_id FROM unit_table WHERE unit_name = '$unit' ";
    $result_get_unit_id = mysqli_query($conn, $query_get_unit_id);

    $row_unit_id = mysqli_fetch_assoc($result_get_unit_id);

    $unit = $row_unit_id['unit_id'];



    $query_enquiry = "INSERT INTO enquiry_details (product_unit, product_quantity, 
            enquiry_message, enquiry_attachment,user_id,  product_id, business_id) 
            VALUES ('".$unit."', '".$quantity."', '".$message_body."', '".$attachments."',
            '".$user_id."', '".$product_id."', '".$business_id."')";

    $result_enquiry = mysqli_query($conn, $query_enquiry);

    $last_id = mysqli_insert_id($conn);
    // echo "last enquiry id: ". $last_id;
    // $message1 = $user_email." has sent you an enquiry for ".$quantity." ".$unit." ".$productName;

    // echo $query_enquiry;

    // echo $message_body;

    $enquiry_message1 = "INSERT INTO message_details (sender,receiver,message_body,enquiry_id) VALUES ('".$user_email."','".$business_email."','".$message_body."','".$last_id."')";
    //$enquiry_message2 = "INSERT INTO message_details (sender,receiver,message_body,enquiry_id) VALUES ('".$user_email."','".$business_email."','".$message1."','".$last_id."'//)";
    // echo $enquiry_message;
    // $result_message1 = mysqli_query($conn, $enquiry_message1);
    $result_message1 = mysqli_query($conn, $enquiry_message1); 
    // echo "<script>alert('Inquiry Submitted')</script>";
    // header("location:../home-two.php");

    echo "<script>
            alert('Inquiry Submitted');
            window.location.href='../home-two.php';
            </script>";

    // echo "<script>alert('Inquiry Submitted')</script>";

    // echo $enquiry_message1;
    // echo $query_enquiry;
    // echo $query_get_user_id;

}
else{
    header("location:../login.php?x= Please Login First");
}

?>