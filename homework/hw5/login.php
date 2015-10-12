<?php
session_start();

	$user = $_POST["name"];
	$password = $_POST["password"];

	$granted = false; // 일단은 아무것도 허용된게 없으므로 false...
	$new = true; // 신규 user 여부.
	$userfile = "users.txt";
	$users = explode("\n", file_get_contents($userfile));

# 아무것도 안 집어넣었을 때 오류메세지 출력.
if( empty($user) || empty($password) ) {
	die("Error : missing required parameters !!!");
}
else{
	
	foreach($users as $each){
		# list배열에 $username,$userpass 에 아이디, 비밀번호 저장.
		list($username, $userpass) = explode(":", $each);

		# 기존 회원인 경우.
		if( $user == trim($username) && $password == trim($userpass) ){
			$granted = true;
			$new = false;
			break;
		}
	}

	# login이 되었을 경우.
	if($granted) {
		$_SESSION["login"] = $user;
		header("Location: todolist.php");
	}
	else {
		header("Location: logout.php");
	}

	# 새로운 사용자일 경우 등록.
	if( $new ) {
		file_put_contents($userfile,$user.":".$password."\n", FILE_APPEND);
		$granted = true;
		$_SESSION["login"] = $user;
		header("Location: todolist.php");
	}


}


?>