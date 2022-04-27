<?php
// ============== Question 01 ===================
function PeopleAge($age){
    if($age <= 10){
        return "You are a children";
    }elseif($age <= 17){
        return "You are a teenagers";
    }elseif($age <= 50){
        return "You are a young people";
    }elseif($age <= 70){
        return "You are a old people";
    }
}
echo PeopleAge(5)."<br>"; 
echo PeopleAge(17)."<br>";
echo PeopleAge(30)."<br>";
echo PeopleAge(70)."<br>";


echo "<br>";
function People($ag = 10){
    if($ag >= 0 && $ag <= 7){
        return "You are a children";
    }elseif($ag >= 8 && $ag <= 18){
        return "You are a teenagers";
    }elseif($ag >= 19 && $ag <= 50){
        return "You are a young people";
    }elseif($ag >= 51 && $ag <= 100){
        return "You are a young people";
    }else{
        return "invalid";
    }
}
echo People();
echo "<br>";
echo "<br>";

// ============== Question 02 ===================
function Area($valu = "s", $lanth = 0, $width = 0){
    if($valu = "s"){
        return $lanth * $lanth;
    }elseif($valu = "r"){
        return $lanth * $width;
    }elseif($valu = "t"){
        return -5*$lanth * $width;
    }
}

echo Area("t", 10);

echo "<br>";
echo "<br>";
function rectangle($length, $width){
    $rectangle_result = $length * $width;
    return $rectangle_result;
}
echo rectangle(6, 12);
echo "<br>";
function square($length){
    $rectangle_square = $length * $length;
    return $rectangle_square;
}
echo square(6);
echo "<br>";
function triangle($base, $height){
    $rectangle_triangle = (1/2) * $base * $height;
    return $rectangle_triangle;
}
echo triangle(12,6);

echo "<br>";
echo "<br>";

// ============== Question 03 ===================

function Mark($average = 80){
    if($average >= 80 && $average <=100){
        return "Your GPA A+";
    }elseif($average >= 70 && $average <=79){
        return "Your GPA A";
    }elseif($average >= 60 && $average <=69){
        return "Your GPA A-";
    }
}
echo Mark();






echo "<br>";
echo "<br>";
// ============== Question 04 ===================

function getAge($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;
}
echo "Your Age is: ". getAge('1998-02-21')." Years";




echo "<br>";
echo "<br>";
// ============== Question 05 ===================

function BMI($weight, $height){
    $bmi_formula =$weight / ($height * $height);
    if($bmi_formula < 18){
        return "You are fit {$bmi_formula}";
    }else{
        return "You are unfit";
    }

}
echo BMI(60, 2.3);


echo "<br>";
echo "<br>";
// ============== Question 06 ===================
function MoneyConvert($money, $exchange){
    if($exchange === "USD"){
        $money = $money/86.18;
        return $money;
    }elseif($exchange === "CAD"){
        $money = $money/67.82;
        return $money;
    }elseif($exchange === "POUND"){
        $money = $money/109.76;
        return $money;
    }elseif($exchange === "EURO"){
        $money = $money/92.27;
        return $money;
    }else{
         return $money;
    }
}
    echo "Tk To USD:- ". MoneyConvert(100, "USD")."<br>";
    echo "Tk To CAD:- ". MoneyConvert(100, "CAD")."<br>";
    echo "Tk To POUND:- ". MoneyConvert(100, "POUND")."<br>";
    echo "Tk To EURO:- ". MoneyConvert(100, "EURO");

echo "<br>";
echo "<br>";

// getAge('1980-02-29');


