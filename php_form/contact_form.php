<?php

    include ("config.php");

    date_default_timezone_set('Asia/Kolkata');

    if(isset($_POST['guest_name'])
    && isset($_POST['guest_email'])
    && isset($_POST['guest_phone'])
    && isset($_POST['guest_message'])){
    
        $guest_name = $_POST['guest_name'];
        $guest_email = $_POST['guest_email'];
        $guest_phone = $_POST['guest_phone'];
        $guest_message = $_POST['guest_message'];
        

        $query_contact_us = "INSERT INTO contact_us (guest_name, guest_email, guest_phone, guest_message) VALUES ('".$guest_name."', '".$guest_email."', '".$guest_phone."', '".$guest_message."')";
        $result_contact_us = mysqli_query($conn, $query_contact_us);

        header("location:../home-two.php");

        echo $query_contact_us;

    }
    else{
        header("location:../contact.php");
    }
?>