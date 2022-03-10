<?php 
    if(isset($_GET["car"])){
        $id = $_GET["car"];
        header('Location:http://localhost/project/views/user/cardetails.php?allow=True&id='.$id);
    }
    if(isset($_GET["bike"])){
        $id = $_GET["bike"];
        header('Location:http://localhost/project/views/user/bikedetails.php?allow=True&id='.$id);
    }

    if(isset($_GET["bookcar"])){
        $id = $_GET["bookcar"];
        header('Location:http://localhost/project/views/user/carbooking.php?allow=True&id='.$id.'&v=c');
    }

    if(isset($_GET["bookbike"])){
        $id = $_GET["bookbike"];
        header('Location:http://localhost/project/views/user/carbooking.php?allow=True&id='.$id.'&v=b');
    }

    function car($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $result = carDetails($id);
        return $result;
    }

    function bike($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $result = getBikes($id);
        return $result;
    }

?>