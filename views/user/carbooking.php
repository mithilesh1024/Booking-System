<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
    <link rel="stylesheet" href="static/css/carbooking.css" />
    <title>Car & Bike Rental - Booking </title>
</head>

<body>
    <?php 
		include_once "include/nav.php";
		$id = $_GET["id"]; 
		if(!isset($_SESSION['id'])){
    	    header("Location: http://localhost/project/views/auth/login.php?p=c&id=".$id);
    	}
	?>
    <br>
    <br>

    <div class="form-container">
    	<br>
	<h2><center>Vehicle Booking</center></h2>
	<?php 
		
		include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/placeorder.php';
		$id = $_GET["id"];
		$v = $_GET["v"];
		if($v == "c"){
			$list = displayCar($id);
		}
		else{
			$list = displayBike($id);
		}
		$value = mysqli_fetch_array($list);
		echo '<form class="feedbackform" name="orderfeedbackform" method="post" action="http://localhost/project/controller/user/placeorder.php">
		<br><br>';
		$image = imagecreatefromstring($value["image"]); 
		ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
		imagejpeg($image, null, 80);
		$data = ob_get_contents();
		ob_end_clean();
		echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
		echo '<br><br>
			
				Vehicle Model Name: '.$value["name"].'
			<br><br>
				Manufacturer: '.$value["company"].'
			<br><br>
				Type: '.$value["type"].'
			<br><br>';
			if($v == "c"){
				echo 'No. Of seats: '.$value["no_of_seats"];
			}else{
				echo 'No. Of seats: 2';
			}
			echo '<br><br>
				Color: '.$value["color"].'
			<br><br>
				Price: '.$value["price"].' per day
			<br><br>
				Date of Departure:
				<input type="date" id="dod" min="2021-12-19" onchange="updatedod()" name="dateofdeparture">
			<br><br>';
			echo '	Date of Return:
				<input type="date" id="dor" min="2021-12-19" onchange="updatedor()" name="dateofreturn">
			<br><br>';
			echo '<hr width="80%">
			<br>
			<label class="amounttext">Total Amount:</label>
			<input type="number" class="amount" name="amount" id="price" value='.$value["price"].' readonly/> 
			<br><br>
			<h6 class="Note">Amount to be payed at the time of pickup of the vehicle</h6>
			<hr width="80%">
			<br>
	<div class="buttonholder">';
			if($v == "c"){
				echo '<button type="submit" name="carbooking" value="'.$value["id"].'" class="postanswer">Confirm Booking</button>';
			}else{
				echo '<button type="submit" name="bikebooking" value="'.$value["id"].'" class="postanswer">Confirm Booking</button>';
			}
	echo '</div>
</form>';
	?>
	<br>
	<br><br>
</div>
<br>
<br>
<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>
<script type="text/javascript">
	var dod = document.getElementById("dod");
	var dor = document.getElementById("dor");
	var price = document.getElementById("price");
	var init_price = price.value;
	var order;
	var ret;
	var today = new Date().toISOString().split('T')[0];
	dod.setAttribute('min', today); 

	function updatedod(){
		order = dod.value;
		dor.value = "";
		dor.setAttribute('min', order);
		price.value = init_price;
	}

	function updatedor(){
		ret = dor.value;
		if(ret < order){
			dor.value = "";
			dod.value = "";
		}
		var date1 = new Date(order);
		var date2 = new Date(ret);
		// To calculate the time difference of two dates
		var Difference_In_Time = date2.getTime() - date1.getTime();
		// To calculate the no. of days between two dates
		var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
		var new_price = init_price * (Difference_In_Days+1)
		price.value = new_price
	}


</script>
</body>

</html>


