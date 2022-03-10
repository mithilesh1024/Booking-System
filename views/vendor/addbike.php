<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/addvehiclecss.css">
	<title>Vendor Page</title>
</head>
<body>
	<div class="vehicle">ADDBIKE</div>

	<?php 
	include "common/nav.php";
?>

	
	<div class="cssclass">
		
</br></br>
<form action="http://localhost/project/controller/vendor/addcar.php" method="POST">
	<label class="CB">BIKENAME:</label>
	<input type="text" name="BIKENAME" size="20">
</br></br></br></br>
    <label class="CB">COMPANYNAME:</label>
    <input type="text" name="COMPANYNAME" size="20">
</br></br></br></br>
    <label class="text">BIKE_TYPE:</label>
<select class="select" >
	<optgroup label="TYPES">
	<option name="type" value="MANUAL">MANUAL</option>
	<option name="type" value="AUTO">AUTO</option>
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
<label class="submit">
   <input type="submit" name="addbike" value="bike" size="50">
   </label>
</div>
</form>
</body>
</html>




