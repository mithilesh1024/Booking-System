<?php 
    function getOrders(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
        $sql = 'SELECT * FROM cart where vendor_id="'.$_SESSION["v_id"].'"';
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else{
            return "No orders found";
        }
    }

?>