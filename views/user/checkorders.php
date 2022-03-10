<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: http://localhost/project/views/auth/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/checkorders.css">
    <link type="text/javascript" href="js/cancelorder.js">
    <title>Cars & Bike Rentals - My Orders</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <div class="tagholder">
            <h2><center>My Orders</center></h2>
    </div>
    <br>

    <div class="searchbar">
    <div>
        <label>Filter:</label>
        <select class="selec">
          <option>Newest First</option>
          <option>Oldest First</option>
        </select>
        <button class="but" onclick="">Apply</button>
    </div>

    <br>

<div class="tablecontainer">
        <table class="infotable">
            <?php 
                $array = ["Sr.No","Order No.","Vendor ID","Date of Order","Date of Return","Vehicle Type","Vehicle ID","Vehicle Color","Amount","Action"];
                foreach($array as $value){
                    echo '<th>'.$value.'</th>';
                }
            ?>
            <?php 
                include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/checkorder.php';
                $list = getOrder();
                if(!empty($list)){
                    $i=0;
                $n = mysqli_num_rows($list);
                while($n--){
                    $value = mysqli_fetch_array($list);
                        echo '
                        <form method="GET" action="http://localhost/project/controller/user/checkorders.php">
                        <tr>
                        <td>'.++$i.'</td>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['date_of_order'].'</td>
                        <td>'.$value['dor'].'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['type'].'</td>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['color'].'</td>
                        <td>'.$value['price'].'</td>
                        <td>
                        <a href="orderdetails.php"><button class="button" onclick="">More Details</button></a>
                        <button type="submit" name="deleteorder" value='.$value["id"].' class="button2">Cancel Order</button>
                        <button type="submit" class="button3" name="feedback" value="'.$value["id"].'" onclick="">Feedback</button>
                    </td>
                    </tr>
                    </form>';
                }
                }else{
                    echo '<h1>No orders</h1>';
                }
            ?>
        </table>
    </div>

<div class="footer">
   <?php include_once "include/footer.php";?> 
</div>

</body>
</html>