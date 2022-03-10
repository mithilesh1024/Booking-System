<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Admin Page</title>
</head>

<body>

	<header class="header">
		<h2 class="adminheader">ADMIN</h2>
	</header>

	<?php
	include_once "./common/navbar.php";
	?>

	<div class="container1">
	<?php 
		include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
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

	<!-- <div class="container2">
		<div>
			<label>Analytics</label>
			<label>Graph</label>
		</div>
	</div> -->


	<footer class="footer">
		<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> |
			<a href="terms&conditions.html"> Terms & Conditions </a>
		</h5>
	</footer>

</body>

</html>

<!--
<div class="buttonholder">
	<button class="dashboardb">Dashboard</button>
	<a href="home.html"><button  class="logoutb">Logout</button></a>
</div>

<hr>
-->