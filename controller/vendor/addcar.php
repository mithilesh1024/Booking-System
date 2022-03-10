<?php 
    if(isset($_POST["addcar"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/vendor/addVehicle.php';
        $mn = $_POST["MODELNAME"];
        $comp = $_POST["COMPANYNAME"];
        $type = $_POST["type"];
        $seat = $_POST["seats"];
        $color = $_POST["COLOUR"];
        $rc = $_POST["RC_NO"];
        $price = $_POST["PRICE"];

        $result = addCar($mn,$comp,$seats,$rc,$price,$color,$type);
        if($result){
            header("Location:http://localhost/project/views/vendor/home.php");
        }
    }
    if(isset($_POST["addbike"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/vendor/addVehicle.php';
        $mn = $_POST["BIKENAME"];
        $comp = $_POST["COMPANYNAME"];
        $type = $_POST["type"];
        $color = $_POST["COLOUR"];
        $rc = $_POST["VEHICLE_NO"];
        $price = $_POST["PRICE"];

        $result = addBike($mn,$comp,$rc,$price,$color,$type);
        if($result){
            header("Location:http://localhost/project/views/vendor/home.php");
        }
    }

?>