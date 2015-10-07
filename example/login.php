<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	<input type="text" name="name" /> Name<br/>
	<input type="password" name="pass"/> Password
	<?php
	if($_GET["pass"] == "wrong"){
	echo "<b> is wrong ! type again ! </b>";
	}
	?>
	<br/>
	<input type="submit" name="submit" value="Login"/>
</form>

<?php
if ( isset($_POST['submit'])){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$userfile = "users.txt";
	$new = true;
	$granted = false;

	#줄바꿈 으로 구분하여 잘라준다.
	$users = explode("\n", file_get_contents($userfile));

	foreach( $users as $user1 ){
		# ":" 로 user1을 잘라서 아이디 비번으로 나눠서 $user1name, $user1pass에 저장한다.
		# 아이디 비번을 나눈 것을 list 배열에 저장한다....?
		list($user1name, $user1pass) = explode(":", $user1);

		if( $name == trim($user1name) ){
			$new = false;
			if( $pass == trim($user1pass) ){
				#GET의 방식은 이런다. ~~.php?user=$name
				#user라는 변수에 $name을 저장한다.
				#header("Location: content.php") 는 여기로 이동하란 소리.
				#.strtoupper($name)으로 해주어야 한다.
				header("Location: content.php?user=".strtoupper($name));
			}
			else {

				header("Location: login.php?pass=wrong");
			}
		}

	}
	if( $new ){
		file_put_contents($userfile, $name.":".$pass."\n", FILE_APPEND);
		header("Location: content.php?user=".strtoupper($name));
	}

}
?>