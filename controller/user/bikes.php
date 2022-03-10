<?php 
    function getAllBikes(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/bikes.php';
        $list = getBikes();
        return $list;
    }

?>