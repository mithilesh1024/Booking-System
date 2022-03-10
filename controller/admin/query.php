<?php
    if(isset($_GET["answer"])){
        $id = $_GET["answer"];
        header("Location: http://localhost/project/views/admin/answerquestion.php?id=".$id);
    }

    $list = [];
    function init(){
        $array = ["Sr.No",
		"Question ID",
		"Status",
		"Posted on",
		"Answered on",
		"Question",
		"Answer",
        "Action"];
        return $array;
    }

    function displayQuestion(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/query.php";
        global $list;
        $list = getQuery();
        return $list;
    }

    function displayQuestionDetails($id){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/query.php";
        global $list;
        $list = getQueryDetails($id);
        return $list;
    }

    // function ansQuery(){
    //     $id = $_POST["id"];
    //     $ans = $_POST["answer"];
    //     include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/query.php";
    //     $result = addAnswer($id,$ans);
    //     if ($result){
    //         header("Location: http://localhost/project/views/admin/queries.php");
    //     }else{
    //         echo "Error";
    //     }
    // }
    
?>