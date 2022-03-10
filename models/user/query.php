<?php 
    session_start();

function insertquery($subject,$question){
    include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
    $date = date("Y-m-d");
    $sql = "INSERT INTO query(u_id,subject,question,status,dop) VALUES ({$_SESSION['id']},'$subject','$question','Not Answered','$date')";
    $result = mysqli_query($connect, $sql);
    return $result;
}

?>