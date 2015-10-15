<?php
require("todolist.php");
$todotext = $_POST['item'];
$deletetext = $_POST['line'];

if( isset($tlist)) {
   file_put_contents($tlist,$line_no.$todotext."\n", FILE_APPEND);

} else {
   file_put_contents($tlist, $line_no.$todotext, FILE_APPEND);

}

	if( isset($deletetext) ){
		array_splice($listarray, $line_no, 1);
		$listarray = explode("\n", file_get_contents($tlist));
	}
header("Location: todolist.php");
/*<?php require("common.php"); ?>*/
?>
