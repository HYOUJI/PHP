<!--<link href="jobfair.css" type="text/css" rel="stylesheet" />-->

<!DOCTYPE html>
<html>
<head><title>Attend Job Fair!</title></head>
<body>
	<?php
	if( isset($_POST["submit"] )) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$interest = $_POST["interest"];
		$gender = $_POST["gender"];

		$rlist = "list.txt";
		$new = true; //신규 등록 여부.

		//$list = explode("\n", file_get_contents($rlist));

		foreach ($list as $user) {
			list( $username, $useremail, $userinterest, $usergender ) = explode(" : ", $user);

			if( $name == trim($username) ){
				#기존 등록 회원일 때
				$new = false;
				if( $email == trim($useremail) ){
					if( $interest == trim($userinterest) ){
						if( $gender == trim($usergender) ){
							echo "<h1>Thanks, Job Seeker !</h1>";
							echo "<p>You successfully reserved a seat! See you then ^.^<p>";

							echo "<div class="item">Name : </div>";
							header("Location: signup.php?$_GET['user']");
							echo "<div class="item">E-mail : </div>";
							echo "<div class="item">Field of interest : </div>";
							echo "<div class="item">Gender : </div>";

							echo "<hr>";
							echo "<h3>Current reservation list </h3>"
							
							header("Location: signup.php?=wrong");

						} 
					} 
				} 
			}			
		}
	}
	?>
</body>
</html>