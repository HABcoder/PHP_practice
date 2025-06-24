<?php


$fruits = array('Mango','Grapes','Orange');
echo $fruits[1];
echo '<br>';

$colors = ["color1" => 'Pink', "color2" => 'Blue', "color3" => 'Green'];
echo $colors["color2"];
foreach($colors as $k => $v) {
    echo $v."<br>";
}



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

?>