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
		//신규 등록 여부.
		$list = explode("\n", file_get_contents($rlist));

		if( empty($name) || empty($email) || empty($interest) || empty($gender) ){
			echo "<h1>Sorry</h1>";
			echo "You didn't fill out the form completely. ";
			echo "<a href='$_SERVER[HTTP_REFERER]'>Try again?</a>";

		}
		else {
			foreach( $list as $user ){
				list( $username, $useremail, $userinterest, $usergender ) = explode(" : ", $user);
				
				#기존회원일 경우
				
				if( $name == trim($username) && $email == trim($useremail) && 
					$interest == trim($userinterest) && $gender == trim($usergender) ){
					$new = false;
					echo "이미등록";
					break;
				}
				

			}

		}

		if( $new ){
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
				echo fgets($readtxt)."<br>";
			}
			fclose($myfile);

		}

		
	?>
</body>
</html>