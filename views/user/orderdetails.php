<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/orderdetails.css" />
    <title>Car & Bike Rentals - Order Details</title>
</head>

<body>
    <?php 
        include_once "include/nav.php";
        if(!isset($_SESSION["id"])){
            header("Location:http://localhost/project/views/user/home.php");
        }     
    ?>
    
    <br>
    
    <div class="form-container">
        <br>
        <div class="heading">
            <h2>
                <center>
                        Order Details 
                </center>
            </h2>
        </div>
    
        <br>

        <div class="imageholder">
            <center>
                <?php 
                    include $_SERVER['DOCUMENT_ROOT'] . '/project/controller/user/checkorders.php';
                    $id = $_GET['id'];
                    $vehicle = $_GET['v'];
                    if($vehicle == 'c')
                    {
                        $result = morecardetail($id);
                        $value = mysqli_fetch_array($result);
                        $image = imagecreatefromstring($value["image"]); 
                        ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
                        echo   ' </center>
                        </div>
                        <br>
                        <br>
                        <div class="feedbackform">';
                        echo '<p>Order ID: '.$id.'</p>';
                        echo '<br>';
                        echo '<p>Vendor Name: '.$value["vname"].'</p>';
                        echo '<br>';
                        echo '<p>Order Date: '.$value["date_of_order"].'</p>';
                        echo '<br>';
                        echo '<p>Return Date: '.$value["dor"].'</p>';
                        echo '<br>';
                        echo '<p>Vehicle ID: '.$value["vno"].'</p>';
                        echo '<br>';
                        echo '<p>Model Name: '.$value["name"].'</p>';
                        echo '<br>';
                        echo '<p>Manufacturer: '.$value["company"].'</p>';
                        echo '<br>';
                        echo '<p>Type: '.$value["type"].'</p>';
                        echo '<br>';
                        echo '<p>No. of seats: '.$value["no_of_seats"].'</p>';
                        echo '<br>';
                        echo '<p>Colour: '.$value["color"].'</p>';
                        echo '<br>';
                        echo '<p>Amount: '.$value["price"].'</p>';
                        echo '<br>';
                    }else{
                        $result = morebikedetail($id);
                        $value = mysqli_fetch_array($result);
                        $image = imagecreatefromstring($value["image"]); 
                        ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
                        imagejpeg($image, null, 80);
                        $data = ob_get_contents();
                        ob_end_clean();
                        echo '<img class="gridpic" src="data:image/jpg;base64,' .  base64_encode($data)  . '" />';
                        echo   ' </center>
                        </div>
                        <br>
                        <br>
                        <div class="feedbackform">';
                        echo '<p>Order ID: '.$id.'</p>';
                        echo '<br>';
                        echo '<p>Vendor Name: '.$value["vname"].'</p>';
                        echo '<br>';
                        echo '<p>Order Date: '.$value["date_of_order"].'</p>';
                        echo '<br>';
                        echo '<p>Return Date: '.$value["dor"].'</p>';
                        echo '<br>';
                        echo '<p>Vehicle ID: '.$value["vno"].'</p>';
                        echo '<br>';
                        echo '<p>Model Name: '.$value["name"].'</p>';
                        echo '<br>';
                        echo '<p>Manufacturer: '.$value["company"].'</p>';
                        echo '<br>';
                        echo '<p>Type: '.$value["type"].'</p>';
                        echo '<br>';
                        echo '<p>No. of seats: 2</p>';
                        echo '<br>';
                        echo '<p>Colour: '.$value["color"].'</p>';
                        echo '<br>';
                        echo '<p>Amount: '.$value["price"].'</p>';
                        echo '<br>';
                    }
                    
            ?>
        </div>
        <div class="buttonholder">
                <center>
                    <a href="checkorders.php">
                       <button class="backbutton">Back</button>
                    </a>    
                </center>

            </div>

                <br>
                <br>
    </div>
<br>
<br>

<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>

</body>
</html>