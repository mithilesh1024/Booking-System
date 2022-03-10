<?php
    function getUserOrder(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = "SELECT orders.id,vendor.fname,orders.date_of_order,orders.dor,car.name,car.type,car.id,car.color,car.price from orders,user,car,vendor where orders.u_id=1 and car.id=orders.vehicle_id and user.id=1 and orders.v_id=vendor.id";
        $result = mysqli_query($connect, $sql);
        return $result;
    }
?>