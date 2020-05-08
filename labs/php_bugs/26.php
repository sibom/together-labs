
<?php 
error_reporting(0);
 show_source("26.php");
   echo '<br>';
	require_once('shield.php');
	$x = new Shield();
	isset($_GET['class']) && $g = $_GET['class'];
	//echo $g;
	if (!empty($g)) {
		$x = unserialize($g);
		//echo serialize($x);
	}
	echo $x->readfile();
?>
<img src="showimg.php?img=ZXJyb3IudHh0"/>
<h3>Who Care a Picture????</h3>




