<?php
include 'login.php';
include 'todolist.php';

$log = $_POST["submit"];

function setTime() {

	if ( isset( $log ) ) {
		echo date("F d, Y, h:i:s:a");
	}


}

// function setTime($granted) {
// 	if ( $granted ) {
// 		echo date("F d, Y, h:i:s:a");
// 	} else echo "fail";
// }


?>