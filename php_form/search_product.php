<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php

    include("config.php");
    if(isset($_POST['query'])){
        $product = $_POST['query'];
        $output = '';
        $query = "SELECT DISTINCT product_name FROM product_details WHERE product_name LIKE '".$product."%' AND product_details.product_status = 1 LIMIT 5";
        // echo $query;
        $result = mysqli_query($conn, $query);
        $output = '<ul class="w3-ul w3-hoverable">';
        if(mysqli_num_rows($result) > 0){
            while( $row = mysqli_fetch_array($result)){
                $output .= '<li id="products_list_dropdown" style="margin-top:8px; border: 1px light #3867D6; border-radius: 2px;">'.$row['product_name'].'</li>';
            }
        } else{
            $output .= '<li style="pointer-events:none">No Products found</li>';
        }

        $output .= '</ul>';
        echo $output;
        
    } else{
        echo "not reaching here";
    }

?>