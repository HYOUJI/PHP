<html>
	<body>
	<?php
	$x = "Hello world!";
	echo $x;
	echo "<br>";
	$x = 'Hello world!';
	echo $x;
	?>
	
	<?php
	$x = 5985;
	var_dump($x);
	echo "<br>";
	$x = -345;
	var_dump($x);
	echo "<br>";
	$x = 0x8C;
	var_dump($x);
	echo "<br>";
	$x = 047;
	var_dump($x);
	?>
	
	<?php
	$x = 10.365;
	var_dump($x);
	echo "<br>";
	$x = 2.4e3;
	var_dump($x);
	echo "<br>";
	$x = 8E-5;
	var_dump($x);
	?>
	
	<?php
	$cars = array("Volvo", "BMW", "Toyota");
	var_dump($cars);
	?>
	
	<?php
	class Car{
		var $color;
		function Car($color = "green")
		{
			$this->color = $color;
		}
		function what_color()
		{
			return $this->color;
		}
	}
	?>
	
	<?php
	$x = "Hello world!";
	$x = null;
	var_dump($x);
	?>
	</body>
</html>