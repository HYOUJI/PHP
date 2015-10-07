<html>
	<head>
		<title>Order</title>
	</head>
	<body>
	<p>
	<h2>Homework - 2</h2>
	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<fieldset>
	<legend>Order Form</legend>
		<input type="text" name="cookie" size="2">
		<img src="http://jun.hansung.kr/swp/HW/Order/cookie.gif" style="width:52px; height:52px" alt="HTML5 Icon"> Cookie × $1.50<p>
		<input type="text" name="candybar" size="2">
		<img src="http://jun.hansung.kr/swp/HW/Order/snickers.jpg" style="width:21px; height:58px" alt="HTML5 Icon"> Candy Bar × $2.00<p>
		
		Shipping:
		<label><input type="radio" name="ship" value="Regular"> Regular ($6) </label>
		<label><input type="radio" name="ship" value="Express"> Express ($10) </label><br>
		Donation: <input type="checkbox" name="donation"> $5 extra <br>
		
		<input type="submit" name="submit" value="Buy Now!">
	</fieldset>
	<hr>	
	<?php
	$cost = 0.00;
	$cookie = $_POST["cookie"];
	$candybar = $_POST["candybar"];
	$cost += $cookie * 1.50;
	$cost += $candybar * 2.00;
	$ship = $_POST["ship"];
	if($ship == "Regular")
		$cost += 6.00;
	else if($ship == "Express") $cost += 10.00;
	if(isset($_POST["donation"]))
		$cost += 5.00;
	?>
	<fieldset>
	<legend>Your Order</legend>
	<?php
	if($_POST["cookie"]!="") {
		for($i=1;$i<=$cookie;$i++)
			echo '<img src="http://jun.hansung.kr/swp/HW/Order/cookie.gif" style="width:52px; height:52px" alt="HTML5 Icon"> ';
	}
	if($_POST["candybar"]!=""){
		for($i=1;$i<=$candybar;$i++)
			echo '<img src="http://jun.hansung.kr/swp/HW/Order/snickers.jpg" style="width:21px; height:58px" alt="HTML5 Icon"> ';
	}
	echo "<p>";

	echo "Total order cost: <b>$$cost</b><p>";
	if(isset($_POST["donation"])) echo "Thank you for your donation!";
	?>
	
	
	
	
	
	</form>
	</body>
</html>