<?php
session_start();
if (isset($_SESSION['username'])) {
	session_destroy();
	echo "<script>location.href='../'</script>";
}
else
{
	echo "<script>location.href='../welcome.php'</script>";
}
?> 
