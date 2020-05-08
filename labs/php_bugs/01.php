<?php
show_source("01.php");
   echo '<br>';
error_reporting(0);
require 'flag.php';
$flag1='flag.txt'; 
extract($_GET);
 if(isset($shiyan))
 { 
    $content=trim(file_get_contents($flag1));
    if($shiyan==$content)
    { 
        echo $flag; 
    }
   else
   { 
    echo'Oh.no';
   } 
   }


?>