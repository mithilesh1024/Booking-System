<?php
    // session_start();
    // if(!isset($_SESSION['id'])){
    //     header("Location: http://localhost/project/views/auth/login.php");
    // }
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
    <?php 
        include_once "include/nav.php";
        if(!isset($_SESSION["id"])){
            header("Location:http://localhost/project/views/user/home.php");
        } 
    ?>
    <div class="tagholder">
            <h2><center>My Orders</center></h2>
    </div>
    <br>

    <!-- <div class="searchbar">
    <div>
        <label>Filter:</label>
        <select name="" class="selec">
          <option>Newest First</option>
          <option>Oldest First</option>
        </select>
        <button class="but" onclick="">Apply</button>
    </div> -->

    <br>

<div class="tablecontainer">
        <table class="infotable">
            <?php 
                $array = ["Sr.No","Order No.","Date of Order","Date of Return","Vehicle Name","Vehicle Type","Vehicle ID","Vehicle Color","Amount","Action"];
                foreach($array as $value){
                    echo '<th>'.$value.'</th>';
                }
            ?>
            <?php 
                include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/checkorder.php';
                $car = getCarOrder();
                $bike = getBikeOrder();
                $i=0;
                if(!empty($car)){
                $n = mysqli_num_rows($car);
                while($n--){
                    $value = mysqli_fetch_array($car);
                        echo '
                        <form method="GET" action="http://localhost/project/controller/user/checkorders.php">
                        <tr>
                        <td>'.++$i.'</td>
                        <td>'.$value['o_id'].'</td>
                        <td>'.$value['date_of_order'].'</td>
                        <td>'.$value['dor'].'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['type'].'</td>
                        <td>'.$value['c_id'].'</td>
                        <td>'.$value['color'].'</td>
                        <td>'.$value['price'].'</td>
                        <td>
                        <button type="submit" class="button" name="carmoredetails" value='.$value["o_id"].'>More Details</button>';
                        if($value['date_of_order'] > date("Y-m-d")){
                            echo '<button type="submit" class="button2" name="deleteorder" value='.$value["o_id"].'>Cancel Order</button>';
                        }
                        if($value['dor'] < date("Y-m-d")){
                            echo '<button type="submit" class="button3" name="feedback" value="'.$value["o_id"].'">Feedback</button>';
                        }
                    echo '</td>
                    </tr>
                    </form>';
                }
                //DISPLAY BIKE ORDERS
                if(!empty($bike)){
                    $n = mysqli_num_rows($bike);
                    while($n--){
                        $value = mysqli_fetch_array($bike);
                            echo '
                            <form method="GET" action="http://localhost/project/controller/user/checkorders.php">
                            <tr>
                            <td>'.++$i.'</td>
                            <td>'.$value['o_id'].'</td>
                            <td>'.$value['date_of_order'].'</td>
                            <td>'.$value['dor'].'</td>
                            <td>'.$value['name'].'</td>';
                            // <td>'.$value['type'].'</td>
                            echo '<td> 2 Wheeler </td>';
                            echo '<td>'.$value['c_id'].'</td>
                            <td>'.$value['color'].'</td>
                            <td>'.$value['price'].'</td>
                            <td>
                            <button type="submit" class="button" name="bikemoredetails" value='.$value["o_id"].'>More Details</button>';
                            if($value['date_of_order'] > date("Y-m-d")){
                                echo '<button type="submit" class="button2" name="deleteorder" value='.$value["o_id"].'>Cancel Order</button>';
                            }
                            if($value['dor'] < date("Y-m-d")){
                                echo '<button type="submit" class="button3" name="feedback" value="'.$value["o_id"].'">Feedback</button>';
                            }
                        echo '</td>
                        </tr>
                        </form>';
                    }
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