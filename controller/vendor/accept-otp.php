<?php
    session_start();
    include_once "../models/otp.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $otp = $_POST['otp'];
        $result = verify_otp($otp);
        if($result)
        {
            header('Location:../views/user/index.php');
        }else{
            header('Location:../views/auth/verify.php?error=wrong-otp');
        }
    }
?>