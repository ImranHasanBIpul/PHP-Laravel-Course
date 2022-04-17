<?php

$number = [0,10,80,67,60,89,91,56,45,30,95,83,99];
echo min($number);

echo "<br>";

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
echo "<br>";echo "<br>";

// echo in_array(54,$number);
$number = array(23,21,44,54,33,11,55,);

if(in_array(54,$number)){
    echo "paichi";
}else{
    echo "painai";
}

echo "<br>";echo "<br>";

echo array_search(54,$number);
echo "<br>";echo "<br>";

$number = array(23,21,44,54,33,11,55);
array_pop($number);
echo "<pre>";
print_r($number);
echo "</pre>";

echo "<br>";echo "<br>";
array_push($number,  100,200);

echo "<pre>";
print_r($number);
echo "</pre>";

echo "<br>";echo "<br>";

$number = array(23,21,44,54,33,11,55,);
$marg = [500,33,55];
$newMarge = array_merge($number, $marg);
echo "<pre>";
print_r($newMarge);
echo "</pre>";
echo "<br>";echo "<br>";

$number = array(23,21,44,54,33,11,55,67,66,543,53);
$new_array = array_slice($number, 6 , 4);
echo "<pre>";
print_r($new_array);
echo "</pre>";
echo "<br>";echo "<br>";

$number = array(23,21,44,54,33,11,55,67,66,543,53);
array_splice($number, 6 , 4);
echo "<pre>";
print_r($number);
echo "</pre>";
echo "<br>";echo "<br>";

$number = array(24,67,66,);
$number2 = array(23,21,66);
$diff_array = array_diff($number, $number2);
echo "<pre>";
print_r($diff_array);
echo "</pre>";
echo "<br>";echo "<br>";

$number = array(44,21,44,54,33,88,33,55,67,55,543,53);
echo "<pre>";
print_r (array_unique($number));
echo array_sum($number);







?>
