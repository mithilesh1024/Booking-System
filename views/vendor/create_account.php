<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="static/create-account.css" />
  <title>Login Page</title>
</head>

<body>
  <div class="flex">
  <div class="image">
      <h2 class="item" id="site-name">Welcome New Vendor</h2>
      <img id="car" src="static/images/car.png" alt="car-image">
      <img src="static/images/login.svg" alt="login-image">
    </div>
    <div class="card">
      <form action="../controller/create_acoount.php" method="post" id="login-form">
        <div class="item" id="heading">
        <h3>Create Account</h3>
        </div>
        <div class="item" id="fname-container">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <?php
            if(isset($_GET["fname"]))
            {
              $fname = $_GET["fname"];
              echo '<input type="text" name="fname" id="fname" value="'.$fname.'" required />';
            }else{
              echo '<input type="text" name="fname" id="fname" required />';
            }
          ?>
        </div>
        <div class="item" id="mname-container">
          <label for="exampleInputEmail1" class="form-label">Middle Name</label>
          <?php
            if(isset($_GET["mname"]))
            {
              $mname = $_GET["mname"];
              echo '<input type="text" name="mname" value="'.$mname.'" id="mname"/>';
            }else{
              echo '<input type="text" name="mname" id="mname"/>';
            }
          ?>
        </div>
        <div class="item" id="lname-container">
          <label for="exampleInputEmail1" class="form-label">Last Name</label>
          <?php
            if(isset($_GET["lname"]))
            {
              $lname = $_GET["lname"];
              echo '<input type="text" name="lname" id="lname" value="'.$lname.'" required />';
            }else{
              echo '<input type="text" name="lname" id="lname" required />';
            }
          ?>
        </div>
        <div class="item">
          <label for="exampleInputEmail1" class="form-label">Age</label>
          <?php
            if(isset($_GET["age"]))
            {
              $age = $_GET["age"];
              echo '<input type="number" name="age" id="age" value="'.$age.'" required />';
            }else{
              echo '<input type="number" name="age" id="age" required />';
            }
          ?>
          
        </div>
        <div class="item">
          <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
          <?php
            if(isset($_GET["age"]))
            {
              $mobile = $_GET["mobile"];
              echo '<input type="number" name="mobile" id="mobile" value="'.$mobile.'" required />';
            }else{
              echo '<input type="number" name="mobile" id="mobile" required />';
            }
          ?>
        </div>
        <div class="item">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <?php
            if(isset($_GET["email"]))
            {
              $email = $_GET["email"];
              echo '<input type="email" name="email" id="email" value="'.$email.'" required />';
            }else{
              echo '<input type="email" name="email" id="email" required />';
            }
          ?>
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="item">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" id="password" required />
        </div>
        <div class="item">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        <div id="account" class="item" >
          <a href="auth/login.php">Already have an account?</a>
        </div>
      </form>
      <?php
        if(!isset($_GET['signin'])){
          exit();
        }else{
          $error = $_GET['signin'];
          if($error == "fill"){
            echo '<p class="error" id="empty-field">Please fill all the fields</p>';
          }elseif($error == "server-error"){
            echo '<p class="error" id"eemail">Sorry Server Error</p>';
          }else{}
        }
      ?>
    </div>
  </div>
</body>

</html>