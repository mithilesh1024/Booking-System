<?php
    $list = [];
    function init(){
        $array = ["Sr.No",
		"Vendor ID",
		"Name",
		"Email ID",
		"Age",
		"Phone No.",
		"Address"];
        
		// "Date Of Registration",
        // "Rating",
		// "Date of birth",
        // "No. of Vehicles",
        return $array;
    }

    function displayVendor(){
        include $_SERVER['DOCUMENT_ROOT']."/project/models/admin/vendor.php";
        global $list;
        $list = getVendor();
        // $list = [["Sr.No"=>"01",
        // "ID"=>"10",
        // "Date Of Registration"=>"11-11-1111",
        // "Email ID"=>"dummy@dummy.com",
        // "Name"=>"Dummy1",
        // "Date of birth"=>"10-10-2001",
        // "Age"=>"20",
        // "Phone No."=>"1223456789",
        // "Address"=>"Panjim, Goa",
        // "Rating" => 5,
        // "No. of Vehicles" => 6],
        // ["Sr.No"=>"01",
        // "ID"=>"10",
        // "Date Of Registration"=>"11-11-1111",
        // "Email ID"=>"dummy@dummy.com",
        // "Name"=>"Dummy1",
        // "Date of birth"=>"10-10-2001",
        // "Age"=>"20",
        // "Phone No."=>"1223456789",
        // "Address"=>"Panjim, Goa",
        // "Rating" => 5,
        // "No. of Vehicles" => 6],
        // ["Sr.No"=>"01",
        // "ID"=>"10",
        // "Date Of Registration"=>"11-11-1111",
        // "Email ID"=>"dummy@dummy.com",
        // "Name"=>"Dummy1",
        // "Date of birth"=>"10-10-2001",
        // "Age"=>"20",
        // "Phone No."=>"1223456789",
        // "Address"=>"Panjim, Goa",
        // "Rating" => 5,
        // "No. of Vehicles" => 6]];
        return $list;
    }

    function sortVendor(){
        if(!empty($list)){

        }
    }
?>