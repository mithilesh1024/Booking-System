<?php 
    function getCar(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/user/home.php";
        $cars = getQuery("car");
        return $cars;
    }

    function getBike(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/user/home.php";
        $bike = getQuery("bike");
        return $bike;
    }

?>