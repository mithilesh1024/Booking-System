<?php
    session_start();
    function decrypt($password, $hash ){
        return password_verify($password,$hash);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
            $name = $_POST['name'];
            $password = $_POST["password"];
            if($name == "" && $password == ""){ 
                header('Location:http://localhost/project/views/admin/login.php?signin=fill');
            }
            $sql="SELECT * FROM admin WHERE name='$name'";
            $result = $connect->query($sql);
            if($result->num_rows == 1){
                $row = mysqli_fetch_array($result);
                $decrpyted_password = decrypt($password,$row['password']);
                if($row['name'] == $name  && $decrpyted_password){
                    $_SESSION['login'] = "true";
                    header('Location:http://localhost/project/views/admin/admin.php');
                }else{
                    header('Location:http://localhost/project/views/admin/login.php?signin=password&email='.$email);
                }
            }
            else{
                header('Location:http://localhost/project/views/auth/login.php?signin=email');
            }
        }
    }
?>