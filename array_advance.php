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
?>