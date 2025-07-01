<?php 

function happy(){
    echo "Make youself Happy";
}
happy();

echo "<br>";

// with parameter
function sum($a,$c,$t){
    $sum = $a + $c + $t;
    echo "Sum of $a, $c, $t is $sum";
}
sum(60,70,30);

echo "<br>";

// parameter with default value
function greet($name = "John"){
    echo "welcome back $name"."<br>";
}
greet();

$j = "Alis";
greet ($j);

echo "<br>";


// return value
function add($e,$f){
    $sum = $e + $f;
    return $sum;
}
echo add(10,20)."<br>";

$g = add(80,50);
echo $g;

echo "<br>";

//return 2
function result($y,$u,$i){
    $sum = $y + $u + $i;
    return $sum;
}
$total = result(40,80,70);
function percentage($st){
    $percentage = ($st * 100 ) / 300;
    echo $percentage;
}
percentage($total);

?>