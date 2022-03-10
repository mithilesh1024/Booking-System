<?php 
    if(isset($_GET["car"])){
        car();
    }
    if(isset($_GET["bike"])){
        bike();
    }

    if(isset($_GET["bookcar"]) || isset($_GET["bookbike"])){
        addToCart();
    }

    function car(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $id = $_GET["car"];
        $result = carDetails($id);
        $list = mysqli_fetch_array($result);
        header('Location:http://localhost/project/views/user/cardetails.php?allow="True"&id='.$id.'&mn='.$list['name'].'&company='.$list["company"].'&type='.$list["type"].'&color='.$list['color'].'&price='.$list["price"].'&seat='.$list["no_of_seats"]);
    }

    function bike(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/details.php';
        $id = $_GET["bike"];
        $result = getBikes($id);
        $list = mysqli_fetch_array($result);
        header('Location:http://localhost/project/views/user/bikedetails.php?allow="True"&id='.$id.'&mn='.$list['name'].'&company='.$list["company"].'&type='.$list["type"].'&color='.$list['color'].'&price='.$list["price"]);
    }

    function addToCart(){
        // $v_id = $_GET['id'];
        // $result = addToCart($v_id);
        // header('Location:http://localhost/project/views/user/cars.php');
    }

?>