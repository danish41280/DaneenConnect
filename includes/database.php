<?php
$con=mysqli_connect('localhost','root','','Daneen');
if(!$con)
{
	die('Please check your connection'.mysqli_error($con));
}
?>