<?php
echo "<h2> Question 01: </h2>";
$purchased_products = array(
    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
    array('name' => 'apple',   'qty' => 50, 'total_price' => 1500),
    array('name' => 'orange',  'qty' => 7,  'total_price' => 600),
);
$x = 0;
foreach ($purchased_products as $key => $value){
    $x += $value['qty'];   
}
echo 'Banana, Aple, Orange Qty: '. $x;
echo "<br>";
$p = 0;
foreach ($purchased_products as $key => $value){
    $p += $value['total_price'];   
}
echo 'Banana, Aple, Orange total_price: '. $p;


echo "<br>";echo "<br>";

echo "<h2> Question 02: </h2>";
$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
$email = array_unique(array_merge($first_email_array, $second_email_array));
echo "<pre>";
print_r($email);
echo "</pre>";

echo "<br>";echo "<br>";

echo "<h2> Question 03: </h2>";
$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

echo "<pre>";
print_r(array_chunk($citylist,4));
echo "</pre>";
echo "<br>";echo "<br>";


