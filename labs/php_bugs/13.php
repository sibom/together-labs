<?php
 show_source("13.php");
   echo '<br>';
require 'flag.php';
$md51 = md5('QNKCDZO');
$a = @$_GET['a'];
$md52 = @md5($a);
if(isset($a)){
if ($a != 'QNKCDZO' && $md51 == $md52) {
    echo "$flag";
} else {
    echo "false!!!";
}}
else{echo "please input a";}

?>