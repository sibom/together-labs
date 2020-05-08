<?php
 show_source("23.php");
   echo '<br>';
error_reporting(0);
require 'flag.php';
$temp = $_GET['password'];
if($temp && md5($temp)==0){
    echo $flag;
}

?>