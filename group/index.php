<?php
include('../includes/database.php')
?>
<?php
session_start();

if(!$_SESSION['username']){
	header("location:../");
session_unset();
}
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GroupChat</title>
	<link href="../assest/img/dc.png" rel="icon">
	<meta name="MASSENGER" content="content">
	<meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" type="text/css" href="../assest/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assest/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assest/css/material-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<div class="custom-container">
	<div class="sidenav bg-primary">
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
					<li><a href="../dashboard/"> Dashboard </a></li>
					<li><a href="#" class="active"> Profile </a></li>
					<li><a href="#"> Notification </a></li>
					<li><a href="#"> People </a></li>
					<li><a href="#"> Messages </a></li>
					<li><a href="#"> Group</a></li>
				</center></ul>
			</div>
		</div>	
</div>
<h1 style="background-color:grey; color:white;"><?php echo $_SESSION['username']?> -Online</h1>
<div class="output">
	<?php 
	$sql="select * from posts ORDER BY ID DESC";
	$result=$con -> query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result -> fetch_assoc()){
			echo "" .$row["name"]." ".":: " .$row["msg"]." --"
			.$row["date"]. "<br>";
			echo "<br>";
		}
	}else{
		echo "0 result";
	}
	$con->close();
	?>

</div>
<form method="post" action="../includes/send.php">
	<textarea name="msg" placeholder="Type to send messages.." class="form-control">		
	</textarea> <br>
	<button type="submit" class="btn btn-info">Send</button>
</form>

















	<script type="text/javascript" src="../js/jquery.min.js">	</script>
	<script type="text/javascript" src="../js/bootstrap.js">	</script>
	<script type="text/javascript" src="../js/bootstrap.min.js">	</script>
	<script type="text/javascript" src="../js/main.js">	</script>

</body>
</html>