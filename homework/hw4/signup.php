<!--<link href="jobfair.css" type="text/css" rel="stylesheet" />-->

<!DOCTYPE html>
<html>
<head>
<title>Attend Job Fair!</title>
<link href="jobfair.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<?php
	
		$name = $_POST["name"];
		$email = $_POST["email"];
		$interest = $_POST["interest"];
		$gender = $_POST["gender"];

		$rlist = "list.txt";
		$new = true;
		
		# $rlist에서 파일을 \n 으로 이어붙여 $list에 배열로 저장.
		$list = explode("\n", file_get_contents($rlist));

		# 하나라도 선택을 안했을 경우 경고메세지.
		if( empty($name) || empty($email) || empty($interest) || empty($gender) ){
			echo "<h1>Sorry</h1>";
			echo "You didn't fill out the form completely. ";
			echo "<a href='$_SERVER[HTTP_REFERER]'>Try again?</a>";

		}
		else {
			# 다 입력했을 경우, name 과 email 의 유효성 검사.
			# 유효하지 않을 경우 경고메세지.
			if( !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email) ||
				!preg_match("/^[a-zA-Z ]*$/", $name)){
				echo "<h1>Sorry</h1>";
				echo "You didn't provide a e-mail address or name. ";
				echo "<a href='$_SERVER[HTTP_REFERER]'>Try again?</a>";
				$new = false;
			}


			# $list 배열에 " : " 로 $name, $email, $interest, $gender 저장.
			foreach( $list as $user ){
				list( $username, $useremail, $userinterest, $usergender ) = explode(" : ", $user);
				
				# 기존회원일 경우 $list와 비교하여 맞으면 이미 등록되었다는 메세지 출력 후 break.		
				if( $name == trim($username) && $email == trim($useremail) && 
					$interest == trim($userinterest) && $gender == trim($usergender) ){
					$new = false;
					echo "<h3>You have already signed!!!</h3>";
					break;
				}				

			}
			# 기존 회원이 아닐경우 새로 등록.
			if( $new ){
				# $list에서 파일을 불러온다.
				file_put_contents($rlist, $name." : ".$email." : ".$interest." : ".$gender."\n", FILE_APPEND);
				echo "<h1>Thanks, Job Seeker !</h1>";
				echo "<p>You successfully reserved a seat! See you then ^.^<p>";

				echo "<div class='item'>Name : </div>";
				echo $name;
				echo "<br><div class='item'>E-mail : </div>";
				echo $email;		
				echo "<br><div class='item'>Field of interest : </div>";
				echo $interest;
				echo "<br><div class='item'>Gender : </div>";
				echo $gender;

				echo "<hr>";
				echo "<h3>Current reservation list </h3>";

				$readtxt = fopen("list.txt", "r") or die ("No");
				while(!feof($readtxt)){
					echo "<b>".fgets($readtxt)."</b><br>";
				}
				fclose($myfile);
			}

		}

		

		
	?>
</body>
</html>