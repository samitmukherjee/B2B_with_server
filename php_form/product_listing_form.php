<?php

    include ("config.php");

    if(isset($_POST['submit_button'])){

        $product_name = $_POST['product_name'];
        $brand_name = $_POST['brand_name'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];
        $product_unit = $_POST['product_unit'];
        $product_description = $_POST['product_description'];
        $key_words = $_POST['key_words'];
        // $company_logo = $_POST['company_logo'];
        // $product_images = $_POST['product_images'];
        // $product_brochure = $_POST['product_brochure'];

        $product_id = 2;

        $business_id = 123;
        $business_type = "Aerospace Industry";

        $company_logo_name       = $_FILES['company_logo']['name'];  
        $company_logo_temp_name  = $_FILES['company_logo']['tmp_name'];
        if(isset($company_logo_name) and !empty($company_logo_name)){
            $location = '../uploads/product_details/company_logo/';      
            if(move_uploaded_file($company_logo_temp_name, $location.$company_logo_name)){
                echo 'File uploaded successfully<br>
                File Name: '.$location.''.$company_logo_name.'<br>';
                $company_logo = $location.$company_logo_name;
            }
        } else {
            echo 'You should select a file to upload !!';
        }

        $product_images_name       = $_FILES['product_images']['name'];  
        $product_images_temp_name  = $_FILES['product_images']['tmp_name'];
        if(isset($product_images_name) and !empty($product_images_name)){
            $location = '../uploads/product_details/product_images/';      
            if(move_uploaded_file($product_images_temp_name, $location.$product_images_name)){
                echo 'File uploaded successfully<br>
                File Name: '.$location.''.$product_images_name.'<br>';
                $product_images = $location.$product_images_name;
            }
        } else {
            echo 'You should select a file to upload !!';
        }

        $product_brochure_name       = $_FILES['product_brochure']['name'];  
        $product_brochure_temp_name  = $_FILES['product_brochure']['tmp_name'];
        if(isset($product_brochure_name) and !empty($product_brochure_name)){
            $location = '../uploads/product_details/product_brochure/';      
            if(move_uploaded_file($product_brochure_temp_name, $location.$product_brochure_name)){
                echo 'File uploaded successfully<br>
                File Name: '.$location.''.$product_brochure_name.'<br>';
                $product_brochure = $location.$product_brochure_name;
            }
        } else {
            echo 'You should select a file to upload !!';
        }
        


        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        // $uploadOk = 0;
        // }

        // Check if $uploadOk is set to 0 by an error
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        // // if everything is ok, try to upload file
        // } else {
        //     if (move_uploaded_file($_FILES["company_logo"]["tmp_name"], $company_logo)) {
        //     echo "The file ". basename( $_FILES["company_logo"]["name"]). " has been uploaded.";
        //     } else {
        //     echo "Sorry, there was an error uploading your file.";
        //     }
        // }

        if(!$conn){
            echo "<br><br> UNABLE TO CONNECT TO THE DATABASE";
        }

        else{
            // echo "<br><br> CONNECT TO THE DATABASE B2B";

            $query_add_product = "INSERT INTO product_details 
                (product_id, product_description, product_name, brand_name,
                product_category, product_price, product_unit, key_words, 
                company_logo, product_images, product_brochure, business_id, 
                business_type) 
                VALUES  ('".$product_id."', '".$product_description."', '".$product_name."',
                '".$brand_name."', '".$product_category."', '".$product_price."',
                '".$product_unit."', '".$key_words."', '".$company_logo."',
                '".$product_images."', '".$product_brochure."', '".$business_id."',
                '".$business_type."')";
            
            $result_add_product = mysqli_query($conn, $query_add_product);
        }
    
    }
    else{
        echo "<br><br> PAGE NOT AVAILABLE";
    }



?>