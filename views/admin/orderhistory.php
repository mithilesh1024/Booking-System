<?php 
	include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/checkLogin.php";
	// check();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Order History</title>
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
		<h3> Order List </h3>
	</div>
	<hr>
	<hr>
	<div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="viewpending">View Pending Orders</option>
			<option name="sort" value="viewanswered">View Completed Orders</option>
			<option name="sort" value="ascvendorid">Asc. Vendor-ID</option>
			<option name="sort" value="desvendorid">Des. Vendor-ID</option>
			<option name="sort" value="ascuserid">Asc. User-ID</option>
			<option name="sort" value="desuserid">Des. User-ID</option>
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
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/orders.php";
				$a = init();
				foreach ($a as $value) {
					echo '<th>' . $value . '</th>';
				}
				?>
			</tr>
			<tr>
			<?php 
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/orders.php";
				$list = displayOrder();
				$i=0;
				$n = mysqli_num_rows($list);
				while($n--){
                    $value = mysqli_fetch_array($list);
					echo '<tr>';
					echo '<td>'.++$i.'</td>';
					echo '<td>'.++$i.'</td>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['date_of_order'].'</td>
                        <td>'.$value['dor'].'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['type'].'</td>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['color'].'</td>
                        <td>'.$value['price'].'</td>';
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

	<footer class="footer" id="#bottom">
		<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> |
			<a href="terms&conditions.html"> Terms & Conditions </a>
		</h5>
	</footer>

</body>

</html>