<?php
require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        $name = $_GET['name'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
		$message = $_POST['message'];
   
 
        $query = " update contact set name = '".$name."', phone='".$phone."',username='".$username."',message='".$message."' where username='".$username."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:contactview.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:contactview.php");
    }
 
 
?>