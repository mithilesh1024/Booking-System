<?php 
    function getOrder(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/getorder.php';
        $list = getUserOrder();
        return $list;
    }


?>