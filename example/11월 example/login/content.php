<?php
session_start();
# session에 login이 되어있는지 확인하여 없다면 login.php로 이동.
# 중간에 content.php로 들어가는 것을 방지하기위해..
if( !isset($_SESSION['login']) ){
	header("Location: login.php");
}

?>
<html>
<head>
	<title>Content Page</title>
</head>
<body>
	<h1>Content Page</h1>
	<h2>Welcome <?php echo $_SESSION['login']; ?></h2>
	<hr>
	<a href="logout.php">Logout</a>
	
</body>
</html>