<?php
echo "<br>";
echo "<h2> Question 01: </h2>";
   for ($i = 0; $i < 12; $i++) {
    $month = strtotime(sprintf('%d months', $i));   
    $month_value = date('F', $month);   
    $value = date('n', $month);
   echo "<option value='$value'>$month_value</option>";
}
echo "<br>";
echo cal_days_in_month(CAL_GREGORIAN, 4, 2022);
echo "<br>";
echo "<br>";
for($i = 0; $i <= 30; ++$i){
    $time=strtotime(sprintf('+%d day', $i));
    $day_value=date('d',$time);
    $days=date('d',$time);
    printf('<option value="%s">%s</option>',$day_value, $days);
}

echo "<br>";
echo "<br>";

echo "<h2> Question 02: </h2>";
for($i = 1; $i < 100;){
    echo $i;
    $i = $i + 2;
}

echo "<br>";
echo "<br>";

echo "<h2> Question 03: </h2>";
//So let’s calculate the factorial of 7.
$num = 7;
$fact = 1;
for($i = 1; $i <= $num; $i++){
    $fact = $fact * $i;
}
echo "Factorial of 7:" ." ".$fact;
echo "<br>";
echo "<br>";

echo "<h2> Question 04: </h2>";

$question_4 = 100;
while($question_4 >= 1){
    echo $question_4;
    echo "<br>";
    $question_4--;
}

echo "<br>";
echo "<br>";
echo "<h2> Question 05: </h2>";
//You have an array of your purchased product items..
$product = ["apple", "orange", "mango", "banana"];

    foreach ($product as $key => $value) {
        $key++;
        echo "Sl- " . $key . " => Product- " . $value . "<br>";
    }
  
?>