<?php
    function deleteorder($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql="DELETE FROM orders WHERE id=".$id;
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function check_if_feedback_exist($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        // $sql="SELECT EXISTS(SELECT o_id FROM feedback WHERE o_id=$id) as 'check'";
        $sql = "SELECT * FROM feedback WHERE o_id=$id";
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function feedbackdetails($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = "SELECT vendor.fname,vendor.mname,vendor.lname,orders.date_of_order,orders.dor,car.name,car.color,car.company,car.image from orders,car,vendor where orders.id=$id and car.vehicle_no=orders.vehicle_id and orders.v_id=vendor.id";
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function insertfeedback($id,$t){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = "INSERT INTO feedback(o_id,feedback) values (".$id.",'".$t."')";
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function cdetails($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT vendor.fname as "vname",orders.date_of_order,orders.dor,car.vehicle_no as "vno",car.name,car.company,car.type,car.color,car.no_of_seats,car.image,orders.price FROM orders INNER JOIN vendor,car where orders.id='.$id.' AND car.vehicle_no=orders.vehicle_id AND orders.v_id=vendor.id';
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    function bdetails($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT vendor.fname as "vname",orders.date_of_order,orders.dor,bike.vehicle_no as "vno",bike.name,bike.company,bike.type,bike.color,bike.image,orders.price FROM orders INNER JOIN vendor,bike where orders.id='.$id.' AND bike.vehicle_no=orders.vehicle_id AND orders.v_id=vendor.id';
        $result = mysqli_query($connect, $sql);
        return $result;
    }

?>