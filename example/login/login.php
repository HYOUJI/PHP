<?php
//This is the login.php file.
# 아무것도 안 집어넣었을 때 오류메세지 출력.
if( !isset($_POST["user"]) || $_POST["user"] == "" ){
	die("Error : missing required parameters !!!");
}

$user = $_POST["user"];
$pass = $_POST["pass"];


// session_start();

$granted = false; // 일단은 아무것도 허용된게 없으므로 false...
$userfile = "users.txt";
$users = explode("\n", file_get_contents($userfile));
foreach($users as $each){
	$info = explode(" : ", $each);
	if( $user == trim($info[0]) && $pass == trim($info[1]) ){
		$granted = true;
		break;
	}
}

echo $user." : ". $pass. " has been ". $granted;
//if( checkUser( ))


?>