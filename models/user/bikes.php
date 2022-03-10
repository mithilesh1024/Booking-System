<?php 
    function getBikes(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color FROM bike';
        $result = mysqli_query($connect,$sql);
        return $result;
    }


?>