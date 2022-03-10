<?php 

    function countOrder(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $order = 'SELECT COUNT() as "count order" FROM orders WHERE v_id="'.$_SESSION["vid"].'"';
        $result = mysqli_query($connect, $order);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

    function countCar(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $car = 'SELECT COUNT() as "count bike" FROM bike WHERE v_id="'.$_SESSION["vid"].'"';
        $result = mysqli_query($connect, $car);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

    function countBike(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $bike = 'SELECT COUNT() as "count bike" FROM bike WHERE v_id="'.$_SESSION["vid"].'"';
        $result = mysqli_query($connect, $bike);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

?>