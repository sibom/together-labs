<?php
 show_source("16.php");
   echo '<br>';
require 'flag.php';

error_reporting(0);
require 'config.php';

function clean($str){
    if(get_magic_quotes_gpc()){ 
        $str=stripslashes($str); 
    }
    return htmlentities($str, ENT_QUOTES);
}

$username = @clean((string)$_GET['username']);
$password = @clean((string)$_GET['password']);
$query='SELECT * FROM userinfo WHERE uname=\''.$username.'\'  AND  pwd=\''.$password.'\';';
//echo $query;
$result=mysql_query($query);
//echo $result;
if(!$result || ($result) < 1){
    die('Invalid password!');
}

echo $flag;
mysql_close($con);
?>