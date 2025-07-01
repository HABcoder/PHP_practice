<?php 
// goto, continue, break practice

echo "<h3>Continue</h3>";

// continue 
for($i = 1; $i <= 10; $i++){

    if ($i == 5){
        //  continue ky upper wali statement skip nhi hoti
        echo "Skip 5 no". "<br>";
        continue;
        echo "continue mean continue ky neeche wali statement run nahi karega";
        echo "5 ko left kar day ga or sa kuch print karay ga";
    }
    echo $i. "<br>";

};


 echo '<br>';

 // break
echo "<h3>break</h3>";

// continue 
for($a = 1; $a <= 10; $a++){

    if ($a == 5){
        //  break par value is numer par stop ho jati hai
        echo "value is stop". "<br>";
        break;
    }
    echo $a. "<br>";
    
};


// goto function  stop the code direct jump to goto 
// first way
echo "code world". "<br>";
echo "code world". "<br>";
echo "code world". "<br>";
// goto abc;
echo "code world". "<br>";
echo "code world". "<br>";
// abc : echo "goto function run". "<br>";


echo  "<br>";

// second way
for($c = 1; $c <= 10; $c++){
    if ($c == 4){
      goto abc;
    }
    echo $c. "<br>";
};
 abc : echo "Now loop is stop goto function run". "<br>";
?>