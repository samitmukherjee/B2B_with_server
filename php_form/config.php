<?php
    
//     $servername = "localhost";
//     $username = "root";
//     $password = "1234";
//     $db = "b2b";
//     // Create connection
//     mysqli_connect($servername, $username, $password);
//     mysqli_select_db($db);
//     // Check connection
//     // if ($conn->connect_error) {
//     // die("Connection failed: " . $conn->connect_error);
//     // }

//     // Create database
//     // $sql = "CREATE DATABASE b2b";
//     // if ($conn->query($sql) === TRUE) {
//     // echo "Database created successfully";
//     // } else {
//     // echo "Error creating database: " . $conn->error;
//     // }

//     //  BELOW IS FOR MANAS

// // $conn->close();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "b2b_updated_with_admin_2";

    $conn = mysqli_connect($servername, $username, $password, $db);

    // if(!$conn){
    //     echo "<br><br> UNABLE TO CONNECT TO THE DATABASE";
    // }

    // else{
    //     echo "<br><br> CONNECTED TO THE DATABASE B2B";
    // }

?>