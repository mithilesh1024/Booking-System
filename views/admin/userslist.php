<?php 
	include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/checkLogin.php";
	// check();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Registered User List</title>
</head>

<body>
	<header class="header">
		<h2 class="adminheader">ADMIN</h2>
	</header>
	<?php
	include_once "./common/navbar.php";
	?>
	<hr>
	<div class="tablename">
		<h3> User List </h3>
	</div>
	<hr>
	<hr>
	<div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="ascuserid">Asc. User-ID</option>
			<option name="sort" value="desuserid">Des. User-ID</option>
			<option name="sort" value="ascage">Asc. Age</option>
			<option name="sort" value="desage">Des. Age</option>
		</select>
		<button onclick="">Apply</button>

		<label class="searchtabletext">Search Table</label>
		<input type="text" name="searchtabletext">
		<button onclick="">Search</button>
	</div>
	<hr>

	<div class="tablecontainer">
		<table class="infotable">
			<tr>
			<?php
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/user.php";
				$a = init();
				foreach ($a as $value) {
					echo '<th>' . $value . '</th>';
				}
			?>
			</tr>
			<tr>
			<?php 
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/user.php";
				$i=0;
				$list = displayUsers();
				$n = mysqli_num_rows($list);
				while ($n--) {
					$user = mysqli_fetch_assoc($list);
					echo '<tr>';
					echo '<td>'.++$i.'</td>';
					echo '<td>'.$user["id"].'</td>';
					echo '<td>'.$user["fname"].' '.$user["mname"].' '.$user["lname"].'</td>';
					echo '<td>'.$user["email"].'</td>';
					echo '<td>'.$user["age"].'</td>';
					echo '<td>'.$user["mobile_no"].'</td>';
					echo '<td>'.$user["address"].'</td>';
					// echo '<td>'.$list["Date of birth"].'</td>';
					// echo '<td>'.$list["Date Of Registration"].'</td>';
					echo '<td>';
						echo '<button onclick="">Block</button>';
						echo '<button onclick="">Delete</button>';
					echo '</td>';
					echo '</tr>';
				}
			?>
			</tr>		
		</table>
	</div>

	<footer class="footer">
		<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> |
			<a href="terms&conditions.html"> Terms & Conditions </a>
		</h5>
	</footer>

</body>

</html>