<?php
 show_source("21.php");
   echo '<br>';
error_reporting(0);
require 'flag.php';
if  ("POST" == $_SERVER['REQUEST_METHOD']) 
{ 
    $password = $_POST['password']; 
    if (0 >= preg_match('/^[[:graph:]]{12,}$/', $password)) //preg_match — 执行一个正则表达式匹配
    { 
        echo 'Wrong Format'; 
        exit; 
    } 
    while (TRUE) 
    { 
        $reg = '/([[:punct:]]+|[[:digit:]]+|[[:upper:]]+|[[:lower:]]+)/'; 
        if (6 > preg_match_all($reg, $password, $arr)) 
            break; 
        $c = 0; 
        $ps = array('punct', 'digit', 'upper', 'lower'); 
        foreach ($ps as $pt) 
        { 
            if (preg_match("/[[:$pt:]]+/", $password)) 
                $c += 1; 
        } 
        if ($c < 3) break; 
        if ("42" == $password) echo $flag; 
        else echo 'Wrong password'; 
        exit; 
    } 
}

?>