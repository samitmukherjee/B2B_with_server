<?php
    
    //Manas Database config
    //Samit Database config

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "b2b_updated_with_admin_2";

    //Shivam database config
    // $servername = "localhost";
    // $username = "root";
    // $password = "1234";
    // $db = "b2b_updated_with_admin_2";


    // AWS
    // $servername = "localhost:3306";
    // $username = "marketplace";
    // $password = "marketplace!@#$%";
    // $db = "manasch4_b2b_updated_with_admin";

    // manas server
    // $servername = "localhost:3306";
    // $username = "manasch4_manas40";
    // $password = "Shivam@123";
    // $db = "manasch4_b2b_updated_with_admin";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>