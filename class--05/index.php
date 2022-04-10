<?php
echo "<h1>Question 01: </h1>";
//This is index Array
$num = array(12,34,2,6,78);  

for($i = 0; $i < 5; $i++){
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
//This is index Array
$productName = ["T-Shirt", "Airphone", "Mobile", "Watch", "Bike"];
echo "<pre>";
print_r($productName);
echo "<br>";
//foreach
foreach($productName as $key => $valu){
 echo "{$key} - {$valu}";
    echo "<br>";
}

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