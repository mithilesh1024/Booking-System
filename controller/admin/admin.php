<?php
    
    // function render(){
    //     include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/dashboard.php";
    //     $array = []; 
    //     $array["ORDERS<br>"] = 1;
    //     $array["USERS<br>"] = 8;
    //     $array["VENDORS<br>"] = 11;
    //     // $questioncount = (string)$array;
    //     $array["QUESTIONS<br>"]=88;

    //     return $array;
    // }
    
    function getquestionno(){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/admin/dashboard.php";
        $questionno = getquestioncount();
        return $questionno;
    }

    function getuserno(){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/admin/dashboard.php";
        $userno = getusercount();
        return $userno;
    }

    function getvendorno(){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/admin/dashboard.php";
        $vendorno = getvendorcount();
        return $vendorno;
    }

    function getorderno(){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/admin/dashboard.php";
        $orderno = getordercount();
        return $orderno;
    }
?>