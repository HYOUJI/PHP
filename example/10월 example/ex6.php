<!DOCTYPE html>
<html>
<head><title>Exercises 6</title></head>
<body>
<h2>Exercises 6 - by Youji Hwang</h2>
<h4>localhost/examples/ex6.php.txt</h4>

	<?php
	echo "<h3>PHP File Handling</h3>";
	echo readfile("webdictionary.txt")."<br><br>";
	
	$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
	echo fread($myfile, filesize("webdictionary.txt"));
	fclose($myfile);
	echo "<br>";
	
	$myfile = fopen("webdictionary.txt", "r");
	fclose($myfile);
	echo "<br>";
	
	$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
	echo fgets($myfile);
	fclose($myfile);
	echo "<br><br>";
		
	$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
	while(!feof($myfile)){
		echo fgets($myfile)."<br>";
	}
	fclose($myfile);
	echo "<br>";
	
	$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
	while(!feof($myfile)){
		echo fgetc($myfile);
	}
	fclose($myfile);
	?>
	
	<hr>
	
	<?php
	echo "<h3>PHP File Create Write</h3>";
	
	$myfile = fopen("testfile.txt", "w");
	
	$myfile = fopen("testfile.txt", "w") or die ("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($myfile, $txt);
	$txt = "Jane Doe\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	
	echo "<br>";
	echo "file()<br>";
	$lines = file('http://www.google.co.kr');
	foreach($lines as $line_num => $line){
		echo "Line #<b>{$line_num}</b> : ".htmlspecialchars($line)."<br/>\n";
	}
	$html = implode('', file('http://www.google.co.kr'));
	$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	
	echo "<br><br>file_get_contents()";
	$homepage = file_get_contents('http://jun.hansung.ac.kr/');
	echo $homepage."<br>";
	
	echo "file_put_contents()<br><br>";
	$file = 'people.txt';
	$current = file_get_contents($file);
	$current .= "John Smith\n";
	file_put_contents($file, $current);
	
	echo "basename()<br>";
	echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
	echo "2) ".basename("/etc/sudoers.d").PHP_EOL;
	echo "3) ".basename("/etc/passwd").PHP_EOL;
	echo "4) ".basename("/etc/").PHP_EOL;
	echo "5) ".basename(".").PHP_EOL;
	echo "6) ".basename("/").PHP_EOL;
	echo "<br><br>";
	
	echo "file_exists()<br>";
	$filename = '/path/to/foo.txt';
	if(file_exists($filename)){
		echo "The file $filename exists<br>";
	}else {
		echo "The file $filename does not exist<br>";
	}
	
	echo "<br> filesize()<br>";
	$filename = 'somefile.txt';
	echo $filename.': '.filesize($filename).' bytes<br><br>';
	
	echo "fileperms()<br>";
	echo substr(sprintf('%o', fileperms('/tmp')), -4);
	echo substr(sprintf('%o', fileperms('/etc/passwd')), -4);
	
	echo "<br><br>filemtime()<br>";
	$filename = 'somefile.txt';
	if(file_exists($filename)){
		echo "filename was last modified: ".date("F d Y H:i:s.", filemtime($filename));
	}
	
	echo"<br><br> is_dir()<br>";
	var_dump(is_dir('somefile.txt'));
	var_dump(is_dir('/example'));
	var_dump(is_dir('..'));
	echo "<br>Hello";
	
	echo "<br><br>is_readable()<br>";
	$filename = 'test.txt';
	if(is_readable($filename)){
		echo 'The file is readable';
	}else{
		echo 'The file is not readable';
	}
	
	echo "<br><br>is_writable()<br>";
	$filename = 'somefile.txt';
	if(is_writable($filename)){
		echo 'The file is writable';
	}else{
		echo 'The file is not writable';
	}
	
	echo "<br><br>disk_free_space()";
	$df = disk_free_space("/");
	$df_c = disk_free_space("C:");
	$df_d = disk_free_space("D:");
	?>
	
	<hr>
	
	<h3>PHP File Upload</h3>
	<form action="ex6.php" method = "post" enctype = "multipart/form-data">
	<label for = "file">Filename: </label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="Upload">
	</form>
	<br>
	<?php
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	
	if(isset($_FILES)){
		$file = $_FILES["file"];
		$error = $file["error"];
		$name = $file["name"];
		$type = $file["type"];
		$size = $file["size"];
		$tmp_name = $file["tmp_name"];
		if($arror > 0){
			echo "Error: ".$error."<br>";
		}else
			$temp = explode(".",$name);
			$extension = end($temp);
			if(in_array($extension, $allowedExts) && (($size/1024) < 700.)){
			echo "Upload: ".$name."<br>";
			echo "Type: ".$type."<br>";
			echo "Size: ".($size/1024)." Kb<br>";
			echo "Stored in: ".$tmp_name."<br>";
			if(file_exists("upload/".$name)){
				echo $name." already exist.";
			}
			else{
				move_uploaded_file($tmp_name, "upload/".$name);
				echo "Stored in: "."upload/".$name;
			}
			}
			else{
				echo $extension."format file is not allowed to upload! ";
				echo ($size/1024)." Kbyte is bigger than 700 Kb";
			}
	}
	else{
		echo "File is not selected.<br>";
	}
	?>
</body>
</html>