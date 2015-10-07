<!DOCTYPE html>
<html>
<head>
	<title>HW #3</title>
</head>
<body>
	<h2>Homework #3</h2>
	<?php
	$startclass = strtotime("Sep 1");
	$endclass = strtotime("+15 weeks", $startclass);
	echo "개강은 <b>".date("M d D", $startclass)."</b> 입니다.<br>";
	echo "종강은 <b>".date("M d D", $endclass)."</b> 입니다.<br>";
	echo "<h3>Server Web Programming 수업은</h3>";
	
	$classMon = strtotime("Monday", $startclass);
	$classWed = strtotime("Wednesday", $startclass);
	
	while($startclass < $endclass)
	{
		echo date("M d D", $classWed)." / ".date("M d D", $classMon)."<br>";
		$classMon = strtotime("+1 week Monday",$startclass);
		$classWed = strtotime("+1 week Wednesday", $startclass);
		$startclass = strtotime("+1 week", $startclass);
	}
	echo "<br>";
	echo "<hr>";
	?>
	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<fieldset>
	<legend>My Birthday Countdown</legend>
	생년 월일을 입력하세요.<br>
		<!--<input type="text" name="year" size="5"> 년<br>-->		
		<select name="year">
		<?php
		for($i=1950;$i<=2015;$i++)
			echo '<option name="year"'.'value="'.$i.'">'.$i.'</option>';
		?>
		</select>년 
		
		<select name="month" >
		<?php
		for($i=1;$i<=12;$i++)
			echo '<option name="month"'.'value="'.$i.'">'.$i.'</option>';
		?>
		</select>월
		
		<select name="day" >
		<?php
		for($i=1;$i<=31;$i++)
			echo '<option name="day"'.'value="'.$i.'">'.$i.'</option>';
		?>
		</select>일<p>

		<input type="submit" name="submit" value="Submit">
	</fieldset>
	<br>
	<?php
	#생년월일 값을 받음.
	$getbirth1 = $_POST["year"];
	$getbirth2 = $_POST["month"];
	$getbirth3 = $_POST["day"];

	#변수 user에 생년월일을 배열로 저장.
	$user = array ($getbirth1, $getbirth2, $getbirth3); //실제 생년월일
	$userb = array (date("Y"),$getbirth2, $getbirth3); //현재 년도의 생일

	#배열로 받은 생년월일을 하나의 string 으로 연결.
	$userbirth=implode("-", $user); 
	$userbirth2=implode("-", $userb);
	echo "My birth is ".$userbirth."<br>";
	//echo "User birth is ".$userbirth2."<br>";
	
	#string을 시간으로 변환.
	//$userbirth = mktime(0,0,0,$getbirth3,$getbirth2,$getbirth1);
	$userbirth=strtotime($userbirth);
	$userbirth2=strtotime($userbirth2);
	//echo "userbirth1 : ".date("Y M d",$userbirth)."<br>";
	//echo "userbirth2 : ".date("Y M d",$userbirth2)."<br>";
	echo "My birthday is ".date("m/d",$userbirth)."<br>";
	//echo "My birthday is ".date("m/d",$userbirth2)."<br>";

	#계산
	$dday = time(); 
	if(ceil($userbirth2-$dday) > 0)
	{
		$countdown = ceil(($userbirth2-$dday)/60/60/24);
	}
	else if(ceil($userbirth2-$dday) == 0)
	{
		echo "<h3>Happy Birth day!!!</h3>";
	}
	else 
	{
		$userbirth2 = strtotime("+1 year", $userbirth2);
		$countdown = ceil(($userbirth2-$dday)/60/60/24);
	}
	
	echo "<br>생일까지 남은 기간은 <b>".$countdown."</b>일 입니다.";
	
	?>
	</form>
</body>
</html>