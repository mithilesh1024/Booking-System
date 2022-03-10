<?php 
    function getCarOrder(){
        // include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/getorder.php';
        // $list = getUserCar();
        // return $list;
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT orders.id as "o_id",vendor.fname,orders.date_of_order,orders.dor,car.vehicle_no as "c_id",car.name,car.company,car.type,car.color,car.image,orders.price FROM orders INNER JOIN vendor,car where orders.id in (SELECT id from orders where u_id='.$_SESSION["id"].') AND car.vehicle_no=orders.vehicle_id AND orders.v_id=vendor.id';
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    function getBikeOrder(){
        // include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/getorder.php';
        // $list = getbike();
        // return $list;

        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT orders.id as "o_id",vendor.fname,orders.date_of_order,orders.dor,bike.vehicle_no as "c_id",bike.name,bike.company,bike.type,bike.color,bike.image,orders.price FROM orders INNER JOIN vendor,bike where orders.id in (SELECT id from orders where u_id='.$_SESSION["id"].') AND bike.vehicle_no=orders.vehicle_id AND orders.v_id=vendor.id';
        $result = mysqli_query($connect, $sql);
        return $result;
    }


?>