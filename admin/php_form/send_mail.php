<?php
session_start();
if(isset($_POST['send_email'])){
    // echo 'hello';

    $mail_to = $_POST['mail_to'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    echo $subject;


    $headers = "From: ".$_SESSION['user'];
    $txt = "You have received this email from B2b Online Marketplace"."<br><br>".$message;

    // echo $mail_to;
    // echo $message;
    // echo '<br>';
    // echo '<br>';
    // echo $headers;
    // echo '<br>';
    // echo $message;
    // echo '<br>';
    // echo $txt;

    mail($mail_to, $subject, $txt, $headers);
    header("location:../dynamic-admin.php?mail-sent");
}

?>