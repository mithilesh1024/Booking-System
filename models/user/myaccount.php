<?php

    function question(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT dop,question,answer from query where u_id='.$_SESSION['id'];
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    function user(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT fname,mname,lname,age,mobile_no,email,address from user where id='.$_SESSION['id'];
        $result = mysqli_query($connect, $sql);
        return $result;
    }

?>