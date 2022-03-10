<?php
    function getCars(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car ';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function lth(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car order by price';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function htl(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car  order by price DESC';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getsuv(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="SUV"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getsedan(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="Sedan"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function gethatchback(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="Hatchback"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getluxury(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="Luxury"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getauto(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="Automatic"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getmanual(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where type="Manual"';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getfourseater(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where no_of_seats=4';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getfiveseater(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car where no_of_seats=5';
        $result = mysqli_query($connect,$sql);
        return $result;
    }

    function getsevenseater(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
        $sql = 'SELECT id,name,company,price,type,color,image FROM car  where no_of_seats=7';
        $result = mysqli_query($connect,$sql);
        return $result;
    }
?>