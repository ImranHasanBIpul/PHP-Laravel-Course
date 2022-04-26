<?php
$given_arry = ['Alex', 'Bob', 'Emily', 'Ali'];

$result = array_chunk($given_arry, 2, true);



print_r($result);

echo "<br>";
echo "<br>";


$name = ["imran","hasan","Bipul","Sabbir","Atik"];
$result = (array_rand($name, 2));
echo "<pre>";
print_r($result);
echo $name[$result[0]];

echo "<br>";
echo "<br>";

$name = ["imran","hasan","Bipul","Sabbir","Atik"];
shuffle($name);
echo "<pre>";
print_r ($name);

echo "<br>";
echo "<br>";

echo "<pre>";
print_r (array_chunk($name, 2, true));

echo "<br>";
echo "<br>";

$name = ["imran","hasan","Bipul","Sabbir","Atik"];
asort($name);
echo "<pre>";
print_r ($name);

echo "<br>";
echo "<br>";

arsort($name);
echo "<pre>";
print_r ($name);


echo "<br>";
echo "<br>";

$name = ['c' => "imran", 'd' => "hasan",'a' => "Bipul", 'b' => "Sabbir", 'e' => "Atik"];
ksort($name);
echo "<pre>";
print_r ($name);

echo "<br>";
echo "<br>";

krsort($name);
echo "<pre>";
print_r ($name);

echo "<br>";
echo "<br>";

$string = implode("<br>", $name);
echo $string;

$string = "looking~for~a~Shopify~custom~coder";
$result = explode("~", $string, 2);
echo "<pre>";
print_r($result);

















