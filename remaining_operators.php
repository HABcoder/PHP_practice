<?php 
 
 // Comparison operators
$a = 9;
$b = 2;
$c = 5;
$d = 12;
$e = 7;
$f = '5';

// Equal to (only check for equality, not check for datatype)
 echo "$a == $c --> ";
var_dump($a == $c); // var_dump() give datatype and also give answer output => bool(false) 
echo '<br>';
var_dump($c == $f);


// not equal to
echo "<br>$a !== $c --> ";
 var_dump($c !== $a );


// triple equals (check for equality and datatype)
echo '<br>';
 var_dump($f === $c);    // output bool(false)
 echo '<br>';
 var_dump($d === $d);  // output bool(true)
echo '<br>';


 // Logical Operator
if($e > 8){
    echo " is greater than 8";
}
else {
    echo "7 is less than 8";
}
echo '<br>';

$pass = 50;

if($pass >= 50){
   if($pass >= 80){
      echo 'You got an A+ so, you are eligile <br>';
   }
   else{
      echo 'You are not eligible for this course';
   }
}
else {
   echo 'You got a C grade';
}
?>