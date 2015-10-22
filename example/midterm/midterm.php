<!DOCTYPE html>
<html>
<head><title>Midterm</title></head>
<body>
<h2>PHP Midterm Exercises</h2>
1. 사용자 입력을 받아 PHP echo 문으로 표시하는 간단한 HTML form 을 작성하시오.<p>
	<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
	<b>Please input your name : </b><p>
	<input type="text" name="name" maxlength="10">
	<input type="submit" name="submit1" value="Submit"><br>
	</form>
	<?php
		$username = $_GET['name'];
		echo "Hello <b>$username</b> !<p>";
	?>
	
2. 사용자로부터 행과 열의 크기를 입력 받아 table 을 표시하는 PHP 코드를 작성하시오.<p>
	<b>Please input the size of table row and column : </b><p>
	<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
	Row : <input type="number" name="row" min="1" max="20"> / 
	Column : <input type="number" name="col" min="1" max="20">
	<input type="submit" name="submit2" value="Submit"><p>
	</form>
	<table border="1">
	<?php
		$row = $_GET['row'];
		$col = $_GET['col'];

		for($i=1; $i<=$row; $i++){
			echo "<tr>";
			for($j=1; $j<=$col; $j++){
				echo "<td>$i : $j</td>";				
			}
			echo "</tr>";
		}
	?>
	</table><p>

3. 다음의 코드는, 텍스트 파일("names.txt")에서 특정 문자를 특정 개수 가진 것을 찾아 내는 코드입니다. 빈 칸을 완성하시오.<p>
	<b>names.txt</b><p>	
	<?php
		$nametxt = "names.txt";
		$namelist = explode("\n", file_get_contents($nametxt));
		foreach($namelist as $key){
			echo $key."<br>";
		}
	?>
	<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
	<p>Letter : <input type="text" name="letter" size="4"> / 
	Number : <input type="number" name="times" min="1" max="10">
	<input type="submit" name="submit3" value="Submit"><p>
	</form>
	<?php		
		if(!isset($_GET["letter"]) || !isset($_GET["times"]) 
			|| strlen($_GET["letter"]) != 1 || $_GET["times"] <= 0){
			die("invalid request");
		}

		# letter의 입력값을 모두 소문자로 변환.
		$letter = strtolower($_GET["letter"]);
		# times의 입력값을 int로 타입변환.
		$times = (int)$_GET["times"];
		$matches = 0;

		# file("names.txt", FILE_IGNORE_NEW_LINES
		# ==> names.txt 의 내용을 배열 끝에 개행하지 않고 배열에 저장.
		foreach(file("names.txt", FILE_IGNORE_NEW_LINES) as $line){
			# $line의 값을 모두 소문자로 변환.
			$lowerline = strtolower($line);
			$count = 0;
			# 루프를 문자열 길이까지 반복
			for($i=0; $i<strlen($line); $i++){
				# $i번째 문자를 $ch에 할당
				$ch = $lowerline[$i];
				# 문자가 일치할 경우 count 증가.
				if($ch == $letter) {		
					$count ++;
				}
			}
			# $count가 $times 보다 같거나 큰 지를 확인.
			if($count >= $times){
				$matches ++;
	?>
	<p><b><?=$line?></b>
	contains '<?=$letter?>' exactly <?=$times?> times. </p>
	<?php
			}
		}
		if($matches == 0) {
	?>
	<p>No names contained '<?=$letter?>' enough times.</p>

	<?php
		}
	?>

</body>
</html>