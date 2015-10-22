<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>Exercises 5 - by Youji Hwang</h2>
<h4>localhost/examples/ex5.php.txt</h4>
	
	<?php
	$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["name"])){
			$nameErr = "Name is required";
		}else {
			$name = test_input($_POST["name"]);
			if(!preg_match("/^[a-zA-Z]*$/", $name))
			{
				$nameErr = "Only letters and white space allowed";
			}
		}
		   
		if(empty($_POST["email"])){
			$emailErr = "Email is required";
		}else {
			$email = test_input($_POST["email"]);
			if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
			{
				$emailErr = "Invalid email format";
			}
		}
		   
		if(empty($_POST["website"])){
			$website = "";
		}else {
			$website = test_input($_POST["website"]);
			if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
			{
				$websiteErr = "Invalid URL";
			}
		   }
		   
		if(empty($_POST["comment"])){
			$comment = "";
		}else {
			$comment = test_input($_POST["comment"]);
		}
		   
		if(empty($_POST["gender"])){
			$genderErr = "Gender is required";
		}else {
			$gender = test_input($_POST["gender"]);
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	<h3>PHP - Validate Name, E-mail, and URL</h3>
	<p><span class="error"> * required field. </span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">* <?php echo $nameErr;?></span><p>
	E-mail: <input type="text" name ="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span><p>
	Website: <input type="text" name="website" value="<?php echo $website;?>">
	<span class="error">* <?php echo $websiteErr;?></span><p>
	Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><p>
	Gender:
	<label><input type="radio" name="gender"
	<?php if(isset($gender) && $gender == "female") echo "checked";?>	
	value="female">Female</label>
	<label><input type="radio" name="gender"
	<?php if(isset($gender) && $gender == "male") echo "checked";?>
	value="male">Male</label>
	<span class="error">* <?php echo $genderErr;?></span><p>
	<input type="submit" name="submit" value="submit">
	</form>
	<?php
	echo "<h2>Your Input: </h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	echo "<br>";
	?>
	<hr>
	<?php
	echo "<h3>Date and Time</h3>";
	
	echo "Today is ".date("Y/m/d")."<br>";
	echo "Today is ".date("Y.m.d")."<br>";
	echo "Today is ".date("Y-m-d")."<br>";
	echo "Today is ".date("l");echo "<br>";
	echo "<br>";
	
	echo "The time is ".date("h:i:sa")."<br>";
	echo "<br>";
	
	date_default_timezone_set("America/New_York");
	echo "The time is ".date("h:i:sa")."<br>";
	echo "<br>";
	
	$d = mktime(11, 14, 54, 8, 12, 2014);
	echo "Created date is ".date("Y-m-d h:i:sa", $d)."<br>";
	echo "<br>";
	
	$d = strtotime("10:30pm April 15 2014");
	echo "Created date is ".date("Y-m-d h:i:sa", $d)."<br>";
	echo "<br>";
	
	$d = strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d)."<br>";
	
	$d = strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d)."<br>";
	
	$d = strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d)."<br>";
	echo "<br>";
	
	$startdate = strtotime("Saturday");
	$enddate = strtotime("+6 weeks", $startdate);
	
	while($startdate < $enddate)
	{
		echo date("M d", $startdate)."<br>";
		$startdate = strtotime("+1 week", $startdate);
	}
	echo "<br>";
	
	$d1 = strtotime("July 04");
	$d2 = ceil(($d1-time())/60/60/24);
	echo "There are ".$d2." days until 4th of July.";
	echo "<hr>";
	echo "<h3> Include / Require Files</h3>";
	echo "<p>Copyright &copy; 1999-".date("Y")."W3Schools.com</p>";
	?>

</body>
</html>
	