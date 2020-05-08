
<!-- showimg.php -->
<?php
error_reporting(0);  //flag.txt
 show_source("showimg.php");  //flag.txt
   echo '<br>';  //flag.txt
	$f = $_GET['img'];  //flag.txt
	if (!empty($f)) {  //flag.txt
		$f = base64_decode($f);  //flag.txt
		if (stripos($f,'..')===FALSE && stripos($f,'/')===FALSE && stripos($f,'\\')===FALSE  //flag.txt
		//stripos — 查找字符串首次出现的位置（不区分大小写）
		&& stripos($f,'flag')===FALSE) {  //flag.txt
			readfile($f);  //flag.txt
		} else {  //flag.txt
			echo "File not found!";  //flag.txt
		}  //flag.txt
	}  //flag.txt
?>  