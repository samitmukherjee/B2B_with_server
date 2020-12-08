<?php
    include("config.php");

        $db = mysqli_connect('localhost', 'root', '', 'b2b_updated_with_admin');

        $query = "SELECT * FROM business_details";
        
        $results = mysqli_query($db, $query);

        $rows = mysqli_fetch_assoc($results); 

?>