<?php
session_start();
    session_unset();
    header("Location: http://localhost/project/views/user/home.php");
?>