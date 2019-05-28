<?php
session_start();
include 'database.php';
$msg=$_POST['msg'];
$name=$_SESSION['username'];
$sql="insert into posts(msg,name) values('$msg','$name')";
$result=$con->query($sql);
header("location:../group/");

?>