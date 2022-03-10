<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/login.css" />
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
    <form action="http://localhost/project/controller/admin/login.php" method="post" id="login-form">
      <div class="item" id="heading">
        <h3>Welcome</h3>
      </div>
        <div class="item" id="email-container">
          <label for="exampleInputEmail1" class="form-label">Username</label>  
          <input type="text" name="name" class="form-control" id="name" required />
        </div>
        <div class="item" id="password-container">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required />
        </div>
        <div class="item" id="remember-me">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <div class="item" >
          <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
        </div>
        
      </form>
    </div>
  </div>
</body>
</html>