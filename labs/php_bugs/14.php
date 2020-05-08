<?php
 show_source("14.php");
   echo '<br>';
error_reporting(0);
if($_GET[id]) {
require('config.php');
echo "flag ->id=1024  <br>" ;
$id = intval($_GET[id]);
  $query = @mysql_fetch_array(mysql_query("select pwd from userinfo where id='$id'"));
  if ($_GET[id]==1024) {
      echo "<p>no! try again,Dick!</p>";
  }
  else{
    echo($query[pwd]);
  }
}

?>