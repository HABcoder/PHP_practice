<?php
// List Function
// multideminsional array acCess kiya hai list() function se 
$stud = [
    ["Javeria", 18, "English", 15000],
    ["Ali", 20, "Math", 20000],
    ["Sana", 19, "Science", 18000],
    ["Saba", 21, "Urdu", 12000],
    ["Sara", 22, "Physics", 25000],
];
// list() function se 2 dafa foreach loop use nhi karna parta
foreach ($stud as list($studName, $studAge, $studSuj, $fees)){
    echo "Student Name: $studName, Age: $studAge, Subject: $studSuj, Fees: $fees"."<br>";
}
echo '<br>';


//array_search() / in_array()
// array_search() or in_array dono ik hi hain
$fruit = array('Apple', 'Banana', 'Cherry', 'Date', 'Elderberry');

// true sy datatype check hoti hai
echo in_array('Banana', $fruit,true);

echo '<br>';

// array_search with condition
if(array_search('Cherry', $fruit)){
    echo "Cherry is found in the array";
}
else {
    echo "not found in the array";
};

echo '<br>';

// array_replace()
$food = array("carrot", "apple", "tomato");
$food2 = array("carrot", "banana", "potato");
$newArrar = array_replace($food, $food2);
print_r($newArrar);

echo '<br>';
// array_pop()
array_pop($food2);
print_r($food2);

echo '<br>';
// array_push()
array_push($food, "Ginger");
print_r($food);

echo '<br>';
// array_shift()
array_shift($food);
print_r($food);

echo '<br>';
//array _unshift()
array_unshift($food, "Garlic");
print_r($food);

echo '<br>';
// array_merge() only for index and Associative array
$a = array("Sania","Sumera", "Saba","Zunera");
$c = array("Tania","Wania", "Sara","Zara");
$d = array("a"=> "Sadia","h"=>"Maham","c"=> "Fazila","d"=>"Zoha");
$e = array("e"=> "Nalain","h"=>"Areesha","f"=> "Maryam","g"=>"Mahrukh", 89);

 $array_merge = array_merge($a, $c);
print_r($array_merge);

echo '<br>';
// Associative Array
 $array_merge2 = array_merge($a, $d);
print_r($array_merge2);

echo '<br>';
// Associative Array with same key first value will be replaced
 $array_merge3 = array_merge($e, $d);
print_r($array_merge3);

echo '<br>';
// array_merge_recursive() 
// replace nhi karta same key ki first value ko again array ana dayta hai
$array_merge4 = array_merge_recursive($e, $d);
print_r($array_merge4);

echo '<br>';
// array_combine() ST KO KEY OR SECOND KO VALUE
$keys = array("a", "b", "c");
$values = array("1", "2", "3");
$combined = array_combine($keys, $values);
print_r($combined);

?>