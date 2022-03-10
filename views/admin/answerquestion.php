<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/checkLogin.php";
// check();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Car & Bike Rentals - Answer User Question</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
		if(!isset($_GET["id"])){
			header("http://localhost/project/views/admin/queries.php");
		}
	?>

<br><br>
	<div class="form-container">
		<br>
		<h2><center>Answer Question</center></h2>
		<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/query.php";
			$i = 0;
			$id = $_GET["id"];
			$list = displayQuestionDetails($id);
			$n = mysqli_num_rows($list);
			$value = mysqli_fetch_array($list);
			echo '<form name="answerquestion" action="http://localhost/project/controller/admin/answer.php" method="post">';
			echo '<div class="feedbackform">';
            echo '<p>Question ID: '.$id.'</p>';
            echo '<br>';
            echo '<p>Date of Posting: '.$value["dop"].'</p>';
            echo '<br>';
            echo '<p>Question: '.$value["question"].'</p>';
            echo '<br>';
            echo '<br>';
			echo '<label>Type Answer: </label>
					<br><br>
			<input type="text" name="answer" class="textbox" id="ans">
			<br><br>
			<button type="submit" class="postanswer" name="postanswer" value="'.$_GET["id"].'">Post Answer</button>
			<input type="reset" name="reset" value="Clear" class="resetanswer">
			</form>';
		echo '<br><br>';
		echo '<a href="http://localhost/project/views/admin/queries.php">
			<button class="backbutton">Back</button>
		</a><br><br>';
		echo '</div>';
	?>
</div>
<br><br>

	<?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/adminfooter.php";
    ?>
</body>
</html>