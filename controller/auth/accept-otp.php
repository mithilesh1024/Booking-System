<?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/project/models/auth/otp.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $otp = $_POST['otp'];
        $result = verify_otp($otp);
        if($result)
        {
            header('Location:http://localhost/project/views/user/home.php');
        }else{
            header('Location:http://localhost/project/views/auth/verify.php?error=wrong-otp');
        }
    }
?>