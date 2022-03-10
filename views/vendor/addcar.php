<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/addvehiclecss.css">
	<title>Vendor Page</title>
</head>
<body>
	<div class="vehicle">ADD CAR</div>
    <?php 
	include "common/nav.php";
?>
<form method="POST" action="http://localhost/project/controller/vendor/addcar.php">
	
	<div class="cssclass">
</br></br>
	<label class="CB">MODEL NAME:</label>
	<input type="text" name="MODELNAME" size="20">
</br></br></br></br>
    <label class="CB">COMPANY NAME:</label>
    <input type="text" name="COMPANYNAME" size="20">
</br></br></br></br>
    <label class="text">CAR TYPE:</label>
<select class="select" >
	<optgroup label="BRANDS AVAILABLE">
	<option name="type" value="SPORTS">SPORTS</option>
	<option name="type" value="HATCHBACK">HATCHBACK</option>
	<option name="type" value="SUV">SUV</option>
    <option name="type" value="LUXURY">LUXURY</option>
    <option name="type" value="SEDAN">SEDAN</option>
</select>
</br></br></br></BR>
<label class="text">NO_OF_SEATS:</label>
<select class="select" >
	<optgroup label="NO_OF_SEATS">
	<option name="seats" value="FIVE">FIVE</option>
	<option name="seats" value="SEVEN">SEVEN</option>
</select>
</br>
    </br></br></br></br>
     <label class="text"> COLOUR:</label>
        <input type="text" name="COLOUR" size="20">
     
      
</select>
</br></br></br></br>
   <label class="beste">
	 RC_NO: </label><input type="text" name="RC_NO" size="20">
	
</br></br></br></br>
<label class="beste"> PRICE: </label><input type="text" name="PRICE" size="20">
</br></br></br></br>
   <input type="submit" class="submit" name="addcar" value="car" size="50">
</div>
</form>
</body>
</html>




