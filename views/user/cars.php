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
    <form action="http://localhost/project/controller/user/filtercars.php" method="GET">
    <div>
        <label>Filter:</label>
        <?php 
        echo '<select name="carFilter">';
        if(!isset($_GET["fil"])){
            echo '<option value="plth" selected>Show All</option>';
            echo '<option value="plth">Price: Low to High</option>';
            echo '<option value="phtl">Price: High to Low</option>';
            echo '<option value="suv">SUV</option>';
            echo '<option value="sedan">Sedan</option>';
            echo '<option value="hatchback">Hatchback</option>';
            echo '<option value="luxury">Luxury</option>';
            echo '<option value="automatic">Automatic</option>';
            echo '<option value="manual">Manual</option>';
            echo '<option value="4s">4 Seaters</option>';
            echo '<option value="5s">5 Seaters</option> ';
            echo '<option value="7s">7 Seaters</option>';
        }
        else{
            $filter = $_GET["fil"];
            if($filter == "plth"){
                // echo "plth";
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth" selected>Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';
            }
            else if($filter == "phtl"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl" selected>Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';
            }
            else if($filter == "suv"){
                // echo "suv";
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv" selected>SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';                
            }
            else if($filter == "sedan"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan" selected>Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';
            }
            else if($filter == "hatchback"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback" selected>Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';                
            }
            else if($filter == "luxury"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury"  selected>Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>';  
            }
            else if($filter == "automatic"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic" selected>Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>'; 
            }
            else if($filter == "manual"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual" selected>Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>'; 
            }
            else if($filter == "4s"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s" selected>4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>'; 
            }
            else if($filter == "5s"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s" selected>5 Seaters</option> ';
                echo '<option value="7s">7 Seaters</option>'; 
            }
            else if($filter == "7s"){
                echo '<option value="plth">Show All</option>';
                echo '<option value="plth">Price: Low to High</option>';
                echo '<option value="phtl">Price: High to Low</option>';
                echo '<option value="suv">SUV</option>';
                echo '<option value="sedan">Sedan</option>';
                echo '<option value="hatchback">Hatchback</option>';
                echo '<option value="luxury">Luxury</option>';
                echo '<option value="automatic">Automatic</option>';
                echo '<option value="manual">Manual</option>';
                echo '<option value="4s">4 Seaters</option>';
                echo '<option value="5s">5 Seaters</option> ';
                echo '<option value="7s" selected>7 Seaters</option>';
            }
        }
        echo '</select>';
        
        ?>
        <button type="submit" name="filter" value="f" class="button" onclick="">Apply</button>
    </div>
    </form>

    <div>
    </div>
</div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/filtercars.php';
            $i=0;
            if(isset($_GET["fil"])){
                $filter = $_GET["fil"];
            }else{
                $filter = "default";
            }
            switch($filter){
                case "plth":
                    $list = lowtohigh();
                    break;
                case "phtl":
                    $list = hightolow();
                    break;
                case "suv":
                    $list = suv();
                    break;
                case "sedan":
                    $list = sedan();
                    break;
                case "hatchback":
                    $list = hatchback();
                    break;
                case "luxury":
                    $list = luxury();
                    break;
                case "automatic":
                    $list = automatic();
                    break;
                case "manual":
                    $list = manual();
                    break;
                case "4s":
                    $list = fourseats();
                    break;
                case "5s":
                    $list = fiveseats();
                    break;
                case "7s":
                    $list = sevenseats();
                    break;
                default:
                    $list = getAllCar();
                    break;
            }
            $n = mysqli_num_rows($list);
            if($n > 0){
                while($n--){
                    $value = mysqli_fetch_array($list);
                    echo
                    '<form method="GET" action="http://localhost/project/controller/user/details.php">
                        <div class="grid-item">
                            <div>';
                            if(!empty($value["image"])){
                                $image = imagecreatefromstring($value["image"]); 
                            ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
                            imagejpeg($image, null, 80);
                            $data = ob_get_contents();
                            ob_end_clean();
                            echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
                            }else{
                                // echo $value["image"];
                            // echo '<img class="gridpic" src="C:/wamp64/www/project/controller/vendor/uploads/IMG-61c19883db9635.45500422.wagonar" alt="">';
                            }
                            echo '<div style="background-image: url(static/images/car2.jpg);">
                                </div>
                                <div>
                                    <h5 class="car-details">'.$value['name'].'</h5>
                                    <div class="gridfont">
                                        <p class="car-details">'.$value['company'].'</p>
                                        <p>Price:<span class="car-details">Rs '.$value['price'].'</span><span>/day</span></p>
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
            }else{
                echo "NOT AVAILABLE";
            }
            ?>
            <br>
        </div>
    </div>

    <br>
    <br>
    <br><br><br>

<div class="footer">
    <?php include_once "include/footer.php"; ?> 
</div>

<script>
    function details(){

    }
</script>

</body>

</html>