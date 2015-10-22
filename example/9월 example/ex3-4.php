	<!DOCTYPE html>
	<!-- Constants -->
	<?php
	echo "<h1>Constants</h1>";
	define("GREETING", "Welcome to W3Schools.com!");
	echo GREETING."<br>";
	?>
	
	<?php
	define("GREETING", "Welcome to W3Schools.com!", true);
	echo greeting."<br>";
	?>
	
	<!-- Operators -->
	<?php
	echo "<h1>Operators</h1>";
	$x = 10;
	$y = 6;
	echo ($x + $y)."<br>";
	echo ($x - $y)."<br>";
	echo ($x * $y)."<br>";
	echo ($x / $y)."<br>";
	echo ($x % $y)."<br>";
	?>

	<?php
	$x = 10;
	echo $x."<br>";
	
	$y = 20;
	$y += 100;
	echo $y."<br>";
	
	$z = 50;
	$z -= 25;
	echo $z."<br>";
	
	$i = 5;
	$i *= 6;
	echo $i."<br>";
	
	$j = 10;
	$j /= 5;
	echo $j."<br>";
	
	$k = 15;
	$k %= 4;
	echo $k."<br>";
	?>
	
	<?php
	$a = "Hello";
	$b = $a." world!";
	echo $b."<br>";
	
	$x = "Hello";
	$x .= " world!";
	echo $x."<br>";
	?>
	
	<?php
	$x = 10;
	echo ++$x."<br>";
	
	$y = 10;
	echo $y++."<br>";
	
	$z = 5;
	echo --$z."<br>";
	
	$i = 5;
	echo $i--."<br>";
	
	?>
	
	<?php
	$x = 100;
	$y = "100";
	
	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x !== $y);
	echo "<br>";
	
	$a = 50;
	$b = 90;
	
	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	?>
	
	<?php
	$x = array("a" => "red", "b" => "green");
	$y = array("c" => "blue", "d" => "yellow");
	$z = $x + $y;
	var_dump($z);
	echo "<br>";
	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x <> $y);
	echo "<br>";
	var_dump($x !== $y);
	echo "<br>";
	?>
