<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>Exercises 4 - by Youji Hwang</h2>
<h4>localhost/examples/ex4.php.txt</h4>
	
	<?php
	$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["name"])){
			$nameErr = "Name is required";
		}else {
			$name = test_input($_POST["name"]);
		}
		   
		if(empty($_POST["email"])){
			$emailErr = "Email is required";
		}else {
			$email = test_input($_POST["email"]);
		}
		   
		if(empty($_POST["website"])){
			$website = "";
		}else {
			$website = test_input($_POST["website"]);
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
	<h3>PHP Form Validation Example</h3>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name">
	<span class="error">* <?php echo $nameErr;?></span><p>
	E-mail: <input type="text" name ="email">
	<span class="error">* <?php echo $emailErr;?></span><p>
	Website: <input type="text" name="website"><p>
	<span class="error">* <?php echo $websiteErr;?></span>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea><p>
	Gender:
	<label><input type="radio" name="gender" value="female" checked>Female</label>
	<label><input type="radio" name="gender" value="male">Male<p></label>
	<span class="error">* <?php echo $genderErr;?></span>
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
	<br><hr><br>
	
	
	<?php
	echo "<h3> Arrays </h3>";
	$cars = array("Volvo","BMW","Toyota");
	
	echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2]."."."<br>";
	echo "<br>";
	
	$arrlength = count($cars);
	for($x=0;$x<$arrlength;$x++)
	{
		echo $cars[$x];
		echo "<br>";
	}
	echo "<br>";
	
	$age = array("Peter"=>"35", "Ben"=>"46","Joe"=>"43");
	echo "Peter is ".$age['Peter']." years old.<br>";
	
	foreach($age as $x=>$x_value)
	{
		echo "Key=".$x.", Value=".$x_value;
		echo "<br>";
	}
	echo "<br>";
	
	$cars2 = array
	(
		array("Volvo",22,18),
		array("BMW",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	);
	
	echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold:".$cars2[0][2]."<br>";
	echo $cars2[1][0].": In stock: ".$cars2[1][1].", sold:".$cars2[1][2]."<br>";
	echo $cars2[2][0].": In stock: ".$cars2[2][1].", sold:".$cars2[2][2]."<br>";
	echo $cars2[3][0].": In stock: ".$cars2[3][1].", sold:".$cars2[3][2]."<br>";
	
	echo "<br>";
	
	for($row=0;$row<4;$row++)
	{
		echo "<p><b>Row number $row</b></p>";
		echo "<ul>";
		for($col=0;$col<3;$col++)
		{
			echo "<li>".$cars2[$row][$col]."</li>";
		}
		echo "</ul>";
	}
	echo "<br>";
	
	?>
	
	<?php
	echo "<h3> Sorting Arrays </h3>";
	
	sort($cars);
	$carlength = count($cars);
	for($i=0;$i<$carlength;$i++)
	{
		echo $cars[$i];
		echo "<br>";
	}
	echo "<br>";
	
	$number = array(4,6,2,22,11);
	$numlength = count($number);
	sort($number);
	for($i=0;$i<$numlength;$i++)
	{
		echo $number[$i]."<br>";
	}
	echo "<br>";
	
	rsort($cars);
	for($i=0;$i<$carlength;$i++)
	{
		echo $cars[$i]."<br>";
	}
	echo "<br>";
	
	rsort($number);
	for($i=0;$i<$numlength;$i++)
	{
		echo $number[$i]."<br>";
	}
	echo "<br>";
	
	$agelength = count($age); 
	asort($age);
	foreach($age as $x=>$x_value)
	{
		echo "Key=".$x.", Value=".$x_value;
		echo "<br>";
	}
	echo "<br>";
	
	ksort($age);
	foreach($age as $x=>$x_value)
	{
		echo "Key=".$x.", Value=".$x_value;
		echo "<br>";
	}
	echo "<br>";
	
	arsort($age);
	foreach($age as $x=>$x_value)
	{
		echo "Key=".$x.", Value=".$x_value;
		echo "<br>";
	}
	echo "<br>";
	
	krsort($age);
	foreach($age as $x=>$x_value)
	{
		echo "Key=".$x.", Value=".$x_value;
		echo "<br>";
	}
	echo "<br>";
	
	$stack = array("Orange", "Banana", "Apple", "Raspberry");
	$fruit = array_pop($stack);
	print_r($stack);
	echo "<br>";
	
	$stack = array("Orange", "Banana");
	array_push($stack, "Apple", "Raspberry");
	print_r($stack);
	echo "<br>";
	
	$stack = array("Orange", "Banana", "Apple", "Raspberry");
	$fruit = array_shift($stack);
	print_r($stack);
	echo "<br>";
	
	$queue = $queue = array("Orange", "Banana");
	array_unshift($queue, "Apple", "Raspberry");
	print_r($queue);
	?>
	
	<?php
	echo "<h3>Global Variables</h3>";
	
	$x = 75;
	$y = 25;
	
	function addition()
	{
		$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
	}
	addition();
	echo $z;
	echo "<br>";
	echo "<br>";
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	?>
	<hr>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname">
	<input type="submit">
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
		$name = $_REQUEST['fname'];
		if(empty($name)){
			echo "Name is empty.<br>";
		}else{
			echo $name."<br>";
		}
	?>
	<a href="ex4.php?subject=PHP&web=W3schools.com">Test $GET </a>
	<?php
	echo "<br>";
	echo "Study ".$_GET['subject']." at".$_GET['web'];
	echo "<br>";	
	?>
	<h3>Form Handling</h3>
	<hr>
	POST<br>
	<form action="ex4.php" method="post">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="submit">
	</form>
	Welcome <?php echo $_POST["name"];?><br>
	Your email address is: <?php echo $_POST["email"]?>
	<hr>
	GET<br>
	<form action="ex4.php" method="get">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="submit">	
	</form>
	Welcome <?php echo $_GET["name"]; ?><br>
	Your email address is: <?php echo $_GET["email"];?>
	
	<?php
	
	?>
	
	<?php
	
	?>
	
	<?php
	
	?>
</body>
</html>