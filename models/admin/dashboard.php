<?php 
	include $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
	function getquestioncount(){
		include $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
    	$sql="SELECT COUNT(id) FROM query";
    	$result = $connect->query($sql);
    	$questioncount = mysqli_fetch_assoc($result);
    	return $questioncount['COUNT(id)'];
	}

    function getvendorcount(){
		include $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
    	$sql="SELECT COUNT(id) FROM vendor";
    	$result = $connect->query($sql);
    	$vendorcount = mysqli_fetch_assoc($result);
    	return $vendorcount['COUNT(id)'];
	}
    
    function getusercount(){
		include $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
    	$sql="SELECT COUNT(id) FROM user";
    	$result = $connect->query($sql);
    	$usercount = mysqli_fetch_assoc($result);
    	return $usercount['COUNT(id)'];
	}

    function getordercount(){
		include $_SERVER['DOCUMENT_ROOT'] . "/project/models/config.php";
    	$sql="SELECT COUNT(id) FROM orders";
    	$result = $connect->query($sql);
    	$ordercount = mysqli_fetch_assoc($result);
    	return $ordercount['COUNT(id)'];
	}
?>