<?php
function getAge($date) { // Y-m-d format
    $now = explode("-", date('Y-m-d'));
    $dob = explode("-", $date);
    $dif = $now[0] - $dob[0];
    if ($dob[1] > $now[1]) { // birthday month has not hit this year
        $dif -= 1;
    }
    elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
        if ($dob[2] > $now[2]) {
            $dif -= 1;
        }
        elseif ($dob[2] == $now[2]) { // Happy Birthday!
            $dif = $dif." Happy Birthday!";
        };
    };
    return $dif;
}

getAge('1980-02-29');





echo "</br>";echo "</br>";
echo "</br>";echo "</br>";
echo "</br>";echo "</br>";

// $cars = [1,2,3,4,5,6,7,8,10];
// function total($cars){
//     $counter = 0;
//     foreach($cars as $value){
//         $counter++;
//     }
//     echo $counter;
// }
//  total($cars);


// echo "</br>";echo "</br>";

// $dob = strtotime(str_replace("/","-",$birthdayDate));       
// $tdate = time();

// $age = 0;
// while( $tdate > $dob = strtotime('+1 year', $dob))
// {
//     ++$age;
// }
// return $age;
// echo "</br>";echo "</br>";


// //character Count/ word count.....
// $text = "  Hello, warm Greetings !! This is Imran Ali. I have a team of 5 people. We read your job description in full detail and we found my skills with your project. We Are a Website developer that have rich experience for developing backend and frontend. We build WordPress websites with my skills. We are always ready to do your job honestly. Our first goal is client satisfaction. so We are always attentive to the client's satisfaction. hi i am Imran hi i am Imran"  ;
// echo "</br>";
// echo $text;
// echo strlen($text);
// echo "</br>";
// echo str_word_count($text);
// echo "</br>";
// echo strlen(trim($text));
// echo "</br>";
// echo strrev($text);
// echo "</br>";
// echo "</br>";
// echo strtoupper($text);
// echo "</br>";
// echo "</br>";
// echo strtolower($text);
// echo "</br>";
// echo "</br>";
// echo str_replace('Imran','bipul',$text);
// echo "</br>";
// echo "</br>";
// echo str_repeat($text,3);


// //Password md5
// echo "</br>";
// echo "</br>";

// $name = "imran ali";
// echo md5($name);
// echo "</br>";
// echo md5(strtoupper($name));

// echo "</br>";
// echo "</br>";

// //function
// function subtract($num1, $num2){
//    echo $sub = $num1 - $num2;
// } 
// subtract(120,30);
// echo "</br>";
// subtract(20,30);
// echo "</br>";
// echo "</br>";


?>