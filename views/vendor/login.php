<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/css/login.css" />
  <script src="login.js"></script>
  <title>Login Page</title>
</head>
<body>
  <div class="flex">
    <div class="image">
      <h2 class="item" id="site-name">Car Rental System</h2>
      <img id="car" src="static/images/car.png" alt="car-image">
      <img src="static/images/login.svg" alt="login-image">
    </div>
    <div class="card">
    <form action="http://localhost/project/controller/vendor/login.php" method="post" id="login-form">
      <div class="item" id="heading">
        <h3>Vendor Login</h3>
      </div>
        <div class="item" id="email-container">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <?php
            if(isset($_GET['email'])){
              $email = $_GET['email'];
              echo '<input type="email" name="email" class="form-control" id="email" value="'.$email.'" required />';
            }
            else{
              echo '<input type="email" name="email" class="form-control" id="email" required />';
            }
          ?>
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="item" id="password-container">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required />
        </div>
        <div class="item" >
          <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
        </div>
        <!-- <div class="item" id="remember-me">
          <button type="submit" name="forgot" value="forgot" id="submit">Forgot Password</button>
        </div> -->
        <div id="account" class="item" >
          <a href="/create_account.php">Don't have a account?</a>
        </div>
      </form>
      <?php
        if(!isset($_GET['signin'])){
          exit();
        }else{
          $error = $_GET['signin'];
          if($error == "fill"){
            echo '<p class="error" id="empty-field">Please fill all the fields</p>';
          }elseif($error == "email"){
            echo '<p class="error" id"eemail">Invalid email address</p>';
          }elseif($error == "password"){
            echo '<p class="error" id="epassword">Invalid password address</p>';
          }else{}
        }
      ?>
    </div>
  </div>
</body>
</html>