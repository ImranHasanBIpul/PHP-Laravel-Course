<?php
// function insert(){
//     $output = [];
//     if(insert){
//         $output['name'] = 'imran';
//         $output['status'] = 1;
//     }else{
//         $output['name'] = 'failed';
//         $output['status'] = 0;
//     }
//     return $output;
// }







echo "<br/>";
echo "<br/>";

//isset function==========
$name = "imran";
if(isset($name)){
    echo "ache";
}else{
    echo "nai";
}
echo "<br/>";
echo "<br/>";
//empty function==========
$name ="ache";
if (empty($name)){
    echo "khali";
}else{
    echo "vora";
}
echo "<br/>";
echo "<br/>";

//die function==========
// echo "imran"."<br/>";
// echo "imran"."<br/>";
// echo "imran"."<br/>";
// echo die("stop");
// echo "imran";
// echo "imran";
// echo "imran";
// echo "imran";
// echo "<br/>";
// echo "<br/>";

//die function==========

$imran = "";
$imran .= "<ul>";
$imran .= "<li> imran 1 </li>";
$imran .= "<li> imran 2 </li>";
$imran .= "<li> imran 3 </li>";
$imran .= "</ul>";

echo $imran;









?>