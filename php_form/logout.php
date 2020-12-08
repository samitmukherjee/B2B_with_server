<?php

    // include('config.php');
    session_start();
    session_destroy();
    // setcookie("user name",$user_current, time()-3600);
    // setcookie("user password", $user_pass, time()-3600);
    header("location:../home-two.php");

?>