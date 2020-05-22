<?php
    include("config.php");

    if(!empty($_POST["user_email"]) && !empty($_POST["password"])){
        $user_email = $_POST["user_email"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM user_details WHERE user_email_id ='user_email' AND password ='password' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "test1";
                if ($row['user_email_id'] == $user_email && $row['password'] == $password){
                    setcookie("b2b", "$user_email",time()+60*60*24*60);
                    header("location:../home-two.php");
                }
            }
        }
    }
    else{
        header("location:../login.php?x=Wrong credentials");
    }
    
?>