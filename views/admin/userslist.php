<?php 
	include $_SERVER['DOCUMENT_ROOT']."/project/controller/admin/checkLogin.php";
	// check();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="static/allcss.css">
	<title>Car & Bike Rentals - Users List</title>
</head>

<body>
	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
	?>

			<center><h3> Users List </h3></center>

	<div class="tableSearch">
		<!-- <form action="http://localhost/project/controller/admin/userfilter.php" method="GET">
    <div>
        <label>Filter:</label>
        <?php 
        echo '<select name="userFilter">';
        if(!isset($_GET["fil"])){
            echo '<option value="auid" selected>Show All</option>';
            echo '<option value="auid">Ascending User-ID</option>';   
            echo '<option value="duid">Descending User-ID</option>';
        }
        else{
            $filter = $_GET["fil"];
            if($filter == "auid"){
                // echo "auid";
                echo '<option value="newf" >Show All</option>';
                echo '<option value="auid" selected>Ascending User-ID</option>';
                echo '<option value="duid">Descending User-ID</option>';                
            }
            else if($filter == "duid"){
                echo '<option value="newf">Show All</option>';
                echo '<option value="auid">Ascending User-ID</option>';
                echo '<option value="duid" selected>Descending User-ID</option>';
            }
        }
        echo '</select>';
        
        ?>
        <button type="submit" name="filter" value="f" class="but">Apply</button>
    </div>
    </form> -->

		<!-- <label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="ascuserid">Asc. User-ID</option>
			<option name="sort" value="desuserid">Des. User-ID</option>
			<option name="sort" value="ascage">Asc. Age</option>
			<option name="sort" value="desage">Des. Age</option>
		</select>
		<button class="but" onclick="">Apply</button> -->
	</div>
	<div class="tablecontainer">
		<table class="infotable">
			<tr>
			<?php
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/user.php";
				
				$a = init();
				foreach ($a as $value) {
					echo '<th>' . $value . '</th>';
				}
			?>
			</tr>
			<tr>
			<?php 
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/user.php";
				$i=0;

				if(isset($_GET["fil"])){
                $filter = $_GET["fil"];
            }else{
                $filter = "default";
            }
            switch($filter){
                case "auid":
                    $list = auid();
                    break;
                case "duid":
                    $list = duid();
                    break;
                default:
                    $list = displayUsers();
                    break;
            }
				$n = mysqli_num_rows($list);
			if($n > 0){	
				while ($n--) {
					$user = mysqli_fetch_array($list);
					echo '<tr>';
					echo '<td>'.++$i.'</td>';
					echo '<td>'.$user["id"].'</td>';
					// echo '<td>'.$user["dor"].'</td>';
					echo '<td>'.$user["fname"].' '.$user["mname"].' '.$user["lname"].'</td>';
					echo '<td>'.$user["email"].'</td>';
					echo '<td>'.$user["age"].'</td>';
					echo '<td>'.$user["mobile_no"].'</td>';
					echo '<td>'.$user["address"].'</td>';
					// 	echo '<div class="action">
					// 		  <button class="blockbutton">Block</button>';
					// 	echo '<button class="deletebutton">Delete</button>
					// 		  </div>';
					// echo '</td>';
					echo '</tr>';
				}
			}else{
                echo "NOT AVAILABLE";
            }
			?>
			</tr>		
		</table>
	</div>

	<?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/adminfooter.php";
    ?>
</body>
</html>