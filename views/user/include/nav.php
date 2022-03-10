<?php
session_start();
    echo '<div class="nav-bar">
        <div class="navlogo"><a href="home.php">
        <img src="static/image/logo.png" alt="logo"></a></div>
        <ul>
        <li><a href="http://localhost/project/views/user/home.php">Home</a></li>
        <li><a href="http://localhost/project/views/user/about.php">About</a></li>
        <li><a href="http://localhost/project/views/user/cars.php">Cars</a></li>
        <li><a href="http://localhost/project/views/user/bikes.php">Bikes</a></li>
        <li><a href="http://localhost/project/views/user/checkorders.php">My Orders</a></li>
        <li><a href="http://localhost/project/views/user/cart.php">Cart</a></li>';
        if(isset($_SESSION["id"])){
            echo '<li><a href="http://localhost/project/controller/user/logout.php">Logout</a></li>';
        }else{
            echo '<li><a href="http://localhost/project/views/auth/create_account.php">Create Account</a></li>
             <li><a href="http://localhost/project/views/auth/login.php">Login</a></li>';
        }
        echo '</ul>';
    echo '</div>';
?>