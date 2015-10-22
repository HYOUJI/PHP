<!DOCTYPE html>
<html>
	<body>
		<?php
		echo "<h2>PHP is fun!</h2>";
		echo "Hello world! <br>";
		echo "I'm about to learn PHP!<br>";
		echo "This", " string", " was", " made", " with multiple parameters.";
		?>
		
		<?php
		$txt1="Learn PHP";
		$txt2="W3Schools.com";
		$cars=array("Volvo","BMW","Toyota");
		
		echo $txt1;
		echo "<br>";
		echo "Study PHP at $txt2";
		echo "My car is a {$cars[0]}";
		?>
		
		<?php
		print "<h2>PHP is fun!</h2>";
		print "Hello world! <br>";
		print "I'm about to learn PHP!";
		?>
		
		<?php
		$txt1="Learn PHP";
		$txt2="W3Schools.com";
		$cars=array("Volvo","BMW","Toyota");
		
		echo $txt1;
		echo "<br>";
		echo "Study PHP at $txt2";
		echo "My car is a {$cars[0]}";
		?>
		
		<?php
		$age=16;
		print "You are $age years old.\n";
		?>
		
		<?php
		for($i=1;$i<=10;$i++){
			print "<p class=\"count\"> I can count to $i! </p>\n";
		}
		?>
		
		<?php for($i=10;$i>=1;$i--){?>
		<p><?=$i?> bottoles of beer on the wall, <br/>
		<?=$i?> bottles of beer. <br/>
		Take one down, pass it around,<br/>
		<?=$i-1?> bottles of beer on the wall. </p>
		<?php } ?>
		
		<?php for($i=1;$i<=5;$i++){?>
		<h<?= $i ?>>This is a level <?= $i ?> heading. </h<?= $i ?>>
		<?php } ?>
	</body>
</html>