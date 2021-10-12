<?php

$username=$_POST["username"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","project");

	$s = "select * from admin where username = '$username' AND password = '$password'";
	$result = mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
	if($num == 1)
	{
		setcookie("con_user", $username);
		header('location: mainadmin.html');
	}
	elseif ($num==0)
	{
		header('location: admin.html');
	}
?>