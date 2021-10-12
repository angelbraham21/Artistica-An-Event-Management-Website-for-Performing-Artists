<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
$username=$_POST["username"];
$message=$_POST["message"];
$conn=new mysqli("localhost","root","","project");
$sql="INSERT INTO contact VALUES('$name','$phone','$username','$message')";
if($conn->query($sql)==TRUE)
{
echo "Message has been sent!";
}
else
{
echo"Error";
}
$conn->close();
?>
	
	