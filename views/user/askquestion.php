<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/askquestion.css" />
    <title>Car & Bike Rental - Ask Question</title>
</head>

<body>
    <?php 
		include_once "include/nav.php"; 
		if(isset($_GET["query"])){
			if($_GET["query"] == 'fail'){
				echo '<script>alert("Failed to insert query")</script>';
			}
		}	
	?>
    <br>
    <br>

    <div class="form-container">
    	<br>
	<h2><center>Ask Question</center></h2>
	<form class="feedbackform" name="askquestionform" method="post" action="http://localhost/project/controller/user/query.php">
		<br><br>
	<label>Type your subject below:(OPTIONAL)</label>
	<br><br>
	<input type="text" name="subject" class="textbox">
	<br><br>
	<label>Type your question below:</label>
	<br><br>
	<input type="textarea" name="question" required="required" class="textbox">
	<br><br>
	<div class="buttonholder">
		<button type="submit" name="submit" value="query" class="postanswer">Submit</button>
		<button type="reset" name="reset" value="" class="resetanswer">Clear</button>
	</div>
</form>
	<br>
	<div class="buttonholder2">
		<a href="home.php">
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


