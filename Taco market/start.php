<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Taco's market</title>
		<link href="market.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="headfoot">
			<h1>
				<img src="TACO.png" alt="logo" />
				Hansung<br /> Market
				<hr/>
			</h1>
		</div>

		<div id="main">
			<p>
				The best way to sell or buy things you want. <br />
				Let's start Hansung Market!
			</p>

			<p>
				Log in now to manage your account. <br />
				If you do not have an account, one will be created for you.
			</p>

			<form id="loginform" action="login.php" method="post">
			<table border="2">
				<div>
				<tr>
					<th colspan="2">Login</th>
				</tr>
				<tr>
					<td>
						<strong>ID</strong>
					</td>
					<td>
						<input name="name" type="text" size="8" autofocus="autofocus" />
					</td>
				</tr>
				</div>
				<div>
				<tr>
					<td>
						<strong>Password</strong>
					</td>
					<td>
						<input name="password" type="password" size="8" />
					</td>
				</tr>
				</div>
				<div>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Log in" />
					</td>
				</tr>
				</div>
			</table>
			<hr>
			If you don't have an account click <b><a href="signup.php">Sign up</a></b>
			</form>
		
		</div>

		<div class="tailfoot">
			<p>
				<!-- <q></q> --> This name of program is Hansung used market. But actually it's real name is Taco's Market..!<br />
				All pages and content &copy; Copyright Taco's Inc.
			</p>
		</div>
	</body>
</html>