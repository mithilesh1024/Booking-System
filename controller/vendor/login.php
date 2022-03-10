<?php
    session_start();
    function decrypt($password, $hash ){
        return password_verify($password,$hash);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
            $email = $_POST['email'];
            $password = $_POST["password"];
            if($email == "" && $password == ""){ 
                header('Location:http://localhost/project/views/vendor/login.php?signin=fill');
            }
            $sql='SELECT * FROM vendor WHERE email="'.$email.'"';
            $result = $connect->query($sql);
            if($result->num_rows == 1){
                $row = mysqli_fetch_array($result);
                $decrpyted_password = decrypt($password,$row['password']);
                if($row['email'] == $email  && $decrpyted_password){
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $row['id'];
                    header('Location:http://localhost/project/views/vendor/vendorhome.php');
                }else{
                    header('Location:http://localhost/project/views/vendor/login.php?signin=password&email='.$email);
                }
            }
            else{
                header('Location:http://localhost/project/views/vendor/login.php?signin=email');
            }
        }
    }
?>