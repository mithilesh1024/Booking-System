<?php 
    session_start();
    function bookcar($id,$dod,$dor,$price){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql1 = 'SELECT v_id,vehicle_no FROM car WHERE id='.$id;
        $result1 = mysqli_query($connect, $sql1);
        $row = mysqli_fetch_array($result1);
        $vehicle_no = $row["vehicle_no"];
        $v_id = $row["v_id"];
        $orders = "INSERT INTO orders(u_id,v_id,vehicle_id,date_of_order,dor,price) VALUES ({$_SESSION['id']},$v_id,'$vehicle_no','$dod','$dor',$price)";
        $result = mysqli_query($connect,$orders);
        return $result;
    }

    function bookbike($id,$dod,$dor,$price){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql1 = 'SELECT v_id,vehicle_no FROM bike WHERE id='.$id;
        $result1 = mysqli_query($connect, $sql1);
        $row = mysqli_fetch_array($result1);
        $vehicle_no = $row["vehicle_no"];
        $v_id = $row["v_id"];
        $orders = "INSERT INTO orders(u_id,v_id,vehicle_id,date_of_order,dor,price) VALUES ({$_SESSION['id']},$v_id,'$vehicle_no','$dod','$dor',$price)";
        $result = mysqli_query($connect,$orders);
        if($result){
            return $result;
        }else{
            return "Error";
        }
    }

?>