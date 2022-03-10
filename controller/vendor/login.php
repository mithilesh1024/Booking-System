<?php
    function decrypt($hash, $password){
        return password_verify($password,$hash);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
            $email = $_POST['email'];
            $password = $_POST["password"];
            if($email == "" && $password == ""){ 
                header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/login.php?signin=fill');
            }
            $sql='SELECT * FROM user WHERE email="'.$email.'"';
            $result = $connect->query($sql);
            if($result->num_rows == 1){
                $row = mysqli_fetch_array($result);
                $decrpyted_password = decrypt($password,$row['password']);
                if($row['email'] == $email && $decrpyted_password){
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $row['id'];
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/vendorhome.php');
                }else{
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/login.php?signin=password&email='.$email);
                }
            }
            else{
                header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/views/vendor/login.php?signin=email');
            }
        }
    }
?>