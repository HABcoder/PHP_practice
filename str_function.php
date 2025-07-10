<?php 
# string reverse 
$str = "World";
$str_rev = strrev($str);
echo $str_rev;  // Outputs: dlroW

echo "<br>";
# string shufflee
$str2 = "Computer";
$chars = str_shuffle($str2);
echo $chars;  // Outputs: retpmouc
?>