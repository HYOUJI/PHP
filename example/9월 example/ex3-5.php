<!DOCTYPE html>
<html>
<body>	
	<!-- Conditional Statements -->
	<?php
	echo "<h1>Conditional Statements</h1>";
	$t = date("H");
	if($t<"11")
	{
		echo "Have a good day!"."<br>";
	}
	echo "Time: $t"."<br>";
	?>
	
	<?php
	$t = date("H");
	if($t<"10")
	{
		echo "Have a good morning!"."<br>";
	}
	elseif($t<"20")
	{
		echo "Have a good day!"."<br>";
	}
	else
	{
		echo "Have a good night!"."<br>";
	}
	?>
	
	<?php
	$favcolor = "red";
	switch($favcolor)
	{
		case "red":
		echo "Your favorite color is red!"."<br>";
		break;
		case "blue":
		echo "Your favorite color is blue!"."<br>";
		break;
		case "green":
		echo "Your favorite color is green!"."<br>";
		break;
		default:
		echo "Your favorite color is neither red, blue, or green!"."<br>";
		
	}
	?>
	<!-- while / for Loops -->
	<?php
	echo "<br>";
	$x = 1;
	while($x <= 5)
	{
		echo "The number is: $x <br>";
		$x++;
	}
	echo "<br>";
	?>
	
	<?php
	$x =1;
	do
	{
		echo "The number i: $x <br>";
		$x++;
	}
	while($x <=5);
	?>
	
	<?php
	$x = 6;
	do
	{
		echo "The number is: $x <br>";
		$x++;
	}while($x<=5);
	?>
	
	<?php
	echo "<br>";
	for($x=0;$x<=10;$x++)
	{
		echo "The number is: $x <br>";
	}
	echo "<br>";
	?>
	
	<?php
	$colors = array("red", "green", "blue", "yellow");
	foreach($colors as $value)
	{
		echo "$value <br>";
	}
	?>
	
	<!-- Functions -->
	<?php
	echo "<h1>Functions</h1>";
	function writeMsg()
	{
		echo "Hello world!";
	}
	
	writeMSg();
	echo "<br><br>";
	?>
	
	<?php
	function familyName1($fname)
	{
		echo "$fname Refsnes.<br>";
	}
	
	familyName1("Jani");
	familyName1("Hege");
	familyName1("Stale");
	familyName1("Kai Jim");
	familyName1("Borge");
	echo "<br>";
	?>
	
	<?php
	function familyName2($fname, $year)
	{
		echo "$fname Refsnes. Born in $year <br>";
	}
	
	familyName1("Hege", "1975");
	familyName1("Stale", "1978");
	familyName1("Kai Jim", "1983");
	echo "<br>";
	?>
	
	<?php
	function setHeight($minheight = 50)
	{
		echo "The height is : $minheight <br>";
	}
	
	setHeight(350);
	setHeight();
	setHeight(135);
	setHeight(80);
	echo "<br>";
	?>
	
	<?php
	function sum($x, $y)
	{
		$z = $x + $y;
		return $z;
	}
	
	echo "5 + 10 = ".sum(5, 10)."<br>";
	echo "7 + 13 = ".sum(7, 13)."<br>";
	echo "2 + 4 = ".sum(2, 4)."<br>";
	echo "<br>";
	?>
</body>
</html>