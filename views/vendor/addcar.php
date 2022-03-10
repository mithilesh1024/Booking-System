<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/addvehiclecss.css">
	<title>Vendor Page</title>
</head>
<body>
    
	<div class="vehicle">ADD CAR</div>
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
<form action="http://localhost/project/controller/vendor/addvehicle.php" method="post" enctype="multipart/form-data">
	
	<div class="cssclass">
</br></br>
	<label class="CB">MODEL NAME:</label>
	<input type="text" name="MODELNAME" size="20">
</br></br></br></br>
    <label class="CB">COMPANY NAME:</label>
    <input type="text" name="COMPANYNAME" size="20">
</br></br></br></br>
    <label class="text">CAR TYPE:</label>
<select class="select" name="BRAND">
	<optgroup label="BRANDS AVAILABLE" >
	<option value="SPORTS">SPORTS</option>
	<option value="HATCHBACK">HATCHBACK</option>
	<option value="SUV">SUV</option>
    <option value="LUXURY">LUXURY</option>
    <option value="SEDAN">SEDAN</option>
</select>
</br></br></br></BR>
<label class="text">NO_OF_SEATS:</label>
<select class="select" name="SEAT">
	<optgroup label="NO_OF_SEATS">
	<option value="5" >FIVE</option>
	<option value="7" >SEVEN</option>
</select>
</br>
    </br></br></br></br>
     <label class="text"> COLOUR:</label>
        <input type="text" name="COLOUR" size="20">
</br></br></br></br>
   <label class="beste">
	 RC_NO: </label><input type="text" name="RC_NO" size="20">
	
</br></br></br></br>
<label class="beste"> PRICE: </label><input type="text" name="PRICE" size="20">
</br></br></br></br>
<label class="beste"> IMAGE:</label><input type="file" name="img_upload"><br><span id="img_upload"></span>
</br></br></br></br>
   <input type="submit" class="submit"  value="SUBMIT" name="addcar" size="50">
</div>
</form>
</body>
</html>




