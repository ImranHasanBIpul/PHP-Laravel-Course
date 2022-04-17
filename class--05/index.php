<?php

$fruits = array ("apple", "orange", array ("pear", "mango"),  "banana");

Echo count($fruits);



echo "<br>"; echo "<br>"; echo "<br>";
echo "<h1>Question 01: </h1>";
//This is index Array
$num = array(12,34,2,6,78);  
$length = count($num);
for($i = 0; $i < $length; $i++){
    $count = 0;
    for($n = 2; $n < $num[$i]; $n++){
        if($num[$i] % $n == 0) {
            $count++;
        }
    }
    if($count == 0){
    echo $num[$i] . " is prime number";
    echo "<br>";
}
    // else{
    // echo $num[$i] . " is composit number";
    // echo "<br>";}
}

echo "<br>";


echo "<h1>Question 02: </h1>";
//This is Multi dimontional Array
$daraz = array(
    array("T-Shirt", 15, 30),
    array("Airphone", 25, 35),
    array("Phone", 55, 39),
    array("Watch", 45, 20),
    array("Car", 45, 20)
);

for($row = 0; $row < 4; $row++){
    echo "<h4> Row Number $row </h4>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++){
        echo "<li>" . $daraz[$row][$col] . "</li>";
    }
    echo "</ul>";
}
echo "<br>";

echo "<h1>Question 03: </h1>";
  echo "<br>";	echo "<br>";
  $number = array(0,10,80,67,60,89,91,56,45,30,95,83,99,8);
  $max = 0;
  foreach ($number as $key => $value){
      if($value > $max){
         $max = $value;
      }
  }
    echo $max;  

  echo "<br>";	
  echo "<br>";

  echo "<h1>Question 04: </h1>";
  $num = [0,10,80,67,60,89,91,56,45,30,95,83,99];
    $length = count($num);
    for($i = 0; $i < $length; $i++){
    if($i%2!=0){   
        continue;
    }
    echo $num[$i];
    echo "<br>";
}


?>