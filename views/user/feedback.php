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
    <?php 
		include_once "include/nav.php"; 
		if(!isset($_SESSION["id"])){
            header("Location:http://localhost/project/views/user/home.php");
        }  
	?>
    <br>
    <br>

    <div class="form-container">
	<h2><center>Order Feedback</center></h2>
	<form class="feedbackform" name="orderfeedbackform" method="post" action="http://localhost/project/controller/user/feedback.php">
		<?php 
			include_once $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/checkorders.php';
			$id = $_GET["id"];
			$checkfeedback = check($id);
			$list = feedback($id);
			$value = mysqli_fetch_array($list);
			$list = mysqli_fetch_array($checkfeedback);
			echo '<br>
			Order ID: '.$id.'
			<br><br>
			Order Date: '.$value["date_of_order"].'
			<br><br>
			Vendor Name: '.$value["fname"].' '.$value["mname"].' '.$value["lname"].'
			<br><br>
			Vehicle Name: '.$value["name"].'
			<br><br>
			Manufacturer: '.$value["company"].'
			<br><br>
			Colour: '.$value["color"].'
			<br><br>';
			if(!empty($checkfeedback)){

			}
			echo '<label>Type Feedback Below:</label>
			<br>';
			if(!empty($list["feedback"])){
				echo '<input type="text" name="feed" value="'.$list["feedback"].'" class="textbox" readonly>
				<br><br>
				<div class="buttonholder">
					<button type="submit" name="feedbacksubmit" value="'.$_GET["id"].'" class="postanswer" disabled>SUBMIT </button>
					<input type="reset" name="reset" value="Clear" class="resetanswer" disabled>
				</div>
			</form>';
			}else{
				echo '<input type="text" name="feed" class="textbox">
				<br><br>
				<div class="buttonholder">
					<button type="submit" name="feedbacksubmit" value="'.$id.'" class="postanswer">SUBMIT </button>
					<input type="reset" name="reset" value="Clear" class="resetanswer">
				</div>
			</form>';
			}
?>
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


