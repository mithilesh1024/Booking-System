<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/cars.css" />
    <title>Car & Bike Rentals - Bikes</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <br>
    <div class="pageheading">
        <p><center>All Bikes</center></p>
    </div>
    <br>
<div class="searchbar">
    <div>
        <form action="http://localhost/project/controller/user/filterbikes.php" method="GET">
    <div>
        <label>Filter:</label>
        <?php 
        echo '<select name="bikeFilter">';
        if(!isset($_GET["fil"])){
            echo '<option value="default" selected>Show All</option>';
            echo '<option value="plth" >Price: Low to High</option>';
            echo '<option value="phtl" >Price: High to Low</option>';
            echo '<option value="automatic" >Automatic</option>';
            echo '<option value="manual" >Manual</option>';
        }
        else{
            $filter = $_GET["fil"];
            if($filter == "plth"){
                echo '<option value="default">Show All</option>';
                echo '<option value="plth" selected>Price: Low to High</option>';
                echo '<option value="phtl" >Price: High to Low</option>';
                echo '<option value="automatic" >Automatic</option>';
                echo '<option value="manual" >Manual</option>';
            }
            else if($filter == "phtl"){
                echo '<option value="default">Show All</option>';
                echo '<option value="plth" >Price: Low to High</option>';
                echo '<option value="phtl" selected>Price: High to Low</option>';
                echo '<option value="automatic" >Automatic</option>';
                echo '<option value="manual" >Manual</option>';
            }
            else if($filter == "automatic"){
                echo '<option value="default">Show All</option>';
                echo '<option value="plth" >Price: Low to High</option>';
                echo '<option value="phtl" >Price: High to Low</option>';
                echo '<option value="automatic" selected>Automatic</option>';
                echo '<option value="manual" >Manual</option>';              
            }
            else if($filter == "manual"){
                echo '<option value="default">Show All</option>';
                echo '<option value="plth" >Price: Low to High</option>';
                echo '<option value="phtl" >Price: High to Low</option>';
                echo '<option value="automatic" >Automatic</option>';
                echo '<option value="manual" selected>Manual</option>'; 
            }else if($filter == "default"){
                echo '<option value="default" selected>Show All</option>';
                echo '<option value="plth" >Price: Low to High</option>';
                echo '<option value="phtl" >Price: High to Low</option>';
                echo '<option value="automatic" >Automatic</option>';
                echo '<option value="manual">Manual</option>'; 
            }
        }
        echo '</select>';
        
        ?>
        <button type="submit" name="filter" value="f" class="button" onclick="">Apply</button>
    </div>

    <div>
    </div>
</div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/filterbikes.php';
            if(isset($_GET["fil"])){
                $filter = $_GET["fil"];
            }else{
                $filter = "default";
            }
            switch($filter){
                case "plth":
                    $bike = lowtohigh();
                    break;
                case "phtl":
                    $bike = hightolow();
                    break;
                case "automatic":
                    $bike = getautomatic();
                    break;
                case "manual":
                    $bike = getmanual();
                    break;
                default:
                    $bike = getAllBikes();
                    break;
            }
            $n = mysqli_num_rows($bike);
            if($n > 0){
                while($n--) {
                    $value = mysqli_fetch_array($bike);
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
                            
                        }
                        
                        echo '<div>
                        </div>
                        <div>
                        <h5 class="car-details">'.$value['name'].'</h5>
                        <div class="gridfont">
                        <p class="car-details">'.$value['company'].'</p>
                        <p>Price:<span class="car-details">Rs'.$value['price'].'</span><span>/day</span></p>
                        </div>
                        <p>
                        <button type="submit" name="bookbike" value="'.$value['id'].'" class="gridbutton" > Book now </button>
                        <button type="submit" name="bike" value="'.$value['id'].'" class="gridbutton2"> Details </button>
                        </p>
                        </div>
                        </div>
                        </div>
                        </form>';
                    }
                }else{
                    echo "NOT AVAIBALE";
                }
            ?>
            <br>
        </div>
    </div>

    <br><br><br><br><br>

<div class="footer">
    <?php include_once "include/footer.php"; ?>    
</div>

</body>

</html>