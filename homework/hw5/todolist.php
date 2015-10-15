<?php require("common.php"); ?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Remember What-To-Do</title>
		<link href="todolist.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
		$loginuser = $_SESSION['login'];
		?>

		<div class="headfoot">
			<h1>
				<img src="http://jun.hansung.kr/SWP/HW/ToDoList/cow.gif" alt="logo" />
				Remember<br /> What-To-Do
			</h1>
		</div>

		<div id="main">
			<h2><?php echo $loginuser; ?>'s To-Do List</h2>

			<ul id="todolist">
				<?php 				
				$tlist = "$loginuser.txt";
				$listarray = explode("\n", file_get_contents($tlist));
				for($line_no = 0; $line_no < count($listarray)-1; $line_no ++)
				{
				?>
				<li>					
					<?php echo $listarray[$line_no]; ?>
					<form action="submit.php" method="post">
						<input type="hidden" name="action" value="delete" />
						<input type="hidden" name="line" value="<?=$line_no?>" />
						<input type="submit" name="submit" value="delete" />
					</form>					
				</li>
				<?php } ?>
						
				<li>
					<form action="submit.php" method="post">
						<input type="hidden" name="action" value="add" />
						<input name="item" type="text" size="25" autofocus="autofocus" />
						<input type="submit" value="add" />
					</form>
				</li>
			</ul>

			<div>
				<a href="logout.php"><strong>Log Out</strong></a>
				<em>(logged in since<?php echo $_SESSION["begin"];?>)</em> 
			</div>

		</div>

		<div class="headfoot">
			<p>
				<q>Remember What-To-Do is nice, but it's a total copy of another site "Remember the Milk".</q> - PCWorld<br />
				All pages and content &copy; Copyright What-To-Do Inc.
			</p>
		</div>		
	</body>
</html>