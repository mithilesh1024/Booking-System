<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css" />
    <title>Car & Bike Rentals - User</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <!-- <div>
        <img class="img1" src="image/bg_1.jpg" alt="image">
    </div> -->

    <div class="tagholder">
        <img src="image/cars2.png" alt="cars2">
        <label class="tagline">
            <h1>Your Ride , Your Choice</h1>
        </label>
    </div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            for ($i = 0; $i < 6; $i++) {
                echo
                '<div class="grid-item">
                            <div>
                                <div style="background-image: url(images/car-1.jpg);">
                                </div>
                                <div>
                                    <h2><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div>
                                        <span>Cheverolet</span>
                                        <p>$500 <span>/day</span></p>
                                    </div>
                                    <p><a href="login.php">Book now</a> <a href="CarDetails.php">Details</a></p>
                                </div>
                            </div>
                        </div>';
            }
            ?>
        </div>
    </div>

    <div class="container2">
        <div class="grid-flex">
            will be displaying some advertisement and promotion stuff.
        </div>
    </div>

<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>

</body>

</html>