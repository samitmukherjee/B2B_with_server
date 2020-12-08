<?php
    session_start();
    if(empty($_SESSION['user'])){
        header("location: ./login.php");
    }
    include("config.php");

    $date_current = date("Y-m-d");
    $time_current = date("h:i:sa");
    

    date_default_timezone_set('Asia/Kolkata');
    if(isset($_POST['post_review']) ){

        
        $review_input_title = $_POST['review_input_title'];
        $review_input_entry = $_POST['review_input_entry'];
        $userid = $_POST['userid'];
        $business_id = $_POST['business_id'];
        $star_count = $_POST['star_count'];

        // echo "STARS = ".$star_count."";

        if(empty($review_input_title) or empty($review_input_entry) ){
            header("location:../single-listing.php?x=*Please fill all the details!");
        }

        $query_upload_review = "INSERT INTO review_details (review_heading, review,
                ratings, user_id, business_id ) VALUES ('".$review_input_title."',
                '".$review_input_entry."', $star_count, $userid, $business_id)";

        // echo $query_upload_review;
        
        $result_upload_review = mysqli_query($conn, $query_upload_review);
        // echo $result_upload_review;

        // $query_go_back = "SELECT legal_name FROM business_details WHERE business_id = '$business_id' ";
        // $result_go_back = mysqli_query($conn, $query_go_back);

        // $row_legal_name = mysqli_fetch_assoc($result_go_back);

        // $business_name = $row_legal_name['legal_name'];

        header("location:../home-two.php");

    }elseif (empty($_SESSION['user'])) {
        header("location: ../login.php");
    }

?>