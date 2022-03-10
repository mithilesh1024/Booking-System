<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/addvehiclecss.css">
	<title>Vendor Page</title>
</head>
<body>
	<div class="vehicle">ADDBIKE</div>

	<?php 
        include_once "common/nav.php"; 
        // if(isset($_SESSION["id"])){
		// 	header("Location:http://localhost/project/views/vendor/login.php");
		// }
        if(isset($_GET["insert"])){
            if($_GET["insert"] == "fail"){
                echo '<script>alert("Vehicle Not Inserted")</script>';
            }
            if($_GET["insert"] == "fillallfield"){
                echo '<script>alert("Fill all Field")</script>';
            }
			if($_GET["insert"] == "rcerror"){
                echo '<script>alert("Wrong RC number")</script>';
            }
        }
    ?>
	<div class="cssclass">
		
</br></br>
<form action="http://localhost/project/controller/vendor/addvehicle.php" method="post" enctype="multipart/form-data">
	<label class="CB">BIKENAME:</label>
	<input type="text" name="BIKENAME" size="20">
</br></br></br></br>
    <label class="CB">COMPANYNAME:</label>
    <input type="text" name="COMPANYNAME" size="20">
</br></br></br></br>
    <label class="text">BIKE_TYPE:</label>
<select class="select" name="TYPE">
	<optgroup label="TYPES" >
	<option value="Manual" >MANUAL</option>
	<option value="Automatic" >AUTO</option>
</select>
    </br></br></br></br>
     <label class="text">CHOOSE COLOUR:</label>
         <input type="text" name="COLOUR" SIZE="20">
</br></br></br></br>
   <label class="beste">
	 VEHICLE_NO:</label><input type="text" name="VEHICLE_NO" size="20">
</br></br></br></br>
<label class="beste"> PRICE:</label><input type="text" name="PRICE" size="20">
</br></br></br></br>
<label class="beste"> IMAGE:</label><input type="file" name="img_upload">
</br></br></br></br>
<label class="submit">
   <input type="submit" value="SUBMIT" name="addbike" size="50">
   </label>
</div>
</form>
</body>
</html>




