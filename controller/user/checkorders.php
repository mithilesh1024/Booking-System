<?php 

    if(isset($_GET["feedback"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $id = $_GET["feedback"];
        $result = feedback($id);
        $value = mysqli_fetch_array($result);
        header('Location:http://localhost/project/views/user/feedback.php?id='.$value["id"].'&odate='.$value["date_of_order"].'&vname='.$value["name"].'&comp='.$value["company"].'&color='.$value["color"].'');
    }

    if(isset($_GET["deleteorder"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $id = $_GET["deleteorder"];
        $result = deleteorder($id);
        if($result){
            header("Location:http://localhost/project/views/user/checkorders.php");
        }else{
            header("Location:http://localhost/project/views/user/checkorders.php?status='error'");
        }
    }

?>