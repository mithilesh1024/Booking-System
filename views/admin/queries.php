<?php
include $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/checkLogin.php";
// check();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<!-- <script defer src="js/deleteQuery.js"></script> -->
	<title>Admin - User Questions</title>
</head>

<body>
	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
	?>

	<div class="tablename">
		<h3> Question List </h3>
	</div>

	<!-- <div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="viewpending">View Pending</option>
			<option name="sort" value="viewanswered">View Answered</option>
		</select>
		<button class="but" onclick="">Apply</button>
	</div> -->

	<div class="tablecontainer">
		<table class="infotable">
			<th >Sr.No</th>
			<th >Question ID</th>
			<th >Status</th>
			<th >Posted On</th>
			<th >Answered On</th>
			<th >Question</th>
			<th >Answer</th>
			<th >Action</th>

			<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/query.php";
			$i = 0;
			$list = displayQuestion();
			$n = mysqli_num_rows($list);
			while ($n--) 
			{
				$query = mysqli_fetch_assoc($list);
				echo '<form method="GET" action="http://localhost/project/controller/admin/query.php">';
				echo '<tr id='.$query["id"].'>';
				echo '<td width="5%">' . ++$i . '</td>';
				echo '<td width="5%" class="row-data">' . $query["id"] . '</td>';
				echo '<td width="5%">' . $query["status"] . '</td>';
				echo '<td width="10%" class="row-data">' . $query["dop"] . '</td>';
				if (empty($query["doa"])) {
					echo '<td>NA</td>';
				} else {
					echo '<td width="10%">' . $query["doa"] . '</td>';
				}
				// if (empty($query["subject"])) {
				// 	echo '<td class="row-data">NA</td>';
				// } else {
				// 	echo '<td class="row-data">' . $query["subject"] . '</td>';
				// }
				echo '<td width="20%" class="row-data">' . $query["question"] . '</td>';
				echo '<td width="20%">' . $query["answer"] . '</td>';
				echo '<td width="10%">';
				if (empty($query["answer"])) {
					echo '<button name="answer" class="answerbutton" value="' . $query["id"] . '">Answer</button>';
				}
				else{
					echo '<button name="answer" class="answerbutton" disabled>Done</button>';
				}
				echo '</td>';
				echo '</tr>';
				echo "</form>";
			}
			?>
		</table>

	</div>

	<?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/adminfooter.php";
    ?>

</body>
</html>


<!-- 	<script type="text/javascript">

	/*	function del(){
			var rowid = event.target.parentNode.parentNode.id;
			var data = document.getElementById(rowid).querySelectorAll(".row-data");
			
			window.reload();
		}
	*/	

		// function ans(){
		// 	var rowid = event.target.parentNode.parentNode.id;
		// 	var data = document.getElementById(rowid).querySelectorAll(".row-data");

		// 	localStorage.setItem("id", data[0].innerHTML);
		// 	localStorage.setItem("dop", data[1].innerHTML);
		// 	// localStorage.setItem("sub", data[2].innerHTML);
		// 	localStorage.setItem("question", data[3].innerHTML);
		// 	window.location.href = "http://localhost/project/views/admin/answerquestion.php";
		// }

	</script> -->

