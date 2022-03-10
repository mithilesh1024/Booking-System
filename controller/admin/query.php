<?php
    if(isset($_POST["answer"])){
        ansQuery();
    }
    if(isset($_POST["delete"])){
        delQuery();
    }
    $list = [];
    function init(){
        $array = ["Sr.No",
		"Question ID",
		"Status",
		"Date of Posting",
		"Date of Answering",
        "Subject",
		"Question Description",
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

    function ansQuery(){
        $id = $_POST["id"];
        $ans = $_POST["text"];
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/query.php";
        $result = addAnswer($id,$ans);
        if ($result){
            header("Location: http://localhost/project/views/admin/queries.php");
        }else{
            echo "Error";
        }
    }
    function delQuery(){
        echo "Deleted";
        // include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/query.php";
        // global $list;
        // $result = removeQuery($id);
        // if($result){
        //     return True;
        // }else{
        //     return False;
        // }
    }

    function sortQuestion(){
        if(!empty($list)){

        }
    }
