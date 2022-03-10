<?php 
    function getQuestion(){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/myaccount.php';
        $list = question();
        return $list;
    }

    function getUser(){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/myaccount.php';
        $list = user();
        return $list;
    }

?>