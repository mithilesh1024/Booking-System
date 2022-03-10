<?php 
session_start();
    echo '<div class="nav-bar">
		<ul>
		<li><a href="vendorhome.php">HOME</a></li>
		<li><a href="addcar.php">ADD CAR</a></li>
		<li><a href="addbike.php">ADD BIKE</a></li>';
		echo '<li><a href="checkorders.php">CHECK ORDERS</a></li>';
		if(isset($_SESSION["id"])){
			echo '<li><a href="http://localhost/project/controller/vendor/logout.php">LOGOUT</a></li>';
		}
		echo '</ul>';
	echo '</div>';

?>