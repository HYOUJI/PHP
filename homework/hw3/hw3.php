<!DOCTYPE html>
<html>
<head>
	<title>HW #3</title>
</head>
<body>
	<h2>Homework #3 - 1391045 황유지</h2>
	<?php
	#개강날짜와 종강날짜 설정.
	$startclass = strtotime("Sep 1");
	$endclass = strtotime("+15 weeks", $startclass);
	echo "개강은 <b>".date("M d D", $startclass)."</b> 입니다.<br>";
	echo "종강은 <b>".date("M d D", $endclass)."</b> 입니다.<br>";
	echo "<h3>[Server Web Programming 수업 날짜]</h3>";
	
	#월요일, 수요일을 변수에 저장.
	$classMon = strtotime("Monday", $startclass);
	$classWed = strtotime("Wednesday", $startclass);
	$i = 1;
	
	#개강날짜와 종강날짜 사이의 월요일, 수요일 출력.
	while($startclass < $endclass)
	{
		echo $i.". ".date("m/d l", $classWed)."<br>";
		$i++;
		echo $i.". ".date("m/d l", $classMon)."<br>";
		$i++;
		$classMon = strtotime("+1 week Monday",$startclass);
		$classWed = strtotime("+1 week Wednesday", $startclass);
		$startclass = strtotime("+1 week", $startclass);
		
	}
	echo "<br>";
	?>
	
	<hr>
	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<fieldset>
	<legend>Input My Birthday</legend>
	생일을 입력하세요.<br>
		<!--<input type="text" name="month2" size="1">월-->
		<!--<input type="text" name="day2" size="1">일<p>-->
		
		<select name="month2" >
		<?php
		for($i=1;$i<=12;$i++)
			echo '<option name="month2"'.'value="'.$i.'">'.$i.'</option>';
		?>
		</select>월	
		<select name="day2" >
		<?php
		for($i=1;$i<=31;$i++)
			echo '<option name="day2"'.'value="'.$i.'">'.$i.'</option>';
		?>
		</select>일<p>
		<input type="submit" name="submit2" value="Submit">
	</fieldset>
	<?php
	#생일 값을 받아와 배열에 저장.
	$getbirth = array ($_POST["month2"], $_POST["day2"]);
	
	#배열로 받은 생일 값을 string으로 만듬.
	$userbirth3 = implode("/", $getbirth);
	echo "The date of my birth is ".$userbirth3."<br>";
	
	#string을 시간으로 변환.
	$userbirth3 = strtotime($userbirth3);
	
	#제대로 변환되었는지 확인.
	//echo "userbirth3: ".date("Y m d", $userbirth3)."<br>";

	#계산
	$dday2 = time(); //$dday2에 현재 시간 저장.
	$countdown2 = ceil(($userbirth3-$dday2)/60/60/24); //d-day
	
	if($countdown2 >= 0)
	{
		if($countdown2 == 0)
			echo "<h1>Happy Birth day!!!</h1>";
	}
	else
	{
		$userbirth3 = strtotime("next year", $userbirth3);
		$countdown2 = ceil(($userbirth3-$dday2)/60/60/24);
		echo "생일까지 남은 기간은 <b>".$countdown2."</b>일 입니다.<p>";
	}
	?>
	</form>
	
	<hr>
	
	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<fieldset>
	<legend>Input My Birthday</legend>
	생년 월일을 입력하세요.<br>		
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
	$getyear = $_POST["year"];
	$getmonth = $_POST["month"];
	$getday = $_POST["day"];

	#변수 user에 생년월일을 배열로 저장.
	$user = array ($getyear, $getmonth, $getday); //실제 생년월일
	$userb = array (date("Y"),$getmonth, $getday); //현재 년도의 생일

	#배열로 받은 생년월일을 하나의 string 으로 연결.
	$userbirth1=implode("-", $user); 
	$userbirth2=implode("-", $userb);
	echo "The date of my birth is ".$userbirth1."<br>";

	#string을 시간으로 변환.
	$userbirth1=strtotime($userbirth1);
	$userbirth2=strtotime($userbirth2);

	#제대로 변환되었는지 확인.
	//echo "userbirth1 : ".date("Y M d",$userbirth1)."<br>";
	//echo "userbirth2 : ".date("Y M d",$userbirth2)."<br>";
	//echo "The date of my birth is ".date("m/d",$userbirth1)."<br>";
	//echo "My birthday is ".date("m/d",$userbirth2)."<br>";

	#계산
	$dday = time(); //$dday에 현재 시간 저장.
	$countdown = ceil(($userbirth2-$dday)/60/60/24); //d-day
	
	if($countdown >= 0)
	{
		if($countdown == 0)
			echo "<h1>Happy Birth day!!!</h1>";
		else echo "<br>생일까지 남은 기간은 <b>".$countdown."</b>일 입니다.<p>";
	}
	//countdown이 음수일 경우 userbirth2의 시간을 1년뒤로 설정해 준다.
	else 
	{
		$userbirth2 = strtotime("next year", $userbirth2);
		$countdown = ceil(($userbirth2-$dday)/60/60/24);
		echo "<br>생일까지 남은 기간은 <b>".$countdown."</b>일 입니다.<p>";
	}
	?>
	</form>
	
	
</body>
</html>