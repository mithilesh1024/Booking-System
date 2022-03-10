<?php 
    echo '<div class="nav-bar">
		<ul>
		<li><a href="home.php">HOME</a></li>
		<li><a href="addcar.php">ADD CAR</a></li>
		<li><a href="addbike.php">ADD BIKE</a></li>
		<li><a href="checkorders.php">CHECK ORDERS</a></li>';
		if(isset($_SESSION["id"])){
			echo '<li><a href="login.php">LOGOUT</a></li>';
		}else{
			echo '<li><a href="checkorders.php">LOGIN</a></li>
			<li><a href="checkorders.php">CREATE ACCOUNT</a></li>';
		}
		echo '</ul>';
	echo '</div>';

?>