<?php

$num=13;  
if($num %2 == 0){  
echo "$num is even number";  
}else{  
echo "$num is odd number";  
}  


echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


$present_year = date("Y");
$initial_year = $present_year - 20;
for($initial_year = 2002; $initial_year <= 2022; $initial_year++){
    echo $initial_year;
}
echo $present_year;
echo "</br>";
echo date("l") . "<br>";
echo "</br>";
echo date("l jS \of F Y h:i:s A") . "<br>";
echo "</br>";


//Operator: Increment (++) and Decrement (--)

$x = 10;
echo "First" . $x++ . "-" . $x;

echo "</br>";
echo "</br>";
echo "</br>";
//for loop
for($i = 5; $i >= 1; $i--){
    echo "I am Sorry";
    echo "</br>";
} 
echo "</br>";
echo "</br>";

for($i = 2010; $i <= 2022; $i++) {
    echo $i;
    echo "</br>";
}
echo "</br>";
echo "</br>";

$year = date("Y");
$limitation = $year - 10;
for($limitation; $limitation <= $year; $limitation++){

   echo $limitation;
    echo "</br>";
}

echo "</br>";
echo "</br>";
//while loop
$b = 5;
while($b >= 1){
    echo "This is imran";
    echo "</br>";
    $b--;
} 

echo "</br>";
echo "</br>";
//do while loop

$i = 1;
do {
    echo"ami tomake chara bachbona";
    echo "</br>";
    $i++;
} while ($i <= 5);

echo "</br>";
echo "</br>";
//Foreach


$imran = ['imran', 'Hasan', 'bipul', 'sabbir', 'baten'];
//var_dump($imran);

foreach ($imran as $key => $name){
    echo ++$key ."- ". $name;
    echo "</br>";
}
echo "</br>";
echo "</br>";

// $num = 10;
// $fact = 1;
// for($x = 1; $x <= $num; $i++){
//     $fact = $fact * $i;
// } 
// echo $fact;




?>