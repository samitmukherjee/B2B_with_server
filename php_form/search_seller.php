<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php

    include("config.php");
    if(isset($_POST['query'])){
        $seller = $_POST['query'];
        $output = '';
        $query = "SELECT DISTINCT legal_name FROM business_details WHERE legal_name LIKE '".$seller."%' LIMIT 5";
        // echo $query;
        $result = mysqli_query($conn, $query);
        $output = '<ul class="w3-ul w3-hoverable">';
        if(mysqli_num_rows($result) > 0){
            while( $row = mysqli_fetch_array($result)){
                $output .= '<li id="seller_list_dropdown" style="margin-top:8px; border: 1px light #3867D6; border-radius: 2px;">'.$row['legal_name'].'</li>';
            }
        } else{
            $output .= '<li style="pointer-events:none">No Sellers found</li>';
        }

        $output .= '</ul>';
        echo $output;
        
    } else{
        echo "not reaching here";
    }

?>