<!--DASHBOARD PAGE-->
<?php
session_start();
if(!$_SESSION['username']){
	header("location:../");
}

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login System</title>
	<link href="../assest/img/dc.png" rel="icon">
	<meta name="MASSENGER" content="content">
	<meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" type="text/css" href="../assest/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assest/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assest/css/material-icons.css">

</head>
<body>
<div class="custom-container">
	<div class="sidenav">
		<div class="row">
			<div class="col-sm-3 text-center"></div>
			<div class="col-sm-6 text-center">
				<img class="logo" src="../assest/img/daneenlogo.png">			
			</div>
			<div class="col-sm-3 text-center">
				<a class="custom-btn-logout" id="logoutme" href="../includes/logout.php">Logout </a>
			</div>	
		</div></div>
		<div class="spacer"></div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="custom-navbar"><center>
					<li><a href="#" class="active"> Dashboard </a></li>
					<li><a href="../profile/"> Profile </a></li>
					<li><a href="#"> Notification </a></li>
					<li><a href="#"> People </a></li>
					<li><a href="#"> Messages </a></li>
					<li><a href="../group/"> Group</a></li>
				</center></ul>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-12">
				<center>
					<input type="file" name="file">
					<input type="submit" name="upload" value="UploadFile">
				</center>
			</div>
			
		</div>
</div>




	<script type="text/javascript" src="../js/jquery.min.js">	</script>
	<script type="text/javascript" src="../js/bootstrap.js">	</script>
	<script type="text/javascript" src="../js/bootstrap.min.js">	</script>
	<script type="text/javascript" src="../js/main.js">	</script>

</body>
</html>