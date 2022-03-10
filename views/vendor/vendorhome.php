<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/allcss.css">
	<title>Vendor Page</title>
</head>
<body>

<header class="header">
	<h2 class="vendorheader">CAR AND BIKE RENTALS</h2>
</header>

<div>
<?php 
	include_once "common/nav.php";
	// if(isset($_SESSION["id"])){
	// 	header("Location:http://localhost/project/views/vendor/login.php");
	// }
	if(isset($_GET["insert"])){
		if($_GET["insert"] == "success"){
			echo '<script>alert("Vehicle Inserted")</script>';
		}
	}	
?>
</nav>

<div class="grid-container">
	<div class="grid-item">
		<img src="static/images/19199498.jpg" alt="" height="400px">
			<img src="static/images/19199058.jpg" alt="" >
	</div>
 </div>

<footer class="footer">
	<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> | 
		<a href="terms&conditions.html"> Terms & Conditions </a> </h5>
</footer>

</body>
</html>
