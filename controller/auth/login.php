<?php
    session_start();
    function decrypt($password, $hash ){
        return password_verify($password,$hash);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['forgot'])){
            include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
            $email = $_POST['email'];
            if($email == ""){ 
                header('Location:http://localhost/project/views/auth/login.php?signin=fill');
            }
            $sql='SELECT * FROM user WHERE email="'.$email.'"';
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                $_SESSION['email'] = $email;
                send_otp();
                header('Location:http://localhost/project/views/auth/verify.php');
            }else{
                header('Location:http://localhost/project/views/auth/login.php?signin=email');
            }
        }


        if(isset($_POST['submit'])){
            include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
            $email = $_POST['email'];
            $password = $_POST["password"];
            if($email == "" && $password == ""){ 
                header('Location:http://localhost/project/views/auth/login.php?signin=fill');
            }
            $sql='SELECT * FROM user WHERE email="'.$email.'"';
            $result = $connect->query($sql);
            if($result->num_rows == 1){
                $row = mysqli_fetch_array($result);
                $decrpyted_password = decrypt($password,$row['password']);
                if($row['email'] == $email  && $decrpyted_password){
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $row['id'];
                    header('Location:http://localhost/project/views/user/home.php');
                }else{
                    header('Location:http://localhost/project/views/auth/login.php?signin=password&email='.$email);
                }
            }
            else{
                header('Location:http://localhost/project/views/auth/login.php?signin=email');
            }
        }
    }
?>