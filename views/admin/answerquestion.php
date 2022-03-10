<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/checkLogin.php";
// check();
?>

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

	<div class="form-container">
		<h2>Answer Form</h2>
		<form class="form" name="questionanswerform" method="post" action="http://localhost/project/controller/admin/query.php">
			<label>Question ID: </label>
			<input type="text" id="id" class="row-data" name="id" readonly>
			<br>
			<label>Date of posting: </label>
			<input type="text" id="dop" class="row-data" name="dop" readonly>
			<br>
			<label>Question: </label>
			<input type="text" id="sub" class="row-data" name="sub" readonly>
			<br>
			<label>Question description: </label>
			<input type="text" id="question" class="row-data" name="question" readonly>
			<br>
			<label>Type Answer: </label>
			<br>
			<!-- <textarea cols="50" rows="10"></textarea> -->
			<input type="text" name="text" class="textbox" id="ans">
			<br>
			<input type="submit" name="answer" value="Post Answer" id="postanswer">
			<input type="reset" name="reset" value="Clear" class="resetanswer">
		</form>
		<br>
		<a href="http://localhost/project/views/admin/queries.php">
			<button class="backbutton">Back</button>
		</a>
	</div>

	<footer class="footer">
		<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> |
			<a href="terms&conditions.html"> Terms & Conditions </a>
		</h5>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script defer>
		window.onload = function() {
			var rows = document.querySelectorAll('.row-data');
			rows[0].value = localStorage.getItem('id')
			rows[1].value = localStorage.getItem('dop')
			rows[2].value = localStorage.getItem('sub')
			rows[3].value = localStorage.getItem('question')
		}
		// var postAns = document.getElementById('postanswer')

		// postAns.addEventListener("click", () => {
		// 	var answer = document.getElementById("ans").value;
		// 	if(answer.length > 0) {
		// 		data = {
		// 			id: localStorage.getItem('id'),
		// 			answer: answer
		// 		}
		// 		$.ajax({
		// 			url : "https://example.com/rest/getData", // Url of backend (can be python, php, etc..)
		// 			type: "POST", // data type (can be get, post, put, delete)
		// 			data : data, // data in json format
		// 			async : false, // enable or disable async (optional, but suggested as false if you need to populate data afterwards)
		// 			success: function(response, textStatus, jqXHR) {
		// 				console.log(response);
		// 			},
		// 			error: function (jqXHR, textStatus, errorThrown) {
		// 				console.log(jqXHR);
		// 				console.log(textStatus);
		// 				console.log(errorThrown);
		// 			}
		// 		});
		// 	}
		// })
	</script>
</body>

</html>