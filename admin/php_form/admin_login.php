<?php
    session_start();
    include("config.php");
    if(isset($_POST['email_or_phone']) && isset($_POST['admin_password'])){
        $email_or_phone = $_POST['email_or_phone'];
        $pass = $_POST['admin_password'];
        

        // $password_in_db = password_hash($pass, PASSWORD_DEFAULT);
        // $dehash_password = password_verify($pass, $password_in_db);

        $get_password = "SELECT * FROM admin_details WHERE admin_email_id = '".$email_or_phone."'";
        //echo $get_password;
        $res = mysqli_query($conn, $get_password);

        if(mysqli_num_rows($res) > 0){
            $row2 = mysqli_fetch_assoc($res);
            //echo $row2['admin_password'];
            $dehash_password = password_verify($pass,$row2['admin_password']);

            if($dehash_password == 1){
                $sql = "SELECT * FROM admin_details WHERE admin_email_id = '".$email_or_phone."'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_assoc($result);
                    $admin_email = $row['admin_email_id'];
                    $admin_pass = $row['admin_password'];
                    $admin_id = $row['admin_id'];
                    // echo $admin_email;
                    // echo $admin_pass;
                    // echo $admin_id;
                    if ($admin_email == $email_or_phone && $dehash_password == 1){
                        //echo "Success with email"; 
                        if(($_POST["remember"]) == 'on') {
                            //echo "test";
                            setcookie("admin_name", $admin_email, time()+ (60*60*24*60)); /* for two months */;
                            setcookie("admin_password", $admin_pass, time()+ (60*60*24*60));
                            //echo 'cookie created';
                        }else {
                            //echo "test1";
                            setcookie('admin_name',"");
                            setcookie('admin_password',"");
                        }
                        $_SESSION['user'] = $admin_email;
                        $_SESSION['user_id'] = $admin_id;
                        $_SESSION['user_type'] = 'admin';
                        if(!empty($_SESSION['user'])){
                            session_start();
                            header("location: ../dynamic-admin.php");
                        }
                    }
                // } else {
                //     //echo "error";
                //     $sql1 = "SELECT * FROM admin_details WHERE contact_no = '".$email_or_phone."' AND admin_password = '".$pass."'";
                //     $result1 = mysqli_query($conn,$sql1);
                //     if(mysqli_num_rows($result1) == 1){
                //         $row = mysqli_fetch_assoc($result1);
                //         $admin_contact = $row['contact_no'];
                //         $admin_pass = $row['admin_password'];
                //         if ($admin_contact == $email_or_phone && $admin_pass == $pass){
                //             // echo "Success with phone number";
                //             // if(($_POST["remember"]) == 'on') {
                //             //     echo "test";
                //             //     setcookie("admin_name", $admin_contact, time()+ (60*60*24*60)); /* for two months */;
                //             //     setcookie("admin_password", $admin_pass, time()+ (60*60*24*60));
                //             // }else {
                //             //     setcookie('user_name',"");
                //             //     setcookie('user_password',"");
                //             // }
                //             // $_SESSION['admin_user'] = $admin_contact;
                //             // $_SESSION['admin_id'] = $admin_id;
                //             header("location:../index.php"); 
                //         }
                //     }  
                // }
        
                } else{
                    header("location: ../login.php?x=*Wrong Credentials1");
                }
            } else{
                header("location: ../login.php?x=*Wrong Credentials2");
            }
        }
    }


?>