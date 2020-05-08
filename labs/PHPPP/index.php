

<?php
show_source("index.php");
   echo '<br>';
error_reporting(0);
@$file = isset($_GET[file])?$_GET['file']:'ctf.php';
include_once($file);
highlight_file($file);

?>