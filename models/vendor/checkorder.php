<?php 
    function getCarOrders(){
        include ($_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php');
        $sql = "SELECT user.fname,user.mname,user.lname,car.name,car.vehicle_no, orders.date_of_order,orders.price, orders.dor FROM orders JOIN user,car where orders.v_id=1 and car.vehicle_no=orders.vehicle_id and user.id=orders.u_id";
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    function getBikeOrders(){
        include ($_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php');
        $sql = "SELECT user.fname,user.mname,user.lname,bike.name,bike.vehicle_no, orders.date_of_order,orders.price, orders.dor FROM orders JOIN user,bike where orders.v_id=1 and bike.vehicle_no=orders.vehicle_id and user.id=orders.u_id";
        $result = mysqli_query($connect, $sql);
        return $result;
    }

?>