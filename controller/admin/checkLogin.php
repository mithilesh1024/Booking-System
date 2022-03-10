<?php
    function check(){
        if(!isset($_SESSION["status"])){
          header("Location:".$_SERVER["DOCUMENT_ROOT"]."/project/views/admin/login.php");  
        }
        // if(isset($_SESSION["status"]) && )
    }

?>