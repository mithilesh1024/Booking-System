<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Car & Bike Renatals - Admin</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
	?>

	<br><br><br><br>
	<div class="container1">
		<?php
			include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
		?>

		<div class="adpanel1">
			<center>
			<br>
			<label class=adpaneltext>
				ORDERS
				<br>
				<?php
					include_once $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
					$a= getorderno();
					echo $a;				
				?>
			</center>
			</label>
		</div>

		<div class="adpanel1">
			<center>
			<br>
			<label class=adpaneltext>
				USERS
				<br>
				<?php
					include_once $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
					$b= getuserno();
					echo $b;				
				?>
			</center>
			</label>
		</div>

		<div class="adpanel1">
			<center>
			<br>
			<label class=adpaneltext>
				VENDORS
				<br>
				<?php
					include_once $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
					$c= getvendorno();
					echo $c;				
				?>
			</center>
			</label>
		</div>

		<div class="adpanel1">
			<center>
			<br>
			<label class=adpaneltext>
				QUESTIONS
				<br>
				<?php
					include_once $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
					$d = getquestionno();
					echo $d;		
				?>

			</center>
			</label>
		</div>
	</div>



	<?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/adminfooter.php";
    ?>
</body>
</html>

<!-- <?php 
		include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/admin.php";
		$a = render();
		foreach($a as $key => $value){
			echo 
			'<div class="adpanel1">
			<center>
			<br>
			<label class=adpaneltext>';
			echo $key. " " . $value;
			echo
			'</center>
			</label>
			</div>';
		}
	?> -->