<?php 
    function getBikes($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color FROM bike WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function carDetails($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,no_of_seats,type,color FROM car WHERE id="'.$id.'"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    // function addToCart($id){
        

    // }

?>