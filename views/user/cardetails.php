<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/vehicledetails.css" >
    <title>Car & Bike Rentals - Car Details</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <br>
    <div class="pageheading">
        <p><center>Vehicle Details</center></p>
    </div>
    <br>
    </div>
</div>
        <div class="container1">
          <div class="vehiclepic">
            <img src="static/image/car2">
          </div>
          <div class="detailsfont">
          <?php
                echo '<p>Model Name: '.$_GET["mn"].'</p>';
                echo '<p>Manufacturer: '.$_GET["company"].'</p>';
                echo '<p>Type: '.$_GET["type"].'</p>';
                echo '<p>No. of seats: '.$_GET["seat"].' seats</p>';
                echo '<p>Colour: '.$_GET["color"].'</p>';
                echo '<p>Price: Rs'.$_GET["price"].'</p>';
            ?>
            <p>
                <?php 
                    echo '<button type="submit" name="book" value="'.$_GET["id"].'" class="gridbutton" onclick=""> Book now </button>';
                ?>

                 <a href="cars.php">
                    <button class="gridbutton2" onclick=""> Back </button>
                </a> 
            </p>
          </div>
        </div>
    </div>

<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>

</body>

</html>