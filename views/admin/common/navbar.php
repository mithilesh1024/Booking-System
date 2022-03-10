<?php
session_start(); 
    echo '
        <div class="nav-bar">
        <div class="header">
        	<center> <h2>CAR & BIKE RENTALS - ADMIN</h2> </center>
		</div>
		<br><br><br>
        <ul>
	    	<li><a href="admin.php"> DASHBOARD </a></li>
	    	<li><a href="userslist.php"> USERS LIST </a></li>
	    	<li><a href="vendorslist.php"> VENDORS LIST </a></li>
	    	<li><a href="orderhistory.php"> ORDER HISTORY </a></li>
	    	<li><a href="queries.php"> QUERIES </a></li>';
	    	if(isset($_SESSION["login"])){
	    	echo '<li><a href="http://localhost/project/views/user/home.php"> LOGOUT </a></li>';
		    }
		    echo'</ul>
	        </div>';
?>