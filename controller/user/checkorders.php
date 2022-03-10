<?php 

    if(isset($_GET["feedback"])){
        $id = $_GET["feedback"];
        header('Location:http://localhost/project/views/user/feedback.php?id='.$id);
    }
    
    if(isset($_GET["carmoredetails"])){
        $id = $_GET["carmoredetails"];
        header("Location:http://localhost/project/views/user/orderdetails.php?id=".$id."&v=c");
    }

    if(isset($_GET["bikemoredetails"])){
        $id = $_GET["bikemoredetails"];
        header("Location:http://localhost/project/views/user/orderdetails.php?id=".$id."&v=b");
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

    function check($id){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $result = check_if_feedback_exist($id);
        return $result;
    }

    function feedback($id){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $result = feedbackdetails($id);
        return $result;
    }

    function morecardetail($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $result = cdetails($id);
        return $result;
    }

    function morebikedetail($id){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $result = bdetails($id);
        return $result;
    }

?>