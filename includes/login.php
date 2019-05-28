<?php
session_start();
include('database.php');

if(isset($_POST['login']))
	{
		if(empty($_POST['username'])|| empty($_POST['password']))
		{
			echo "<script>alert('Please fill in the blank')</script>";
			echo "<script>location.href='../'</script>";
		}
		else
			{
				$query="select * from `daneen_user` where username='".$_POST['username']."'AND password='".$_POST['password']."'";
				$result=mysqli_query($con,$query);
				if(mysqli_fetch_assoc($result))
				{
				 $_SESSION['username']=$_POST['username'];
				 echo "<script>location.href='../dashboard/'</script>";
				 
				}
				else
				{
					echo "<script>alert('username or password incorrect!')</script>";
					echo "<script>location.href='../'</script>";
				}
			}
	}
	