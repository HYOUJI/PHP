<?php
# Create Connection
$con = mysqli_connect("localhost", "root", "123123", "my_db");

# Check Connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
} else echo "Succeeded in connection to MySQL !!!";

# Create database
// $sql = "create database my_db";
// if(mysqli_query($con, $sql)) {
// 	echo "Database my_db created successfully";
// } 
// else {
// 	echo "Error creating database: ".mysqli_error($con);
// }

# Create table
// $sql = "create table Persons
// (
// 	PID int not null auto_increment,
// 	PRIMARY KEY(PID),
// 	FirstName char(30),
// 	LastName char(30),
// 	Age Int
// )";

# Insert into
$sql = "insert into Persons(FirstName, LastName, Age) values 
('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

if(!mysqli_query($con, $sql)){
	die('Error: '.mysqli_error($con));
}
echo "<br><b>1 record added</b>";

// mysqli_query($con, "insert into Persons(FirstName, LastName, Age)
//  values ('Andrew', 'Ji', '22')");

// $sql = "insert into Persons (FirstName, LastName, Age)
// values ('Jun', 'Ji', 50)";

# Execute query
// if(mysqli_query($con, $sql)){
// 	echo "Success!!!";
// }
// else {
// 	echo "Failed!! : ".mysqli_error($con);
// }

# Select
//test2.php에 있음.


?>
<html>
<body>
<form method="post" action="test.php">
Fristname: <input type="text" name="firstname"> <br/>
Lastname: <input type="text" name="lastname"> <br/>
Age: <input type="text" name="age"> <br/>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>