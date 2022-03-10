<?php 

    if(isset($_POST["submit"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/query.php';
        $subject = $_POST["subject"];
        $question = $_POST["question"];
        // echo $subject;
        // echo $question;
        $result = insertquery($subject,$question);
        // echo $result;
        if($result){
            header("Location:http://localhost/project/views/user/home.php?query=success");
        }else{
            header("Location:http://localhost/project/views/user/askquestion.php?query=fail");
        }
    }

?>