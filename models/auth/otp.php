<?php
    function generate_otp(){
        return rand(10000,99999);
    }

    function send_otp() {
        include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/auth/sendmail.php';
        $num = rand(10000,99999);
        $_SESSION['otp'] = $num;
        sendmail($num);
    }

    function verify_otp($otp){
        if ($_SESSION['otp'] == $otp){
            return true;
        }else{
            return false;
        }
    }
?>