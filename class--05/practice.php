<?php
$num = [2, 10, 20, 55, 34, 77];
for($i = 0; $i < 5; $i++){
    $count = 0;
    for($n = 2; $n < $num[$i]; $n++){
        if($num[$i] % $n == 0){
            $count++;
        }
       
    }
    if($count == 0){
        echo $num[$i] . "prime";
        echo "<br>";
    }
    else{
        echo $num[$i] . "composite";
        echo "<br>";
        }
}

echo "<br>";
echo "<br>";
echo "<br>";
$imran = array(3,10,80,67,60,89,99,91,56,45,30,95,83);
$max = 0;
for($i = 0; $i < 13; $i++){
    for($i = 1; $i < 13; $i++){
        if($max < $imran[$i]){
            $max = $imran[$i];
        }
        //$max = $imran[$n];
    }
    echo $max; 
    echo "<br>";
} 

echo "<br>";echo "<br>";

$num = [0,10,80,67,60,89,91,56,45,30,95,83,99];
$length = count($num);
for($i = 0; $i < $length; $i++){
    if($i%2!=0){   
        continue;
    }
    echo $num[$i];
    echo "<br>";
}

echo "<br>";

$fruites = array("aple","banana","orange","mengo");
foreach($fruites as $value){
    echo $value . "<br>";
}
echo "<br>";
echo "<br>";

$about = array('Name:' => 'Imran', 'Address:' => 'Jamalpur', 'Profession:' => 'Student',);
foreach($about as $key => $value){
    echo "{$key} : {$value}" . "<br>";
}





























?>