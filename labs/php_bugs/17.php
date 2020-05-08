<?php
 show_source("17.php");
   echo '<br>';
if($_POST[user] && $_POST[pass]) {
require 'flag.php';
error_reporting(0);
require 'config.php';
  $user = $_POST[user];
  $pass = md5($_POST[pass]);
  $query = @mysql_fetch_array(mysql_query("SELECT pwd FROM userinfo WHERE uname='$user'"));
  if (($query['pwd']) && (!strcasecmp($pass, $query['pwd']))) {

      echo "<p>Logged in! Key: $flag";
  }
  else {
    echo("<p>Log in failure!</p>");
    
  }
  mysql_close($con);
}

?>