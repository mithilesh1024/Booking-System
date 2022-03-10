<?php
    function getUsers(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql = "SELECT id,fname,mname,lname,age,mobile_no,email,address FROM user";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
        else{
            return "Error";
        }
    }

    function newf(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function auid(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,fname,mname,lname,age,mobile_no,email,address FROM user order by id';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function duid(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,fname,mname,lname,age,mobile_no,email,address FROM car order by id DESC';
        $result = mysqli_query($connect,$sql);
        return $result;
    }
?>