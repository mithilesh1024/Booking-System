<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/feedback.css" />
    <title>Car & Bike Rental - Order Feedback</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <br>
    <br>

    <div class="form-container">
	<h2><center>Order Feedback</center></h2>
	<form class="feedbackform" name="orderfeedbackform" method="post" action="http://localhost/project/controller/user/feedback.php">
		<?php 

			echo '<br>
			Order ID:'.$_GET["id"].'
			<br><br>
			Order Date:'.$_GET["odate"].'
			<br><br>
			<b>Order Details</b>
			<br><br>
			Vehicle Name:'.$_GET["vname"].'
			<br><br>
			Manufacturer:'.$_GET["comp"].'
			<br><br>
			Colour:'.$_GET["color"].'
			<br><br>';

		?>
	<label>Type Feedback Below:</label>
	<br>
	<input type="text" name="feed" class="textbox">
	<br><br>
	<div class="buttonholder">
		<?php
			echo '<button type="submit" name="feedbacksubmit" value="'.$_GET["id"].'" class="postanswer">SUBMIT </button>';
		?>
		<input type="reset" name="reset" value="Clear" class="resetanswer">
	</div>
</form>
	<br>
	<div class="buttonholder2">
		<a href="checkorders.php">
			<button class="backbutton">Back</button>
		</a>
	</div>
	<br><br>
</div>
<br>
<br>
<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>
</body>

</html>


