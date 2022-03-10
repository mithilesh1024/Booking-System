<?php 

    function getQuery(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql="SELECT * FROM query";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

    function getQueryDetails($id){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql="SELECT * FROM query where id=$id";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

    function addAnswer($id,$ans){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $date = date('Y/m/d');
        $sql="UPDATE query SET answer='$ans', doa = '$date', status = 'Answered' WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

?>