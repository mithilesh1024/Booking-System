<?php 

    if(isset($_GET["filter"])){
        $filter = $_GET["bikeFilter"];
        switch($filter){
            case "plth":
                header("Location:http://localhost/project/views/user/bikes.php?fil=plth");
                break;
            case "phtl":
                header("Location:http://localhost/project/views/user/bikes.php?fil=phtl");
                break;
            case "automatic":
                header("Location:http://localhost/project/views/user/bikes.php?fil=automatic");
                break;
            case "manual":
                header("Location:http://localhost/project/views/user/bikes.php?fil=manual");
                break;
            default:
            header("Location:http://localhost/project/views/user/bikes.php");
                break;
        }
    }

    function lowtohigh(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = plth();
        return $list;
    }

    function hightolow(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = phto();
        return $list;
    }

    function getautomatic(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = automatic();
        return $list;
    }

    function getmanual(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = manual();
        return $list;
    }

    function getAllBikes(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = getBikes();
        return $list;
    }

?>