<?php
 show_source("12.php");
   echo '<br>';
function GetIP(){
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
    $cip = $_SERVER["HTTP_CLIENT_IP"];
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
else if(!empty($_SERVER["REMOTE_ADDR"]))
    $cip = $_SERVER["REMOTE_ADDR"];
else
    $cip = "0.0.0.0";
return $cip;
}
require 'flag.php';
$GetIPs = GetIP();
if ($GetIPs=="1.1.1.1"){
echo "Great! Key is $flag";
}
else{
echo "错误！你的IP不在访问列表之内！";
}
?>