<?php 
    
    function addBike($name,$comp,$no,$price,$color,$type,$image){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/config.php";
        $sql = "INSERT INTO bike (v_id,name,company,vehicle_no,price,type,color,image) VALUES (1,'$name','$comp','$no',$price,'$type','$color','$image')";
        $result = mysqli_query($connect, $sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

    function addCar($name,$comp,$seat,$no,$price,$color,$type,$image){
        include_once $_SERVER['DOCUMENT_ROOT']."/project/models/config.php";
        $id=1;
        $sql = "INSERT INTO car (v_id,name,company,no_of_seats,vehicle_no,price,type,color,image) VALUES ($id,'$name','$comp',$seat,'$no',$price,'$type','$color','$image')";
        $result = mysqli_query($connect, $sql);
        if($result){
            return True;
        }else{
            return False;
        }
    }

?>