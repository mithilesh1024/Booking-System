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
	<title>Car & Bike Rentals - Order History</title>
</head>

<body>
	<?php
		include $_SERVER['DOCUMENT_ROOT']."/project/views/admin/common/navbar.php";
	?>
	
	<div class="tablename">
		<h3> Orders List </h3>
	</div>
	<!-- <div class=tableSearch>
		<label>Filter:</label>
		<select name="sort">
			<option name="sort" value="NewestFirst">Newest First</option>
			<option name="sort" value="OldestFirst">Oldest First</option>
			<option name="sort" value="viewpending">View Pending Orders</option>
			<option name="sort" value="viewanswered">View Completed Orders</option>
			<option name="sort" value="ascvendorid">Asc. Vendor-ID</option>
			<option name="sort" value="desvendorid">Des. Vendor-ID</option>
			<option name="sort" value="ascuserid">Asc. User-ID</option>
			<option name="sort" value="desuserid">Des. User-ID</option>
		</select>
		<button class="but" onclick="">Apply</button>
	</div> -->

	<div class="tablecontainer">
		<table class="infotable">
			<tr>
				<?php
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/orders.php";
				$a = init();
				foreach ($a as $value) {
					echo '<th>' . $value . '</th>';
				}
				?>
			</tr>
			<tr>
			<?php 
				include_once $_SERVER['DOCUMENT_ROOT'] . "/project/controller/admin/orders.php";
				$car = getCarOrder();
                $bike = getBikeOrder();
                $i=0;
                if(!empty($car)){
                $n = mysqli_num_rows($car);
                while($n--){
                    $value = mysqli_fetch_array($car);
                        echo '
                        <tr>
                        <td>'.++$i.'</td>
                        <td>'.$value['o_id'].'</td>
                        <td>'.$value['v_id'].'</td>
                        <td>'.$value['date_of_order'].'</td>
                        <td>'.$value['dor'].'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['type'].'</td>
                        <td>'.$value['c_id'].'</td>
                        <td>'.$value['color'].'</td>
                        <td>'.$value['price'].'</td>
                        <td>';
                        // <button type="submit" class="button" name="carmoredetails" value='.$value["o_id"].'>More Details</button>';
                        // if($value['date_of_order'] > date("Y-m-d")){
                        //     echo '<button type="submit" class="button2" name="deleteorder" value='.$value["o_id"].'>Cancel Order</button>';
                        // }
                        // if(!empty($value['feedback'])){
                        //     echo '<button type="submit" class="button3" name="feedback" value="'.$value["o_id"].'">Check Feedback</button>';
                        // }
                    echo '</td>
                    </tr>';
				}

				//display bikes
				if(!empty($bike)){
                    $n = mysqli_num_rows($bike);
                    while($n--){
                        $value = mysqli_fetch_array($bike);
                            echo '
                            <tr>
                            <td>'.++$i.'</td>
                            <td>'.$value['o_id'].'</td>
                            <td>'.$value['v_id'].'</td>
                            <td>'.$value['date_of_order'].'</td>
                            <td>'.$value['dor'].'</td>
                            <td>'.$value['name'].'</td>';
                            // <td>'.$value['type'].'</td>
                            echo '<td> 2 Wheeler </td>';
                            echo '<td>'.$value['c_id'].'</td>
                            <td>'.$value['color'].'</td>
                            <td>'.$value['price'].'</td>
                            <td>';
                            // <button type="submit" class="button" name="bikemoredetails" value='.$value["o_id"].'>More Details</button>';
                            // if($value['date_of_order'] > date("Y-m-d")){
                            //     echo '<button type="submit" class="button2" name="deleteorder" value='.$value["o_id"].'>Cancel Order</button>';
                            }
                            // if(!empty($value['feedback'])){
                            //     echo '<button type="submit" class="button3" name="feedback" value="'.$value["o_id"].'">Feedback</button>';
                            // }
                        echo '</td>
                        </tr>
                        </form>';
                    }
                }else{
                    echo '<h1>No orders</h1>';
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