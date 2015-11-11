<?php
$con = mysqli_connect("localhost", "root", "123123","my_db");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

// $result = mysqli_query($con, "update Persons set age = 47 where FirstName = 'Bill' and Lastname='Ji'");
mysqli_query($con, "delete from Persons where age = 0");
$result = mysqli_query($con, "select *from Persons");

echo "<table border='2'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>
";
while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Age']."</td>";
	echo "</tr>";
}
echo "</table>";


?>