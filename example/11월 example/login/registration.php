<!DOCTYPE html>
<?php
session_start();

$con = mysqli_connect('localhost', 'root', '123123', 'users_db');
# submit 이 눌렸는지 확인하기.
if( isset($_POST['submit']) ){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	/***************
	유효성 검사 같은거 하기!!
	ID는 영어 대소문자와 숫자만 이라던가..
	email 유효성 검사라던가..
	****************/
	# 따로 확인하는게 좋은데 여기서는 일단 빠르게 하려고 이렇게 한꺼번에 함.
	if( empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) ){
		echo "<script>alert('Please enter all required field!!')</script>";
	}
	else {
		# 하나라도 똑같은게 있으면 가입 안되게 하려고 한다.
		$query = "SELECT * FROM users 
				  WHERE name='$username' OR email='$email'";
		$result = mysqli_query($con, $query);

		# $result 가 없으면 실행을 시켜야하고 하나가 있으면 (0이상이므로) 실행하면 안된다.
		if( mysqli_num_rows($result) > 0 ) {
			header("Location: registration.php?MSG=Username or Email is already exist.. Please use another one!!");
		}
		else {
			# $result가 없으므로 가입 시킨다. 
			$query = "INSERT INTO users (name, pass, email) 
					  VALUES ('$username', '$password', '$email')";
			# 아무 error가 없으면 true 값이 되므로 session login을 해준다.
			if( mysqli_query($con, $query) ) {
				$_SESSION['login'] = $username;
				header("Location: content.php");
			}
		}

	}

}
?>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
<?php
# Register 오류 시에 MSG 띄우기.
if( isset($_GET['MSG']) ){
	echo $_GET['MSG'];
}
?>
	<form action="registration.php" method="POST">
	<table border="2">
		<tr>
			<th colspan="2" align="center">Registration</th>
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
			<td>E mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit" value="Registration"></td>
		</tr>
	</table>
	</form>
</body>
</html>