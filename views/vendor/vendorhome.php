<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Vendor Page</title>
</head>
<body>

<header class="header">
	<h2 class="vendorheader">VENDOR</h2>
</header>
<?php 
	include_once $_SERVER['DOCUMENT_ROOT']."/project/views/vendor/common/navbar.php";

?>
<div class="imagecontainer">
 <img src="static/images/19199498.jpg" alt="" height="400px">
 <img src="static/images/19199058.jpg" alt="" >
 </div>

 <div class="container1">
	<?php 
		include $_SERVER['DOCUMENT_ROOT']."/project/controller/vendor/home.php";
		$a = render();
		foreach($a as $key => $value){
			echo '<div class="adpanel1">
			<label class=adpaneltext>';
			echo $key. " " . $value;
			echo '</label>
				</div>';
		}
	?>
	</div>

<footer class="footer">
	<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> | 
		<a href="terms&conditions.html"> Terms & Conditions </a> </h5>
</footer>

</body>
</html>