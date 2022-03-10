<?php 
    function getBikes(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM bike';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function phto(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM bike order by price desc';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function plth(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM bike order by price asc';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function automatic(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM bike where type="Automatic"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function manual(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM bike where type="Manual"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }


?>