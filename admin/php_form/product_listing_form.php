<?php

    include ("config.php");

    date_default_timezone_set('Asia/Kolkata');

    if(isset($_POST['submit_button']) && isset($_POST['seller'])) {
        // echo $_POST['seller'];
        $seller = $_POST['seller'];

        $sql = "SELECT business_id FROM business_details WHERE legal_name = '$seller' ";
        // echo $sql;
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            $bid = mysqli_fetch_assoc($res);
            $business_id =  $bid['business_id'];
            
            // echo "test";

            // if(isset($_POST['product_name']) && isset($_POST['brand_name']) && isset($_POST['product_category']) && isset($_POST['price'])
            // && isset($_POST['unit']) && isset($_POST['product_description']) && isset($_POST['short_description']) && isset($_POST['brand_logo']) && isset($_POST['color'])
            // && isset($_POST['discount'])  && isset($_POST['qunatity']) && isset($_POST['seller']) && isset($_POST['weight']) && isset($_POST['length'])  && isset($_POST['size'])  && isset($_POST['width'])
            // && isset($_POST['height'])  && isset($_POST['product_image_1'])  && isset($_POST['product_image_2'])  && isset($_POST['product_image_3']) ){

            if(isset($_POST['product_name']) && isset($_POST['brand_name']) && isset($_POST['product_category']) && isset($_POST['price']) 
            && isset($_POST['unit']) && isset($_POST['product_description']) && isset($_POST['short_description']) && isset($_FILES['brand_logo'])
            && isset($_POST['color']) && isset($_POST['sku']) && isset($_POST['discount']) && isset($_POST['quantity']) && isset($_POST['weight']) 
            & isset($_POST['length'])  && isset($_POST['size'])  && isset($_POST['width']) && isset($_POST['height'])  && 
            isset($_FILES['product_image_1'])  && isset($_FILES['product_image_2'])  && isset($_FILES['product_image_3'])){

                // echo "test1";

                $product_name = $_POST['product_name'];
                $brand_name = $_POST['brand_name'];
                $product_category = $_POST['product_category'];
                $product_price = $_POST['price'];
                $product_unit = $_POST['unit'];
                $product_description = $_POST['product_description'];
                $short_description = $_POST['short_description'];
                // $brand_logo = $_FILES['brand_logo'];
                $color = $_POST['color'];
                $sku = $_POST['sku'];
                $discount = $_POST['discount'];
                $quantity = $_POST['quantity'];
                $weight = $_POST['weight'];
                $length = $_POST['length'];
                $size = $_POST['size'];
                $width = $_POST['width'];
                $height = $_POST['height'];
                // $product_image_1 = $_FILES['product_image_1'];
                // $product_image_2 = $_FILES['product_image_2'];
                // $product_image_3 = $_FILES['product_image_3'];

                // $product_brochure = $_FILES['product_brochure'];

                // echo $product_name;
                // echo $brand_name;
                // echo $product_category;
                // echo $product_price;
                // echo $product_unit;
                // echo $product_description;
                // echo $short_description;
                // print_r($brand_logo);
                // echo $color;
                // echo $sku;
                // echo '<br>';
                // echo $discount;
                // echo $quantity;
                // echo $weight;
                // echo $seller;
                // echo '<br>';
                // echo $length;
                // echo '<br>';
                // echo $size;
                // echo '<br>';
                // echo $width;
                // echo '<br>';
                // print_r($product_image_1);
                // echo '<br>';
                // print_r($product_image_2);
                // echo '<br>';
                // print_r($product_image_3);
                // print_r($product_brochure) ;
              
               




                $date_current = date("Y-m-d");
                $time_current = date("h:i:sa");

                // BRAND LOGO UPLOAD
                $brand_logo_name       = $_FILES['brand_logo']['name'];  
                $brand_logo_temp_name  = $_FILES['brand_logo']['tmp_name'];
                $uploadOk_1 = 1;
                $brand_logo_file_type = strtolower(pathinfo($brand_logo_name,PATHINFO_EXTENSION));
                if(isset($brand_logo_name) and !empty($brand_logo_name)){
                    $location = '../../uploads/product_details/brand_logo/';
                    $location_0 = './uploads/product_details/brand_logo/';

                    if($brand_logo_file_type != "jpg" && $brand_logo_file_type != "png" && $brand_logo_file_type != "jpeg") {
                        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                        $uploadOk_1 = 0;
                    }
                    if ($_FILES["brand_logo"]["size"] > 2097152) {
                        echo "Sorry, your file is too large.";
                        $uploadOk_1 = 0;
                    }

                    if($uploadOk_1 == 0){
                        echo "Unable to upload file";
                    }
                    else{                
                        if(move_uploaded_file($brand_logo_temp_name, $location.$brand_name.'_'.time().'.'.$brand_logo_file_type)){
                            echo 'File uploaded successfully<br>
                            File Name: '.$location.''.$brand_name.'_'.time().'.'.$brand_logo_file_type.'<br>
                            File Size: '.$_FILES["brand_logo"]["size"].'
                            Time: '.time().'<br>';
                            $brand_logo = ''.$location_0.''.$brand_name.'_'.time().'.'.$brand_logo_file_type.'';
                        }
                        else{
                            echo 'Error Uploading the file';
                        }
                    }
                }
                else {
                    echo 'You should select a file to upload !!';
                }
                // PRODUCT IMAGES UPLOAD
                // PRODUCT IMAGE 1

                $product_image_1_name       = $_FILES['product_image_1']['name'];  
                $product_image_1_temp_name  = $_FILES['product_image_1']['tmp_name'];
                $uploadOk_2 = 1;
                $product_image_1_name_file_type = strtolower(pathinfo($product_image_1_name,PATHINFO_EXTENSION));
                if(isset($product_image_1_name) and !empty($product_image_1_name)){
                    $location = '../../uploads/product_details/product_images/';
                    $location_1 = './uploads/product_details/product_images/';

                    if($product_image_1_name_file_type != "jpg" && $product_image_1_name_file_type != "png" && $product_image_1_name_file_type != "jpeg") {
                        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                        $uploadOk_2 = 0;
                    }
                    if ($_FILES["product_image_1"]["size"] > 10485760) {
                        echo "Sorry, your file is too large.";
                        $uploadOk_2 = 0;
                    }

                    if($uploadOk_2 == 0){
                        echo "Unable to upload file";
                    }
                    else{                
                        if(move_uploaded_file($product_image_1_temp_name, $location.$product_name.'_1_'.time().'.'.$product_image_1_name_file_type)){
                            echo 'File uploaded successfully<br>
                            File Name: '.$location.''.$product_name.'_1_'.time().'.'.$product_image_1_name_file_type.'<br>
                            File Size: '.$_FILES["product_image_1"]["size"].'
                            Time: '.time().'<br>';
                            $product_image_1 = ''.$location_1.''.$product_name.'_1_'.time().'.'.$product_image_1_name_file_type.'';
                        }
                        else{
                            echo 'Error Uploading the file';
                        }
                    }
                }
                else {
                    echo 'You should select a file to upload !!';
                }

                // PRODUCT IMAGE 2

                $product_image_2_name       = $_FILES['product_image_2']['name'];  
                $product_image_2_temp_name  = $_FILES['product_image_2']['tmp_name'];
                $uploadOk_3 = 1;
                $product_image_2_name_file_type = strtolower(pathinfo($product_image_2_name,PATHINFO_EXTENSION));
                if(isset($product_image_2_name) and !empty($product_image_2_name)){
                    $location = '../../uploads/product_details/product_images/';
                    $location_2 = './uploads/product_details/product_images/';

                    if($product_image_2_name_file_type != "jpg" && $product_image_2_name_file_type != "png" && $product_image_2_name_file_type != "jpeg") {
                        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                        $uploadOk_3 = 0;
                    }
                    if ($_FILES["product_image_2"]["size"] > 10485760) {
                        echo "Sorry, your file is too large.";
                        $uploadOk_3 = 0;
                    }

                    if($uploadOk_3 == 0){
                        echo "Unable to upload file";
                    }
                    else{                
                        if(move_uploaded_file($product_image_2_temp_name, $location.$product_name.'_2_'.time().'.'.$product_image_2_name_file_type)){
                            echo 'File uploaded successfully<br>
                            File Name: '.$location.''.$product_name.'_2_'.time().'.'.$product_image_2_name_file_type.'<br>
                            File Size: '.$_FILES["product_image_2"]["size"].'
                            Time: '.time().'<br>';
                            $product_image_2 = ''.$location_2.''.$product_name.'_2_'.time().'.'.$product_image_2_name_file_type.'';
                        }
                        else{
                            echo 'Error Uploading the file';
                        }
                    }
                }
                else {
                    echo 'You should select a file to upload !!';
                }

                // PRODUCT IMAGE 3

                $product_image_3_name       = $_FILES['product_image_3']['name'];  
                $product_image_3_temp_name  = $_FILES['product_image_3']['tmp_name'];
                $uploadOk_4 = 1;
                $product_image_3_name_file_type = strtolower(pathinfo($product_image_3_name,PATHINFO_EXTENSION));
                if(isset($product_image_3_name) and !empty($product_image_3_name)){
                    $location = '../../uploads/product_details/product_images/';
                    $location_3 = './uploads/product_details/product_images/';

                    if($product_image_3_name_file_type != "jpg" && $product_image_3_name_file_type != "png" && $product_image_3_name_file_type != "jpeg") {
                        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                        $uploadOk_4 = 0;
                    }
                    if ($_FILES["product_image_3"]["size"] > 10485760) {
                        echo "Sorry, your file is too large.";
                        $uploadOk_4 = 0;
                    }

                    if($uploadOk_4 == 0){
                        echo "Unable to upload file";
                    }
                    else{                
                        if(move_uploaded_file($product_image_3_temp_name, $location.$product_name.'_3_'.time().'.'.$product_image_3_name_file_type)){
                            echo 'File uploaded successfully<br>
                            File Name: '.$location.''.$product_name.'_3_'.time().'.'.$product_image_3_name_file_type.'<br>
                            File Size: '.$_FILES["product_image_3"]["size"].'
                            Time: '.time().'<br>';
                            $product_image_3 = ''.$location_3.''.$product_name.'_3_'.time().'.'.$product_image_3_name_file_type.'';
                        }
                        else{
                            echo 'Error Uploading the file';
                        }
                    }
                }
                else {
                    echo 'You should select a file to upload !!';
                }

                // PRODUCT BROCHURE UPLOAD

                $product_brochure_name       = $_FILES['product_brochure']['name'];  
                $product_brochure_temp_name  = $_FILES['product_brochure']['tmp_name'];
                $uploadOk_5 = 1;
                $product_brochure_name_file_type = strtolower(pathinfo($product_brochure_name,PATHINFO_EXTENSION));
                if(isset($product_brochure_name) and !empty($product_brochure_name)){
                    $location = '../../uploads/product_details/product_brochure/';
                    $location_4 = './uploads/product_details/product_brochure/';

                    if($product_brochure_name_file_type != "jpg" && $product_brochure_name_file_type != "png" && $product_brochure_name_file_type != "jpeg" && $product_brochure_name_file_type != "pdf" ) {
                        echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
                        $uploadOk_5 = 0;
                    }
                    if ($_FILES["product_brochure"]["size"] > 26214400) {
                        echo "Sorry, your file is too large.";
                        $uploadOk_5 = 0;
                    }

                    if($uploadOk_5 == 0){
                        echo "Unable to upload file";
                    }
                    else{                
                        if(move_uploaded_file($product_brochure_temp_name, $location.$product_name.'_brochure_'.time().'.'.$product_brochure_name_file_type)){
                            echo 'File uploaded successfully<br>
                            File Name: '.$location.''.$product_name.'_brochure_'.time().'.'.$product_brochure_name_file_type.'<br>
                            File Size: '.$_FILES["product_brochure"]["size"].'
                            Time: '.time().'<br>';
                            $product_brochure = ''.$location_4.''.$product_name.'_brochure_'.time().'.'.$product_brochure_name_file_type.'';
                        }
                        else{
                            echo 'Error Uploading the file';
                        }
                    }
                }
                else {
                    echo 'You should select a file to upload !!';
                }
                        

                if(!$conn){
                    echo "<br><br> UNABLE TO CONNECT TO THE DATABASE";
                }

                else{
                    // echo "<br><br> CONNECT TO THE DATABASE B2B";

                    $query_get_subcategory_id = "SELECT subcategory_id FROM subcategory_table WHERE subcategory_name = '$product_category'  ";
                    $result_get_subcategory_id = mysqli_query($conn,$query_get_subcategory_id);

                    // echo $query_get_subcategory_id;

                    $row = mysqli_fetch_assoc($result_get_subcategory_id);
                    $product_category_id = $row['subcategory_id'];
                    // echo "gello".$id."  "; 

                    $query_add_product = "INSERT INTO product_details 
                    (business_id, product_description, product_name, brand_name, product_category, product_price, product_unit, company_logo, product_image_1,
                    product_brochure, product_image_2, product_image_3, color, discount, quantity, size, weight, length, width, height, short_description) 
                    VALUES  ('".$business_id."','".$product_description."', '".$product_name."','".$brand_name."', '".$product_category_id."', '".$product_price."',
                    '".$product_unit."','".$brand_logo."','".$product_image_1."','".$product_brochure."','".$product_image_2."', '".$product_image_3."',
                    '".$color."','".$discount."','".$quantity."','".$size."','".$weight."','".$length."','".$width."','".$height."','".$short_description."')";
                
                    echo $query_add_product;
                    $result_add_product = mysqli_query($conn, $query_add_product);

                    if($query_add_product){
                        echo "<br>QUERY EXECUTED SUCCESSFULLY!!<br>";
                        header("location: ../dynamic-admin.php");
                    }
                    else{
                        echo "ISSUE IN QUERY";
                    }
                }

            }else{
                echo "<br><br> <h1>YOU NEED TO FILL UP ALL THE DETAILS</h1>";
                 header("location: ../dynamic-admin.php");
                // echo '<meta http-equiv="refresh" content="1; URL=../product-listing.php" />';
            }

        }
    } else{
        echo 'something is wrong';
    }

?>