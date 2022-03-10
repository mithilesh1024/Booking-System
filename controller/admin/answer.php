<?php 

    if(isset($_POST["postanswer"])){
    	include $_SERVER['DOCUMENT_ROOT'] . '/project/models/admin/query.php';
        $id= $_POST["postanswer"];
        $answer = $_POST["answer"];
        $result = addAnswer($id,$answer);
        if(result)
        {
        	header("Location:http://localhost/project/views/admin/queries.php");
    	}
    	else { return "Error";}
    }

    // function check_if_answer_exist($id){
    //     include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
    //     // $sql="SELECT EXISTS(SELECT o_id FROM feedback WHERE o_id=$id) as 'check'";
    //     $sql = "SELECT * FROM query WHERE id=$id";
    //     $result = mysqli_query($connect,$sql);
    //     return $result;
    // }

    // function questiondetails($id){
    //     include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
    //     $sql = "SELECT query.id,query.dop, query.question from query where query.id=$id";
    //     $result = mysqli_query($connect,$sql);
    //     return $result;
    // }

    // function inseranswer($id,$t){
    //     include $_SERVER['DOCUMENT_ROOT'] . '/project/models/config.php';
    //     $sql = "INSERT INTO query(id,answer) values (".$id.",'".$t."')";
    //     $result = mysqli_query($connect,$sql);
    //     return $result;
    // }

?>