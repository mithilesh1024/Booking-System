<?php
    function getVendor(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql = "SELECT id,fname,mname,lname,age,mobile_no,email,address FROM vendor";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
        else{
            return "Error";
        }
    }
?>