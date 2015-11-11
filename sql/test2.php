<?php
# Create Connection
$con = mysqli_connect("localhost", "root", "123123", "my_db");

# Check Connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
} else echo "Succeeded in connection to MySQL !!!";

# Select
//$result = mysqli_query($con, "select *from Persons");
//$result = mysqli_query($con, "select *from Persons where Age not between 20 and 40");
$result = mysqli_query($con, "select *from Persons where LastName in ('Ji', 'Hwang')");
echo "<table border='2'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";

while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Age']."</td>";
	echo "</tr>";
}
echo "</table>";


?>