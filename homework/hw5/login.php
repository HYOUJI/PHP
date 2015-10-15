<?php

	$user = check_param("name");
	$password = check_param("password");
	
	session_start();
	
	if(checkUser($user, $password)){
		$_SESSION["login"] = $user;
		$_SESSION["begin"] = date("F d, Y, h:i:s:a");
		header("Location: todolist.php");
	}else {
		header("Location: start.php");
	}
	
	function check_param($var){
		if(!isset($_POST[$var]) || $_POST[$var] == ""){
			die("Error: missing required parameter '$var'");
		}
		return trim($_POST[$var]);
	}
	
		
	function checkUser($user, $password){
		$userfile = "users.txt";
		$granted = false;
		$new = true;
		$users = explode("\n", file_get_contents($userfile));
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
		return $granted;
	}

?>