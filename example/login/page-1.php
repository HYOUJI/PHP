<?php
session_start();
if((!isset($_SESSION["login"]))){
	header("Location: front.php");
}

?>
<html>
<body>
<h1> This is Page ONE </h1>

<a href="page-2.php"> to page-2 </a>
<hr>

<b><a href="logout.php">Logout</a></b>

<?php

?>
</body>
</html>