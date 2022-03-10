<?php 
    function getBikes($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image,vehicle_no FROM bike WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function carDetails($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,no_of_seats,type,color,image,vehicle_no FROM car WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }
?>