<?php
require("todolist.php");

$todotext = $_POST['item'];
$temp = $_POST['action'];
$num_del = $_POST['line'];

if($temp == "add"){
	if( isset($tlist)) {
	   file_put_contents($tlist,$todotext."\n", FILE_APPEND);
	}
	else {
	  file_put_contents($tlist,$todotext, FILE_APPEND);
	}
}
else if($temp == "delete"){
	array_splice($listarray, $num_del, 1);

	$myfile = fopen($tlist,"w") or die("Error!!");
	fclose($myfile);
	 for($i = 0;$i <count($listarray)-1;$i++)
	 {
	 	file_put_contents($tlist,$listarray[$i]."\n", FILE_APPEND);
	 } 
}

header("Location: todolist.php");
?>
