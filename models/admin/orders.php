<?php

    function getQuery(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql = "SELECT orders.id,vendor.fname,orders.date_of_order,orders.dor,car.name,car.type,car.id,car.color,car.price from orders,user,car,vendor where car.id=orders.vehicle_id and user.id=orders.u_id and orders.v_id=vendor.id";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "Error";
        }
    }

?>