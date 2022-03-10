<?php
    $list = [];
    function init(){
        $array = ["Sr.No","Order No.","Vendor ID","Date of Order","Date of Return","Vehicle Name","Vehicle Type","Vehicle ID","Vehicle Color","Amount","Action"];
        return $array;
    }

    function displayOrder(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/orders.php";
        global $list;
        $list = getQuery();
        return $list;
    }

    function sortUser(){
        if(!empty($list)){

        }
    }
?>