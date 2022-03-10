<?php
  // Start the session
  session_start();
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="./static/otp.css">
	<title>OTP-Verification</title>
</head>
<header class="header">
	<h2 style="color: white; text-align:center;">OTP VERIFICATION</h2>
</header>

<div class="container">	
	<div class="col-md-12">   	
	</div>
	<div class="col-md-6">                    
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Enter OTP</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<form id="authenticateform" class="form-horizontal" role="form" method="POST" action="../controller/accept-otp.php">  					
					<div style="margin-bottom: 25px" class="input-group">
						<label class="text-success">Check your email for OTP</label>
						<input type="text" id="otp" name="otp" placeholder="One Time Password">                       
					</div>                          
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="authenticate" value="Submit" class="btn">						  
						</div>
					</div>                                
				</form>   
			</div>                     
		</div>  
	</div>
</div>
<footer class="footer">
	<h5 class="companyname">@2021 Car & bike rentals | <a href="privacypolicy.html">Privacy Policy</a> | 
		<a href="terms&conditions.html"> Terms & Conditions </a> </h5>
</footer>
</html>




  