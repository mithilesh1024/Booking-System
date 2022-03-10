<?php 
    
    function addBike($name,$comp,$no,$price,$color,$type){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/config.php";
        $sql = 'INSERT INTO bike (v_id,name,company,vehicle_no,price,type,color) VALUES ($_SESSION["v_id"],$name,$comp,$no,$price,$type,$color)';
        $result = mysqli_query($connect, $sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

    function addCar($name,$comp,$seats,$no,$price,$color,$type){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/config.php";
        $sql = 'INSERT INTO car (v_id,name,company,no_of_seats,vehicle_no,price,type,color) VALUES ($_SESSION["v_id"],$name,$comp,$seats,$no,$price,$type,$color)';
        $result = mysqli_query($connect, $sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

?>