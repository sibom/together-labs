<?php
 error_reporting(0);
 show_source("27.php");
   echo '<br>';
if(!$_GET['id']) {
	echo "What are you thinking?";
	exit();
}
$id=$_GET['id'];
$a=$_GET['a'];
$b=$_GET['b'];
if(stripos($a,'.')) {
	echo 'Hahahahahaha';
	return ;
}
$data = @file_get_contents($a,'r');
if($data=="1112 is a nice lab!" and $id==0 and strlen($b)>5 and eregi("111".substr($b,0,1),"1114") and substr($b,0,1)!=4) {
	require("flag.txt");
} else {
	print "work harder!harder!harder!";
}
?>