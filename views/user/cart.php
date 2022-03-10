<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: http://localhost/project/views/auth/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/cart.css" />
    <title>Car & Bike Rentals - My Cart</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    
    <br>
    
    <div class="cart-container">
        <br>
        <div class="heading">
            <h2>
                <center>
                        My Cart
                </center>
            </h2>
        </div>
        

        <div class="imageholder">
            <center>
                <img class="cartpic" src="./static/image/cart">
            </center>
        </div>
    
        <br>
        <hr>
        <br>

        <div class="feedbackform">
            <div class="grid-flex">
                <div class="grid-container">
                <?php
                for ($i = 0; $i < 2; $i++) {
                 echo
                 '<div class="grid-item">
                            <div>
                            <img class="gridpic" src="./static/image/bg_1">
                                <div>
                                </div>
                                <div>
                                    <h5><a href="#">Mercedes Grand Sedan</a></h5>
                                    <div class="gridfont">
                                        <p>Cheverolet</p>
                                        <p>Price:<span>$500</span><span>/day</span></p>
                                    </div>
                                    <p>
                                            <button class="gridbutton" onclick="removeitem()">Remove</button>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>';
            }
            ?>
            <br>
                </div>
            </div>
        \</div>
        <div class="buttonholder">
            <center>
                <br><br>
                <div class=updatebutton> Total Amount = </div>
                <br>
                <a href="payment.php"><button class="checkoutbutton" onclick="">Checkout</button></a>
            </center>
            </div>
            <br>
</div>
<br>
<br>

<div class="footer">
    <?php include_once "include/footer.php"; ?>
</div>

</body>
</html>