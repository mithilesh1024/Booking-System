function del(id){
    var result = `
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/query.php"; 
            delQuery(${id});
        ?>`;
    if(result){
        localStorage.reload;
    }else{
        alert("Error");
    }
}

del.addEventListener("click", (id)=>{


})