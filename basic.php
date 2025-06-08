<?php

//  echo  is used to print the output on the screen.
echo "Welcome to backened development";
echo '<br>';

//  $  is used to declare a variable in PHP.
$num =  10;
$a = 'Coding zone';
$b = 'PHP';


//  .  is used to concatenate.
echo $b.' is used for backened'.'<br>'.$a;
echo '<br>';

// var_dump() is used to print the data type of the variable it also include spaces as well.
var_dump($a); // output : string(11) "Coding zone"



// constant/global variable syntax = define("variale_name",variale_value) 
// variale name '' qotation main likhtay hain
// $ ye sign nhi banatay
define("names",'Ayesha');
echo '<br>'.names;

define("age",20);
echo '<br>'.age;

$add = age - 5;
echo '<br>'.$add;


?>