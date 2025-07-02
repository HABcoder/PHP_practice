<?php

// Index Array
$fruits = array('Mango','Grapes','Orange');
echo $fruits[1];
echo '<br>';
      // index array for loop
for($p=0; $p < count($fruits); $p++) {
    echo $p.$fruits[$p]."<br>";
}
echo '<br>';
    // index array for foreach loop
foreach($fruits as $f){
    echo $f."<br>";
} 

// Associative Array
$colors = ["color1" => 'Pink', "color2" => 'Blue', "color3" => 'Green'];
echo $colors["color2"];
foreach($colors as $k => $v) {
    echo $v."<br>";
}

// Multidimensional Array
echo "<h3>Multi Dimensional Array</h3>";
$students = [
    ["Sadia",20,"class12",5600],
    ["Rahim",21,"class11",5601],
    ["Mirha",22,"class13",5602],
];
echo $students[1][1];
echo '<br>';
print_r($students); // to test an array
echo '<br>';

// to access an array using for loop
for($g = 0; $g < 3 ; $g++) {
    for($h = 0; $h < 4 ; $h++) {
        echo $students[$g][$h];
    }
    echo '<br>';
}

echo '<br>';

// to access an array using foreach loop using table
 echo "<table border='3px'cellpadding='8px'>";
    echo "<tr> 
     <th> Student Name </th> 
     <th> Student age </th>
     <th> class </th>
     <th> Student Fees </th> ";
    echo "</tr>";

// foreach loop ko zyada use karna hai or best way hai 
// to access an array using foreach loop  
foreach($students as $std) {   
    echo "<tr>";
    foreach($std as $value) {
        echo "<td>$value</td>";
    }  
    echo "</tr>";
};
 echo "</table>";


 // Multi Dimensional Associative Array
echo "<h3>Multi Dimensional Associative Array</h3>";
$veg = [
    "veg1" => ['green' => 'chilli', 'red' => 'tomato'],
    "veg2" => ['purple' => '', 'yellow' => 'lemon']
];
echo '<br>';
echo $veg["veg1"]["green"];

// for each loop used for multi associative array
echo "<h3>Print Complete Multi Dimensional Associative Array</h3>";

echo '<br>';
foreach($veg as $key => $value) {
    echo $key."<br>";
    foreach($value as $k => $v) {
        echo $k." ".$v."<br>";
    }
};

// loops 

echo '<br>';
// while loop
$a = 5;
while($a <= 10){
    echo $a.')hello world'."<br>";
    $a++; 
};

echo '<br>';
$c = 5;
while($c <= 10){
    echo $c.')2 increment loop pak'."<br>";
    $c = $c + 2; 
};

echo '<br>';
// for loop and generate a table
echo "<h4>Table of 10</h4>";
$t = 10;
for($i = 1; $i <= 10; $i++){
    echo $t."*".$i."=".$i*$t."<br>";
};

 echo '<br>';
 
// nested loop
for($y = 1; $y <= 100 ; $y = $y + 10){
    for($z = $y ; $z <= $y + 10 ; $z++ ){
      echo $z." ";
    }
    echo '<br>';
}
?>