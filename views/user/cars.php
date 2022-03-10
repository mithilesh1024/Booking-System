<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/cars.css" />
    <title>Car & Bike Rentals - Cars </title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <br>
    <div class="pageheading">
        <p><center>All Cars</center></p>
    </div>
    <br>
<div class="searchbar" >
    <div>
        <label>Filter:</label>
        <select>
          <option>Newest First</option>
          <option>Oldest First</option>
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
          <option>Rating: Low to High</option>
          <option>Rating: High to Low</option>
          <option>SUV</option>
          <option>Sedan</option>
          <option>Hatchback</option>
          <option>Luxury</option>
          <option>Automatic</option>
          <option>Manual</option>
          <option>2 Seaters</option>
          <option>4 Seaters</option>
          <option>5 Seaters</option>
          <option>7 Seaters</option>
          <option>8 Seaters</option>
          <option>10 Seaters</option>
        </select>
        <button class="button" onclick="">Apply</button>
    </div>

    <div>
    </div>
</div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/cars.php';
            $image = ["wagonar","verna","creta","artega","r8","evoque"];
            $i=0;
            $list = getAllCar();
            foreach($list as $value) {
                echo
                '<form method="GET" action="http://localhost/project/controller/user/details.php">
                    <div class="grid-item">
                        <div>
                        <img class="gridpic" src="static/image/'.$image[$i++].'">
                            <div style="background-image: url(static/images/car2.jpg);">
                            </div>
                            <div>
                                <h5 class="car-details">'.$value['name'].'</h5>
                                <div class="gridfont">
                                    <p class="car-details">'.$value['company'].'</p>
                                    <p>Price:<span class="car-details">Rs'.$value['price'].'</span><span>/day</span></p>
                                </div>
                                <p>
                                    <button type="submit" name="bookcar" value="'.$value["id"].'" class="gridbutton"> Book now </button>
                                    <button type="submit" name="car" value="'.$value["id"].'" class="gridbutton2"> Details </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>';
            }
            ?>
            <br>
        </div>
    </div>

<div class="footer">
    <?php include_once "include/footer.php"; ?> 
</div>

<script>
    function details(){

    }
</script>

</body>

</html>