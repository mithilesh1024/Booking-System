<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/myaccount.css" />
    <title>Cars & Bike Rentals - My Account</title>
</head>

<body>
    <?php include_once "include/nav.php"; ?>
    <div class="tagholder">
        <img class="gridpic" src="image/account" alt="useraccount">
        <label class="tagline">
            <h1>My Account</h1>
        </label>
    </div>

    <div class="container1">
          <div class="detailsfont">
            <p>Email: </p>
            <p>Phone No:</p>
            <p>Age:</p>
            <p>Address:</p>

            <p>
                <a href="updateprofile.php">
                    <button class="gridbutton" onclick=""> Update Profile </button>
                </a>
            </p>
          </div>


<div class="footer">
   <?php include_once "include/footer.php"; ?> 
</div>

</body>

</html>

