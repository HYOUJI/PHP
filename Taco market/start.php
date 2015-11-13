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
				<div><strong>ID<?php for($i=1;$i<=15;$i++) { echo"&nbsp;";}?></strong><input name="name" type="text" size="8" autofocus="autofocus" /></div>
				<div><strong>Password&nbsp;</strong><input name="password" type="password" size="8" /></div>
				<div><input type="submit" value="Log in" /></div>
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