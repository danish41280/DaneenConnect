<?php
  include('includes/database.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login System</title>
	<link href="assest/img/dc.png" rel="icon">
	<meta name="MASSENGER" content="content">
	<meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" type="text/css" href="assest/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assest/css/style.css">
	<link rel="stylesheet" type="text/css" href="assest/css/material-icons.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="spacer-top"></div>
			<div class="col-lg-6"> <h1> Login </h1>
				<p> or <a href="#">created account </a></p>
				<form action="includes/login.php" method="post"> 
  					<div class="input-field">
          				<i class="material-icons">mail</i>
          				<input id="" type="text" name="username" placeholder="Username">
       				 </div><br>
  					<div class="input-field">
    					<i class="material-icons">lock</i>
          				<input id="" type="password" name="password"placeholder="Password">
  					</div>
  					<div class="form-remeber">
  						<a href="#"><i class="material-icons icon">lock </i>forget your password? </a>
  					</div>
  					<div class="form-check">
    					<input type="checkbox" class="form-check-input">
    					<label class="form-check-label">Remember me</label>
  					</div>
  					<button type="submit" name ="login" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="col-lg-6">
				<div class="content">
	 				<p>	<b>Your account is only as secure as your computer.</b> <br>
	 				Never enter your password on a device that you do not fully trust. Do not log into your account from a shared or public computer.
	 				For enhanced security, install our browser extension and load MEGA from your computer rather than from our servers.</p>
	 			</div>
			</div>
		</div>
	</div>
	
	






























	<script type="text/javascript" src="js/jquery.min.js">	</script>
	<script type="text/javascript" src="js/bootstrap.js">	</script>
	<script type="text/javascript" src="js/bootstrap.min.js">	</script>
	<script type="text/javascript" src="js/main.js">	</script>


</body>
</html>