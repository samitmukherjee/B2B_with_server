<?php
    session_start();
    include("config.php");
    if(!empty($_POST["business_email_id"]) && !empty($_POST["business_password"]) && $_POST['sign_in_as'] == 'Business Owner'){
        $business_email = $_POST["business_email_id"];
        $pass = $_POST["business_password"];
        //$rem = isset($_POST["remember"]) ? $_POST["remember"] : "off";

        $get_password = "SELECT * FROM business_details WHERE business_email_id = '".$business_email."'";
        // echo $demo_sql;
        $res = mysqli_query($conn, $get_password);

        if(mysqli_num_rows($res) > 0){
            $row12 = mysqli_fetch_assoc($res);
            if($row12['business_status'] == 1){
                $dehash_password = password_verify($pass,$row12['business_password']);
                // echo $row12['business_password'];
                //echo $dehash_password;
                if($dehash_password == 1){
                    $sql = "SELECT * FROM business_details WHERE business_email_id = '".$business_email."'";
                    // echo $sql;
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) == 1){
                        $row_user = mysqli_fetch_assoc($result);
                        $business_current = $row_user['business_email_id'];
                        $pass_current = $row_user['business_password'];
                        $business_user_id = $row_user['business_id'];
                        $verification_status = $row_user['verification_status'];
                        // echo $verification_status;
                        if($verification_status == 1){
                            if ($business_current == $business_email &&  $dehash_password = 1){
                                if(($_POST["remember"]) == 'on') {
                                    echo "test";
                                    setcookie("user_name", $business_current, time()+ (60*60*24*60)); /* for two months */;
                                    setcookie("user_password", $pass_current, time()+ (60*60*24*60));
                                }else {
                                    setcookie('user_name',"");
                                    setcookie('user_password',"");
                                }
                                $_SESSION['business_user'] = $business_current;
                                $_SESSION['usesr_id'] = $business_user_id;
                                $_SESSION['business'] = "owner";
                                header("location:../dynamic-dashboard.php");
                            } else {
                                header("location: ../business-login.php?x=*Something is wrong contact admin");
                            }
                        }
                        else{
                            header("location:../business-login.php?x= Business under verification");
                        }
                        
                    } else {
                        header("location:../business-login.php?x=*Wrong credentials");
                    } 
                } else {
                    header("location:../business-login.php?x=*Wrong credentials");  
                }
            }else{
                header("location:../business-login.php?x=*Your account is deactivated");
            }
        }else{
            header("location:../business-login.php?x=*No user found with given credentials");
        }
        
    }elseif (!empty($_POST["business_email_id"]) && !empty($_POST["business_password"]) && $_POST['sign_in_as'] == 'Business Executive') {
        $business_email = $_POST["business_email_id"];
        $pass = $_POST["business_password"];
        //$rem = isset($_POST["remember"]) ? $_POST["remember"] : "off";

        $get_password = "SELECT * FROM business_executive WHERE executive_email_id = '".$business_email."'";
        // echo $demo_sql;
        $res = mysqli_query($conn, $get_password);


        if(mysqli_num_rows($res) > 0){
            $row12 = mysqli_fetch_assoc($res);
            if($row12['executive_status'] == 1){
                //echo $row12['business_password'];
                $dehash_password = password_verify($pass,$row12['executive_password']);
                //echo $dehash_password;
                if($dehash_password == 1){
                    $sql = "SELECT * FROM business_executive WHERE executive_email_id = '".$business_email."'";
                // echo $sql;
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) == 1){
                        $row_user = mysqli_fetch_assoc($result);
                        $business_current = $row_user['executive_email_id'];
                        $pass_current = $row_user['executive_password'];
                        $business_user_id = $row_user['business_id'];
                        if($dehash_password == 1){
                            if ($business_current == $business_email){
                                if(($_POST["remember"]) == 'on') {
                                    echo "test";
                                    setcookie("user_name", $business_current, time()+ (60*60*24*60)); /* for two months */;
                                    setcookie("user_password", $pass_current, time()+ (60*60*24*60));
                                }else {
                                    setcookie('user_name',"");
                                    setcookie('user_password',"");
                                }
                                $_SESSION['business_user'] = $business_current;
                                $_SESSION['usesr_id'] = $business_user_id;
                                $_SESSION['business'] = "executive";
                                header("location:../dynamic-dashboard.php");
                            } else {
                                header("location: ../business-login.php?x=*Wrong Credentials ");
                            }
                        } else{
                            header("location:../business-login.php?x= Business Under Verification");
                        }
                    } else {
                        header("location:../business-login.php?x=*Wrong Credentials");
                    } 
                } else {
                    header("location:../business-login.php?x=*Wrong Credentials");  
                }
            }else{
                header("location:../business-login.php?x=*Your account is deactivated");
            }
        } else{
            header("location:../business-login.php?x=*No user found with given credentials");
        }
    }else{
        header("location:../business-login.php?x=*Select a User Profile!");
    }
?>