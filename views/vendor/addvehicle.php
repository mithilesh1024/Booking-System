<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/addvehiclecss.css">
	<title>Vendor Page</title>
</head>
<body>
<?php 
	include $_SERVER['DOCUMENT_ROOT']."/project/views/vendor/common/navbar.php";

?>
<form>
	<label class="vehicle">VEHICLETYPE</label>
	<label class="text">Name</label>
	<input type="text" name="name" >
	<div class="cssclass">
</br></br></br></br>
	<label class="CB">TWO WHEELER:</label>
	<input type="checkbox" name="bike" value="TWO WHEELER">
</br></br></br></br>
    <label class="CB">FOUR WHEELER:</label>
    <input type="checkbox" name="car" value="FOUR WHEELER">
</br></br></br></br>
    <label class="text">CHOOSE BRAND:</label>
	<input type="text" name="brand" >
    </br></br></br></br>
    <label class="text">CHOOSE COLOUR:</label>
	<input type="text" name="color" >
</br></br></br></br>
   <label class="beste">
	 RC_NO:<input type="text" name="RC_NO" size="50">
	</label>
</br></br></br></br>
<label class="beste"> PRICE:<input type="text" name="PRICE" size="50"></label>
</br></br></br></br>
<label class="submit">
   <input type="SUBMIT" value="SUBMIT" name="submit" size="50">
   </label>
</div>
</form>
</body>
</html>




