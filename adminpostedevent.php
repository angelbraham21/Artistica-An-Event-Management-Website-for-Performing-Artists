<html>
<head>
<style>
*
{
	margin: 0;
	padding: 0;
}
body {
   font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.container1
{
background-color:#F8F9FB;
margin-left:0;
width:100%;

}
.maincontainer
{
background-color:#F8F9FB;
height:100%;
width:100%;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
 
}

.sidenav a {
  padding: 32px 8px 32px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn:hover:not(.active) {
 background-color:#111;
  color: #f1f1f1;
  }

.sidenav a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
}

.eve{
    font-family: Arial;
    font-size: 14px;
    background: ivory;
	float:center;
    color: #000000;
	width:100%;
	 
}
.eve a{
	text-decoration:none;
	color: #010101;
	text-indent:50px;
}
.eve a:hover {
  background: #555;
  color: black;
}
</style>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<title> AVAILABLLE EVENTS </title>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="mainadmin.html">Home</a>
  <a href="adminpostedevent.php">Events</a>
  <a href="newcontact.php">Queries</a>
  <a href="managerdisplay.php">Event Manager</a>
  <a href="artistdisplay.php">Artist</a>
  <a href="HOME.html">Log Out</a>
</div>
<div id="main">
<div class="maincontainer">
  <div class="container1">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div><br>
  <div class = "filter-box">
  <form action = "search.php"method = 'POST'>


</form>
</div>   


<br>
<?phpif(!empty($_POST['EventCategory'])){
	?>
<br>
<?php
$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'project');
$sql = "SELECT * FROM post_events ORDER BY EventCategory DESC";

$result = $link->query($sql);
echo "<h1>";
echo " <center> AVAILABLE EVENTS </center>";
echo "</h1>";
echo '<div class = "eve" align=center >';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo ' <h1>'; echo $row["Event Name"]; echo"</h1>";
		echo "Organised by <strong>";echo $row["Event Manager"]; echo"</strong><br>";
		echo "on  "; echo $row["Event Date"]; 
		echo"  at  "; echo $row["Event Location"]; echo"  ";
		echo $row["Address 2"]; echo"  ";
		echo $row["Address 3"]; echo"<br>";
		echo $row["City"]; echo", ";
		echo $row["State"]; echo", ";
		echo $row["Country"];echo", ";
		echo $row["Zip Code"];echo"; Ph:";		
		echo $row["Contact Number"]; echo"<br>";
		echo "<b> <h1>EVENT CATEGORY</b></h1><h3>";
		echo $row["Sub Category"]; echo"<br>";
		echo $row["EventCategory"]; echo"</h3>";
		echo "<b> ARTIST REQUIRED</b> :";
		echo $row["No of Artists"]; echo"<br>";
		echo "<b> PAYMENT</b> :";
		echo $row["Salary"]; echo" per person<br>";
		echo $row["Description"]; echo"<br>";
		echo "<a href = ''> Click here to apply </a>"; echo"<br>";
		echo'<hr>';
	}
		echo'</div>';
		
		
		
				
			}	
		
else {
    echo "N0 results";
}
?>
</div></div>
</body>
</html>