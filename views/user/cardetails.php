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
          <center>
          <div class="vehiclepic">
              <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/details.php';
                $id = $_GET["id"];
                $list = car($id);
                $value = mysqli_fetch_array($list);
                if(!empty($value["image"])){
                    $image = imagecreatefromstring($value["image"]); 
                ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
                imagejpeg($image, null, 80);
                $data = ob_get_contents();
                ob_end_clean();
                echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
                }else{
                    
                }
            echo '</div>
                <div class="detailsfont">';
                echo '<p>Model Name: '.$value["name"].'</p>';
                echo '<br/>';
                echo '<p>Manufacturer: '.$value["company"].'</p>';
                echo '<br/>';
                echo '<p>Type: '.$value["type"].'</p>';
                echo '<br/>';
                echo '<p>No. of seats: '.$value["no_of_seats"].' seats</p>';
                echo '<br/>';
                echo '<p>Colour: '.$value["color"].'</p>';
                echo '<br/>';
                echo '<p>Price: Rs.'.$value["price"].'/-</p>';
                echo '<br/>';
            ?>
            <p>
                <?php 
                    echo '<form method="GET" action="http://localhost/project/controller/user/details.php">';
                        echo '<button type="submit" name="bookcar" value="'.$_GET["id"].'" class="gridbutton" onclick=""> Book now </button>';
                    echo '</form>';
                ?>

                 <a href="cars.php">
                    <button class="gridbutton2" onclick=""> Back </button>
                </a> 
            </p>
          </div>
        </div>
          </center>
    </div>

<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>

</body>

</html>