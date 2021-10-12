<?php
$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'project');
$sql = "SELECT * FROM post_events";

$result = $link->query($sql);
echo "<h1>";
echo "AVAILABLE EVENTS";
echo "</h1>";
echo "<Body bgcolor = IVORY>";
echo "<table border=1>";
echo "<tr>";
echo "<th>Event ID</th>";
echo "<th>Event Name</th>";
echo "<th>Event Manager</th>";
echo "<th>Event Date</th>";
echo "<th>Event Category</th>";
echo "<th>Sub Category</th>";
echo "<th>No Of Artists</th>";
echo "<th>Salary</th>";
echo "<th>Contact Number</th>";
echo "<th>Event Location</th>";
echo "<th>Address 2</th>";
echo "<th>Address 3</th>";
echo "<th>City</th>";
echo "<th>State</th>";
echo "<th>Country</th>";
echo "<th>Zip Code</th>";
echo "<th> Description</th>";
echo "</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo $row["Event ID"];
		echo "</td>";
        echo "<td>";
		echo $row["Event Name"];
		echo "</td>";
		echo "<td>";
		echo $row["Event Manager"];
		echo "</td>";
		echo "<td>";
		echo $row["Event Date"];
		echo "</td>";
		echo "<td>";
		echo $row["Event Category"];
		echo "</td>";
		echo "<td>";
		echo $row["Sub Category"];
		echo "</td>";
		echo "<td>";
		echo $row["No of Artists"];
		echo "</td>";
		echo "<td>";
		echo $row["Salary"];
		echo "</td>";
		echo "<td>";
		echo $row["Contact Number"];
		echo "</td>";
		echo "<td>";
		echo $row["Event Location"];
		echo "</td>";
		echo "<td>";
		echo $row["Address 2"];
		echo "</td>";
		echo "<td>";
		echo $row["Address 3"];
		echo "</td>";
		echo "<td>";
		echo $row["City"];
		echo "</td>";
		echo "<td>";
		echo $row["State"];
		echo "</td>";
		echo "<td>";
		echo $row["Country"];
		echo "</td>";
		echo "<td>";
		echo $row["Zip Code"];
		echo "</td>";
		echo "<td>";
		echo $row["Description"];
		echo "</td>";
		echo "</tr>";
	}
} 
else {
    echo "0 results";
}

?>