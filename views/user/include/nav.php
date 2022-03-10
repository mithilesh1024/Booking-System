<?php
    session_start();
    echo '<div class="nav-bar">
        <div class="navlogo"><a href="home.php">
        <img src="static/image/logo.png" alt="logo" class="navlogo"></a></div>
        <ul>
        <li><a href="http://localhost/project/views/user/home.php">Home</a></li>
        <li><a href="http://localhost/project/views/user/cars.php">Cars</a></li>
        <li><a href="http://localhost/project/views/user/bikes.php">Bikes</a></li>';
        if(isset($_SESSION["id"])){
            echo '<li><a href="http://localhost/project/views/user/myaccount.php">My Account</a></li>';
            echo '<li><a href="http://localhost/project/views/user/checkorders.php">My Orders</a></li>
            <li><a href="http://localhost/project/controller/user/logout.php">Logout</a></li>';
        }else{
            echo '
             <li><a href="http://localhost/project/views/auth/login.php">User Login</a></li>
             <li><a href="http://localhost/project/views/vendor/login.php">Vendor Login</a></li>
             <li><a href="http://localhost/project/views/admin/login.php">Admin Login</a></li>

             <li><a href="http://localhost/project/views/auth/create_account.php">Create User Account</a></li>
             <li><a href="http://localhost/project/views/vendor/create_account.php">Create Vendor Account</a></li>
             ';
             
        }
        echo '</ul>';
    echo '</div>';
?>