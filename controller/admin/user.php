<?php
    
    if(isset($_POST["block"])){
        blockuser();
    }

    $list = [];
    function init(){
        $array = ["Sr.No",
		"User ID",
        // "Date Of Registration",
		"Name",
		"Email ID",
		"Age",
		"Phone No.",
		"Address"];
        return $array;
    }

    function displayUsers(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/users.php";
        global $list;
        $list = getUsers();
        return $list;
    }

    if(isset($_GET['filter'])){
        $f = strval($_GET["userFilter"]);
        switch($f){
            case "auid":
                header("Location:http://localhost/project/views/admin/userlist.php?fil=auid");
                break;
            case "duid":
                header("Location:http://localhost/project/views/admin/userlist.php?fil=duid");
                break;
            default:
                header("Location:http://localhost/project/views/admin/userlist.php");
                break;

        }
    }

    function getauid(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/admin/users.php';
        $list = auid();
        return $list;
    }

    function getduid(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/admin/users.php';
        $list = duid();
        return $list;
    }
?>