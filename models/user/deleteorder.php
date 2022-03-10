<?php
    function deleteorder($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql="DELETE FROM orders WHERE id=".$id;
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function feedback($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = "SELECT orders.id,vendor.fname,orders.date_of_order,orders.dor,car.name,car.type,car.color,car.price from orders,user,car,vendor where orders.id=".$id." and car.id=orders.vehicle_id and orders.v_id=vendor.id";
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function insertfeedback($id,$t){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = "INSERT INTO feedback(o_id,feedback) values (".$id.",'".$t."')";
        $result = mysqli_query($connect,$sql);
        return $result;
    }

?>