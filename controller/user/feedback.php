<?php 

    if(isset($_POST["feedbacksubmit"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/deleteorder.php';
        $id= $_POST["feedbacksubmit"];
        $text = $_POST["feed"];
        $result = insertfeedback($id,$text);
        header("Location:http://localhost/project/views/user/checkorders.php");
    }

?>