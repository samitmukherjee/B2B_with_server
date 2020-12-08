<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php

    include("config.php");
    if(isset($_POST['query'])){
        $category = $_POST['query'];
        $output = '';
        $query = "SELECT * FROM category_table WHERE category_name LIKE '%".$category."%'";
        // echo $query;
        $result = mysqli_query($conn, $query);
        $output = '<ul class="w3-ul w3-hoverable">';
        if(mysqli_num_rows($result) > 0){
            while( $row = mysqli_fetch_array($result)){
                $output .= '<li style="margin-top:8px; border: 1px light #3867D6; border-radius: 2px;">'.$row['category_name'].'</li>';
            }
        } else{
            $output .= '<li>Category not found</li>';
        }

        $output .= '</ul>';
        echo $output;
        
    } else{
        echo "not reaching here";
    }

?>