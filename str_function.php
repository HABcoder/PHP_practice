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


echo "<br>";
# string ky center sy koi value get karni ho
$str3 = "John Doe,, Welcome again";
echo substr($str3, 0, 5);  // Outputs: John
echo "<br>";
echo substr($str3,0 , 1); // Outputs: J
echo "<br>";
echo substr($str2,4,2);
?>