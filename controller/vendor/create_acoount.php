<?php
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
    include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/auth/otp.php";

    function encrypt($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $id = mysqli_escape_string($connect,uniqid());
        $fname = mysqli_escape_string($connect,$_POST['fname']);
        $mname = mysqli_escape_string($connect,$_POST['mname']);
        $lname = mysqli_escape_string($connect,$_POST['lname']);
        $age = mysqli_escape_string($connect,$_POST['age']);
        $mobile = mysqli_escape_string($connect,$_POST['mobile']);
        $email = mysqli_escape_string($connect,$_POST['email']);
        $password = mysqli_escape_string($connect,$_POST['password']);

        if($fname == "" && $mname == "" && $lname == "" && $age == "" && $mobile == "" && $email == "" && $password == ""){
            header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/create_account.php?signin=fill');
        }
        $encypted_password = encrypt($password);
        $sql="INSERT INTO user (fname,mname,lname,age,mobile_no,email,password) VALUES ('$fname','$mname','$lname',$age,$mobile,'$email','$encypted_password')";
        $result = mysqli_query($connect,$sql);
        if($result){
            $_SESSION['email'] = $email;
            send_otp();
            header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/verify.php');
        }else{
            header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/create_account.php');
        }
    }
?>