<?php
    $list = [];
    function init(){
        $array = ["Sr.No",
		"ID",
		"Name",
		"Email ID",
		"Age",
		"Phone No.",
		"Address",
		"Action"];
        return $array;
    }

    function displayUsers(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/users.php";
        global $list;
        $list = getUsers();
        return $list;
    }

    function sortUser(){
        if(!empty($list)){

        }
    }
?>