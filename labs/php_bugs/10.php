<?php
 show_source("10.php");
   echo '<br>';
require 'flag.php';
error_reporting(0);
if(eregi("hackerDJ",$_GET[id])) {
  echo("<p>not allowed!</p>");
  exit();
}

$_GET[id] = urldecode($_GET[id]);
if($_GET[id] == "hackerDJ")
{
  echo "<p>Access granted!</p>";
  echo "<p>flag: $flag </p>";
}
?>