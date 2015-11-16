<!DOCTYPE html>
<?php
session_start();

# 데이터베이스에 연결.
$con = mysqli_connect('localhost', 'root', '123123', 'users_db');
# 값 넘기기. submit 눌렸는지 확인하기.
if( isset($_POST['submit']) ){
	$username = $_POST['username'];
	$password = $_POST['password'];

	# login할 때 빈칸 입력시 경고창 띄우기.
	if( empty($_POST['username']) ){
		echo "<script> alert('Please enter your name!')</script>";
	}
	if( empty($_POST['password']) ){
		echo "<script>alert('Please enter your password!')</script>";
	}

	# 데이터베이스에서 입력한 내용을 query로 확인하기.
	$query = "SELECT name, pass FROM users 
			  WHERE name='$username' AND pass='$password'";

	$result = mysqli_query($con, $query);

	# 사용자가 DB에 있으면 content.php 로 이동. 아니면 다시 login.php 이동.
	# mysqli_num_rows : 전달받은 $result 의 갯수를 count.
	# 0보다 만약 크다면 기록이 있다는 것이므로 content.php로 이동.
	
	/**********
	추가적 query 문으로 username이 틀린지 password가 틀린지 해보기.

	
	**********/
	if( mysqli_num_rows($result) > 0 ){
		$_SESSION['login'] = $username;
		header("Location: content.php");
	}
	else{
		echo "Wrong username or password !";		
	}

}

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<form action="login.php" method="POST">
	<table border="2">
		<tr>
			<th colspan="2" align="center">Login</th>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="submit" value="LOGIN">			
			</td>
		</tr>
	</table>
	<hr>
	<b><a href="registration.php">Registration</a></b>
	</form>
</body>
</html>