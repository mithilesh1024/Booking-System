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
        include_once "include/nav.php"; 
        if(isset($_GET["query"])){
			if($_GET["query"] == 'success'){
				echo '<script>alert("Query inserted succesfully")</script>';
			}
		}
        if(isset($_GET["booking"])){
			if($_GET["booking"] == 'success'){
				echo '<script>alert("Booking succesfully")</script>';
			}else{
                echo '<script>alert("Booking unsuccesfully")</script>';
            }
		}	
    ?>

    <div class="tagholder">
        <img src="static/image/car2" alt="cars2" >
        <label class="tagline">
            <h1>Your Ride , Your Choice</h1>
        </label>
        
    </div>

    <div class="grid-flex">
        <div class="grid-container">
            <?php
            include $_SERVER['DOCUMENT_ROOT']."/project/controller/user/home.php";

            $car = getCar();
            $i=0;
            foreach($car as $value) {
                echo
                '<form method="GET" action="http://localhost/project/controller/user/details.php">
                <div class="grid-item">
                            <div>';
                            $image = imagecreatefromstring($value["image"]); 
                                ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
                                imagejpeg($image, null, 80);
                                $data = ob_get_contents();
                                ob_end_clean();
                                echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
                            
                                echo '<div>
                                </div>
                                <div>
                                    <h2>'.$value["name"].'</h2>
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