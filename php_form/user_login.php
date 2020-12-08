<?php
    session_start();
    include("config.php");
    if(!empty($_POST["user_email"]) && !empty($_POST["user_password"])){
        $user_email = $_POST["user_email"];
        $pass = $_POST["user_password"];
        $rem = isset($_POST["remember"]) ? $_POST["remember"] : "off";
        // $current_page = $_SESSION['current_page'];

        //echo $rem;

        // $password_in_db = password_hash($pass, PASSWORD_DEFAULT);
        // $dehash_password = password_verify($pass, $password_in_db);
        
        $get_password = "SELECT * FROM user_details WHERE user_email_id = '".$user_email."'";
        // echo $demo_sql;
        $res = mysqli_query($conn, $get_password);

        if(mysqli_num_rows($res) > 0){
            $row2 = mysqli_fetch_assoc($res);
            //echo $row2['business_password'];
            $dehash_password = password_verify($pass,$row2['user_password']);

            if($dehash_password == 1){
                $sql = "SELECT * FROM user_details WHERE user_email_id = '".$user_email."'";
            
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) == 1){
                    $row_user = mysqli_fetch_assoc($result);
                    $user_current = $row_user['user_email_id'];
                    $pass_current = $row_user['user_password'];
                    $current_user_id = $row_user['user_id'];
                    // echo $user_current;
                    if ($user_current == $user_email &&  $dehash_password == 1){
                        if(($_POST["remember"]) == 'on') {
                            echo "test";
                            setcookie("user_name", $user_current, time()+ (60*60*24*60)); /* for two months */;
                            setcookie("user_password", $pass_current, time()+ (60*60*24*60));
                        }else {
                            setcookie('user_name',"");
                            setcookie('user_password',"");
                        }
                        $_SESSION['user'] = $user_current;
                        $_SESSION['usesr_id'] = $current_user_id;
                        $_SESSION['buyer'] = 'buyer';
                        if(!isset($current_page) && empty($current_page)){
                            header("location:../home-two.php");
                        }else{
                            // header("location: ".$current_page);
                            header("location:../home-two.php");
                        }
                    } else {
                        header("location: ../login.php?x=*Wrong Credentials");
                    }
                } else {
                    header("location:../login.php?x=*Wrong Credentials");
                }
            } else{
                header("location:../login.php?x=*Wrong Credentials");
            }
        } else{
            header("location:../login.php?x=*No user found with details");
        }
    } else{
        header("location:../login.php?x=*Please fill in the details");
    }
?>

