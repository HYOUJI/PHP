<html>
<body>
	<form method="post" action = "<?=$_SERVER['PHP_SELF']?>">
		<input type="text" name="cookie" size="2"/> Cookie &times; $1.50<br/>
		<input type="text" name="candy" size="2"/> Candy Bar &times; $2.00<br/>
		<input type="checkbox" name="donation"/> Donate $5 extra? <br/>
		<input type="submit" name="submit" value="Buy"/>
	</form>
	
	<?php
	$total = 0.00;
	$cookie = $_POST["cookie"];
	$candy = $_POST["candy"];
	$total += $cookie * 1.50;
	$total += $candy * 2.00;
	if(isset($_POST['donation'])){
		$total +=5.00;
	}
	?>
	
	<hr>
	<h3>Your order: </h3>
	<p>Total order cost : <b><?=$total?></b></p>
	<?php
	if($_POST["cookie"]!="") {echo $cookie." cookies(\$". ($cookie * 1.50).")<br>";}
	if($_POST["candy"]!="") {echo $candy." cookies(\$". ($candy * 1.50).")<br>";}
	if(isset($_POST['donation'])){echo "donation(\$5): Thank you for your donation!";}
	?>
</body>
</html>