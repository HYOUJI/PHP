<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");

if (isset($_FILES)){
	$file = $_FILES["file"];
	print_r($file); echo "<br><br>";
	$error = $file["error"];
	$name = $file["name"];
	$type = $file["type"];
	$size = $file["size"];
	$tmp_name = $file["tmp_name"];
	
	if($error > 0){
		echo "Error: ".$error."<br>";
	}
	else{
		$temp = explode(".", $name);
		$extension = end($temp);
		//print_r($temp); echo "<br>";
		//$extension = end($temp);
		//echo $extension; echo "<br>";
		if((($size/1024/1024) < 2.) || in_array($extension, $allowedExts)){
			//echo "Upload: ".$name."<br>";
			//echo "Type: ".$type."<br>";
			//echo "Size: ".($size/1024/1024)." Mb<br>";
			//echo "Stored in: ".$tmp_name."<br>";
			if(file_exists("upload/".$name)){
				echo $name." already exists. ";
			}
			else{
				move_uploaded_file($tmp_name, "upload/".$name);
				echo "Stored in: "."upload/".$name;
			}
		}
		else{
			echo ($size/1024/1024)." Mbyte is bigger than 2 Mb";
			echo $extension."format file is not allowed to upload! ";
		}
	}
}
else {
	echo "File is not selected<br>";
}
?>