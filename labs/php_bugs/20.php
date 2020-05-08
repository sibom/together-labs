<?php
 show_source("20.php");
   echo '<br>';
error_reporting(0);
function noother_says_correct($temp)
{
    require 'flag.php';
    $one = ord('1'); 
    $nine = ord('9'); 
    $number = '3735929054';
    for ($i = 0; $i < strlen($number); $i++)
    { 
        $digit = ord($temp{$i});
        if ( ($digit >= $one) && ($digit <= $nine) )
        {
            return "flase";
        }
    }
    if($number == $temp)
        return $flag;
}
$temp = $_GET['password'];
echo noother_says_correct($temp);

?>