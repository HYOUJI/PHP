<!DOCTYPE html>
<?php

?>
<html>
<body>
	<h1> Admin Fanel for Users Management </h1>

	<table border="2">
		<tr bgcolor="yellow" align="center">
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>E-mail</th>
			<th>delete</th>
		</tr>
		<?php
		$con = mysqli_connect('localhost', 'root', '123123', 'users_db');
		$query = "SELECT * FROM users";
		$result = mysqli_query($con, $query);

		while ( $row = mysqli_fetch_array($result) ){
			$id = $row[0];
			$username = $row[1];
			$password = $row[2];
			$email = $row[3];		
		?>		
		<tr>
			<td><?=$id ?></td>
			<td><?=$username ?></td>
			<td><?=$password ?></td>
			<td><?=$email ?></td>
			<td><a href="delete.php?del=<?=$id?>">delete</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>