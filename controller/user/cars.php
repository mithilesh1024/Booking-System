<?php 
    function getAllCar(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getCars();
        return $list;
    }

?>