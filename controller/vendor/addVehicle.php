<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $v_id = $_SESSION["v_id"];
            $vehicle_no = $_POST["name"];
            $price = $_POST["price"];
            $color = $_POST["color"];
            if($_POST["bike"]){
                include_once $_SERVER['DOCUMENT_ROOT']."/project/models/vendor/addVehicle.php";
                if(addBike()){
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/project/views/vendor/vendorhome.php');
                }else{
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/project/views/vendor/addvehicle.php');
                }
            }
            else if($_POST["car"]){
                include_once $_SERVER['DOCUMENT_ROOT']."/project/models/vendor/addVehicle.php";
                if(addCar()){
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/project/views/vendor/vendorhome.php');
                }else{
                    header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/project/views/vendor/addvehicle.php');
                }
            }
            else{
                header('Location:'.$_SERVER['DOCUMENT_ROOT'].'/project/views/vendor/addvehicle.php');
            }
        }
    }

?>