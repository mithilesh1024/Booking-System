<?php 
    if(isset($_POST["carbooking"])){
        carbook();
    }
    if(isset($_POST["bikebooking"])){
        bikebook();
    }

    function displayCar($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $result = carDetails($id);
        return $result;
    }
    function displayBike($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $result = getBikes($id);
        return $result;
    }

    function carbook(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/addorder.php';
        if(empty($_POST["dateofdeparture"]) || empty($_POST["dateofreturn"])){
            header("Location:http://localhost/project/views/user/home.php?booking=error");
        }
        $id = $_POST["carbooking"];
        $dod = $_POST["dateofdeparture"];
        $dor = $_POST["dateofreturn"];
        $price = $_POST["amount"];
        $result = bookcar($id,$dod,$dor,$price);
        if($result){
            header("Location:http://localhost/project/views/user/home.php?booking=success");
        }
        else{
            header("Location:http://localhost/project/views/user/home.php?booking=error");
        }
    }

    function bikebook(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/addorder.php';
        if(empty($_POST["dateofdeparture"]) || empty($_POST["dateofreturn"])){
            header("Location:http://localhost/project/views/user/home.php?booking=error");
        }
        $id = $_POST["bikebooking"];
        $dod = $_POST["dateofdeparture"];
        $dor = $_POST["dateofreturn"];
        $price = $_POST["amount"];
        $result = bookbike($id,$dod,$dor,$price);
        if($result){
            header("Location:http://localhost/project/views/user/home.php?booking=success");
        }
        else{
            header("Location:http://localhost/project/views/user/home.php?booking=error");
        }
    }
?>