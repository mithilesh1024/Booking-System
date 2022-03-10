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

    function removeQuery($id){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql='DELETE FROM query WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

    function addAnswer($id,$ans){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql='UPDATE query SET answer="'.$ans.'" and doa = "'.date("Y/m/d").'" WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

?>