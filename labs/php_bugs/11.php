<?php
 show_source("11.php");
   echo '<br>';
error_reporting(0);
require 'flag.php';

if($_POST[user] && $_POST[pass]) {
require('config.php');
} else{
	echo "Sons of bitch!";
}
$user = $_POST[user];
$pass = md5($_POST[pass]);

$sql = "select uname from userinfo where (uname='$user') and (pwd='$pass')";
$query = mysql_query($sql);
if (!$query) {
    printf("Error: %s\n", mysql_error($con));
    exit();
}
$row = mysql_fetch_array($query, MYSQL_ASSOC);
  if($row['uname']=="admin") {
    echo "<p>Logged in! Key: $flag </p>";
  }

  if($row['uname'] != "admin") {
    echo("<p>You are not admin!</p>");
  }

mysql_close($con);
?>
