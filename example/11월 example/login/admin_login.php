<!DOCTYPE html>
<?php
session_start();

# 데이터베이스에 연결.
$con = mysqli_connect('localhost', 'root', '123123', 'users_db');
# 값 넘기기. submit 눌렸는지 확인하기.
if( isset($_POST['submit']) ){
	$admin_username = $_POST['admin_username'];
	$admin_password = $_POST['admin_password'];

	# login할 때 빈칸 입력시 경고창 띄우기.
	if( empty($_POST['admin_username']) ){
		echo "<script> alert('Please enter Admin Username!')</script>";
	}
	if( empty($_POST['admin_password']) ){
		echo "<script>alert('Please enter Admin Password!')</script>";
	}

	# 데이터베이스에서 입력한 내용을 query로 확인하기.
	$query = "SELECT admin_name, admin_pass FROM admin 
			  WHERE admin_name='$admin_username' AND admin_pass='$admin_password'";

	$result = mysqli_query($con, $query);

	if( mysqli_num_rows($result) > 0 ){
		$_SESSION['admin_login'] = $admin_username;
		header("Location: admin_users.php");
	}
	else{
		echo "Wrong admin username or admin password !";		
	}

}

?>
<html>
<head>
	<title>Admin Login page</title>
</head>
<body>
	<form action="admin_login.php" method="POST">
	<table border="2">
		<tr>
			<th colspan="2" align="center">Admin Login</th>
		</tr>
		<tr>
			<td>Admin Username</td>
			<td><input type="text" name="admin_username"></td>
		</tr>
		<tr>
			<td>Admin Password</td>
			<td><input type="password" name="admin_password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" name="submit" value="ADMIN LOGIN">			
			</td>
		</tr>
	</table>
	</form>
</body>
</html>