<?php

    function getQuery(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql = "SELECT orders.id,vendor.id,orders.date_of_order,orders.dor,car.name,car.type,car.id,car.color,orders.price,feedback.feedback from orders,user,car,vendor,feedback where car.id=orders.vehicle_id and user.id=orders.u_id and orders.v_id=vendor.id";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            // echo "done";
            return $result;
        }else{
            return "Error";
        }
    }

?>

<!-- and orders.id=feedback.o_id" -->