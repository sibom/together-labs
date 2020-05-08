<?php
 show_source("22.php");
   echo '<br>';
error_reporting(0);
require 'flag.php';

$temp = $_GET['password'];
is_numeric($temp)?die("no numeric"):NULL;    
if($temp>1336){
    echo $flag;
} 

?>