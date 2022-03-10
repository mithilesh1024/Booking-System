<?php
    $list = [];
    function init(){
        $array = ["Sr.No",
		"Order ID",
		"User ID",
		"Vendor ID",
		"Date of Order",
        "Date of Return",
		"Period",
		"Amount",
		"Vehicle Type",
		"Vehicle ID",
        "Vehicle Color",
        "Action"];

        return $array;
    }

    function displayOrders(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/users.php";
        global $list;
        // $list = getOrders();
        $list = [["Sr.No" => 01,
		"Order ID" => 10,
		"User ID" => 11,
		"Vendor ID" => 12,
		"Date of Order" => "11-11-2011",
        "Date of Return" => "13-11-2011",
		"Period" => "2 days",
		"Amount" => "$1500",
		"Vehicle Type" => "Sedan",
		"Vehicle ID" => "GA-01-1010",
        "Vehicle Color" => "Red"],
        ["Sr.No" => 01,
		"Order ID" => 10,
		"User ID" => 11,
		"Vendor ID" => 12,
		"Date of Order" => "11-11-2011",
        "Date of Return" => "13-11-2011",
		"Period" => "2 days",
		"Amount" => "$1500",
		"Vehicle Type" => "Sedan",
		"Vehicle ID" => "GA-01-1010",
        "Vehicle Color" => "Red"],
        ["Sr.No" => 01,
		"Order ID" => 10,
		"User ID" => 11,
		"Vendor ID" => 12,
		"Date of Order" => "11-11-2011",
        "Date of Return" => "13-11-2011",
		"Period" => "2 days",
		"Amount" => "$1500",
		"Vehicle Type" => "Sedan",
		"Vehicle ID" => "GA-01-1010",
        "Vehicle Color" => "Red"]];
        return $list;
    }

    function sortOrders(){
        if(!empty($list)){

        }
    }
?>