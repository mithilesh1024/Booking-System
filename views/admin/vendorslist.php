<?php 
	include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/checkLogin.php";
	// check();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Car & Bike Rentals - Vendors List</title>
</head>

<body>
	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
	?>
	<div class="tablename">
		<h3> Vendor List </h3>
	</div>
	<!-- <div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="ascvendorid">Asc. Vendor-ID</option>
			<option name="sort" value="desvendorid">Des. Vendor-ID</option>
			<option name="sort" value="ascage">Asc. Age</option>
			<option name="sort" value="desage">Des. Age</option>
		</select>
		<button class="but" onclick="">Apply</button>
	</div> -->

	<div class="tablecontainer">
		<table class="infotable">
			<tr>
				<?php
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/vendor.php";
				$a = init();
				foreach ($a as $value) {
					echo '<th>' . $value . '</th>';
				}
				?>
			</tr>
			<tr>
			<?php 
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/vendor.php";
				$i=0;
				$list = displayVendor();
				$n = mysqli_num_rows($list);
				while ($n--) {
					$vendor = mysqli_fetch_assoc($list);
					echo '<tr>';
					echo '<td>'.++$i.'</td>';
					echo '<td>'.$vendor["id"].'</td>';
					echo '<td>'.$vendor["fname"].' '.$vendor["mname"].' '.$vendor["lname"].'</td>';
					echo '<td>'.$vendor["email"].'</td>';
					echo '<td>'.$vendor["age"].'</td>';
					echo '<td>'.$vendor["mobile_no"].'</td>';
					echo '<td>'.$vendor["address"].'</td>';
					// echo '<td>'.$vendor["Date of birth"].'</td>';
					// echo '<td>'.$vendor["Address"].'</td>';
					// echo '<td>'.$vendor["Rating"].'</td>';
					// echo '<td>'.$vendor["No. of Vehicles"].'</td>';
					// echo '<td>';
					// 	echo '<button onclick="">Block</button>';
					// 	echo '<button onclick="">Delete</button>';
					// echo '</td>';
					echo '</tr>';
				}
			?>
			</tr>	
		</table>
	</div>
	

	<?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/adminfooter.php";
    ?>

</body>
</html>