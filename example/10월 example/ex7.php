<!DOCTYPE html>

<?php 
#session은 항상 맨 위에다가!!!
session_start(); 

if( isset($_SESSION['views'])){
	$_SESSION['views'] = $_SESSION['views'] + 1;
}
else {
	$_SESSION['views'] = 1;
}

?>

<?php
/*
$expire=time()+60*60;
setcookie("user", "Alex Porter", $expire);
setcookie("user", "", time()-3600);
*/
$expire = time()+3600;
setcookie("username2", "Youji", $expire);

if(isset($_COOKIE["username2"])) {
	#처음 세팅한게 아니라 이미 세팅이 되어있다면 $user에 저장
	$username2 = $_COOKIE["username2"];
}
else {
	$username2 = "Guset";
}

if( !isset($_COOKIE["visits"])) {
	$visits = 0;
}
else {
	$visits = $_COOKIE["visits"];
}
setcookie("visits", $visits + 1, $expire);

?>


<html>
<head><title>Exercises 7</title></head>
<body>
<h2>Exercises 7 - by Youji Hwang</h2>
<h4>localhost/examples/ex7.php.txt</h4>
	<h3>PHP Cookies</h3>
	<?php
	echo $_COOKIE['user']."<br>";
	print_r($_COOKIE);
	echo "<br>";

	if(isset($_COOKIE['user'])) {
		echo "Welcome ".$_COOKIE['user']."!<br>";
	}
	else {
		echo "Welcome guest!<br>";
	}
	?>
	<hr>
	<form action="ex7.php" method="post">
	Name: <input type="text" name="name">
	Age: <input type="text" name="age">
	<input type="submit">
	</form>
	
	Welcome <?php echo $_POST["name"]; ?>.<br>
	You are <?php echo $_POST["age"]; ?> years old.

	<hr>
	<h1>Counter using Cookie</h1>
	<?php
	echo "Welcome ".$username2." !<br>";
	if ($visits > 0) {
		echo "You visited this site ".$visits." times.";
	}
	else {
		echo "Welcome to this site! This is your first visit!";
	}
	?>
	<hr>
	<h3>PHP Sessions</h3>
	<?php
	echo "Pageviews = ".$_SESSION['views'];
	echo "<h1>Hello</h1>";
	echo "Views = ".$_SESSION['views'];

	session_destroy();
	?>

</body>
</html>