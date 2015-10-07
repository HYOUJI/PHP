<!DOCTYPE html>
<html>
<body>
	<h2>Homework 1 - by Youji Hwang</h2>
	<h4>localhost/HW/hw1.php.txt</h4>
	<?php
	#1번
	echo"<h3>1.</h3>";
	echo '<a href="http://jun.hansung.ac.kr/SWP/"><h2>Server Web Programming</h2></a>';
	echo "<br>";
	
	#2번 
	echo"<h3>2.</h3>";
	echo "These are used <b>strstr()</b>. <br>";
	
	$email = "jun@hansung.ac.kr";
	$username = strstr($email, '@', true);
	
	echo "Email Address: <b>$email</b><br>";
	echo "User Name is <b>$username</b><br><br>";
	
	echo "These are used <b>strpos() and substr().</b><br>";
	
	$myemail = "mechuri13@gmail.com";
	$adpos = strpos($myemail, '@');
	$myname = substr($myemail, 0, $adpos);
	
	echo "Email Address: <b>$myemail</b><br>";
	echo "User name is : <b>$myname</b><br><br>";
	
	#3번 
	echo"<h3>3.</h3>";
	$strnum = "072506"; //07:25:06:
	$chunkstr = substr(chunk_split($strnum, 2, ':'), 0, -1);
	echo $chunkstr."<br><br>";
	
	#4번 
	echo"<h3>4.</h3>";
	$hsurl = "http://jun.hansung.ac.kr/SWP";
	$urlpos =  strrpos($hsurl, 'SWP');
	$printurl = substr($hsurl,$urlpos);

	echo $printurl."<br><br>";
	
	#5번 
	echo"<h3>5.</h3>";
	echo "<b>while</b>";
	$i = 1;
	while($i<=6)
	{
		echo "<h$i>Heading $i example</h$i>";
		$i++;
	}
	
	echo "<hr><b>do-while</b>";
	$i = 1;
	do
	{
		echo "<h$i>Heading $i example</h$i>";
		$i++;
	}while($i<=6);
	
	echo "<hr><b>for</b>";
	for($i=1;$i<=6;$i++)
	{
		echo "<h$i>Heading $i example</h$i>";
	}
	echo "<br><br>";
	
	#6번 
	echo "<h3>6.</h3>";
	echo "<table border 1px width=1000px>";
	for($i=1;$i<=3;$i++)
	{	
		echo "<tr>";	
		for($j=1;$j<=5;$j++)
		{			
			echo "<td>&nbsp$i row - $j column</td>";

		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
	
	#7번 
	echo "<h3>7.</h3>";
	   
	echo "<table border 1px width=800px>";
	for($i=1;$i<=9;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=9;$j++)
		{
			echo "<td>$i*$j=".$i*$j."</td>";
		}
		echo
		"</tr>";
	}
	echo "</table>";
	echo "<br>";

	
	#8번 
	echo"<h3>8.</h3>";
	$midterm = array('Kim'=>98, 'Lee'=>34, 'Park'=>55, 'Hwang'=>100, 'Cho'=>98,
	'Choi'=>50,	'Jung'=>78, 'Pyo'=>40, 'Jeon'=>29, 'No'=>88,
	'Ji'=>19, 'Jang'=>11, 'Hong'=>90, 'Jeong'=>42, 'Seo'=>93,
	'Lim'=>37, 'Joo'=>60, 'Kang'=>55, 'Baek'=>72, 'Yang'=>4);
	
	arsort($midterm);
	foreach($midterm as $name=>$value)
	{	
		echo "Student $name's score is \"$value\" <br>"; //$midterm
	}
	echo "<br><br>";
	
	#9번 
	echo"<h3>9.</h3>";
	function factorial($n)
	{
		if($n > 0)
		{
			#echo $n."<br>";
			return $n*factorial($n-1);
		}
		else return 1;
	}	
	echo "factorial(5) = ".factorial(5)."<br><br>";
	
	#10번 
	echo"<h3>10.</h3>";
	function isPrime($num)
	{
		if($num%2 == 1)
		{
			# 1 3 5 7 9 11 13 15 17 19 21 23 25 ... 홀수
			if($num%3 != 0 && $num%5 != 0)
			{
				echo "This is prime number!!<br>";
			}
		}
		else echo "This is not prime number...<br>";
	}
	
	$num1 = 2;
	$num2 = 13;
	echo "INPUT >> $num1<br>";
	isPrime(2);
	echo "INPUT >> $num2<br>";
	isPrime(13);
	
	echo "<br><br>"

	?>
	
</body>
</html>