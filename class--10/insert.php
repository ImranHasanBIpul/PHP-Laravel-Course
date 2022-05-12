<?php

// echo "<pre>";
// print_r($_POST);
$userName = $_POST["userName"]; 
$userEmail =  $_POST["userEmail"];
if(empty($userName) || empty($userEmail)){
    echo '<script> alert("All Field is Required") </script>';
}else{
    echo "everything is ok";
}

?>