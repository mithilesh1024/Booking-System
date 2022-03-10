<?php 

    function check_rc($str){
        $pattern = '/^(?! )[A-Z][A-Z]-0?[0-9]-[A-Z]-[0-9][0-9][0-9][0-9](?<! )$/';
        $result = preg_match_all($pattern,$str);
        return $result;
    }

    if(isset($_POST["addcar"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/vendor/addVehicle.php';
        $mn = $_POST["MODELNAME"];
        $comp = $_POST["COMPANYNAME"];
        $type = $_POST["BRAND"];
        $seat = $_POST["SEAT"];
        $color = $_POST["COLOUR"];
        $rc = $_POST["RC_NO"];
        $price = $_POST["PRICE"];

        $img_name = $_FILES['img_upload']['name'];
        $tmp_name = $_FILES['img_upload']['tmp_name'];
        $new_img_name = uniqid("IMG-", true) . '.' . $img_name;
        $img_upload_path = 'C:/wamp64/www/project/controller/vendor/uploads/' . $new_img_name;
        $v = move_uploaded_file($tmp_name, $img_upload_path);

        if(empty($mn) || empty($comp) || empty($type) || empty($seat) || empty($color) || empty($rc) || empty($price) || empty($image)){
            header("Location:http://localhost/project/views/vendor/addcar.php?insert=fillallfield");
        }

        if(check_rc($rc) == 0){
            header("Location:http://localhost/project/views/vendor/addcar.php?insert=rcerror");
        }

        $result = addCar($mn,$comp,$seat,$rc,$price,$color,$type,$img_upload_path);
        if($result){
            header("Location:http://localhost/project/views/vendor/vendorhome.php?insert=success");
        }else{
            header("Location:http://localhost/project/views/vendor/addcar.php?insert=fail");
        }
    }
    if(isset($_POST["addbike"])){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/vendor/addVehicle.php';
        $mn = $_POST["BIKENAME"];
        $comp = $_POST["COMPANYNAME"];
        $type = $_POST["TYPE"];
        $color = $_POST["COLOUR"];
        $rc = $_POST["VEHICLE_NO"];
        $price = $_POST["PRICE"];
        
        $img_name = $_FILES['img_upload']['name'];
        $tmp_name = $_FILES['img_upload']['tmp_name'];
        $new_img_name = uniqid("IMG-", true) . '.' . $img_name;
        $img_upload_path = 'C:/wamp64/www/project/controller/vendor/uploads/' . $new_img_name;
        $v = move_uploaded_file($tmp_name, $img_upload_path);

        if(empty($mn) || empty($comp) || empty($type) || empty($color) || empty($rc) || empty($price) || empty($image)){
            header("Location:http://localhost/project/views/vendor/addbike.php?insert=fillallfield");
        }

        if(check_rc($rc) == 0){
            header("Location:http://localhost/project/views/vendor/addbike.php?insert=rcerror");
        }

        $result = addBike($mn,$comp,$rc,$price,$color,$type,$img_upload_path);
        if($result){
            header("Location:http://localhost/project/views/vendor/vendorhome.php?insert=success");
        }else{
            header("Location:http://localhost/project/views/vendor/addbike.php?insert=fail");
        }
    }

?>