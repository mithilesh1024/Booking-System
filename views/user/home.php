<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/home.css" />
    <title>Home</title>
</head>

<body>
    <?php 
        include $_SERVER['DOCUMENT_ROOT']."/project/views/user/include/nav.php"; 
    ?>

    <div class="tagholder">
        <img src="static/image/car2" alt="cars2">
        <label class="tagline">
            <h1>Your Ride , Your Choice</h1>
        </label>
    </div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            include $_SERVER['DOCUMENT_ROOT']."/project/controller/user/home.php";

            $car = getCar();

            $image = ["wagonar","verna","creta","artega","r8","evoque"];
            $i=0;
            foreach($car as $value) {
                echo
                '<form method="GET" action="http://localhost/project/controller/user/details.php">
                <div class="grid-item">
                            <div>
                                <img class="gridpic" src="static/image/'.$image[$i++].'">
                                <div style="background-image: url(static/images/car-1.jpg);">
                                </div>
                                <div>
                                    <h2><a href="#">'.$value["name"].'</a></h2>
                                    <div>
                                        <span>'.$value["company"].'</span>
                                        <p>Rs'.$value["price"].' <span>/day</span></p>
                                    </div>
                                    <p><button type="submit" name="bookcar" value="'.$value["id"].'" class="gridbutton"> Book now </button>
                                    <button type="submit" name="car" value="'.$value["id"].'" class="gridbutton2"> Details </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>';
            }
            ?>
        </div>
    </div>

    <!-- <div class="container2">
        <div class="grid-flex">
            will be displaying some advertisement and promotion stuff.
        </div>
    </div> -->
    <br><br><br><br><br><br><br><br><br>

<div class="footer">
    <?php 
         include $_SERVER['DOCUMENT_ROOT']."/project/views/user/include/footer.php";
    ?>
</div>

</body>

</html>