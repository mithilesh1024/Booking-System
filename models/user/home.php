<?php  
    function getQuery($table){
    include ($_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php');
    $sql1="SELECT * FROM ".$table;
    $result = mysqli_query($connect,$sql1);
        return $result;
    }
?>











