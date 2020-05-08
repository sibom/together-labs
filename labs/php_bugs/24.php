<?php  
 show_source("24.php");
   echo '<br>';
  header("Content-Type: text/html;charset=utf-8");
error_reporting(0);
require('config.php');
if(!$db)
{
  echo 'select db error';
  exit();
}
$pwd = $_GET['pwd'];
$sql = "SELECT * FROM userinfo WHERE pwd = '".md5($pwd,true)."'";
$result=mysql_query($sql) or die('<pre>' . mysql_error() . '</pre>' );
$row1 = mysql_fetch_row($result);
var_dump($row1);
mysql_close($con);
?>