<?php
//Nested ifelse
$age = 10;
$gander = "male";
if($age >=5 && $age < 10){
   if($gander == "male"){
    echo "Tomar boyos 5 er opore and you are a male";
   }else{
    echo "Tomar boyos 5 er opore na and you are a Female";
   }
}elseif($age >= 10 && $age < 18) {
    if($gander == "female"){
        echo "Tomar boyos 5 er opore and you are a Female";
       }else{
        echo "Tomar boyos 5 er opore na and you are a male";
       }
} else{
    echo "Tumar boyos thik nai";
}
echo "</br>";
echo "</br>";








//character Count/ word count.....
$text = "  Hello, warm Greetings !! This is Imran Ali. I have a team of 5 people. We read your job description in full detail and we found my skills with your project. We Are a Website developer that have rich experience for developing backend and frontend. We build WordPress websites with my skills. We are always ready to do your job honestly. Our first goal is client satisfaction. so We are always attentive to the client's satisfaction. hi i am Imran"  ;
echo "</br>";
echo $text;
echo strlen($text);
echo "</br>";
echo str_word_count($text);
echo "</br>";
echo strlen(trim($text));
echo "</br>";
echo strrev($text);
echo "</br>";
echo "</br>";
echo strtoupper($text);
echo "</br>";
echo "</br>";
echo strtolower($text);
echo "</br>";
echo "</br>";
echo str_replace('Imran','bipul',$text);
echo "</br>";
echo "</br>";
echo str_repeat($text,3);


//Password md5
echo "</br>";
echo "</br>";

$name = "imran ali";
echo md5($name);
echo "</br>";
echo md5(strtoupper($name));

echo "</br>";
echo "</br>";

//function
function subtract($num1, $num2){
   echo $sub = $num1 - $num2;
} 
subtract(120,30);
echo "</br>";
subtract(20,30);





?>