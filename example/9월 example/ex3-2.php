<!DOCTYPE html>
<html>
<body>
	<!-- String Function -->
	<?php
	echo "<h1>String Function</h1>";
	echo strlen("Hello world!")."<br>";
	?>
	
	<?php
	echo strpos("Hello world!","world")."<br>";
	?>
	
	<?php
	$str = 'abcdef';
	echo strlen($str)."<br>";
	
	$str = ' ab cd ';
	echo strlen($str)."<br>";
	?>
	
	<?php
	$mystring = 'abc';
	$findme = 'a';
	$pos = strpos($mystring, $findme);
	
	if($pos == false){
		echo "The string '$findme' was not found in the string '$mystring'"."<br>";
	}else{
		echo "The string '$findme' was found in the string '$mystring'";
		echo " and exists at position $pos"."<br>";
	}
	?>
	
	<?php
	$rest = substr("abcdef", -1);
	echo $rest."<br>";
	$rest = substr("abcdef", -2);
	echo $rest."<br>";
	$rest = substr("abcdef", -3, 1);
	echo $rest."<br>";
	?>
	
	<?php
	$str = "Mary Had A Little Lamb and She LOVED It So";
	$str = strtolower($str);
	echo $str."<br>";
	?>
	
	<?php
	$str = "Mary Had a Little Lamb and She LOVED It So";
	$str = strtoupper($str);
	echo $str."<br>";
	?>
	
	<?php
	$text = "\t\tThese are a few words :) ... ";
	$binary = "\x09Example string\x0A";
	$hello = "Hello World";
	var_dump($text, $binary, $hello);
	
	print "\n";
	
	$trimmed = trim($text);
	var_dump($trimmed);
	echo "<br>";
	
	$trimmed = trim($text, " \t.");
	var_dump($trimmed);
	echo "<br>";
	
	$trimmed = trim($hello, "Hdle");
	var_dump($trimmed);
	echo "<br>";
	
	$trimmed = trim($hello,'Hd\r');
	var_dump($trimmed);
	echo "<br>";
	
	$clean = trim($binary, "\x00..\x1F");
	var_dump($clean);
	echo "<br>";
	?>

	<?php
	$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
	$pieces = explode(" ", $pizza);
	echo $pieces[0]."<br>";
	echo $pieces[1]."<br>";
	?>
	
	<?php
	$array = array('lastname', 'email', 'phone');
	$comma_separated = implode(",", $array);
	
	echo $comma_separated."<br>";
	var_dump(implode('hello', array()));
	echo "<br>";
	?>
	
	<?php
	$var1 = "Hello";
	$var2 = "hello";
	if(strcmp($var1, $var2) !== 0){
		echo '$var1 is not equal to $var2 in a case sensitive string comparison'."<br>";
	}
	?>
	

</body>
</html>