<?php
include $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/checkLogin.php";
// check();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<script defer src="js/deleteQuery.js"></script>
	<title>Admin Page</title>
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
		<h3> Question List </h3>
	</div>
	<hr>
	<hr>
	<div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="viewpending">View Pending</option>
			<option name="sort" value="viewanswered">View Answered</option>
		</select>
		<button onclick="">Apply</button>

		<label class="searchtabletext">Search Table</label>
		<input type="text" name="searchtabletext">
		<button onclick="">Search</button>

	</div>
	<hr>


	<div class="tablecontainer">
		<table class="infotable">
			<th width="50px">Sr.No</th>
			<th width="50px">Question ID</th>
			<th width="50px">Status</th>
			<th width="70px">Date of posting</th>
			<th width="70px">Date of answering</th>
			<th width="150px">Question</th>
			<th width="300px">Question Description</th>
			<th width="300px">Answer</th>
			<th width="150px">Action</th>

			<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/query.php";
			$i = 0;
			$list = displayQuestion();
			$n = mysqli_num_rows($list);
			while ($n--) {
				$query = mysqli_fetch_assoc($list);
				echo '<form action="">';
				echo '<tr id='.$query["id"].'>';
				echo '<td>' . ++$i . '</td>';
				echo '<td class="row-data">' . $query["id"] . '</td>';
				echo '<td>' . $query["status"] . '</td>';
				echo '<td class="row-data">' . $query["dop"] . '</td>';
				if (empty($query["doa"])) {
					echo '<td>NA</td>';
				} else {
					echo '<td>' . $query["doa"] . '</td>';
				}
				if (empty($query["subject"])) {
					echo '<td class="row-data">NA</td>';
				} else {
					echo '<td class="row-data">' . $query["subject"] . '</td>';
				}
				echo '<td class="row-data">' . $query["question"] . '</td>';
				echo '<td>' . $query["answer"] . '</td>';
				echo '<td>';
				if (empty($query["answer"])) {
					echo '<button class="answerbutton" onclick="ans()">Answer</button>';
				}
				echo '<button class="deletebutton" id='.$query["id"].' onclick="del(this.id)">Delete</button>';
				echo '</td>';
				echo '</tr>';
				echo "</form>";
			}
			?>
		</table>

	</div>

	<footer class="footer">
		<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> |
			<a href="terms&conditions.html"> Terms & Conditions </a>
		</h5>
	</footer>

	<script type="text/javascript">

		function del(){
			var rowid = event.target.parentNode.parentNode.id;
			var data = document.getElementById(rowid).querySelectorAll(".row-data");
			
			window.reload();
		}	

		function ans(){
			var rowid = event.target.parentNode.parentNode.id;
			var data = document.getElementById(rowid).querySelectorAll(".row-data");

			localStorage.setItem("id", data[0].innerHTML);
			localStorage.setItem("dop", data[1].innerHTML);
			localStorage.setItem("sub", data[2].innerHTML);
			localStorage.setItem("question", data[3].innerHTML);
			window.location.href = "http://localhost/project/views/admin/answerquestion.php";
		}

	</script>

</body>

</html>