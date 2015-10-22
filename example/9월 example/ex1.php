<!DOCTYPE html>
<html>
<body>
	<h1> My first PHP page </h1>
	<?php
	echo "Hello, World!<br><br>";
	?>
	
	<?php
	//This is a single line comment
	
	#This is also a single line comment
	
	/*
	This is a multiple lines comment block
	that spans over more than
	one line
	*/
	?>
	
	<?php
	$color = "red";
	echo "My car is ".$color."<br>";
	echo "My house is ".$COLOR."<br>";
	echo "My boat is".$coLOR."<br><br>";
	?>
	
	<?php 
	$x = 5;
	$y = 6;
	$z = $x + $y;
	echo $z."<br><br>";
	?>
	
	<?php
	$txt = "Hello world!";
	$x=5;
	$y=10.5;
	?>
	
	<?php
	$x = 5; //global scope
	
	function myTest(){
	$y = 10; //local scope
	echo "<p> Test variables inside the function: <p>";
	echo "Variable x is: $x";
	echo "<br>";
	echo "Variable y is: $y";
	}
	
	myTest();
	
	echo "<p> Test variables outside the function: <p>";
	echo "Variable x is: $x";
	echo "<br>";
	echo "Variable y is: $y<br><br>";
	?>
	
	<?php
	$x = 5;
	$y = 10;
	
	function myTest1(){
		global $x, $y;
		$y = $x + $y;
	}
	
	myTest1();
	echo $y."<br><br>"; //outputs 15
	?>
	
	<?php
	$x=5;
	$y=10;
	
	function myTest2(){
		$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
	}
	
	myTest2();
	echo $y; // outputs 15
	?>
</body>
</html>