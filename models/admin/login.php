<?php
    function decrypt($password, $hash){
        return password_verify($password,$hash);
    }
    
    function authentication($username,$password){
        include_once ($_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php');
        $sql="SELECT name,password FROM admin WHERE name='$username'";
        $result = $connect->query($sql);
        $row = mysqli_fetch_array($result);
        echo $username;
        echo $row['name'];
        if($result->num_rows == 1){
            echo "hi";
            $row = mysqli_fetch_array($result);
            $decrpyted_password = decrypt($password,$row['password']);
            if($row['name'] == $username && $decrpyted_password){
                return True;
            }
        }else{
            return False;
        }
    }

?>