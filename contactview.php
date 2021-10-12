<?php
require_once("connection.php");
    $query = " select * from contact";
    $result = mysqli_query($con,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Name </td>
                                <td> Phone </td>
                                <td> Username </td>
                                <td> Message </td>
                                <td> Reply </td>
                                <td> Delete </td>
                            </tr>
 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];                             
                                        $phone = $row['phone'];
										$username = $row['username'];
										$message = $row['message'];
                            ?>
                                    <tr>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td><?php echo $username ?></td>
										<td><?php echo $message ?></td>
                                        
                                        <td><a href="contactedit.php?Getusername=<?php echo $username ?>">Edit</a></td>
                                        <td><a href="contactdelete.php?Del=<?php echo $username ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>