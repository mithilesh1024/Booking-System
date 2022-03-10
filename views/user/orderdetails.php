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
    <?php include_once "include/nav.php"; ?>
    
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
                <img class="vehiclepic" src="static/image/bg_1">
            </center>
        </div>
    
        <br>
        <br>

        <div class="feedbackform">
            <p>Order ID:</p>
            <br>
            <p>Vendor ID:</p>
            <br>
            <p>Order Date:</p>
            <br>
            <p>Return Date:</p>
            <br>
            <p>Vehicle ID:</p>
            <br>
            <p>Model Name:</p>
            <br>
            <p>Manufacturer:</p>
            <br>
            <p>Type:</p>
            <br>
            <p>No. of seats:</p>
            <br>
            <p>Colour:</p>
            <br>
            <p>Amount:</p>
            <br>

            
            
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